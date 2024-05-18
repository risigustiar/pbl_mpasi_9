<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BabyBit | Home</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }} " type="text/css">
    <link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">

    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">



</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- INI HALAMAN NAV BAR KALO DI KECILIN -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="{{ asset('img/language.png') }}" alt="">
                <div>Indonesia</div>
            </div>
            <div class="header__top__right__auth">
                <a href="{{ route('logout') }}"><i class="fa fa-user"></i> Logout</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="#">Halaman Utama</a></li>
                <li><a href="{{ route('resepuser') }}">Semua resep</a></li>
                    <li><a href="{{ route('favorit')}}">Favorit</a></li>
                    <li><a href="{{ route('riwayat')}}">Riwayat</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> PBL@gmail.com</li>
                <li>Project PBL APLIKASI MPASI</li>
            </ul>
        </div>
    </div>
    <!-- NAVBAR End -->

    <!-- Header YANG DI ATAS  -->
    <header class="header ">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> PBL@Gmail.com</li>
                                <li>PROJECT PBL APLIKASI MPASI</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                            </div>
                            |
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                            |
                                <div>Indonesia</div>
                            </div>
                            |
                            <div class="header__top__right__auth">
                                <a href="{{ route('logout') }}"><i class="fa fa-user"></i> Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active" ><a href="{{ route('orangtua') }}">Halaman Utama</a></li>
                            <li ><a href="{{ route('resepuser' ) }}">Semua resep</a></li>
                            <li ><a href="{{ route('favorit')}}">Favorit</a></li>
                            <li><a href="{{ route('riwayat')}}">Riwayat</a></li>

                        </ul>
                    </nav>
                </div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Bagian Menu aplikasi -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Menu Aplikasi</span>
                        </div>
                        <ul>
                            <li><a href="{{ route('orangtua')}}">Halaman Utama</a></li>
                            <li><a href="{{ route('resepuser')}}">Semua Resep</a></li>
                            <li><a href="{{ route('riwayat')}}">Riwayat</a></li>
                            <li><a href="{{ route('favorit')}}">Favorit</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="{{ route('cari_resep')}}" method="get">
                                <div class="hero__search__categories">
                                    Resep MPASI
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="Cari Resep MPASI" name="cari">
                                <button type="submit" class="site-btn">Cari</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="#">
                            </div>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="{{ asset('img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>HARAP LIHAT !!!</span>
                            <h2>PANDUAN <br />MPASI</h2>
                            <p>Disarankan Untuk Melihat Panduan MPASI!</p>
                            <a href="{{ route('panduan')}}" class="primary-btn">LIHAT PANDUAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sampai dengan panduan MPASI -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/categories/cat-1.jpg') }}">
                            <h5><a href="#">Fresh Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/categories/cat-2.jpg') }}">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/categories/cat-3.jpg') }}">
                            <h5><a href="#">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/categories/cat-4.jpg') }}">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg" data-setbg="{{ asset('img/categories/cat-5.jpg') }}">
                            <h5><a href="#">drink fruits</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Rekomendai Resep MPASI Kemenkes</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <li data-filter=".oranges">6-8 Bulan</li>
                            <li data-filter=".fresh-meat">9-12 Bulan</li>
                            <li data-filter=".vegetables">13-18 Bulan</li>
                            <li data-filter=".fastfood">19-24 bulan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @foreach($resep as $rsp)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix
                        <?php
                           $usia = (int)$rsp->usia;

// Tentukan kelas filter berdasarkan usia
if ($usia >= 6 && $usia <= 8) {
    echo 'oranges';
} elseif ($usia >= 9 && $usia <= 12) {
    echo 'fresh-meat';
} elseif ($usia >= 13 && $usia <= 18) {
    echo 'vegetables';
} else {
    echo 'fastfood';
}
                        ?>">
                        <a href="{{ route('detail_resep', $rsp->id_resep) }}">
                        <div class="featured__item">
                            <div class="featured__item__pic set-bg" data-setbg="{{ asset($rsp->gambar) }}">
                            </div>
                            <div class="featured__item__text">
                                <h6><a href="{{ route('detail_resep', $rsp->id_resep) }}">{{ $rsp->nama_resep }}</a></h6>
                                <h5>{{ $rsp->usia }} bulan</h5>
                            </div>
                        </div>
                    </div>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    </section>
    <!-- Featured Section End -->

    <!-- Banner Begin -->
    <div class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('img/banner/banner-1.jpg') }}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6">
                    <div class="banner__pic">
                        <img src="{{ asset('img/banner/banner-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Banner End -->


    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>



</body>

</html>
