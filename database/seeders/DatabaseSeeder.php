<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kategori;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Contoh data untuk tabel kategoris
        $data = [
            [
                'kode_kategori' => 'KAT001',
                'nama_kategori' => 'Kategori 1',
                'harga' => 10000,
            ],
            [
                'kode_kategori' => 'KAT002',
                'nama_kategori' => 'Kategori 2',
                'harga' => 20000,
            ],
            [
                'kode_kategori' => 'KAT003',
                'nama_kategori' => 'Kategori 3',
                'harga' => 30000,
            ],
            [
                'kode_kategori' => 'KAT004',
                'nama_kategori' => 'Kategori 4',
                'harga' => 40000,
            ],
            [
                'kode_kategori' => 'KAT005',
                'nama_kategori' => 'Kategori 5',
                'harga' => 50000,
            ],
        ];

        // Insert data ke dalam tabel
        foreach ($data as $kategori) {
            Kategori::create($kategori);
        }
    }
}
