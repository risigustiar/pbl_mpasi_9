<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Landing-page MPASI</title>
        <!-- Favicon-->
        <link rel="icon" href="{{ asset("img/logo-web.png") }}">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <link href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css" rel="stylesheet" />
        <link href="css/styles.css" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/styles_footer.css') }}">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
        <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BabyBite MPASI App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
        }
        .masthead {
            background-image: url('{{ asset("assets/img/1.png") }}');
            background-size: cover;
            background-position: center;
            color: white;
            text-align: center;
            height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }
        .masthead h1 {
            margin-bottom: 20px;
        }
        .card {
            background-color: #003b46;
            border: none;
            border-radius: 10px;
        }
        .navbar-nav .nav-link {
            font-size: 22px;
            color: #733cea;
            transition: all 0.3s ease;
        }
        .navbar-nav .nav-link:hover {
            color: #007bff;
        }
        .navbar-brand {
            font-size: 24px;
            color: #7827f3;
        }
        .navbar-brand:hover {
            color: #007bff;
        }
        .navbar-blur {
            backdrop-filter: blur(10px);
            background-color: rgba(0, 123, 255, 0.5);
        }
        .divider {
            border-top: 1px solid #fff;
            width: 60%;
            margin: 20px auto;
        }
        .btn-xl {
            font-size: 1.25rem;
            padding: 1rem 2rem;
        }
        .page-section {
            padding: 60px 0;
        }
        .portfolio-box {
            position: relative;
            display: block;
            max-width: 100%;
        }
        .portfolio-box img {
            width: 100%;
            height: auto;
        }
        .portfolio-box-caption {
            background-color: rgba(0, 0, 0, 0.7);
            position: absolute;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 20px;
            color: white;
        }
    </style>
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-blur" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="#page-top">BabyBite</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#about">Panduan MPASI</a></li>
                    <li class="nav-item"><a class="nav-link" href="#portfolio">Anggota Tim</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 class="text-white mb-5 display-4 font-weight-bold">Selamat Datang Di Aplikasi MPASI BabyBite</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a class="btn btn-dark btn-xl" href="{{ route('login') }}">Masuk</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section class="page-section bg-primary" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-8 text-center">
                    <h2 class="text-white mt-0">Panduan MPASI</h2>
                    <hr class="divider divider-light" />
                    <p class="text-white-75 mb-4">Agar pemberian MPASI lebih tepat, harap lihat panduan kami.</p>
                    <a class="btn btn-light btn-xl" href="#services">Tim Aplikasi</a>
                    <div class="card g-lg-2 mt-4">
                        <div class="row">
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/panduan1.jpg') }}" alt="" class="img-fluid w-100">
                            </div>
                            <div class="col-lg-6">
                                <img src="{{ asset('assets/img/panduan2.jpg') }}" alt="" class="img-fluid w-100">
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
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/1.png') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/1.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Analysis</div>
                            <div class="project-name">Kila</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/2.png') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/2.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Analysis</div>
                            <div class="project-name">Muhammad Ramdhani</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/3.png') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/3.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Analysis</div>
                            <div class="project-name">Joy</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/4.png') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/4.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Design</div>
                            <div class="project-name">Hanif</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/5.png') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/5.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">Frontend</div>
                            <div class="project-name">Juan</div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/6.png') }}" title="Project Name">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/6.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption p-3">
                            <div class="project-category text-white-50">Backend</div>
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
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <!-- * *                               SB Forms JS                               * *-->
        <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
        <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
    </body>
</html>
