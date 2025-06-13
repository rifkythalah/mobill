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
        <!-- Brand -->
        <a class="navbar-brand custom-font" href="{{ route('dashboard') }}">MotoRen</a>

        <!-- Toggle Button for Mobile View -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto align-items-center">
                <!-- Kendaraan -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/kendaraan') }}">
                        <i class="fas fa-fw fa-car"></i> Kendaraan
                    </a>
                </li>
                <!-- Transaksi -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/transaksi') }}">
                        <i class="fas fa-fw fa-exchange-alt"></i> Transaksi
                    </a>
                </li>
                <!-- Akun -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/users') }}">
                        <i class="fas fa-fw fa-user"></i> Akun
                    </a>
                </li>
                <!-- Welcome Message -->
                <li class="nav-item d-flex align-items-center">
                    <span class="text-white">
                        Welcome, <a href="{{ route('profile.edit') }}" class="text-white text-decoration-underline">{{ Auth::user()->name }}</a>
                    </span>
                </li>
                <!-- Logout Button -->
                <li class="nav-item">
                    <form method="POST" action="{{ route('logout') }}" class="d-inline">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-light text-primary ms-3">
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

        <!-- Page Content -->
        <div class="mt-4 container-fluid">
            <div class="mb-4 d-sm-flex align-items-center justify-content-between">
                <h1 class="text-gray-800 h3">Dashboard</h1>
            </div>

            <div class="row">
                <!-- Total Kendaraan -->
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="py-2 shadow card border-left-primary h-100">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="mr-2 col">
                                    <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                        Total Kendaraan
                                    </div>
                                    <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $totalKendaraan }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="text-gray-300 fas fa-motorcycle fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kendaraan Tersedia -->
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="py-2 shadow card border-left-primary h-100">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="mr-2 col">
                                    <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                        Kendaraan Tersedia
                                    </div>
                                    <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $kendaraanTersedia }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="text-gray-300 fas fa-motorcycle fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jumlah Transaksi -->
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="py-2 shadow card border-left-primary h-100">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="mr-2 col">
                                    <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                        Jumlah Transaksi
                                    </div>
                                    <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $jumlahTransaksi }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="text-gray-300 fas fa-exchange-alt fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Jumlah Akun Terdaftar -->
                <div class="mb-4 col-xl-3 col-md-6">
                    <div class="py-2 shadow card border-left-primary h-100">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="mr-2 col">
                                    <div class="mb-1 text-xs font-weight-bold text-primary text-uppercase">
                                        Jumlah Akun Terdaftar
                                    </div>
                                    <div class="mb-0 text-gray-800 h5 font-weight-bold">{{ $jumlahAkun }}</div>
                                </div>
                                <div class="col-auto">
                                    <i class="text-gray-300 fas fa-user fa-2x"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

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
