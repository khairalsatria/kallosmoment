<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    // Menentukan nama tabel jika tidak sesuai dengan konvensi penamaan
    protected $table = 'kategoris';

    // Menentukan kolom-kolom yang dapat diisi massal
    protected $fillable = [
        'kode_kategori',
        'nama_kategori',
        'harga',
    ];

    // Jika Anda memiliki relasi, misalnya jika Kategori memiliki produk
    // public function produk()
    // {
    //     return $this->hasMany(Produk::class);
    // }

    // Contoh scope untuk memfilter kategori berdasarkan harga
    public function scopeWithPriceLessThan($query, $price)
    {
        return $query->where('harga', '<', $price);
    }

    
}
