<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            // Admin
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'admin',
                'categories' => null,
            ],

            // Agent
            [
                'name' => 'Agent',
                'email' => 'agent@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'agent',
                'categories' => 'hotel',
            ],

            // User
            [
                'name' => 'User',
                'email' => 'user@gmail.com',
                'password' => Hash::make('password'),
                'role' => 'user',
                'categories' => null,
            ],
        ]);
    }
}
