<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@gmail.com'], // condition (avoid duplicates)
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com.com',
                'password' => Hash::make('admin1234'), // change to a secure password
                'role' => 'admin', // assuming you have a role column
            ]
        );
    }
}
