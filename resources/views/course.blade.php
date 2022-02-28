<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Scrolling Nav - Start Bootstrap Template</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    {{-- {{asset('')}} --}}
    <link href="{{asset('css/styles.css')}}" rel="stylesheet" />
    <link href="{{asset('css/coursestyles.css')}}" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
        <div class="container px-4">
            <a class="navbar-brand" href="/home">Start Bootstrap</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        @if (Session::get('id_user'))
                        <li class="nav-link">Welcome | {{Session::get('fullname')}}</li>
                        <li class="nav-item"><a class="nav-link" href="/user/{{Session::get('id_user')}}">User</a></li>
                        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/course/{{Session::get('id_user')}}">Course</a></li>
                        <li class="nav-item"><a class="nav-link" href="/logout">Log Out</a></li>
                        @else
                        <li class="nav-item"><a class="nav-link" href="/login">Login</a></li>
                        <li class="nav-item"><a class="nav-link" href="/home">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="/about">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="/liatcourse">Course</a></li>
                        @endif
                </ul>
            </div>
        </div>
    </nav>
    <!-- Header-->
    <header class="bg-primary bg-gradient text-white">
        <div class="container px-4 text-center">
            <h1 class="fw-bolder">Welcome to Apeh learning</h1>
            <p class="lead">Website learning dengan materi pembelajaran mengenai IT</p>
            <a class="btn btn-lg btn-light" href="#hero">Mulai Scroll</a>
        </div>
    </header>
    <section id="hero" class="d-flex align-items-center">

        <div class="row icon-boxes">
            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="200">
                <div class="icon-box">
                    <div class="icon"><i class="ri-stack-line"></i></div>
                    <h4 class="title"><a>Cloud Computing</a></h4>
                    <p class="description">Cloud Computing (komputasi awan) adalah metode penyampaian
                        berbagai layanan melalui internet. Sumber daya yang dimaksud contohnya adalah aplikasi
                        seperti penyimpanan data, server, database, jaringan, dan perangkat lunak.
                        Daripada menyimpan banyak file di hard drive atau penyimpanan lokal di komputer atau
                        handphone, penyimpanan berbasis cloud memungkinkan Anda menyimpan file selama Anda
                        memiliki akses ke internet.</p>
                        @if (is_null($user->course_1))
                        <form method="POST" action="/enroll_1/{{$user->id_user}}">
                            @csrf
                            @method('patch')
                            <button type="submit">Enroll</button>
                        </form>
                        @endif
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="300">
                <div class="icon-box">
                    <div class="icon"><i class="ri-palette-line"></i></div>
                    <h4 class="title"><a>Cyber Security</a></h4>
                    <p class="description">Cyber Security adalah praktik yang bertujuan untuk melindungi
                        sebuah perangkat, jaringan, program, dan data dari segala macam serangan digital yang
                        berbahaya.
                        Praktik cyber security mencakup pemasangan firewall, backup data, multi factor
                        authentication dan lain sebagainya yang bisa mencegah cyber criminals memasuki sistem
                        Anda.</p>
                        @if (is_null($user->course_2))
                        <form method="POST" action="/enroll_2/{{$user->id_user}}">
                            @csrf
                            @method('patch')
                            <button type="submit">Enroll</button>
                        </form>
                        @endif
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="400">
                <div class="icon-box">
                    <div class="icon"><i class="ri-command-line"></i></div>
                    <h4 class="title"><a>Data Management</a></h4>
                    <p class="description">Data Management adalah proses mengolah, menyimpan,
                        mengatur, dan memelihara pusat data yang dimiliki oleh sebuah organisasi. manajemen data
                        yang efektif dapat meningkatkan efisiensi pekerjaan tim IT dan dapat memberikan
                        informasi
                        yang dibutuhkan oleh perusahaan secara cepat untuk membantu proses perancangan dan
                        pengambilan keputusan. Proses ini melibatkan kombinasi dari fungsi data management yang
                        secara kolektif bertujuan
                        untuk memastikan bahwa data dalam sistem perusahaan akurat, tersedia, dan dapat diakses.</p>
                        @if (is_null($user->course_3))
                        <form method="POST" action="/enroll_3/{{$user->id_user}}">
                            @csrf
                            @method('patch')
                            <button type="submit">Enroll</button>
                        </form>
                        @endif
                </div>
            </div>

            <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="zoom-in"
                data-aos-delay="500">
                <div class="icon-box">
                    <div class="icon"><i class="ri-fingerprint-line"></i></div>
                    <h4 class="title"><a>Networking</a></h4>
                    <p class="description">Networking adalah praktek menghubungkan dua atau lebih perangkat
                        komputer bersama-sama untuk tujuan berbagi (sharing) data serta berbagai manfaat lainnya
                        (resources). Jaringan (Networking) dibangun dengan perangkat keras komputer (hardware)
                        atau
                        fisik dan perangkat lunak komputer (software) logik.</p>
                        @if (is_null($user->course_4))
                        <form method="POST" action="/enroll_4/{{$user->id_user}}">
                            @csrf
                            @method('patch')
                            <button type="submit">Enroll</button>
                        </form>
                        @endif
                </div>
            </div>

        </div>
        </div>
    </section><!-- End Hero -->
    <!-- Footer-->
    <footer class="py-5 bg-dark">
        <div class="container px-4">
            <p class="m-0 text-center text-white">Copyright &copy; ApehLearning 2022</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>
