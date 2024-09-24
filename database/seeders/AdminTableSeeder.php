<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Admin;
use App\Models\UserType;
use Illuminate\Support\Facades\Hash;
use MongoDB\Laravel\Eloquent\Casts\ObjectId as CastsObjectId;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminUserType = UserType::where('name', 'admin')->first();
        $managerUserType = UserType::where('name', 'manager')->first();

        $password = Hash::make("123456");

        $adminsRecords = [
            [
                "name" => "Admin",
                "user_type_id" => $adminUserType->id,
                "mobile" => "9800000002",
                "email" => "admin1@admin.com",
                "password" => $password,
                "image" => "",
                "status" => 1,
            ],
            [
                "name" => "Admin",
                "user_type_id" => $managerUserType->id,
                "mobile" => "9800000003",
                "email" => "manager1@manager.com",
                "password" => $password,
                "image" => "",
                "status" => 1,
            ],
        ];

        Admin::query()->insert($adminsRecords);
    }
}
