<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kategoris', function (Blueprint $table) {
            $table->id();
            $table->string('kode_kategori')->unique(); // Menambahkan kolom kode_kategori
            $table->string('nama_kategori'); // Menambahkan kolom nama_kategori
            $table->decimal('harga', 10, 2); // Menambahkan kolom harga dengan tipe decimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategoris');
    }
};
