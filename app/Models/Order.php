<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $order = 'orders';
    protected $fillable = [
        'price',
        'total_price',
        'price_discount',
        'voucher_code',
        'full_name',
        'phone',
        'city',
        'province',
        'address',
        'agree',
        'user_id'
    ];

    public function item() {

        return $this->hasMany(ItemOrder::class, 'order_id');
    }
}
