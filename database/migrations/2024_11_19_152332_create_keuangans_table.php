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
        Schema::create('keuangans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal'); // Kolom untuk tanggal transaksi
            $table->string('deskripsi'); // Kolom untuk deskripsi transaksi
            $table->string('kategori'); // Kolom untuk kategori transaksi
            $table->decimal('pendapatan', 15, 2)->nullable(); // Kolom untuk pendapatan
            $table->decimal('pengeluaran', 15, 2)->nullable(); // Kolom untuk pengeluaran
            $table->decimal('saldo', 15, 2)->nullable(); // Kolom untuk saldo
            $table->text('catatan')->nullable(); // Kolom untuk catatan tambahan
            $table->timestamps(); // Kolom untuk created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('keuangans');
    }
};
