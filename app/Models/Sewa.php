<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sewa extends Model
{
    use HasFactory;

    protected $table = 'sewas';

    protected $fillable = [
        'user_id',
        'nama_user',
        'kendaraan_id',
        'harga',
        'tanggal_sewa',
        'tanggal_kembali',
        'total_harga',
        'merk_kendaraan',
    ];


    /**
     * Relasi ke model Kendaraan.
     */
    public function kendaraan()
    {
        return $this->belongsTo(Kendaraan::class, 'kendaraan_id');
    }

    /**
     * Relasi ke model User.
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id'); 
    }
}
