<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('sewas', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Relasi ke users
        $table->foreignId('kendaraan_id')->constrained('kendaraan')->onDelete('cascade'); // Relasi ke kendaraan
        $table->string('nama_user'); // Menyimpan nama pengguna
        $table->decimal('harga', 10, 2); // Harga sewa
        $table->date('tanggal_sewa');
        $table->date('tanggal_kembali');
        $table->decimal('total_harga', 10, 2); // Total harga
        $table->string('merk_kendaraan'); // Merk kendaraan
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sewas');
    }
};
