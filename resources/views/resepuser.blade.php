<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ogani | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b50aa2221.js" crossorigin="anonymous"></script>

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- juka di kecilin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>Indonesia</div>
            </div>
            <div class="header__top__right__auth">
                <a href="{{ route('logout')}}"><i class="fa fa-user"></i> Logout</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>

                <li class="active"><a href="{{ route('resep') }}">Halaman Utama</a></li>
                <li><a href="{{ route('resepuser') }}">Semua resep</a></li>
                <li><a href="#">Kategori Usia</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">6-8 Bulan</a></li>
                        <li><a href="./shoping-cart.html">9-12 Bulan</a></li>
                        <li><a href="./checkout.html">13-18 Bulan</a></li>
                        <li><a href="./blog-details.html">19-24 Bulan</a></li>
                    </ul>
                    <li><a href="{{ route('favorit')}}">Favorit</a></li>
                    <li><a href="{{ route('riwayat')}}">Riwayat</a></li>
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
                            <li ><a href="{{ route('orangtua') }}">Halaman Utama</a></li>
                            <li class="active"><a href="{{ route('resepuser' ) }}">Semua resep</a></li>
                            <li ><a href="{{ route('favorit')}}">Favorit</a></li>
                            <li><a href="{{ route('riwayat')}}">Riwayat</a></li>

                        </ul>
                    </nav>
                </div>
        </div>
    </header>
    <!-- Header End -->
    <!-- menu aplikasi -->

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
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
                            <li><a href="{{ route('resepuser' )}}"></a>Semua Resep</li>
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
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Resep MPASI</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.html">Halaman Semua Resep</a>
                            <span>Resep MPASI</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Section Begin -->
    <section class="product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="section-title">Resep MPASI</h2>
                    <div class="filter__item">
                        <div class="filter__found">
                            <h6><span>{{ $resep->count() }}</span> Resep MPASI ditemukan</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="products">
                @foreach($resep as $rsp)
                <div class="col-lg-4 col-md-6 col-sm-6 mix {{ $rsp->kategori }}">
                    <div class="card">
                        <div class="card-body">
                            <a href="{{ route('detail_resep', $rsp->id_resep) }}" class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="{{ $rsp->gambar }}">
                                </div>
                                <div class="product__item__text">
                                    <h6>{{ $rsp->nama_resep }}</h6>
                                    <p>Usia: {{ $rsp->usia }}</p>
                                    <p>Kategori: {{ $rsp->kategori }}</p>
                                </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
    </section>
    <!-- Product Section End -->



    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>
