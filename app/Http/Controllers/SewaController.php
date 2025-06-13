<?php

namespace App\Http\Controllers;

use App\Models\Sewa;
use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SewaController extends Controller
{
    public function create(Kendaraan $kendaraan = null)
    {
        return view('sewa.create', compact('kendaraan'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'harga' => 'required|numeric',
            'tanggal_sewa' => 'required|date',
            'tanggal_kembali' => 'required|date|after:tanggal_sewa',
        ]);

        $totalHari = now()->parse($request->tanggal_sewa)->diffInDays($request->tanggal_kembali);
        $totalHarga = $totalHari * $request->harga;

        Sewa::create([
            'user_id' => Auth::id(), 
            'nama_user' => Auth::user()->name,
            'kendaraan_id' => $request->kendaraan_id,
            'harga' => $request->harga,
            'tanggal_sewa' => $request->tanggal_sewa,
            'tanggal_kembali' => $request->tanggal_kembali,
            'total_harga' => $totalHarga,
            'merk_kendaraan' => $request->merk_kendaraan,
        ]);

        return redirect()->route('pengguna.index2')->with('success', 'Sewa berhasil dibuat!');
    }

    public function edit(Sewa $sewa)
    {
        return view('transaksi.edit', compact('sewa'));
    }

    public function update(Request $request, Sewa $sewa)
    {
        $validatedData = $request->validate([
            'kendaraan_id' => 'required|exists:kendaraan,id',
            'harga' => 'required|numeric',
            'tanggal_sewa' => 'required|date',
            'tanggal_kembali' => 'required|date|after:tanggal_sewa',
        ]);

        $totalHari = now()->parse($request->tanggal_sewa)->diffInDays($request->tanggal_kembali);
        $totalHarga = $totalHari * $request->harga;

        $sewa->update([
            'kendaraan_id' => $validatedData['kendaraan_id'],
            'harga' => $validatedData['harga'],
            'tanggal_sewa' => $validatedData['tanggal_sewa'],
            'tanggal_kembali' => $validatedData['tanggal_kembali'],
            'total_harga' => $totalHarga,  
        ]);

        return redirect()->route('transaksi.index')->with('success', 'Data transaksi berhasil diperbarui!');
    }

    public function index()
    {
        $transaksis = Sewa::all();

        return view('transaksi.index', compact('transaksis'));
    }
    public function destroy(Sewa $sewa)
{
    $sewa->delete();

    return redirect()->route('transaksi.index')->with('success', 'Transaksi berhasil dihapus!');
}

}
