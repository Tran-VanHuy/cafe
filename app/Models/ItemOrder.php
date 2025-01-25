<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemOrder extends Model
{
    protected $item_order = 'item_orders';
    protected $fillable = [
        'name_product',
        'name',
        'price',
        'discount_percent',
        'discount_money',
        'quantity',
        'product_id',
        'order_id',
    ];
}
