<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <title>MotoRen - Sewa Motor Praktis dan Nyaman</title>
        <meta name="description" content="MotoRen menyediakan layanan penyewaan motor terpercaya untuk membantu perjalanan wisata Anda lebih mudah dan menyenangkan.">
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('css/user/styles.css') }}" rel="stylesheet" />
        <style>
            .custom-button {
    font-size: 14px;
    padding: 8px 16px;
    position: relative;
    top: -15px;
}
        </style>
    </head>
    <main class="flex-shrink-0">
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <div class="container px-5">
                    <i><a class="navbar-brand custom-font" href="{{ route('pengguna.index')}}">MotoRen</a></i>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{ route('pengguna.index')}}">Home</a></li>
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
        <!-- Header-->
        <div class="container px-5 my-5">
            <div class="mb-5 text-center">
                <h1 class="fw-bolder">Pesan Sekarang, Nikmati Kebebasan Berkendara dengan Harga Terjangkau!</h1>
                <p class="mb-0 lead fw-normal text-muted"><i>Rental Motor Aman, Cepat, dan Praktis – Mulai Petualangan Anda Sekarang</i></p>
            </div>
        <!-- Section-->
        <section class="py-5">
        <div class="container px-4 mt-5 px-lg-5">
    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
    @foreach ($kendaraans as $kendaraan)
    <div class="mb-5 col">
        <div class="card h-100">
            <!-- Badge status kendaraan -->
            @if($kendaraan->status == 'Tidak Tersedia')
                <div class="text-white badge bg-warning position-absolute" style="top: 0.5rem; right: 0.5rem">
                    Tidak Tersedia
                </div>
            @else
                <div class="text-white badge bg-success position-absolute" style="top: 0.5rem; right: 0.5rem">
                    Tersedia
                </div>
            @endif

            <!-- Gambar kendaraan -->
            <img class="card-img-top" src="{{ Storage::url($kendaraan->image) }}" alt="{{ $kendaraan->merk_kendaraan }}" />

            <div class="p-4 card-body">
                <div class="text-left">
                    <h5 class="fw-bolder">{{ $kendaraan->merk_kendaraan }}</h5>
                    <hr>
                    <h6 class="mb-3 card-subtitle text-primary">Rp.{{ number_format($kendaraan->harga, 2, ',', '.') }}/hari</h6>
                    <hr>
                </div>
            </div>

            <!-- Tombol aksi -->
            <div class="gap-2 d-flex justify-content-center align-items-center">
                <div class="text-center">
                    <a class="mt-auto btn btn-outline-dark custom-button" href="{{ route('kendaraan.show', $kendaraan->id) }}">Detail</a>
                </div>
                @if($kendaraan->status == 'Tersedia')
                    <div class="text-center">
                        <a class="mt-auto btn btn-primary custom-button" href="{{ route('sewa.create', ['kendaraan' => $kendaraan->id]) }}">Sewa</a>
                    </div>
                @endif
            </div>
        </div>
    </div>
@endforeach



    </div>
</div>
        </section>
    </main>
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
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="{{ asset('js/user/scripts.js') }}"></script>
    </body>
</html>
