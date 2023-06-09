<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Delivery_address;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class OrderDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function getOrderDetails(Request $request)
    {
        $perPage = $request->per_page ?? 10;
        $searchOrderId = $request->input('order_id');

        $query = OrderDetail::where('user_id', auth()->user()->id);

        if ($searchOrderId) {
            $query->where('order_id', $searchOrderId);
        }

        $userOrderDetails = $query->orderBy('created_at', 'desc')->paginate($perPage);

        // Lấy thông tin sản phẩm và tên cho từng order detail
        $userOrderDetails->getCollection()->transform(function ($orderDetail) {
            $product = Product::findOrFail($orderDetail->product_id);
            $orderDetail->product = $product;
            $orderDetail->product_name = $product->name;
            return $orderDetail;
        });

        // Lấy thông tin user cho mỗi order
        $userOrderDetails->getCollection()->transform(function ($orderDetail) {
            $order = Order::findOrFail($orderDetail->order_id);
            $user = User::findOrFail($order->user_id);
            $orderDetail->user = $user;
            return $orderDetail;
        });

        $currentPageItemCount = count($userOrderDetails->items());
        $totalItemCount = $userOrderDetails->total();
        $data = [
            'status' => 200,
            'data' => $userOrderDetails->items(),
            'current_page' => $userOrderDetails->currentPage(),
            'last_page' => $userOrderDetails->lastPage(),
            'per_page' => $perPage,
            'total_items' => $totalItemCount,
        ];

        return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
    }





    public function getOrderProducts(Request $request, $order_id)
    {
        $order = Order::with('orderDetails')->findOrFail($order_id);

        $productIds = $order->orderDetails->pluck('product_id');

        $products = Product::whereIn('id', $productIds)
            ->select('id', 'name', 'image', 'number', 'price')
            ->get();

        $products->transform(function ($product) {
            $product->image = Storage::url($product->image);
            return $product;
        });

        $orderProducts = [];
        foreach ($order->orderDetails as $orderDetail) {
            $product = $products->where('id', $orderDetail->product_id)->first();

            $orderProduct = [
                'id' => $product->id,
                'name' => $product->name,
                'image' => $product->image,
                'number' => $product->number,
                'price' => $product->price,

                'quantity' => $orderDetail->quantity,
            ];

            $orderProducts[] = $orderProduct;
        }

        $response = [
            "status" => 200,
            'data' => $orderProducts,
        ];

        return response()->json($response);
    }



    public function store(Request $request)
    {
        $requestData = $request->json()->all();

        try {
            DB::beginTransaction();

            $order = new Order();
            $order->user_id = auth()->user()->id;
            $order->address = $request->input('address');
            $order->name = $request->input('name');
            $order->note = $request->input('note');
            $order->booking_date = $request->input('date_order');
            $order->delivery_date = $request->input('delivery_date');
            $order->payment = $request->input('payment');
            $order->ship = $request->input('ship');


            $order->save();
            // $deliveryAddress = Delivery_address::where('user_id', auth()->user()->id)->first();
            $orderDetails = $requestData['order_details'];
            $invalidQuantityProducts = []; // Mảng lưu các sản phẩm số lượng không hợp lệ
            $totalPrice = 0; // Tổng giá của đơn hàng

            foreach ($orderDetails as $orderDetailData) {
                if (isset($orderDetailData['product_id']) && isset($orderDetailData['quantity'])) {
                    $product = Product::findOrFail($orderDetailData['product_id']);
                    $orderDetailQuantity = $orderDetailData['quantity'];

                    if ($orderDetailQuantity > $product->number) {
                        // Số lượng trong order detail lớn hơn số lượng có sẵn trong bảng product
                        $invalidQuantityProducts[] = $product->name;
                    } else {
                        $orderDetail = new OrderDetail();
                        $orderDetail->user_id = auth()->user()->id;
                        $orderDetail->order_id = $order->id;
                        $orderDetail->product_id = $orderDetailData['product_id'];
                        $orderDetail->quantity = $orderDetailQuantity;
                        $orderDetail->price = $orderDetailData['price'];

                        // $orderDetail->price = $product->price;
                        $orderDetail->status = 1;
                        $orderDetail->save();

                        // Trừ số lượng sản phẩm trong bảng Product
                        $product->number -= $orderDetailQuantity;
                        $product->like += $orderDetailQuantity;
                        $product->save();

                        // Tính giá của sản phẩm và cộng vào tổng giá của đơn hàng
                        $productPrice =   $orderDetail->price * $orderDetailQuantity;
                        $totalPrice += $productPrice;
                        $totalPrice += $order->ship;
                        // if ($deliveryAddress) {
                        //     $totalPrice += $deliveryAddress->ship;
                        // }
                    }
                }
            }

            if (!empty($invalidQuantityProducts)) {
                // Hủy bỏ giao dịch nếu có sản phẩm số lượng không hợp lệ
                DB::rollBack();

                // Trả về thông báo về sản phẩm số lượng không hợp lệ
                $message = 'Số lượng không hợp lệ cho các sản phẩm sau: ' . implode(', ', $invalidQuantityProducts);
                return response()->json(['message' => $message], 400);
            }

            // Cập nhật total_price của đơn hàng
            $order->total_price = $totalPrice;
            $order->save();

            DB::commit(); // Lưu các thay đổi vào cơ sở dữ liệu

            return response()->json(['message' => 'Đơn hàng đã được lưu'], 200);
        } catch (\Exception $e) {
            DB::rollBack(); // Hủy bỏ giao dịch nếu có lỗi xảy ra

            // Trả về thông báo lỗi
            return response()->json(['message' => 'Đã xảy ra lỗi trong quá trình lưu đơn hàng'], 500);
        }
    }







    /**
     * Display the specified resource.
     */
    public function show(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, OrderDetail $orderDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(OrderDetail $orderDetail)
    {
        //
    }
}
