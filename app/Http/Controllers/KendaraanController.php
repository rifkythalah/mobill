<?php

namespace App\Http\Controllers;

use App\Models\Kendaraan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class KendaraanController extends Controller
{
    public function index()
    {
        $kendaraans = Kendaraan::all();  
        return view('kendaraan.index', compact('kendaraans'));
    }

    public function create()
    {
        return view('kendaraan.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tanggal' => 'required|date',
            'merk_kendaraan' => 'required|string|max:255',
            'nomor_plat' => 'required|string|max:255',
            'lokasi' => 'required|string|max:255',
            'warna' => 'required|string|max:255',
            'bahan_bakar' => 'required|string',
            'status' => 'required|string',
            'harga' => 'required|numeric',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imagePath = $request->file('image')->store('kendaraan_images', 'public');

        Kendaraan::create([
            'tanggal' => $validatedData['tanggal'],
            'image' => $imagePath,
            'merk_kendaraan' => $validatedData['merk_kendaraan'],
            'nomor_plat' => $validatedData['nomor_plat'],
            'lokasi' => $validatedData['lokasi'],
            'warna' => $validatedData['warna'],
            'bahan_bakar' => $validatedData['bahan_bakar'],
            'status' => $validatedData['status'],
            'harga' => $validatedData['harga']
        ]);

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil ditambahkan!');
    }

    public function show(Kendaraan $kendaraan)
    {
        return view('kendaraan.show', compact('kendaraan'));
    }

    public function edit(Kendaraan $kendaraan)
    {
        return view('kendaraan.edit', compact('kendaraan'));
    }

public function update(Request $request, Kendaraan $kendaraan)
{
    // Validasi input, gambar tidak wajib diupdate
    $validatedData = $request->validate([
        'tanggal' => 'required|date',
        'merk_kendaraan' => 'required|string|max:255',
        'nomor_plat' => 'required|string|max:255',
        'lokasi' => 'required|string|max:255',
        'warna' => 'required|string|max:255',
        'bahan_bakar' => 'required|string',
        'status' => 'required|string',
        'harga' => 'required|numeric',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    if ($request->hasFile('image')) {
       
        Storage::disk('public')->delete($kendaraan->image);

        $imagePath = $request->file('image')->store('kendaraan_images', 'public');
        $validatedData['image'] = $imagePath; 
    }

    $kendaraan->update($validatedData);

    return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil diperbarui!');
}

    public function destroy(Kendaraan $kendaraan)
    {
        Storage::disk('public')->delete($kendaraan->image);

        $kendaraan->delete();

        return redirect()->route('kendaraan.index')->with('success', 'Data kendaraan berhasil dihapus!');
    }
}
