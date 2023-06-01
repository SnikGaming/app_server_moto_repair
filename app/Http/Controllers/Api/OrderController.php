<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    // public function index(Request $request)
    // {
    //     $perPage = $request->per_page ?? 10;
    //     $userOrders = Order::with(['user' => function ($query) {
    //         $query->select('id', 'name', 'image', 'gender', 'email', 'phone', 'address');
    //     }])
    //         ->where('user_id', auth()->user()->id)
    //         ->orderBy('created_at', 'desc')
    //         ->paginate($perPage);

    //     // Lấy thông tin sản phẩm cho từng order
    //     $userOrders->getCollection()->transform(function ($order) {
    //         $orderDetails = OrderDetail::where('order_id', $order->id)->get();

    //         // Lấy thông tin chi tiết cho từng sản phẩm
    //         $orderDetails->transform(function ($orderDetail) {
    //             $product = Product::findOrFail($orderDetail->product_id);
    //             $orderDetail->product = $product;
    //             return $orderDetail;
    //         });

    //         $order->product = $orderDetails;
    //         return $order;
    //     });

    //     $currentPageItemCount = count($userOrders->items());
    //     $totalItemCount = $userOrders->total();
    //     $data = [
    //         'status' => 200,
    //         'data' => $userOrders->items(),
    //         'current_page' => $userOrders->currentPage(),
    //         'last_page' => $userOrders->lastPage(),
    //         'per_page' => $perPage,
    //         'total_items' => $totalItemCount,
    //     ];

    //     return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
    // }

    public function index(Request $request)
    {
        try {
            $perPage = $request->per_page ?? 10;
            $status = $request->status;

            $query = Order::with(['user' => function ($query) {
                $query->select('id', 'name', 'image', 'gender', 'email', 'phone', 'address');
            }])
                ->where('user_id', auth()->user()->id)
                ->orderBy('created_at', 'desc');

            if ($status) {
                $query->where('status', $status);
            }

            $userOrders = $query->paginate($perPage);

            // Load product information for each order
            $userOrders->getCollection()->transform(function ($order) {
                $orderDetails = OrderDetail::where('order_id', $order->id)->get();

                // Load detailed information for each product
                $orderDetails->transform(function ($orderDetail) {
                    $product = Product::findOrFail($orderDetail->product_id);
                    $orderDetail->product = $product;
                    return $orderDetail;
                });

                $order->product = $orderDetails;
                return $order;
            });

            $currentPageItemCount = count($userOrders->items());
            $totalItemCount = $userOrders->total();
            $data = [
                'status' => 200,
                'data' => $userOrders->items(),
                'current_page' => $userOrders->currentPage(),
                'last_page' => $userOrders->lastPage(),
                'per_page' => $perPage,
                'total_items' => $totalItemCount,
            ];

            return response()->json($data, 200, [], JSON_UNESCAPED_UNICODE);
        } catch (\Throwable $th) {
            return $th;
        }
    }


    public function getOrdersByStatus($status)
    {
        $orderDetails = OrderDetail::with('order', 'order.product')
            ->whereHas('order', function ($query) use ($status) {
                $query->where('status', $status)
                    ->where('user_id', auth()->user()->id);
            })
            ->paginate(10);

        return response()->json([
            'status' => 200,
            'data' => $orderDetails->items(),
            'current_page' => $orderDetails->currentPage(),
            'last_page' => $orderDetails->lastPage(),
            'per_page' => $orderDetails->perPage(),
            'total_items' => $orderDetails->total(),
        ]);
    }

    public function getOrderCountByStatus()
    {
        // Khởi tạo mảng trạng thái mặc định
        $defaultStatus = [0, 1, 2, 3, 4];

        // Lấy số lượng theo trạng thái từ bảng Order
        $statusCounts = Order::where('user_id', auth()->user()->id)
            ->select('status', DB::raw('count(*) as total'))
            ->groupBy('status')
            ->pluck('total', 'status')
            ->toArray();

        // Đảm bảo tồn tại mục nhập cho các trạng thái mặc định
        foreach ($defaultStatus as $status) {
            if (!array_key_exists($status, $statusCounts)) {
                $statusCounts[$status] = 0;
            }
        }

        // Định dạng lại kết quả
        $formattedCounts = [];
        foreach ($statusCounts as $status => $count) {
            $formattedCounts["status_$status"] = $count;
        }

        return response()->json(['status' => 200, 'data' => $formattedCounts]);
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
    public function store(Request $request)
    {
        try {
            $order = new Order();
            $order->user_id = auth()->user()->id;
            $order->save();

            return response()->json(['message' => 'Order created successfully'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Something went wrong!'], 500);
        }
    }
    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order)
    {
        //
    }
}
