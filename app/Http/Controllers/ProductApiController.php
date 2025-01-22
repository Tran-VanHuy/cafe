<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;



class ProductApiController extends Controller
{
    //

    public function create(Request $request) {

        $product = Product::create([
            "image" => $request['image'], 
            "image1" => $request['image1'],
            "image2" => $request['image2'],
            "image3" => $request['image3'],
            "image4" =>$request['image4'],
            "name" => $request['name'],
            "price" =>$request['price'],
            "discount_percent" => $request['discount_percent'],
            "discount_money" =>  $request['discount_money'],
            "quantity" => $request['quantity'],
            "name_size"=> $request['name_size'],
            "content"=> $request['name_size'],
        ]);

        if($product) {

            $product_id = $product->id;
            $data_size = collect($request->itemInfo)->map(function($item) use ($product_id){
                $item->product_id = $product_id;
                return $item;
            });
            $size = Size::insert($data_size);
        }

        return response()->json([
            "status" => 200,
            "message" => "SUCCESS",
            "data" => null
        ]);
    }
}
