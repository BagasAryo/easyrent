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
        $users = [
            [
                'public_id' => (string) \Illuminate\Support\Str::ulid(),
                'name' => 'Admin Easyrent',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'admin',
                'phone_number' => '08123456789',
            ],
            [
                'public_id' => (string) \Illuminate\Support\Str::ulid(),
                'name' => 'User Easyrent',
                'email' => 'user.easyrent@gmail.com',
                'password' => bcrypt('password'),
                'role' => 'customer',
                'phone_number' => '08123456780',
            ]
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
