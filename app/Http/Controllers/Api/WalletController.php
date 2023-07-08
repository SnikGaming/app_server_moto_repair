<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Wallet;
use Illuminate\Http\Request;

class WalletController extends Controller
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
    public function deposit(Request $request)
    {
        try {
            $user = auth()->user();
            $amount = $request->input('amount');

            // Thực hiện logic nạp tiền vào ví của người dùng ở đây

            return response()->json(['success' => true, 'message' => 'Nạp tiền vào ví thành công'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Đã xảy ra lỗi trong quá trình nạp tiền'], 500);
        }
    }
    public function withdraw(Request $request)
    {
        try {
            $user = auth()->user();
            $amount = $request->input('amount');

            // Thực hiện logic rút tiền từ ví của người dùng ở đây

            return response()->json(['success' => true, 'message' => 'Rút tiền từ ví thành công'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Đã xảy ra lỗi trong quá trình rút tiền'], 500);
        }
    }




    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Wallet $wallet)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Wallet $wallet)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Wallet $wallet)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Wallet $wallet)
    {
        //
    }
}
