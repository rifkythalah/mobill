@extends('layouts.template')
@section('content')
<div class="my-4 mb-4 d-sm-flex align-items-center justify-content-between">
    <!-- <h1 class="mb-0 text-gray-800 h3">Data Transaksi</h1>
    <a href="{{ route('transaksi.create') }}" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-primary ms-3">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Transaksi
    </a> -->
</div>
<table class="table table-bordered table-hover ">
    <thead>
        <tr class="text-center bg-primary">
            <th>No.</th>
            <th>Tanggal Transaksi</th>
            <th>Nama Pelanggan</th>
            <th>Merk Kendaraan</th>
            <th>Nomor Plat</th>
            <th>Total Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($transaksis as $index => $transaksi)
        <tr>
            <td align="center">{{ $index + 1 }}</td>
            <td>{{ $transaksi->created_at }}</td>
            <td>{{ $transaksi->nama_user }}</td>
            <td>{{ $transaksi->kendaraan->merk_kendaraan }}</td>
            <td align="center">{{ $transaksi->kendaraan->nomor_plat }}</td>
            <td>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</td>
            <td class="text-center">
                <!-- Tombol Edit -->
                <a href="{{ route('transaksi.edit', $transaksi->id) }}" class="btn btn-warning btn-sm">
                    <i class="fas fa-edit"></i> Edit
                </a>
                <!-- Form Hapus -->
                <form action="{{ route('transaksi.destroy', $transaksi->id) }}" method="POST" style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus transaksi ini?');">
                        <i class="fas fa-trash-alt"></i> Hapus
                    </button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
