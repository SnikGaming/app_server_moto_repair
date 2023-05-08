<?php

use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['auth'])->group(function () {
    // Các route cần authentication
});

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);




Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::post('categories/{id}', [CategoryController::class, 'update']);
Route::get('categories', [CategoryController::class, 'index']);


Route::post('dangky', [UserController::class, 'store']);


Route::post('products', [ProductController::class, 'store']);
Route::get('products', [ProductController::class, 'index']);
Route::get('products/{id}', [ProductController::class, 'show']);

Route::post('login', [AuthController::class, 'login']);

Route::get('/banners', [BannerController::class, 'index']);
Route::get('/banners/{id}', [BannerController::class, 'show']);
Route::post('/banners', [BannerController::class, 'store']);
Route::put('/banners/{id}', [BannerController::class, 'update']);
Route::delete('/banners/{id}', [BannerController::class, 'destroy']);

Route::middleware('auth:sanctum')->group(function () {




    Route::post('bookings', [BookingController::class, 'store']);
    Route::get('bookings', [BookingController::class, 'index']);
    Route::put('bookings/{id}', [BookingController::class, 'update']);
    Route::put('bookings/{id}/status', [BookingController::class, 'updateBookingStatus'])->name('bookings.update.status');


    Route::get('favorites', [FavoriteController::class, 'index']);
    Route::post('favorites', [FavoriteController::class, 'store']);
    Route::put('favorites/{id}', [FavoriteController::class, 'update']);
    Route::delete('favorites/{id}', [FavoriteController::class, 'destroy']);


    Route::get('user', function (Request $request) {
        return response()->json(['status' => 200, 'data' => $request->user()], 200);
    });
});
