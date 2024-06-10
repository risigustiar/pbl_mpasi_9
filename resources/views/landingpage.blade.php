<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BabyBites</title>
    <link rel="icon" href="{{ asset('img/logo-web.PNG') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700&display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/SimpleLightbox/2.1.0/simpleLightbox.min.css">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/styles_footer.css') }}">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
    <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">

    <style>
        body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: 'Merriweather Sans', sans-serif;
            overflow-x: hidden;
        }
        .masthead {
            background-image: url('{{ asset("img/pl.png") }}');
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
            color: #7fad39;

        }

        .navbar-judul  {
            font-family: "Poetsen One", sans-serif;
            font-weight: 400;
            font-style: normal;
            color: #7fad39;
            font-size: 30px;
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
            background-color: #1d387b36;
        }
        /* panduan */
        .divider {
        border-top: 1px solid #fff;
        width: 100%;
        margin: 0px auto;
    }
    .h2{
    font-family: "Poetsen One", sans-serif;
    font-weight: 400;
    font-style: normal;
    }
    .text-black {
        color: #000 !important;
    }
    .text-black-75 {
        color: rgba(0, 0, 0, 0.75) !important;
    }
    .carousel-item img {
        animation: fadeInUp 1s both;
        border-radius: 8px;
        border: #7fad39 3px solid;
    }
    .carousel-control-prev-icon, .carousel-control-next-icon {
        background-color: rgba(0, 0, 0, 0.5);
    }
    .custom-carousel-control {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 30px;
        height: 50px;
        z-index: 5;
    }
    .carousel-control-prev.custom-carousel-control {
        left: -60px;
    }
    .carousel-control-next.custom-carousel-control {
        right: -60px;
    }
    .nav-link.active {
    color: #3a1b5e; /* Change this color to your desired active color */
    }

    </style>
</head>
<body id="page-top">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top navbar-blur" id="mainNav">
        <div class="container px-4 px-lg-5">
            <p class="navbar-judul">BabyBites</p>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link text-black" href="#masthead" style="font-family: poetsen one">Home</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="#about" style="font-family: poetsen one">Panduan MPASI</a></li>
                    <li class="nav-item"><a class="nav-link text-black" href="#portfolio" style="font-family: poetsen one">Anggota Tim</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Masthead -->
    <header class="masthead" id="masthead">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 align-items-center justify-content-center text-center">
                <div class="col-lg-8 align-self-end">
                    <h1 style=" border:#130505 3px; color: #f6f8f3; font-family: poetsen one; ">Selamat Datang Di Aplikasi MPASI BabyBites</h1>
                    <hr class="divider" />
                </div>
                <div class="col-lg-8 align-self-baseline">
                    <a class="btn btn-light btn-xl" href="{{ route('login') }} " style="font-family: poetsen one, sens-serif;">Masuk</a>
                </div>
            </div>
        </div>
    </header>

    <!-- About -->
    <section class="page-section bg-white" id="about">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="text-section bg-white p-4 rounded shadow animated fadeInDown">
                        <h2 style="font-family: poetsen one, sens-serif; ">Tumbuhkan Cinta Lewat MPASI : Baca panduannya, Sehatkan Si Kecil</h2>
                        <hr class="divider divider-light" />

                    <div id="panduanCarousel" class="carousel slide" data-bs-ride="carousel ">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('img/panduan/panduan1.jpg') }}" class="d-block w-100" alt="Panduan 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/panduan/panduan2.jpg') }}" class="d-block w-100" alt="Panduan 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/panduan/panduan3.jpg') }}" class="d-block w-100" alt="Panduan 3">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/panduan/panduan4.jpg') }}" class="d-block w-100" alt="Panduan 4">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/panduan/panduan5.jpg') }}" class="d-block w-100" alt="Panduan 5">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('img/panduan/panduan6.jpg') }}" class="d-block w-100" alt="Panduan 6">
                            </div>
                        </div>
                        <button class="carousel-control-prev custom-carousel-control" type="button" data-bs-target="#panduanCarousel" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next custom-carousel-control" type="button" data-bs-target="#panduanCarousel" data-bs-slide="next">
                            <span class="carousel-control-next-icon bg-dark rounded-circle p-2" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>

    <!-- Portfolio -->
    <section id="portfolio" class="page-section">
        <div class="container-fluid p-0">
            <div class="row g-0">
                <div class="col-lg-4 col-sm-6">
                    <a class="portfolio-box" href="{{ asset('assets/img/portfolio/fullsize/1.png') }}" title="Analyst">
                        <img class="img-fluid" src="{{ asset('assets/img/portfolio/fullsize/1.png') }}" alt="Project Image">
                        <div class="portfolio-box-caption">
                            <div class="project-category text-white-50">4342301043</div>
                            <div class="project-name" >Shakila Aswaliyah</div>
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
    <div class="container" id="contact">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
     <script>
        $(document).ready(function() {
    $(window).on('scroll', function() {
        var scrollPos = $(document).scrollTop();
        $('.nav-link').each(function() {
            var currLink = $(this);
            var refElement = $(currLink.attr("href"));
            if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
                $('.nav-link').removeClass("active");
                currLink.addClass("active");
            }
            else {
                currLink.removeClass("active");
            }
        });
    });
});
     </script>
</body>
</html>
