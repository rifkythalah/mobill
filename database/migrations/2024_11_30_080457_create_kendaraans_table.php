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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('image'); // Nama file gambar
            $table->string('merk_kendaraan');
            $table->string('nomor_plat');
            $table->string('lokasi');
            $table->string('warna'); // Kolom warna
            $table->string('bahan_bakar'); // Kolom bahan bakar
            $table->string('status')->default('Tersedia'); // Kolom status (default: Tersedia)
            $table->decimal('harga', 10, 2); // Kolom harga, dengan format desimal
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
