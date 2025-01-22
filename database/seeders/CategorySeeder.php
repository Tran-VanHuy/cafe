<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            ['name' => 'Cà phê Việt Nam', 'show' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cà phê máy', 'show' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cold Brew', 'show' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Cloudfee', 'show' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Trà', 'show' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Hi-Tea Healthy', 'show' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Bánh mặn & ngọt', 'show' => true, 'created_at' => now(), 'updated_at' => now()],
            ['name' => 'Thức uống khác', 'show' => true, 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
