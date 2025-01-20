<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailController;
use App\Http\Controllers\StatisticalAdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/dang-nhap', [Login::class, 'index']);
Route::get('/chi-tiet-san-pham/{slug}', [ProductDetailController::class, 'index']);
Route::get('/danh-muc-san-pham', [CategoryController::class, 'index']);
Route::get('/gio-hang', [CartController::class, 'index']);
Route::prefix('/dat-hang')->group(function() {
    Route::get('/{id}', [OrderController::class, 'index'])->name('order.index');
    Route::post('', [OrderController::class, 'store'])->name('order.store');
    Route::put('/{id}', [OrderController::class, 'update'])->name('order.update');



});
Route::get('/thong-tin-dat-hang/{id}', [OrderInfoController::class, 'index'])->name('info-order.index');
Route::prefix('/admin')->group(function() {
    Route::get('/bieu-do', [StatisticalAdminController::class, 'index']);
});






