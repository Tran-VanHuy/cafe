<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Voucher;
use App\Models\ItemOrder;


use Illuminate\Http\Request;


class OrderApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $voucher_code = '';
        $price_discount = 0;
        $voucher = Voucher::where('code', $request->voucher_code)->first();
        if($voucher){
            $voucher_code = $voucher->code;
            $price_discount = $voucher->price;
        }

        $order = Order::create([
            'price' => $request->total,
            'total_price' => $request->total,
            'price_discount' =>  $price_discount,
            'voucher_code' => $voucher_code,
            'full_name' => '',
            'phone' => '',
            'city' => '',
            'province' => '',
            'address' => '',
            'agree' => false,
            'status' => 'Đang xử lí',
            'user_id' => env('USER_ID')
        ]);

        $order_id = $order->id;
        // $order_id = 1;

        $data_item = collect($request->dataProductCart)->map(function ($item) use ($order_id) {
            return [
                'name_product' => $item['name'],
                'name' => $item['name_size'],
                'price' => $item['price_product'],
                'discount_percent' => $item['size']['discount_percent'],
                'discount_money' => $item['size']['discount_money'],
                'quantity' => $item['quantity'],
                'product_id' => $item['product_id'],
                'order_id' => $order_id,
            ];
        });
        ItemOrder::insert($data_item->toArray());
        return response()->json([
            'status' => 200,
            'message' => 'SUCCESS',
            'data' => $order_id
        ]);
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
