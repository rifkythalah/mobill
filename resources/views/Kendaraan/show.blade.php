<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>MotoRen - Sewa Motor Praktis dan Nyaman</title>
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="{{ asset('css/user/styles.css') }}" rel="stylesheet" />
    <style>
        .custom-font {
            font-family: 'Lobster', cursive;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
    </style>
</head>
<body class="d-flex flex-column">
    <!-- Main Content -->
    <main class="flex-shrink-0">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container px-5">
                    <i><a class="navbar-brand custom-font" href="{{ route('dashboard') }}">MotoRen</a></i>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('dashboard')}}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('pengguna.about')}}">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('pengguna.faq')}}">FAQ</a></li>
                        @if(Auth::check() && Auth::user()->role === 'admin')
                            <li class="nav-item"><a class="nav-link"  href="{{ url('/dashboard') }}">Dashboard</a></li>           
                        @endif
                        @if (Route::has('login'))
                                @auth
                                    <a
                                        class="rounded-md px-3 py-2 text-white ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                    {{ Auth::user()->name }}
                                    </a>
                                    <form action="{{ route('logout') }}" method="POST" class="d-inline">
                        @csrf
                            <button type="submit" class="btn btn-danger">
                            {{ __('Log Out') }}
                            </button>
                            </form>
                            <div class="flex lg:justify-center lg:col-start-2">
                            <div class="max-w-xl">
                                @else
                                    <a
                                        href="{{ route('login') }}"
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Log in
                                    </a>

                                    @if (Route::has('register'))
                                        <a
                                            href="{{ route('register') }}"
                                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                        >
                                            Register
                                        </a>
                                    @endif
                                @endauth

                        @endif

                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

        <!-- Page Content -->
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-start">
                <!-- Gambar -->
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-start">
                        <!-- Gambar -->
                        <div class="col-lg-6">
                            <header class="mb-4">
                                <h1 class="mb-1 fw-bolder">{{ $kendaraan->merk_kendaraan }}</h1>
                                <div class="mb-2 text-muted fst-italic">{{ \Carbon\Carbon::parse($kendaraan->tanggal)->format('d F, Y') }}</div>
                            </header>
                            <figure class="mb-4">
                                <img class="rounded img-fluid" src="{{ Storage::url($kendaraan->image) }}" alt="{{ $kendaraan->merk_kendaraan }}" />
                            </figure>
                        </div>

                        <!-- Formulir -->
                        <div class="col-lg-6">
                            <div class="card" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                                <div class="card-body">
                                    <h5 class="mb-3 card-title">{{ $kendaraan->merk_kendaraan }}</h5>
                                    <h6 class="mb-3 card-subtitle text-primary">Rp. {{ number_format($kendaraan->harga, 0, ',', '.') }}/hari</h6>
                                    <table class="table table-borderless">
                                        <tbody>
                                            <tr>
                                                <td>Merek</td>
                                                <td class="text-end">{{ $kendaraan->merk_kendaraan }}</td>
                                            </tr>
                                            <tr>
                                                <td>Warna</td>
                                                <td class="text-end">{{ $kendaraan->warna }}</td>
                                            </tr>
                                            <tr>
                                                <td>Bahan Bakar</td>
                                                <td class="text-end">{{ $kendaraan->bahan_bakar }}</td>
                                            </tr>
                                            <tr>
                                                <td>Lokasi</td>
                                                <td class="text-end">{{ $kendaraan->lokasi }}</td>
                                            </tr>
                                            <tr>
                                                <td>Nomor Plat</td>
                                                <td class="text-end">{{ $kendaraan->nomor_plat }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    @if($kendaraan->status == 'Tersedia')
                                    <a href="{{ route('sewa.create', ['kendaraan' => $kendaraan->id]) }}" class="btn btn-primary btn-lg w-100 d-flex justify-content-center align-items-center" style="gap: 8px;">
                                        <i class="bi bi-cart-fill"></i> Sewa Motor
                                    </a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <section class="mb-5">
                <div class="mb-5 col">
                <h4 class="mt-5 mb-4 fw-bolder">Informasi Penting</h4>
                <div class="mb-4 fs-5">
                    <h5>Sebelum Anda pesan</h5>
                    <ul>
                        <li>Pastikan untuk membaca syarat rental.</li>
                    </ul>
                    <h5>Setelah Anda pesan</h5>
                    <ul>
                        <li>Penyedia akan menghubungi pengemudi melalui WhatsApp untuk meminta foto beberapa dokumen wajib.</li>
                    </ul>
                    <h5>Saat pengambilan</h5>
                    <ul>
                        <li>Bawa KTP, SIM A, dan dokumen-dokumen lain yang dibutuhkan oleh penyedia rental.</li>
                        <li>Saat Anda bertemu dengan staf rental, cek kondisi mobil dengan staf.</li>
                        <li>Setelah itu, baca dan tanda tangan perjanjian rental.</li>
                    </ul>
                </div>
            </section>
            <section>
                <h4 class="mt-5 mb-4 fw-bolder">Review Pengguna</h4>
                <div class="card bg-light">
                    <div class="card-body">

                        <!-- Comment with nested comments-->
                        <div class="mb-4 d-flex">
                            <!-- Parent comment-->
                            <div class="flex-shrink-0"><img class="rounded-circle" src="{{ asset('images/orangnew.png') }}" alt="..." /></div>
                            <div class="ms-3">
                                <div class="fw-bold">Abdul Rochaman</div>
                                Layanan yang luar biasa! Motor bersih dan nyaman, perjalanan jadi lebih menyenangkan
                                <!-- Child comment 1-->
                                <div class="mt-4 d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle"src="{{ asset('images/orang3neww.png') }}" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Aditya saputra</div>
                                        iya motornya nyaman digunakan dan membuat perjalanan menjadi mengesankan
                                    </div>
                                </div>
                                <!-- Child comment 2-->
                                <div class="mt-4 d-flex">
                                    <div class="flex-shrink-0"><img class="rounded-circle" src="{{ asset('images/orangnew2.png') }}" alt="..." /></div>
                                    <div class="ms-3">
                                        <div class="fw-bold">Maul</div>
                                        sangat rekomendasi banget tempat rental motornya.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single comment-->
                        <div class="d-flex">
                            <div class="flex-shrink-0"><img class="rounded-circle" src="{{ asset('images/orangnew2.png') }}" alt="..." /></div>
                            <div class="ms-3">
                                <div class="fw-bold">Dzakwan</div>
                                Motor nyaman dan irit, cocok untuk perjalanan jauh. Layanan 5 bintang
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <!-- Post categories-->
                <a class="mt-auto btn btn-primary custom-button" href="{{ route('dashboard') }}">Kembali</a>
            </section>
        </div>

        <!-- Footer-->
        <footer class="py-4 mt-auto bg-primary">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="m-0 text-white small">Copyright &copy; MotoRen 2024</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!"><i class="bi bi-whatsapp"></i></a>
                        <span class="mx-1 text-white">&middot;</span>
                        <a class="link-light small" href="#!"><i class="bi-instagram"></i></a>
                        <span class="mx-1 text-white">&middot;</span>
                        <a class="link-light small" href="#!"><i class="bi-youtube"></i></a>
                    </div>
                </div>
            </div>
        </footer>

    </main>

    <!-- Bootstrap core JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS -->
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>
</html>
