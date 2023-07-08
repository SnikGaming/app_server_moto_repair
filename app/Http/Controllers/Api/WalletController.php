<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Transaction;
use App\Models\Wallet;
use Illuminate\Foundation\Auth\User;
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

    public function createWallet(Request $request)
    {
        try {
            $user = auth()->user();

            // Kiểm tra xem người dùng đã có ví hay chưa
            if ($user->wallet_id !== null) {
                return response()->json(['success' => true, 'message' => 'Ví đã tồn tại'], 404);
            }

            // Tạo ví mới
            $wallet = new Wallet();
            $wallet->amount = 0;
            $wallet->status = 1;
            $wallet->save();

            // Cập nhật wallet_id trong bảng Users
            $user->wallet_id = $wallet->id;
            $user->save();

            return response()->json(['success' => true, 'message' => 'Ví đã được tạo thành công'], 200);
        } catch (\Exception $e) {
            return response()->json(['success' => false, 'message' => 'Đã xảy ra lỗi trong quá trình tạo ví'], 500);
        }
    }


    public function deposit(Request $request)
    {
        try {
            $user = auth()->user();
            $amount = $request->input('amount');

            // Tạo giao dịch mới
            $transaction = new Transaction();
            $transaction->wallet_id = $user->wallet_id;
            $transaction->type = 'nạp tiền';
            $transaction->amount = $amount;
            $transaction->save();

            // Cập nhật số dư của ví
            $wallet = Wallet::findOrFail($user->wallet_id);
            $wallet->amount += $amount;
            $wallet->save();

            return response()->json(['success' => true, 'message' => 'Nạp tiền thành công'], 200);
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
