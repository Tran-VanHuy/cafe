<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Tạo sản phẩm
        $productId = DB::table('products')->insertGetId([
            'image' => 'images/Capture_03.PNG',
            'image_1' => 'images/Capture_01.PNG',
            'image_2' => 'images/Capture_03.PNG',
            'image_3' => 'images/Capture_04.PNG',
            'image_4' => 'images/Capture_01.PNG',
            'name' => 'Kapuchino House Sữa Đá',
            'price' => 39000,
            'discount_percent' => 3,
            'discount_money' => 3000,
            'quantity' => 100,
            'content' => 'Thức uống giúp tính tạo tức thi để bắt đầu ngày mới thật hứng khởi. Không đắng khét như cà phê truyền thống, Kapuchino House Sữa Đá mang hương vị hài hoà đầy lôi cuốn. Là sự đậm đà của 100% cà phê Arabica Cầu Đất rang vừa tới, biến tấu tinh tế với sữa đặc và kem sữa ngọt ngào cực quyến rũ.',
            'name_size' => 'SIZE',
            'show' => true,
            'category_id'=> 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Tạo bản size liên quan
        $sizes = [
            [
                'product_id' => $productId,
                'name' => 'Nhỏ',
                'price' => 49000,
                'discount_percent' => 0,
                'discount_money' => 5000,
                'quantity' => 100,
            ],
            [
                'product_id' => $productId,
                'name' => 'Vừa',
                'price' => 54000,
                'discount_percent' => 0,
                'discount_money' => 5000,
                'quantity' => 100,
            ],
            [
                'product_id' => $productId,
                'name' => 'Lớn',
                'price' => 60000,
                'discount_percent' => 0,
                'discount_money' => 5000,
                'quantity' => 100,
            ],
        ];
        DB::table('sizes')->insert($sizes);
    }
}
