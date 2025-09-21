<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
   public function run(): void {
        DB::table('users')->insert([
            'nim' => '123456789',
            'password' => Hash::make('password123'),
        ]);
    }
}
