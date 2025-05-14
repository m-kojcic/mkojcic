<?php

namespace Database\Seeders;

use App\Models\User;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'User',
            'email' => 'user@pwa.rs',
            'password' => Hash::make('user'),
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'User 2',
            'email' => 'user@user2.com',
            'password' => Hash::make('user2'),
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'User 3',
            'email' => 'user@user3.com',
            'password' => Hash::make('user3'),
            'role_id' => 2,
        ]);
        User::create([
            'name' => 'Editor',
            'email' => 'editor@pwa.rs',
            'password' => Hash::make('editor'),
            'role_id' => 3,
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@pwa.rs',
            'password' => Hash::make('admin'),
            'role_id' => 2,
        ]);
    }
}
