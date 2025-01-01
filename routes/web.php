<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderInfoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductDetailController;




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
Route::get('/dat-hang', [OrderController::class, 'index']);
Route::get('/thong-tin-dat-hang', [OrderInfoController::class, 'index']);






