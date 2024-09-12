<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $password = Hash::make("123456");

        $adminsRecords = [
            [
                "name" => "Admin",
                "user_type" => "admin",
                "mobile" => "9800000000",
                "email" => "admin@admin.com",
                "password" => $password,
                "image" => "",
                "status" => 1,
            ],
        ];

        Admin::query()->insert($adminsRecords);
    }
}
