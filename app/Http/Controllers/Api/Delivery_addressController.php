<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Delivery_address;
use Illuminate\Http\Request;

class Delivery_addressController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $deliveryAddresses = Delivery_address::where('user_id', auth()->user()->id)->get();
        return response()->json(['data' => $deliveryAddresses]);
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
        $validatedData = $request->validate([
            'address' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $validatedData['user_id'] = auth()->user()->id;

        $deliveryAddress = Delivery_address::create($validatedData);

        return response()->json(['message' => 'Delivery address created', 'data' => $deliveryAddress]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Delivery_address $deliveryAddress)
    {
        if ($deliveryAddress->user_id != auth()->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return response()->json(['data' => $deliveryAddress]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delivery_address $delivery_address)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Delivery_address $deliveryAddress)
    {
        if ($deliveryAddress->user_id != auth()->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $validatedData = $request->validate([
            'address' => 'required|string',
            'phone_number' => 'required|string',
        ]);

        $deliveryAddress->update($validatedData);

        return response()->json(['message' => 'Delivery address updated', 'data' => $deliveryAddress]);
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $deliveryAddress = Delivery_address::findOrFail($id);

        if ($deliveryAddress->user_id != auth()->user()->id) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        $deliveryAddress->delete();

        return response()->json(['status' => 200, 'message' => 'Delivery address deleted successfully'], 200);
    }
}
