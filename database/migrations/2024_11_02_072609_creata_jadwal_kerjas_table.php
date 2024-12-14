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
        Schema::create('jadwal_kerjas', function (Blueprint $table) {
            $table->id(); // Kolom ID yang auto increment
            $table->string('nama_klien'); // Kolom untuk nama klien
            $table->string('nama_kategori'); // Kolom untuk nama klien
            $table->date('tanggal_event'); // Kolom untuk tanggal pernikahan
            $table->string('alamat_event'); // Kolom untuk lokasi pemotretan
            $table->string('keterangan'); // Kolom untuk catatan tambahan (nullable)
            $table->string('status')->default('aktif'); // Kolom untuk status (aktif/non-aktif)
            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kerjas');
    }
};
