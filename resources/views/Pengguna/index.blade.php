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
        <link rel="stylesheet" href="{{ asset('fontawesome-free-6.7.1-web/css/all.min.css') }}">
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
       <!-- Core theme CSS (includes Bootstrap)-->
        <!-- Link Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        .custom-font {
            font-family: 'Lobster', cursive;
            font-size: 24px;
            font-weight: bold;
            color: white;
        }
        .form-container {
            background-color: #007bff;
            padding: 30px;
            border-radius: 10px;
            color: white;
        }
    </style>
        <link href="{{ asset('css/user/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
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
            <header class="py-5 bg-dark">
                <div class="container px-5">
                    <div class="row gx-5 align-items-center justify-content-center">
                        <div class="col-lg-8 col-xl-7 col-xxl-6">
                            <div class="my-5 text-center text-xl-start">
                                <h1 class="mb-2 text-white display-5 fw-bolder"><i>Jelajahi Keindahan, Bebaskan Travelingmu!</i></h1>
                                <p class="mb-4 lead fw-normal text-white-50 wire">Sewa Motor Praktis, Perjalanan Tanpa Batas Nikmati kebebasan menjelajahi destinasi wisata impian Anda dengan mudah dan cepat. Pesan motor favoritmu kapan saja, di mana saja, hanya dengan beberapa klik!</p>
                                <div class="gap-3 d-grid d-sm-flex justify-content-sm-center justify-content-xl-start">
                                    <a class="gap-2 px-4 btn btn-outline-light btn-lg d-flex align-items-center" href="#features">
                                        Details
                                        <i class="fa-solid fa-arrow-right"></i>
                                    </a>
                                    <a class="gap-2 px-4 btn btn-primary btn-lg me-sm-3 d-flex align-items-center justify-content-center" href="{{ route('pengguna.index2')}}">
                                        <i class="bi bi-cart-fill"></i>
                                        Sewa
                                    </a>


                                </div>
                            </div>
                        </div>
                        <div class="text-center col-xl-5 col-xxl-6 d-none d-xl-block"><img class="my-5 img-fluid rounded-3" src="{{ asset('images/vespa_index.png') }}" alt="..." /></div>
                    </div>
                </div>
            </header>
            <!-- Features section-->
            <section class="py-5" id="features">
                <div class="container px-5 my-5">
                    <div class="row gx-5">
                        <div class="mb-5 col-lg-4 mb-lg-0"><h2 class="mb-0 fw-bolder">Kenapa Memilih Kami ?</h2></div>
                        <div class="col-lg-8">
                            <div class="row gx-5 row-cols-1 row-cols-md-2">
                                <div class="mb-5 col h-100">
                                    <div class="mb-3 text-white feature bg-primary bg-gradient rounded-3"><i class="fa-solid fa-rocket"></i></div>
                                    <h2 class="h5">Mudah dan Cepat</h2>
                                    <p class="mb-0">Proses pemesanan online yang simpel.</p>
                                </div>
                                <div class="mb-5 col h-100">
                                    <div class="mb-3 text-white feature bg-primary bg-gradient rounded-3"><i class="fa-solid fa-motorcycle"></i></div>
                                    <h2 class="h5"> Pilihan Motor Terbaik dan keren-keren </h2>
                                    <p class="mb-0">Kendaraan yang nyaman dan terpercaya.</p>
                                </div>
                                <div class="mb-5 col mb-md-0 h-100">
                                    <div class="mb-3 text-white feature bg-primary bg-gradient rounded-3"><i class="fa-solid fa-map"></i></div>
                                    <h2 class="h5"> Fleksibel</h2>
                                    <p class="mb-0">Eksplorasi tanpa batas, kapan pun Anda mau.</p>
                                </div>
                                <div class="col h-100">
                                    <div class="mb-3 text-white feature bg-primary bg-gradient rounded-3"><i class="fa-solid fa-lock"></i></div>
                                    <h2 class="h5">Aman dan Terpercaya</h2>
                                    <p class="mb-0">Sistem penyewaan yang transparan dan profesional.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- About section one-->
            <section class="py-5 bg-light" id="scroll-target">
                <div class="container px-5 my-5">
                    <div class="row gx-5 align-items-center">
                        <div class="col-lg-6"><img class="mb-5 rounded img-fluid mb-lg-0" src="{{ asset('images/vespa1.jpg') }}" alt="..." /></div>
                        <div class="col-lg-6">
                            <p class="mb-0 mb-4 lead fw-normal text-muted fs-4 fst-italic">"Mulai Perjalananmu Sekarang!
                                Pilih motor favoritmu, nikmati pengalaman tak terlupakan, dan buat setiap perjalanan jadi petualangan seru."</p>
                                <div class="fw-bold">
                                    RentalRen
                                    <span class="mx-1 text-center fw-bold text-primary">/</span>
                                    Sewa Motor Praktis & nyaman
                                </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- Testimonial section-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-8 col-xl-6">
                            <div class="text-center">
                                <h2 class="fw-bolder">Testimoni Customer</h2>
                                <p class="mb-5 lead fw-normal text-muted">Kepuasan Perjalanan Anda Adalah Komitmen Kami.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row gx-5">
                        <div class="mb-5 col-lg-4">
                            <div class="h-10 border-0 shadow card h-100">
                                <img class="card-img-top" src="{{ asset('images/sewa1.jpeg') }}" alt="..." />
                                <div class="p-4 card-body">
                                    <div class="mb-2 badge bg-primary bg-gradient rounded-pill">Media</div>
                                    <div class="mb-2 d-flex justify-content-left">
                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                    </div>
                               <p class="mb-0 card-text">Layanan yang luar biasa! Motor bersih dan nyaman, perjalanan jadi lebih menyenangkan</p>
                                </div>
                                <div class="p-4 pt-0 bg-transparent card-footer border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="{{ asset('images/orang3neww.png') }}" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">— Abdul, Pengguna Lama </div>
                                                <div class="text-muted">13 Oktober, 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 col-lg-4">
                            <div class="border-0 shadow card h-100">
                                <img class="card-img-top"  src="{{ asset('images/sewaneww.jpg') }}" alt="..." />
                                <div class="p-4 card-body">
                                    <div class="mb-2 badge bg-primary bg-gradient rounded-pill">Media</div>
                                    <div class="mb-2 d-flex justify-content-left">
                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                        <i class="fa-solid fa-star" style="color: gold;"></i>
                                        <i class="fa-regular fa-star"></i>
                                    </div>
                                    <a class="text-decoration-none link-dark stretched-link" href="#!"></a>
                                    <p class="mb-0 card-text">Harga terjangkau, pelayanan ramah, dan motor sesuai ekspektasi. Terima kasih!</p>
                                </div>
                                <div class="p-4 pt-0 bg-transparent card-footer border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="{{ asset('images/orangnew2.png') }}" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">— Dzakwan, Pengguna Baru</div>
                                                <div class="text-muted">23 Maret, 2024</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 col-lg-4">
                            <div class="border-0 shadow card h-100">
                                <img class="card-img-top" src="{{ asset('images/adit2.jpg') }}"alt="..." />
                                <div class="p-4 card-body">
                                <div class="mb-2 badge bg-primary bg-gradient rounded-pill">News</div>
                                <div class="mb-2 d-flex justify-content-left">
                                    <i class="fa-solid fa-star" style="color: gold;"></i>
                                    <i class="fa-solid fa-star" style="color: gold;"></i>
                                    <i class="fa-solid fa-star" style="color: gold;"></i>
                                    <i class="fa-regular fa-star"></i>
                                    <i class="fa-regular fa-star"></i>
                                </div>
                                <a class="text-decoration-none link-dark stretched-link" href="#!"></a>
                                <p class="mb-0 card-text">Motor nyaman dan irit, cocok untuk perjalanan jauh. Layanan 5 bintang!</p>
                            </div>
                                <div class="p-4 pt-0 bg-transparent card-footer border-top-0">
                                    <div class="d-flex align-items-end justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <img class="rounded-circle me-3" src="{{ asset('images/orangnew.png') }}" alt="..." />
                                            <div class="small">
                                                <div class="fw-bold">— aditya, Pelanggan Setia</div>
                                                <div class="text-muted">2 November, 2024</div>
                                            </div>
                                        </div>
                                    </div>
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
        <script src="{{ asset('js/user/scripts.js') }}"></script>
    </body>
</html>
