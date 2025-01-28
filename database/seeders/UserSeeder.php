<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                "name" => "Robi Nurhidayat",
                "email" => "robi@gmail.com",
                "role" => "user",
                "password" => "123"
            ],
            [
                "name" => "Adi Saputra",
                "email" => "adi@gmail.com",
                "role" => "user",
                "password" => "123"
            ],
            [
                "name" => "Asep Wijaya",
                "email" => "asep@gmail.com",
                "role" => "user",
                "password" => "123"
            ],
            [
                "name" => "Admin",
                "email" => "admin@gmail.com",
                "role" => "admin",
                "password" => "admin"
            ]
        ];

        foreach($userData as $key => $val) {
            User::create($val);
        }
    }
}
