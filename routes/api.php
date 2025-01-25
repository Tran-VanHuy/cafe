<?php

use App\Http\Controllers\UploadFileApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartApiController;
use App\Http\Controllers\VoucherApiController;
use App\Http\Controllers\OrderApiController;
use App\Http\Controllers\SizeApiController;




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

Route::prefix("product")->group(function() {

    Route::get('/{id}', [ProductController::class, 'show']);
    Route::post('', [ProductController::class, 'create']);
    Route::get('/size/{id}', [SizeApiController::class, 'info_size'])->name('size.info_size');
});

Route::prefix('cart')->middleware('auth')->group(function() {

    Route::post('', [CartApiController::class, 'store']);

});

Route::prefix('voucher')->group(function() {

    Route::post('', [VoucherApiController::class, 'store']);
});

Route::prefix('order')->group(function() {

    Route::post('', [OrderApiController::class, 'store']);
});

Route::post('upload', [UploadFileApiController::class, 'upload']);