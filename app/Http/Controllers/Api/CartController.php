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
            $order->product_name = $product->name;
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
            // 'price' => 'required',
            // 'booking_date' => 'required|date',
            // 'delivery_date' => 'required|date',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        try {
            $userId = auth()->user()->id;
            $productId = $request->input('product_id');
            $quantity = $request->input('quantity');

            // Kiểm tra nếu sản phẩm đã tồn tại trong giỏ hàng của người dùng
            $existingCart = Cart::where('user_id', $userId)
                ->where('product_id', $productId)
                ->first();

            $product = Product::findOrFail($productId);

            if ($existingCart) {
                // Nếu sản phẩm đã tồn tại, kiểm tra số lượng tổng cộng
                $newQuantity = $existingCart->quantity + $quantity;

                if ($newQuantity > $product->number) {
                    return response()->json(['message' => 'Insufficient product quantity'], 500);
                }

                $existingCart->quantity = $newQuantity;
                $existingCart->total_price = $existingCart->quantity * $existingCart->price;
                $existingCart->save();
                return response()->json(['message' => 'Product quantity updated in cart'], 200);
            } else {
                // Nếu sản phẩm chưa tồn tại, kiểm tra số lượng
                if ($quantity > $product->number) {
                    return response()->json(['message' => 'Insufficient product quantity'], 500);
                }

                $cart = new Cart();
                $cart->user_id = $userId;
                $cart->product_id = $productId;
                $cart->price = $product->price;
                $cart->quantity = $quantity;
                $cart->total_price = $quantity * $product->price;
                $cart->save();
                return response()->json(['message' => 'Product added to cart'], 200);
            }
        } catch (\Throwable $th) {
            return response()->json(['message' => "Something went wrong! $th"], 500);
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
    public function updateQuantity(Request $request, $cartId)
    {
        $validator = Validator::make($request->all(), [
            'quantity' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 401);
        }

        try {
            $userId = auth()->user()->id;
            $quantity = $request->input('quantity');

            $cart = Cart::where('user_id', $userId)->findOrFail($cartId);
            $product = Product::findOrFail($cart->product_id);

            // Tính số lượng mới
            $newQuantity = $quantity;

            if ($newQuantity > $product->number) {
                return response()->json(['message' => 'Insufficient product quantity'], 500);
            }

            $cart->quantity = $newQuantity;
            $cart->total_price = $cart->quantity * $cart->price;
            $cart->save();

            return response()->json(['message' => 'Cart quantity updated'], 200);
        } catch (\Throwable $th) {
            return response()->json(['message' => "Something went wrong! $th"], 500);
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
