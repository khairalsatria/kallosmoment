<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak mengikuti konvensi Laravel
    protected $table = 'keuangans';

    // Tentukan kolom yang dapat diisi secara massal
    protected $fillable = [
        'tanggal',
        'deskripsi',
        'kategori',
        'pendapatan',
        'pengeluaran',
        'saldo',
        'keterangan',
    ];

    // Jika Anda ingin menambahkan aksesori atau mutator, Anda dapat melakukannya di sini
}
