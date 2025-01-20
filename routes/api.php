<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartApiController;
use App\Http\Controllers\VoucherApiController;
use App\Http\Controllers\OrderApiController;



/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::prefix('cart')->group(function() {

    Route::post('', [CartApiController::class, 'store']);

});

Route::prefix('voucher')->group(function() {

    Route::post('', [VoucherApiController::class, 'store']);
});

Route::prefix('order')->group(function() {

    Route::post('', [OrderApiController::class, 'store']);
});
