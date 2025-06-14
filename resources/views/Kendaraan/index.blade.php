@extends('layouts.template')
@section('content')
<div class="mt-4 mb-4 d-sm-flex align-items-center justify-content-between">
    <h1 class="mb-0 text-gray-800 h3 ms-3">Data Kendaraan</h1>
    <a href="{{ route('kendaraan.create') }}" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-primary ">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Kendaraan
    </a>
</div>
<table class="table table-bordered table-hover" id="barang">
<thead>
<tr class="text-center bg-primary">
<th>No.</th>
<th>Tanggal</th>
<th>Gambar</th>
<th>Merk Kendaraan</th>
<th>Nomor Plat</th>
<th>Lokasi</th>
<th>Warna</th>
<th>Bahan Bakar</th>
<th>Status</th>
<th>Harga</th>
<th>Aksi</th>
</tr>
</thead>
<tbody>
@foreach ($kendaraans as $index => $kendaraan)
<tr>
<td align="center">{{ $index + 1 }}</td>
<td>{{ $kendaraan->tanggal }}</td>
<td align="center">
    @if($kendaraan->image)
        <img src="{{ asset('storage/' . $kendaraan->image) }}" alt="Image" width="50" height="50">
    @else
        <img src="{{ asset('images/no-image.png') }}" alt="No image" width="50" height="50">
    @endif
</td>
<td>{{ $kendaraan->merk_kendaraan }}</td>
<td align="center">{{ $kendaraan->nomor_plat }}</td>
<td>{{ $kendaraan->lokasi }}</td>
<td>{{ $kendaraan->warna }}</td>
<td>{{ $kendaraan->bahan_bakar }}</td>
<td>{{ $kendaraan->status }}</td>
<td>{{ $kendaraan->harga }}</td>
<td class="text-center">
    <!-- Tombol Edit -->
    <a href="{{ route('kendaraan.edit', $kendaraan->id) }}" class="btn btn-warning btn-sm">
        <i class="fas fa-edit"></i> Edit
    </a>
    <!-- Form untuk Hapus -->
    <form action="{{ route('kendaraan.destroy', $kendaraan->id) }}" method="POST" style="display:inline-block;">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?');">
            <i class="fas fa-trash-alt"></i> Hapus
        </button>
    </form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection
