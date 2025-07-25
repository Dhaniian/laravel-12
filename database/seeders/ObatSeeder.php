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
                'nama_obat' => 'Paracetamol',
                'kemasan' => 'Tablet',
                'deskripsi' => 'obat sakit perut',
                'harga' => 5000,
            ],
            [
                'nama_obat' => 'Oskadon',
                'kemasan' => 'Sachet',
                'harga' => 3000,
                'deskripsi' => 'obat sakit kepala',
            ],
        ];
        foreach ($data as $o) {
            Obat::create([
                'nama_obat' => $o['nama_obat'],
                'kemasan' => $o['kemasan'],
                'harga' => $o['harga'],
                'deskripsi' => $o['deskripsi']

            ]);
        }
    }
}
