<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $size = "sizes";
    protected $fillable = [
        'name', 
        'price', 
        'discount_percent', 
        'discount_money', 
        'quantity',
    ];
}
