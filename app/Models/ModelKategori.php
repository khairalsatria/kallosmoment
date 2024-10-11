<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelKategori extends Model
{
    use HasFactory;

    protected $table = 'kategori';  // Nama tabel yang terhubung
    protected $fillable = ['nama_kategori', 'harga', 'deskripsi'];  // Kolom yang dapat diisi
}
