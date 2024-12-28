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
        Schema::create('pemesanans', function (Blueprint $table) {
            $table->id();
            $table->string('nama'); // Kolom untuk nama
            $table->string('email')->unique(); // Kolom untuk email, dengan constraint unique
            $table->string('nohp'); // Kolom untuk nomor handphone
            $table->date('tanggal_event'); // Kolom untuk tanggal
            $table->string('nama_kategori'); // Kolom untuk paket
            $table->decimal('harga', 10, 2);
            $table->string('alamat_event'); // Kolom untuk alamat
            $table->string('bukti_pembayaran')->nullable(); // Kolom untuk bukti pembayaran (nullable jika tidak wajib)
            $table->string('status_pemesanan')->default('pending'); // Default status adalah 'pending' // Kolom untuk status pembayaran, default 'pending'
            $table->text('keterangan')->nullable(); // Kolom untuk keterangan (nullable jika tidak wajib)
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanans');
    }


};
