<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama' => 'iqbal',
                'alamat' => 'Jl Imam Bonjol',
                'no_hp' => '08101010',
                'role' => 'dokter',
                'email' => 'iqbalgamteng@gmail.com',
                'password' => Hash::make('password'),
            ],
            [
                'nama' => 'alex',
                'alamat' => 'Jl suka maju',
                'no_hp' => '08181818',
                'role' => 'dokter',
                'email' => 'alexgamteng@gmail.com',
                'password' => Hash::make('alex123'),
            ],
            [
                'nama' => 'damni',
                'alamat' => 'Jl suka jomk',
                'no_hp' => '08212188181',
                'role' => 'pasien',
                'email' => 'damnigamteng@gmail.com',
                'password' => Hash::make('dhani123'),
            ],
            [
                'nama' => 'mamank',
                'alamat' => 'Jl jomk aja',
                'no_hp' => '089191919',
                'role' => 'pasien',
                'email' => 'mamankgamteng@gmail.com',
                'password' => Hash::make('password'),
            ]
        ];
        
        foreach($data as $d){
            User::updateOrCreate(
                ['email' => $d['email']], // Search by this field
                [
                    'nama' => $d['nama'],
                    'password' => $d['password'],
                    'alamat' => $d['alamat'],
                    'no_hp' => $d['no_hp'],
                    'role' => $d['role']
                ]
            );
        }
    }
}