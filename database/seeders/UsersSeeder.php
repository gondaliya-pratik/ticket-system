<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = [
            'name' => 'Test User',
            'email' => 'testuser@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('test@123'),
            'remember_token' => Str::random(10),
        ];

        User::create($user);
    }
}
