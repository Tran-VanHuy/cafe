<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Size;
use App\Models\Category;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
        $show_header = 0;
        $show_footer = 1;

        $product = Product::findOrFail($id);
        // echo $product;
        $product->formatted_price = number_format($product->price, 0, ',', '.') . 'đ';
        $product->formatted_total_price = number_format(($product->price - ($product->price * $product->discount_percent / 100)) - $product->discount_money, 0, ',', '.') . 'đ';


        $sizes = Size::Where("product_id", $product->id)->get();
        // dd($sizes);
        $sizes = $sizes->map(function($item) {
            $item->formatted_total_price = number_format(($item->price - ($item->price * $item->discount_percent / 100)) - $item->discount_money, 0, ',', '.') . 'đ';
            $item->formatted_price = number_format($item->price, 0, ',', '.') . 'đ';
            return $item;
        });
        $product->size = $sizes;

        $category = Category::Where('id', $product->id)->first();
        if($category){
            $product->category = $category;
        }

        return view('product-detail/product-detail', [
            'show_header' => $show_header,
            'show_footer' => $show_footer,
            'product' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
