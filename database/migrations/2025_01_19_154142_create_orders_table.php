<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->integer('price');
            $table->integer('total_price');
            $table->integer('price_discount');
            $table->string('voucher_code',255)->nullable();
            $table->string('full_name', 255);
            $table->string('phone', 255);
            $table->string('city', 255);
            $table->string('province', 255)->nullable();
            $table->text('address');
            $table->boolean('agree')->default(false);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('orders');
    }
}
