<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $show_header = 0;
        $show_footer = 1;
        $carts = Cart::with('size')->get();
        $total_all_price = 0;
        $shipping_price = 0;
        $formatted_shipping_price = number_format($shipping_price, 0, ',', '.') . 'đ';
        if($carts){
            $carts = $carts->map(function($item) {
                $item->price_product = ($item->size->price - ($item->size->price * $item->size->discount_percent / 100) - $item->size->discount_money);
                $item->fotmatted_price_product = number_format($item->price_product, 0, ',', '.') . 'đ';
                $total_price = ($item->size->price - ($item->size->price * $item->size->discount_percent / 100) - $item->size->discount_money) * $item->quantity;
                $item->formatted_total_price = number_format($total_price, 0, ',', '.') . 'đ';
                $item->total_price = $total_price;
                return $item;
            });
            $total_all_price = $carts->sum('total_price');
            if($total_all_price > 0){
                $total_all_price = number_format($total_all_price, 0, ',', '.') . 'đ';
            }

        }

        // dd($carts->toArray());
        return view('cart/cart', [
            'show_header' => $show_header,
            'show_footer' => $show_footer,
            'carts' => $carts,
            'total_all_price' => $total_all_price,
            'formatted_shipping_price' => $formatted_shipping_price,
            'shipping_price' => $shipping_price
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
