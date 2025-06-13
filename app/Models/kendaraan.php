<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kendaraan extends Model
{
    use HasFactory;

    
    protected $table = 'kendaraan';

    protected $fillable = [
        'tanggal',
        'image',
        'merk_kendaraan',
        'nomor_plat',
        'lokasi',
        'warna',
        'bahan_bakar',
        'status',
        'harga',
    ];
}