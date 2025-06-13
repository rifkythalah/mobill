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
                <i><a class="navbar-brand custom-font" href="{{ route('index') }}">MotoRen</a></i>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="mb-2 navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="{{ route('index')}}">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('index')}}">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('index')}}">Contact</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{ route('index')}}">FAQ</a></li>
                        @if(Auth::check() && Auth::user()->role === 'admin')
                            <li class="nav-item"><a class="nav-link"  href="{{ url('/dashboard') }}">Dashboard</a></li>           
                            @endif
                        <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
                        <div class="flex lg:justify-center lg:col-start-2">
                            <svg class="h-12 w-auto text-white lg:h-16 lg:text-[#FF2D20]" viewBox="0 0 62 65" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M61.8548 14.6253C61.8778 14.7102 61.8895 14.7978 61.8897 14.8858V28.5615C61.8898 28.737 61.8434 28.9095 61.7554 29.0614C61.6675 29.2132 61.5409 29.3392 61.3887 29.4265L49.9104 36.0351V49.1337C49.9104 49.4902 49.7209 49.8192 49.4118 49.9987L25.4519 63.7916C25.3971 63.8227 25.3372 63.8427 25.2774 63.8639C25.255 63.8714 25.2338 63.8851 25.2101 63.8913C25.0426 63.9354 24.8666 63.9354 24.6991 63.8913C24.6716 63.8838 24.6467 63.8689 24.6205 63.8589C24.5657 63.8389 24.5084 63.8215 24.456 63.7916L0.501061 49.9987C0.348882 49.9113 0.222437 49.7853 0.134469 49.6334C0.0465019 49.4816 0.000120578 49.3092 0 49.1337L0 8.10652C0 8.01678 0.0124642 7.92953 0.0348998 7.84477C0.0423783 7.8161 0.0598282 7.78993 0.0697995 7.76126C0.0884958 7.70891 0.105946 7.65531 0.133367 7.6067C0.152063 7.5743 0.179485 7.54812 0.20192 7.51821C0.230588 7.47832 0.256763 7.43719 0.290416 7.40229C0.319084 7.37362 0.356476 7.35243 0.388883 7.32751C0.425029 7.29759 0.457436 7.26518 0.498568 7.2415L12.4779 0.345059C12.6296 0.257786 12.8015 0.211853 12.9765 0.211853C13.1515 0.211853 13.3234 0.257786 13.475 0.345059L25.4531 7.2415H25.4556C25.4955 7.26643 25.5292 7.29759 25.5653 7.32626C25.5977 7.35119 25.6339 7.37362 25.6625 7.40104C25.6974 7.43719 25.7224 7.47832 25.7523 7.51821C25.7735 7.54812 25.8021 7.5743 25.8196 7.6067C25.8483 7.65656 25.8645 7.70891 25.8844 7.76126C25.8944 7.78993 25.9118 7.8161 25.9193 7.84602C25.9423 7.93096 25.954 8.01853 25.9542 8.10652V33.7317L35.9355 27.9844V14.8846C35.9355 14.7973 35.948 14.7088 35.9704 14.6253C35.9792 14.5954 35.9954 14.5692 36.0053 14.5405C36.0253 14.4882 36.0427 14.4346 36.0702 14.386C36.0888 14.3536 36.1163 14.3274 36.1375 14.2975C36.1674 14.2576 36.1923 14.2165 36.2272 14.1816C36.2559 14.1529 36.292 14.1317 36.3244 14.1068C36.3618 14.0769 36.3942 14.0445 36.4341 14.0208L48.4147 7.12434C48.5663 7.03694 48.7383 6.99094 48.9133 6.99094C49.0883 6.99094 49.2602 7.03694 49.4118 7.12434L61.3899 14.0208C61.4323 14.0457 61.4647 14.0769 61.5021 14.1055C61.5333 14.1305 61.5694 14.1529 61.5981 14.1803C61.633 14.2165 61.6579 14.2576 61.6878 14.2975C61.7103 14.3274 61.7377 14.3536 61.7551 14.386C61.7838 14.4346 61.8 14.4882 61.8199 14.5405C61.8312 14.5692 61.8474 14.5954 61.8548 14.6253ZM59.893 27.9844V16.6121L55.7013 19.0252L49.9104 22.3593V33.7317L59.8942 27.9844H59.893ZM47.9149 48.5566V37.1768L42.2187 40.4299L25.953 49.7133V61.2003L47.9149 48.5566ZM1.99677 9.83281V48.5566L23.9562 61.199V49.7145L12.4841 43.2219L12.4804 43.2194L12.4754 43.2169C12.4368 43.1945 12.4044 43.1621 12.3682 43.1347C12.3371 43.1097 12.3009 43.0898 12.2735 43.0624L12.271 43.0586C12.2386 43.0275 12.2162 42.9888 12.1887 42.9539C12.1638 42.9203 12.1339 42.8916 12.114 42.8567L12.1127 42.853C12.0903 42.8156 12.0766 42.7707 12.0604 42.7283C12.0442 42.6909 12.023 42.656 12.013 42.6161C12.0005 42.5688 11.998 42.5177 11.9931 42.4691C11.9881 42.4317 11.9781 42.3943 11.9781 42.3569V15.5801L6.18848 12.2446L1.99677 9.83281ZM12.9777 2.36177L2.99764 8.10652L12.9752 13.8513L22.9541 8.10527L12.9752 2.36177H12.9777ZM18.1678 38.2138L23.9574 34.8809V9.83281L19.7657 12.2459L13.9749 15.5801V40.6281L18.1678 38.2138ZM48.9133 9.14105L38.9344 14.8858L48.9133 20.6305L58.8909 14.8846L48.9133 9.14105ZM47.9149 22.3593L42.124 19.0252L37.9323 16.6121V27.9844L43.7219 31.3174L47.9149 33.7317V22.3593ZM24.9533 47.987L39.59 39.631L46.9065 35.4555L36.9352 29.7145L25.4544 36.3242L14.9907 42.3482L24.9533 47.987Z" fill="currentColor"/></svg>
                        </div>
                        @if (Route::has('login'))
                            <nav class="-mx-3 flex flex-1 justify-end">
                                @auth
                                    <a
                                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                    >
                                        Dashboard
                                    </a>
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
                            </nav>
                        @endif
                    </header>
                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <div class="container px-5 my-5">
            <div class="row gx-5 align-items-start">
                <!-- Gambar -->
                <div class="col-lg-6">
                    <header class="mb-4">
                        <h1 class="mb-1 fw-bolder">Vespa Gts 150</h1>
                        <div class="mb-2 text-muted fst-italic">28 Oktober, 2024</div>
                    </header>
                    <figure class="mb-4">
                        <img class="rounded img-fluid" src="{{ asset('images/creamm.png') }}" alt="Vespa Gts 150" />
                    </figure>
                </div>

                <!-- Formulir -->
                <div class="col-lg-6">
                    <div class="card" style="border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                        <div class="card-body">
                            <h5 class="mb-3 card-title">Vespa Gts 150</h5>
                            <h6 class="mb-3 card-subtitle text-primary">Rp.70.000/hari</h6>
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td>Merek</td>
                                        <td class="text-end">Vespa Matic</td>
                                    </tr>
                                    <tr>
                                        <td>Warna</td>
                                        <td class="text-end">Silver</td>
                                    </tr>
                                    <tr>
                                        <td>Bahan Bakar</td>
                                        <td class="text-end">Pertamax</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="btn btn-primary btn-lg w-100 d-flex justify-content-center align-items-center" style="gap: 8px;">
                                <i class="bi bi-whatsapp"></i> Sewa Motor
                            </a>
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
                <a class="mt-auto btn btn-primary custom-button" href="{{ route('index2') }}">Kembali</a>
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
