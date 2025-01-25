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
use App\Http\Controllers\ProductAdminController;


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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::prefix('dang-nhap')->group(function() {
    Route::get('', [Login::class, 'index'])->name('login.index');
    Route::post('', [Login::class, 'authenticate'])->name('login.authenticate');
    Route::post('dang-xuat', [Login::class, 'logout'])->name('logout.logout');
});
Route::get('/chi-tiet-san-pham/{id}', [ProductDetailController::class, 'index']);
Route::get('/danh-muc-san-pham', [CategoryController::class, 'index']);
Route::prefix('gio-hang')->middleware('auth')->group(function() {

    Route::get('', [CartController::class, 'index'])->name('cart.index');
    Route::post('/{id}', [CartController::class, 'destroy'])->name('cart.destroy');
});
Route::prefix('/dat-hang')->group(function() {
    Route::get('/{id}', [OrderController::class, 'index'])->name('order.index');
    Route::post('', [OrderController::class, 'store'])->name('order.store');
    Route::put('/{id}', [OrderController::class, 'update'])->name('order.update');
});
Route::get('/thong-tin-dat-hang', [OrderInfoController::class, 'index'])->middleware('auth')->name('info-order.index');
Route::prefix('/admin')->middleware(['admin'])->group(function() {
    Route::get('/bieu-do', [StatisticalAdminController::class, 'index'])->name('chart-admin.index');
    Route::get('/san-pham', [ProductAdminController::class, 'index'])->name('product-admin.index');
});





