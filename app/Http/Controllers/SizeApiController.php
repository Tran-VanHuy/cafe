<?php

namespace App\Http\Controllers;
use App\Models\Size;


use Illuminate\Http\Request;

class SizeApiController extends Controller
{
    //
    public function info_size($id) {

        $size = Size::findOrFail($id);
        if($size){
            $total_price = ($size->price - ($size->price * $size->discount_percent / 100)) - $size->discount_money;
            $size->formatted_price = number_format($size->pice, 0, ',', '.') . 'đ';
            $size->total_price = $total_price;
            $size->formatted_total_price =  number_format($total_price, 0, ',', '.') . 'đ';
        }
        
        return response()->json([
            'status' => 200,
            'message' => 'SUCCESS',
            'data' => $size
        ]);
    }
}
