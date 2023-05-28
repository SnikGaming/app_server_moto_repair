<?php

use App\Http\Controllers\Api\BannerController;
use App\Http\Controllers\Api\BookingController;
use App\Http\Controllers\Api\CartController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\Delivery_addressController;
use App\Http\Controllers\Api\FavoriteController;
use App\Http\Controllers\Api\LocationController;
use App\Http\Controllers\Api\OrderController;
use App\Http\Controllers\Api\OrderDetailController;
use App\Http\Controllers\Api\ProductController;
use App\Http\Controllers\Api\ReviewController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TestController;
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

//! Location
Route::get('provinces', [LocationController::class, 'getProvinces']);
Route::get('districts/{provinceId}', [LocationController::class, 'getDistrictsByProvince']);
Route::get('wards/{districtId}', [LocationController::class, 'getWardsByDistrict']);
Route::get('location', [LocationController::class, 'getData']);


Route::post('categories', [CategoryController::class, 'store']);
Route::get('categories/{id}', [CategoryController::class, 'show']);
Route::post('categories/{id}', [CategoryController::class, 'update']);
Route::get('categories', [CategoryController::class, 'index']);


Route::post('dangky', [UserController::class, 'store']);
Route::post('tests', [TestController::class, 'store']);
Route::get('tests', [TestController::class, 'index']);


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

    //! Review
    Route::post('reviews', [ReviewController::class, 'store']);
    Route::get('reviews/{id}', [ReviewController::class, 'getByProductId']);
    Route::post('reviews_update/{id}', [ReviewController::class, 'update']);
    Route::post('reviews_del/{id}', [ReviewController::class, 'destroy']);





    //! Address
    Route::post('address', [Delivery_addressController::class, 'store']);
    Route::post('address_del/{id}', [Delivery_addressController::class, 'destroy']);
    Route::post('address/{id}', [Delivery_addressController::class, 'update']);
    Route::get('address', [Delivery_addressController::class, 'index']);


    //! Cart
    Route::get('carts', [CartController::class, 'index']);
    Route::post('carts_del', [CartController::class, 'destroy']);

    Route::post('carts', [CartController::class, 'store']);
    Route::post('carts/{id}', [CartController::class, 'updateQuantity']);
    Route::get('carts/{id}', [CartController::class, 'show']);

    //! Order
    Route::get('orders', [OrderController::class, 'index']);
    Route::post('orders', [OrderController::class, 'store']);
    Route::post('orderDetails', [OrderDetailController::class, 'store']);
    Route::get('orderDetails', [OrderDetailController::class, 'getOrderDetails']);


    //! Booking 
    Route::post('bookings', [BookingController::class, 'store']);
    Route::get('bookings', [BookingController::class, 'index']);
    Route::put('bookings/{id}', [BookingController::class, 'update']);
    Route::put('bookings/{id}/status', [BookingController::class, 'updateBookingStatus'])->name('bookings.update.status');


    Route::get('favorites', [FavoriteController::class, 'index']);
    Route::post('favorites', [FavoriteController::class, 'store']);
    Route::put('favorites/{id}', [FavoriteController::class, 'update']);
    Route::delete('favorites/{id}', [FavoriteController::class, 'destroy']);

    Route::get('dangky', [UserController::class, 'getUserInfo']);
    Route::post('dangky-up', [UserController::class, 'update']);


    Route::get('user', function (Request $request) {
        return response()->json(['status' => 200, 'data' => $request->user()], 200);
    });
});
