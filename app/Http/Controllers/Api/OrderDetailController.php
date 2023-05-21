<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
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
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            // 'product_id' => 'required',
            // 'quantity' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        try {
            $orderDetail = new OrderDetail();
            $orderDetail->order_id = 0; // Để trống, sẽ được cập nhật sau khi tạo đơn hàng
            $orderDetail->product_id = $request->input('product_id');
            $orderDetail->quantity = $request->input('quantity');

            $product = Product::findOrFail($orderDetail->product_id);
            if ($orderDetail->quantity > $product->number) {
                return response()->json(['message' => 'Something went wrong! 1'], 500);
            }
            $orderDetail->price = $product->price;
            $orderDetail->save();
            $product->save();
            return response()->json(['message' => 'Order created successfully'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => 'Something went wrong! 2 ', 'error' => $th], 500);
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
