<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Raphael Azambuja',
            'email' => 'raphaelazambujadev@gmail.com',
            'password' => Hash::make('password'),
            'contact' => '48996873724',
        ]);
    }
}
