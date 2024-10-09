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
        Schema::create('kategori', function (Blueprint $table) {
            $table->id(); // Primary key 'id'
            $table->string('nama_kategori'); // Column for category name
            $table->decimal('harga', 10, 2); // Column for price, allowing up to 10 digits with 2 decimal places
            $table->text('deskripsi'); // Column for description
            $table->timestamps(); // 'created_at' and 'updated_at' columns
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kategori');
    }
};
