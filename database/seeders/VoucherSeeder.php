<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VoucherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('vouchers')->insert([
            [
                'code' => 'DXCSTW001',
                'name' => 'Giảm 5k',
                'content' => 'Giảm 5k trên mọi sản phẩm.',
                'price' => 5000,
                'minimum' => 0,
                'quantity' => 100,
                'limit' => 1,
                'show' => true,
            ],
            [
                'code' => 'DXCSTW002',
                'name' => 'Giảm 10k',
                'content' => 'Giảm 10k cho đơn hàng tối thiểu 10.000đ.',
                'price' => 10000,
                'minimum' => 10000,
                'quantity' => 100,
                'limit' => 1,
                'show' => true,
            ]
        ]);
    }
}
