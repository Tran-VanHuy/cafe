<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@example.com', // Địa chỉ email admin
            'password' => Hash::make('admin'), // Mật khẩu mã hóa
            'created_at' => now(),
            'updated_at' => now(),
        ]);

    }
}
