<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;

class PenggunaController extends Controller
{
    public function index2()
    {
        $kendaraans = Kendaraan::all();

        return view('pengguna.index2', compact('kendaraans'));
    }
    public function index()
    {
        return view('pengguna.index');
    
    }
    public function about()
    {
        return view('pengguna.about');
    }
    public function contact()
    {
        return view('pengguna.contact');
    }
    public function faq()
    {
        return view('pengguna.faq');
    }
}
