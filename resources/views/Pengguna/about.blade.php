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
.custom-font {
            font-family: 'Lobster', cursive;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
.custom-font1 {
            font-family: 'Lobster', cursive;
            font-size: 24px;
            font-weight: bold;
            color: black;
        }
        </style>
    </head>
    <main class="flex-shrink-0">
    <body>
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
            <header class="py-5">
                <div class="container px-5">
                    <div class="row justify-content-center">
                        <div class="col-lg-8 col-xxl-6">
                            <div class="my-5 text-center">
                                <h5 class="fw-bolder custom-font1"><i>"MotoRen menyediakan layanan penyewaan motor terpercaya untuk membantu perjalanan wisata Anda lebih mudah dan menyenangkan"</i></h5>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- About section one-->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="mb-5 rounded img-fluid mb-lg-0" src="{{ asset('images/vespa_index1.png') }}" alt="..." /></div>
                        <div class="col-lg-6">
                            <h2 class="fw-bolder">Mengapa Memilih Kami ?</h2>
                            <h5 class="fw-bolder"><i>Kepuasan Perjalanan Anda Adalah Komitmen Kami</i></h5>
                            <p class="mb-0 lead fw-normal text-muted">Kami Selalu Mengutamakan Pelayanan Untuk Melayani Anda Wisatawan Dan Mahasiswa Serta Backpacker Sejati Sebagai Alternatif Berwisata Maupun Berkeliling Dengan Ongkos Yang Terjangkau, Murah, Aman Dan Menyenangkan Pastinya.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Team members section-->
            <section class="py-5 bg-light">
                <div class="container px-5 my-5">
                    <div class="text-center">
                        <h2 class="fw-bolder">Fasilitas yang anda dapatkan</h2>
                        <p class="mb-5 lead fw-normal text-muted custom-font">Apabila Anda menyewa kendaraan di <i>MotoRen</i>, Anda akan mendapat beberap fasilitas ini:</p>
                    </div>
                    <div class="row gx-5 row-cols-1 row-cols-sm-2 row-cols-xl-4 justify-content-center">
                        <div class="mb-5 col mb-xl-0">
                            <div class="text-center">
                                <img class="px-4 mb-4 img-fluid rounded-circle" src="{{ asset('images/helm1.jpg') }}"  alt="..." />
                                <h5 class="fw-bolder">helm</h5>
                                <div class="fst-italic text-muted">mendapatkan 2 helm full face</div>
                            </div>
                        </div>
                        <div class="mb-5 col mb-xl-0">
                            <div class="text-center">
                                <img class="px-4 mb-4 img-fluid rounded-circle" src="{{ asset('images/jas1.png') }}"  alt="..." />
                                <h5 class="fw-bolder">2 jas hujan</h5>
                                <div class="fst-italic text-muted">mendapatkan 2 jas hujan gratis</div>
                            </div>
                        </div>
                        <div class="mb-5 col mb-sm-0">
                            <div class="text-center">
                                <img class="px-4 mb-4 img-fluid rounded-circle" src="{{ asset('images/bensin1.jpg') }}"  alt="..." />
                                <h5 class="fw-bolder">Bensin</h5>
                                <div class="fst-italic text-muted">Bensin pertamax terisi waktu awal pemakaian</div>
                            </div>
                        </div>
                        <div class="mb-5 col">
                            <div class="text-center">
                                <img class="px-4 mb-4 img-fluid rounded-circle" src="{{ asset('images/naik1.jpg') }}"  alt="..." />
                                <h5 class="fw-bolder">Service</h5>
                                <div class="fst-italic text-muted">Motor bisa diantarkan ke pengguna</div>
                            </div>
                        </div>
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
        <script src="js/scripts.js"></script>
    </body>
</html>
