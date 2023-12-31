<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Schema;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'id' => (time() - 999999999),
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'email_verified_at' => now(),
            'password' => Hash::make('admin'),
        ]);

        DB::table('users')->insert([
            'id' => (time() - 999999998),
            'name' => 'User',
            'email' => 'janeth@gmail.com',
            'username' => 'janeth',
            'email_verified_at' => now(),
            'password' => Hash::make('janeth'),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
}
