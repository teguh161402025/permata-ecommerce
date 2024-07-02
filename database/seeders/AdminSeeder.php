<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $user = [
 [              

                'name' => 'admin',
                'email' => 'admin',
                'level' => 'admin',
                'password' => Hash::make('admin'),
                'jenis_kelamin' => 'laki-laki',
                'no_telepon' => '0812345678901',
                'alamat' => 'Medan No 1'
            ]];
             foreach ($user as $key => $value) {
            User::create($value);
        }
    }}