<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ObatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('obats')->insert([
            [
                'nama_obat' => 'Oli Samping',
                'kemasan' => 'Plastik',
                'harga' => 125000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Obat Hijau',
                'kemasan' => 'Plastik',
                'harga' => 2215000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Pertalite',
                'kemasan' => 'Drigen',
                'harga' => 3125000,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Solar',
                'kemasan' => 'Drigen',
                'harga' => 6700,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_obat' => 'Mio Karbu',
                'kemasan' => 'Kayu',
                'harga' => 550000,
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
