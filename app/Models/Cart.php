<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $cart = "carts";
    protected $fillable = [
        'product_id',
        'name',
        'size_id',
        'quantity',
        'image',
        'name_size',
        'user_id',
    ];

    public function size() {

        return $this->belongsTo(Size::class, 'size_id');
    }
}
