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
        $product->type = 1;
        if($sizes) {

            $product->type = 2;
        }

        return response()->json($product);
    }

    public function create(Request $request) {

        $product = Product::create([
            "image" => $request->image, 
            "image_1" => $request->image1,
            "image_2" => $request->image2,
            "image_3" => $request->image3,
            "image_4" =>$request->image4,
            "name" => $request->name,
            "price" =>$request->price,
            "discount_percent" => $request->discount_percent,
            "discount_money" =>  $request->discount_money,
            "quantity" => $request->quantity,
            "name_size"=> $request->name_size,
            "content"=> $request->content
        ]);

        if($product) {

            $product_id = $product->id;
            $data_size = collect($request->itemInfo)->map(function($item) use ($product_id){
                if (is_array($item)) {
                    $item = (object) $item;
                }
                $item->product_id = $product_id;
                return (array) $item;
            });
            $size = Size::insert($data_size->toArray());
        }

        return response()->json([
            "status" => 200,
            "message" => "SUCCESS",
            "data" => null
        ]);
    }
}
