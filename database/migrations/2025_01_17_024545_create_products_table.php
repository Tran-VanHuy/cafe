<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('image', 225)->nullable();
            $table->string('image_1', 225)->nullable();
            $table->string('image_2', 225)->nullable();
            $table->string('image_3', 225)->nullable();
            $table->string('image_4', 225)->nullable();
            $table->string('name', 225);
            $table->integer('price');
            $table->integer('discount_percent')->default(0);
            $table->integer('discount_money')->default(0);
            $table->integer('quantity');
            $table->text('content')->nullable();
            $table->string('name_size', 225)->nullable();
            $table->foreignId('category_id')->nullable()->constrained('categories')->onDelete('cascade');
            $table->boolean('show')->default(true);
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
        Schema::dropIfExists('products');
    }
}
