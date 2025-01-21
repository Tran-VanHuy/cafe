<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->enum('status', ['Đang xử lí', 'Đã xử lí', 'Đang vận chuyển', 'Vận chuyển thành công', 'Vận chuyển không thành công'])->default('Đang xử lí');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            //
            $table->dropColumn('status', ['Đang xử lí', 'Đã xử lí', 'Đang vận chuyển', 'Vận chuyển thành công', 'Vận chuyển không thành công']);
        });
    }
}
