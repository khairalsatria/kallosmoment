<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika tidak sesuai dengan konvensi Laravel
    protected $table = 'pemesanans';

    // Tentukan kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'nama',
        'email',
        'nohp',
        'tanggal_event',
        'nama_kategori',
        'harga',
        'alamat_event',
        'bukti_pembayaran',
        'status_pemesanan',
        'keterangan',
    ];

    // Jika Anda ingin menambahkan relasi, Anda dapat melakukannya di sini
    // Contoh: public function user() { return $this->belongsTo(User::class); }


}
