<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>MotoRen - Sewa Motor Praktis dan Nyaman</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
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
            color: #ff4500;
        }
    </style>
        <link href="{{ asset('css/user/styles.css') }}" rel="stylesheet" />
    </head>
    <body class="d-flex flex-column">
        <main class="flex-shrink-0">
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
                                    <form action="{{ route('logout') }}" method="POST" class="">
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
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="mb-5 text-center">
                        <h1 class="fw-bolder">Pertanyaan yang Sering Diajukan</h1>
                        <p class="mb-0 lead fw-normal text-muted">Apa yang bisa kami bantu?</p>
                    </div>
                    <div class="row gx-5">
                        <div class="col-xl-8">
                            <!-- FAQ Accordion 1-->
                            <h2 class="mb-3 fw-bolder">Cara sewa Rental Motor</h2>
                            <div class="mb-5 accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Bagaimana cara memesan sewa motor di rental di kami #1</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Anda dapat memesan mobil dalam beberapa langkah mudah berikut:</strong>
                                            <ol>
                                                <li>Pilih kota/wilayah rental, tanggal rental, durasi rental, dan waktu jemput.</li>
                                                <li>Pilih tipe motor dan penyedia rental.</li>
                                                <li>Isi detail kontak atau data wisatawan jika Anda pesan untuk orang lain.</li>
                                                <li>Isi detail rental.</li>
                                                <li>Pastikan bahwa semua detail telah diisi dengan benar, kemudian pilih metode pembayaran.</li>
                                                <li>Setelah pembayaran Anda diverifikasi, Anda akan menerima pesan sukses di rental motor Anda dari wabsite.</li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingTwo"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Apa saja fasilitas yang didapatkan #2</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>Anda akan dapat fasilitas berikut ini:</strong>
                                            <ol>
                                                <li>2 jas hujan gratis.</li>
                                                <li>2 helm full face.</li>
                                                <li>Bensin full ketika penyewaan.</li>
                                                <li>Motor dapat diantarkan langsung ke penyewa.</li>
                                            </ol>
                                        </div>

                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingThree"><button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">Mengapa saya harus memesan rental motor di tempat kami #3</button></h3>
                                    <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                        <p>Memesan sewa motor sebelum perjalanan melalui website kami akan mengurangi kerepotan, juga menghemat waktu dan uang Anda. Anda bisa memilih dari berbagai jenis motor yang tersedia dari penyedia rental yang terpercaya untuk berkeliling kota. Pesan motor yang cocok dengan kebutuhan Anda dan Anda akan menikmati konfirmasi langsung dengan harga terbaik.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- FAQ Accordion 2-->
                            <h2 class="mb-3 fw-bolder">kebijakan pembatalan sewa rental motor</h2>
                            <div class="mb-5 accordion mb-xl-0" id="accordionExample2">
                                <div class="accordion-item">
                                    <h3 class="accordion-header" id="headingOne"><button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne2" aria-expanded="true" aria-controls="collapseOne2">Pembatalan Sebelum Tanggal Sewa #1</button></h3>
                                    <div class="accordion-collapse collapse show" id="collapseOne2" aria-labelledby="headingOne" data-bs-parent="#accordionExample2">
                                                <ol>
                                                    <li>Pembatalan yang dilakukan lebih dari 48 jam sebelum waktu penjemputan akan dikenakan biaya administrasi sebesar 10% dari total biaya sewa.</li>
                                                    <li>Pembatalan yang dilakukan dalam waktu kurang dari 48 jam sebelum waktu penjemputan akan dikenakan biaya pembatalan sebesar 50% dari total biaya sewa.</li>
                                                </ol>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                        <div class="col-xl-4">
                            <div class="border-0 card bg-light mt-xl-5">
                                <div class="p-4 card-body py-lg-5">
                                    <div class="d-flex align-items-center justify-content-center">
                                        <div class="text-center">
                                            <div class="h6 fw-bolder">Apakah ada pertanyaan yang belum terjawab?</div>
                                            <p class="mb-4 text-muted">
                                                Hubunggi Kami
                                                <br />
                                                <a href="#!">MotoRen@gmail.com</a>
                                            </p>
                                            <div class="h6 fw-bolder">Follow Media Social</div>
                                            <a class="px-2 fs-5 link-primary" href="#!"><i class="bi-twitter"></i></a>
                                            <a class="px-2 fs-5 link-primary" href="#!"><i class="bi-facebook"></i></a>
                                            <a class="px-2 fs-5 link-primary" href="#!"><i class="bi-linkedin"></i></a>
                                            <a class="px-2 fs-5 link-primary" href="#!"><i class="bi-youtube"></i></a>
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
