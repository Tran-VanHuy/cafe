<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSizesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sizes', function (Blueprint $table) {
            $table->id();
            $table->string('name', 225);
            $table->integer('price');
            $table->integer('discount_percent')->default(0);
            $table->integer('discount_money')->default(0);
            $table->integer('quantity');
            $table->foreignId('product_id')->constrained('products')->onDelete('cascade'); // Định nghĩa product_id
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sizes');
    }
}
