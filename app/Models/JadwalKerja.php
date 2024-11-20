<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKerja extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'jadwal_kerjas';

    // Tentukan kolom yang dapat diisi
    protected $fillable = [
        'nama_klien',
        'nama_kategori',
        'tanggal_event',
        'alamat_event',
        'catatan',
        'status',
    ];


}
