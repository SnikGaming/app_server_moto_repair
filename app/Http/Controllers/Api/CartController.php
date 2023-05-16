<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $perPage = $request->per_page ?? 10;
        $userOrders = Cart::where('user_id', auth()->user()->id)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);

        // Lấy hình ảnh của các sản phẩm
        $userOrders->getCollection()->transform(function ($order) {
            $product = Product::findOrFail($order->product_id);
            $order->image = Storage::url($product->image);
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
            $order = new Cart();
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
    public function show($id)
    {
        try {
            $cart = Cart::findOrFail($id);
            $product = Product::findOrFail($cart->product_id);
            $cart->image = Storage::url($product->image);

            return response()->json(['status' => 200, 'data' => $cart], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => "Cart not found"], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required',
            'price' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        try {
            $cart = Cart::findOrFail($id);

            // Lấy giá sản phẩm từ bảng products
            $product = Product::findOrFail($cart->product_id);
            $cart->price = $product->price;

            // Lưu số lượng sản phẩm hiện tại
            $oldQuantity = $cart->quantity;

            // Cập nhật số lượng sản phẩm trong giỏ hàng
            $cart->quantity = $request->input('quantity');
            $cart->total_price = $cart->quantity * $cart->price;

            // Tính toán sự thay đổi về số lượng sản phẩm
            $quantityChange = $cart->quantity - $oldQuantity;

            // Kiểm tra số lượng sản phẩm tăng
            if ($quantityChange > 0 && $quantityChange > $product->number) {
                return response()->json([
                    'message' => "Something went wrong! The product does not have enough quantity."
                ], 500);
            }

            // Lưu cập nhật vào bảng cart
            $cart->update();

            // Cập nhật số lượng sản phẩm trong bảng products
            $product->number -= $quantityChange;
            $product->save();

            return response()->json(['message' => 'Cart updated successfully'], 200);
        } catch (\Throwable $th) {
            return response()->json([
                'message' => "Something went wrong! $th"
            ], 500);
        }
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart)
    {
        //
    }
}
