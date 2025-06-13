<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="MotoRen menyediakan layanan penyewaan motor terpercaya untuk membantu perjalanan wisata Anda lebih mudah dan menyenangkan." />
    <title>MotoRen - Sewa Motor Praktis dan Nyaman</title>

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />

    <!-- FontAwesome -->
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.7.1-web/css/all.min.css') }}" />

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />

    <!-- Custom CSS -->
    <link href="{{ asset('css/user/styles.css') }}" rel="stylesheet" />
</head>
<body class="d-flex flex-column">
    <main class="flex-shrink-0">
       <!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container px-5">
        <a class="navbar-brand custom-font" href="{{ route('pengguna.index') }}">MotoRen</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto ">
            <li class="nav-item">
                    <a class="nav-link" href="{{ url('/dashboard') }}">
                        <i class="fas fa-fw fa-tachometer-alt"></i> dashboard
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/kendaraan') }}">
                        <i class="fas fa-fw fa-car"></i> Kendaraan
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/transaksi') }}">
                        <i class="fas fa-fw fa-exchange-alt"></i> Transaksi
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/users') }}">
                        <i class="fas fa-fw fa-user"></i> akun
                    </a>
                </li>
                <li class="nav-item ms-auto d-flex align-items-center">
                    <span class="text-white">Welcome, <a href="{{ route('profile.edit') }}" class="text-white">{{ Auth::user()->name }}</a></span>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- Page Heading -->
<div class="mt-4 mb-4 d-sm-flex align-items-center justify-content-between">
    <h1 class="mb-0 text-gray-800 h3">Data Transaksi</h1>
    <a href="{{ route('pengguna.index2') }}" class="shadow-sm d-none d-sm-inline-block btn btn-sm btn-primary ms-3">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah Transaksi
    </a>
</div>


<!-- Tabel Transaksi -->
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
</div>


    </main>
    <!-- Footer -->
    <footer class="py-4 mt-auto bg-primary">
        <div class="container px-5">
            <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                <div class="col-auto">
                    <div class="text-white small">&copy; MotoRen 2024</div>
                </div>
                <div class="col-auto">
                    <a class="mx-1 link-light small" href="#"><i class="bi bi-whatsapp"></i></a>
                    <a class="mx-1 link-light small" href="#"><i class="bi bi-instagram"></i></a>
                    <a class="mx-1 link-light small" href="#"><i class="bi bi-youtube"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
