<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'name' => 'fakhri',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('12345678'),
            'level' => 1
        ]);
        User::insert([
            'name' => 'fakhri',
            'email' => 'fakhri@gmail.com',
            'password' => Hash::make('12345678'),
            'level' => 0
        ]);
    }
}
