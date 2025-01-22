<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $product = "products";
   protected $fillable = [
      'image',
      'image_1',
      'image_2',
      'image_3',
      'image_4',
      'name',
      'price',
      'discount_percent',
      'discount_money',
      'quantity',
      'content'
   ];

   public function size() {

      return $this->hasMany(Size::class, 'product_id');
   }
}
