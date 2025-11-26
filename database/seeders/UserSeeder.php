<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin POS',
            'email' => 'admin@pos.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Kasir 1',
            'email' => 'kasir@pos.com',
            'password' => Hash::make('kasir123'),
            'role' => 'cashier',
        ]);
    }
}
