<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->per_page ?? 10;
        $userOrders = Order::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
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
        return response()->json($data, 200);
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
        $validator = Validator::make($request->all(), [
            // 'user_id' => 'required',
            'product_id' => 'required',
            // 'status' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            // 'booking_date' => 'required|date',
            // 'delivery_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        try {
            $order = new Order();
            $order->user_id = auth()->user()->id;
            $order->product_id = $request->input('product_id');

            // Lấy giá sản phẩm từ bảng products
            $product = Product::findOrFail($order->product_id);
            $order->price = $product->price;
            // Kiem tra so luong san pham
            if ($request->input('quantity') > $product->number) {
                return response()->json([
                    'message' => "Something went wrong! "
                ], 500);
            }
            $order->quantity = $request->input('quantity');

            $order->total_price = $order->quantity * $order->price;

            // Lưu đơn hàng
            $order->save();

            // Trừ số lượng sản phẩm trong bảng products
            $product->number -= $order->quantity;
            $product->save();

            return response()->json(['message' => 'Order created successfully'], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong! $th"
            ], 500);
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
