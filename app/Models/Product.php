<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected $product = "products";

   public function size() {

      return $this->hasMany(Size::class, 'product_id');
   }
}
