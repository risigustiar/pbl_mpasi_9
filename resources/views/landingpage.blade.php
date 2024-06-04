<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BabyBites</title>
    <link rel="icon" href="{{ asset('img/logo-web.png') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_footer.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Merriweather Sans', sans-serif;
            overflow-x: hidden;
        }
        .masthead {
            background-image: url('{{ asset("img/pl.jpg") }}');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
            animation: fadeIn 2s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        .masthead h1 {
            margin-bottom: 20px;
            font-weight: bold;
            font-size: 3rem;
            animation: slideIn 1.5s ease-in-out;
        }
        @keyframes slideIn {
            from { transform: translateY(-50px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .masthead .btn-xl {
            animation: bounceIn 2s infinite;
        }
        @keyframes bounceIn {
            0%, 20%, 50%, 80%, 100% { transform: translateY(0); }
            40% { transform: translateY(-20px); }
            60% { transform: translateY(-10px); }
        }
        .navbar-blur {
            backdrop-filter: blur(10px);
            background-color: rgba(0, 123, 255, 0.5);
            transition: background-color 0.3s;
        }
        .navbar-nav .nav-link {
            font-size: 1.2rem;
            color: #fff;
            transition: color 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: rgb(159,217,102);
        }
        .navbar-brand {
            font-size: 1.5rem;
            color: #fff;
            transition: color 0.3s;
        }
        .navbar-brand:hover {
            color: ,217,102c00;
        }
        .divider {
            border-top: 1px solid #fff;
            width: 60%;
            margin: 20px auto;
        }
        .btn-xl {
            font-size: 1.25rem;
            padding: 1rem 2rem;
            transition: background-color 0.3s, transform 0.3s;
        }
        .btn-xl:hover {
            background-color: #9fd9;
            transform: scale(1.05);
        }
        .page-section {
            padding: 60px 0;
        }
        .portfolio-box {
            position: relative;
            display: block;
            max-width: 100%;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .portfolio-box img {
            width: 100%;
            height: auto;
        }
        .portfolio-box:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }
        .portfolio-box-caption {
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 20px;
            color: white;
            transition: background-color 0.3s;
        }
        .portfolio-box-caption:hover {
            background-color: #9fd966;
        }
    </style>
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-blur" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top" >BabyBites</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link text-black" href="#about">Panduan MPASI</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="#portfolio">Anggota Tim</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-black mb-5">Selamat Datang di Aplikasi MPASI BabyBites</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a class="btn btn-light btn-xl" href="{{ route('login') }}">Masuk</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section class="page-section bg-white" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-black mt-0">Panduan MPASI</h2>
                    <hr class="divider divider-light" />
                    <p class="text-black-75 mb-4">Lihat panduan agar pemberian MPASI dapat lebih tepat  </p>

                    <div class="container-fluid">
                        <div class="row">
                            <div class="contaner-fluid">
                                <img src="{{ asset('img/panduan/panduan1.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="contaner-fluid">
                                <img src="{{ asset('img/panduan/panduan2.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-lg-12"><hr>
                            <img src="{{ asset('img/panduan/panduan3.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-lg-12">
                                <img src="{{ asset('img/panduan/panduan4.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-lg-12">
                                <img src="{{ asset('img/panduan/panduan5.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-lg-12">
                                <img src="{{ asset('img/panduan/panduan6.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Portfolio -->
    <section id="portfolio" class="page-section">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/1.png') }}" title="Analyst">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/1.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">4342301043</div>
                            <div class="project-name">Shakila Aswaliyah</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/2.png') }}" title="Tester">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/2.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">4342301044</div>
                            <div class="project-name">Muhammad Ramdani</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/3.png') }}" title="Analyst">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/3.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">4342301036</div>
                            <div class="project-name">Grecia Joy Manalu</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/4.png') }}" title="Desainer">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/4.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">4342301038</div>
                            <div class="project-name">Muhammad Hanif</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/5.png') }}" title="Frontend">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/5.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">4342301062</div>
                            <div class="project-name">Juan Sahala Hutapea</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/6.png') }}" title="Backend">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/6.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">4342301033</div>
                            <div class="project-name">Risi Gustiar</div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer-->
    <x-footer />
    <div class="container">
    @yield('content')
     </div>

    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <!-- SimpleLightbox plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- SB Forms JS-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>
</html>
