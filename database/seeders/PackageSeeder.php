<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Package;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'nama' => 'Paket Standart',
            'deskripsi' => 'Sesi foto selama 2 jam dengan 20 foto digital.',
            'harga' => 500000,
        ]);

        Package::create([
            'nama' => 'Paket Premium',
            'deskripsi' => 'Sesi foto selama 4 jam dengan 50 foto digital dan 2 cetakan.',
            'harga' => 1000000,
        ]);

        Package::create([
            'nama' => 'Paket Ultimate',
            'deskripsi' => 'Sesi foto sepanjang hari dengan 100 foto digital, 5 cetakan, dan album foto.',
            'harga' => 2000000,
        ]);
    }
}
