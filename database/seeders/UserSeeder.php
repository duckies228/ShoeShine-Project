<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        DB::table("users")->insert([
            'name' => 'Người Dùng 2',
            'phone' => 'Số Điện Thoại 2',
            'province_id' => 'ID Tỉnh/Thành Phố 2',
            'district_id' => 'ID Quận/Huyện 2',
            'ward_id' => 'ID Phường/Xã 2',
            'address' => 'Địa Chỉ 2',
            'password' => Hash::make('Mật Khẩu 2'),
            'email' => 'email2@example.com',
        ]);
    }
}
