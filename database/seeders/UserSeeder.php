<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // User Seeder Admin User
        User::create([
            'first_name' => 'Ego',
            'last_name' => 'Kun',
            'email' => 'admin@spendly.com',
            'email_verified_at' => now(),  // You can set this if you want the email to be verified
            'password' => bcrypt('admin'),
            'address' => '123 Admin Street, Admin City',  // Add address
            'phone' => '1234567890',  // Add phone
            'currency' => 'usd',  // Example currency
            'remember_token' => Str::random(10),
        ]);

        // User Seeder Regular User
        User::create([
            'first_name' => 'Isagi',
            'last_name' => 'Yoichi',
            'email' => 'user@spendly.com',
            'email_verified_at' => now(),
            'password' => bcrypt('user'),
            'address' => '456 User Avenue, User City',  // Add address
            'phone' => '0987654321',  // Add phone
            'currency' => 'yen',  // Example currency
            'remember_token' => Str::random(10),
        ]);
    }
}
