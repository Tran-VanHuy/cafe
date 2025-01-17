<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Size;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    //
    public function show($id) {

        $product = Product::findOrFail($id);
        $product->formatted_price = number_format($product->price, 0, ',', '.') . 'đ';
        $product->formatted_total_price = number_format(($product->price - ($product->price * $product->discount_percent / 100)) - $product->discount_money, 0, ',', '.') . 'đ';


        $sizes = Size::Where("product_id", $product->id)->get();
        $sizes = $sizes->map(function($item) {
            $item->formatted_total_price = number_format(($item->price - ($item->price * $item->discount_percent / 100)) - $item->discount_money, 0, ',', '.') . 'đ';
            $item->formatted_price = number_format($item->price, 0, ',', '.') . 'đ';
            return $item;
        });
        $product->size = $sizes;

        return response()->json($product);
    }
}
