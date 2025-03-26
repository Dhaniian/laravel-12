<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'nama_obat' => 'ganja',
                'kemasan' => 'daunz',
                'harga' => '12000',
            ],
            [
                'nama_obat' => 'inex',
                'kemasan' => 'pil',
                'harga' => '13000',
            ],
            [
                'nama_obat' => 'cimeng',
                'kemasan' => 'pil',
                'harga' => '14000',
            ]
        ];
        foreach($data as $d){
            Obat::create([
                'nama_obat' => $d['nama_obat'],
                'kemasan' => $d['kemasan'],
                'harga' => $d['harga'],
            ]);
        }
    }
}
