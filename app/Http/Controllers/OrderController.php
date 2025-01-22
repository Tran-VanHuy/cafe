<?php

namespace App\Http\Controllers;

use App\Models\ItemOrder;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class OrderController extends Controller
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

        $order = Order::Where('id', $id)->Where('user_id', Auth::user()->id)->first();
        if($order){
            $order->formatted_total_price = number_format($order->total_price, 0, ',', '.') . 'đ';
            $item_order = ItemOrder::Where('order_id', $order->id)->get();
            if($item_order) {
    
                $item_order = $item_order->map(function($item) {
                    $item->formatted_price = number_format($item->price, 0, ',', '.') . 'đ';
                    return $item;
                });
            }
    
            // dd($order->toArray());
            return view('order/order', [
                'show_header' => $show_header,
                'show_footer' => $show_footer,
                'order' => $order,
                'item_order' => $item_order,
            ]);
        } else {

            return redirect()->route('home.index');
        }
       
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
        echo "vòa đay";
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
        $order = Order::findOrFail($id);
        $order->update([
            'full_name' => $request->full_name,
            'phone' => $request->phone,
            'city' => $request->city,
            'province' => $request->province,
            'address' => $request->address,
            'agree' => true
        ]);

        return redirect()->route('info-order.index', $order->id);
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
