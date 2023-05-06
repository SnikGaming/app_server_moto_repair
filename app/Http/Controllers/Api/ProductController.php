<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */



    // public function index(Request $request)
    // {
    //     try {
    //         $products = Product::select('name', 'image', 'description', 'number', 'price', 'like', 'status')
    //             ->when($request->has('search'), function ($query) use ($request) {
    //                 $search = $request->input('search');
    //                 $query->where('name', 'like', "%{$search}%")
    //                     ->orWhere('price', 'like', "%{$search}%");
    //             })
    //             ->when($request->has('min_price'), function ($query) use ($request) {
    //                 $minPrice = $request->input('min_price');
    //                 $query->where('price', '>=', $minPrice);
    //             })
    //             ->when($request->has('max_price'), function ($query) use ($request) {
    //                 $maxPrice = $request->input('max_price');
    //                 $query->where('price', '<=', $maxPrice);
    //             })
    //             ->orderBy('like', 'desc')
    //             ->paginate(10);


    //         $products->getCollection()->transform(function ($product) {
    //             $product->image = Storage::url($product->image);
    //             return $product;
    //         });

    //         return response()->json([
    //             'data' => $products->items(),
    //             'total_pages' => $products->lastPage(),
    //             'current_page' => $products->currentPage(),
    //         ], 200);
    //     } catch (\Throwable $th) {
    //         return $th;
    //     }
    // }
    public function index(Request $request)
    {
        try {
            $products = Product::select('id', 'category_id', 'name', 'image', 'description', 'number', 'price', 'like', 'status')
                ->when($request->has('category_id'), function ($query) use ($request) {
                    $categoryId = $request->input('category_id');
                    $query->where('category_id', $categoryId);
                })
                ->when($request->has('search'), function ($query) use ($request) {
                    $search = $request->input('search');
                    $query->where(function ($query) use ($search) {
                        $query->where('name', 'like', "%{$search}%")
                            ->orWhere('description', 'like', "%{$search}%")
                            ->orWhere('price', 'like', "%{$search}%");
                    });
                })
                // ->when($request->has('search'), function ($query) use ($request) {
                //     $search = $request->input('search');
                //     $query->where('name', 'like', "%{$search}%")
                //         ->orWhere('price', 'like', "%{$search}%");
                // })
                ->when($request->has('min_price'), function ($query) use ($request) {
                    $minPrice = $request->input('min_price');
                    $query->where('price', '>=', $minPrice);
                })
                ->when($request->has('max_price'), function ($query) use ($request) {
                    $maxPrice = $request->input('max_price');
                    $query->where('price', '<=', $maxPrice);
                })
                ->orderBy('like', 'desc')
                ->paginate(10);

            $products->getCollection()->transform(function ($product) {
                $product->image = Storage::url($product->image);
                return $product;
            });

            return response()->json([
                'data' => $products->items(),
                'total_pages' => $products->lastPage(),
                'current_page' => $products->currentPage(),
            ], 200);
        } catch (\Throwable $th) {
            return $th;
        }
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
    public function store(StoreProductRequest $request)
    {
        //
        try {
            $imageName = Str::random(32) . "." . $request->image->getClientOriginalExtension();
            Product::create([
                'name' => $request->name,
                'image' => $imageName,
                'description' => $request->description, 'number' => $request->number,
                'price' => $request->price,
                'like' => $request->like
            ]);
            Storage::disk('public')->put($imageName, file_get_contents($request->image));
            return response()->json(['message' => 'create successful'], 200);
        } catch (\Throwable $th) {
            //throw $th;
            return response()->json([
                'message' => "Something went really wrong!"
            ], 500);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Product::find($id);
        if (!$data) {
            return response()->json([
                'message' => 'Category not found'
            ], 404);
        }
        return response()->json([
            'data' => $data
        ], 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        //
    }
}
