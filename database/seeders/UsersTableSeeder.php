<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Dr. John Doe',
                'email' => 'dokter1@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('valen123'),
                'alamat' => 'Jl. Kebon Jeruk No. 1, Jakarta',
                'no_hp' => '081234567890',
                'role' => 'dokter',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'valen1@gmail.com',
                'email_verified_at' => now(),
                'password' => bcrypt('valen123'),
                'alamat' => 'Jl. Raya No. 10, Jakarta',
                'no_hp' => '082345678901',
                'role' => 'pasien',
                'remember_token' => Str::random(10),
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
