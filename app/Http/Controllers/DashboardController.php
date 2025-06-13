<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use App\Models\Sewa;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKendaraan = Kendaraan::count(); 
        $kendaraanTersedia = Kendaraan::where('status', 'tersedia')->count(); 
        $jumlahTransaksi = Sewa::count(); 
        $jumlahAkun = User::count(); 

        return view('/dashboard', compact('totalKendaraan', 'kendaraanTersedia', 'jumlahTransaksi', 'jumlahAkun'));
    }
}
