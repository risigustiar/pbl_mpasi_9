<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Favorit | BabyBit</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b50aa2221.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <!-- footer -->
  <link rel="stylesheet" href="{{ asset('css/styles_footer.css') }}">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">


    <!-- Css Styles -->
    <link rel="icon" href="{{ asset("img/logo-web.png") }}">
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

    <!-- juka di kecilin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/" alt=""></a>
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

    {{-- header --}}
   <x-header />

   <div class="container">
       @yield('content')
   </div>
    <!-- Header End -->

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
                            <li><a href="{{ route('orangtua') }}">Halaman Utama</a></li>
                            <li><a href="{{ route('resepuser' )}}"></a>Semua Resep</li>
                            <li><a href="{{ route('riwayat')}}">Riwayat</a></li>
                            <li ><a href="{{ route('favorit')}}">Favorit</a></li>

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
                            <a href="./index.html">Halaman Favorit</a>
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
                            <h6><span>{{ $favoritResep->count() }}</span> Resep MPASI ditemukan</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" id="products">
                @foreach($favoritResep as $favorit)
                    <div class="col-lg-4 col-md-6 col-sm-6 mix fresh-meat" id="favorit">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-header">
                                    <div class="card-title">
                                        <span class="card-date">
                                            <h6 style="color: #000000; font-weight: bold; display: inline-block; margin-right: 10px; margin-bottom: 0; background-color: #f2dbdb; padding: 5px 10px;">Ditambahkan Pada : {{ $favorit->tanggal }}</h6>
                                        </span>
                                    </div>
                                    <a href="{{ route('detail_resep', $favorit->id_resep)}}" class="product__item">
                                        <div class="product__item__pic" style="background-image: url('{{ $favorit->resep->gambar }}');"></div>
                                        <div class="product__item__text">
                                            <h4>{{ $favorit->resep->nama_resep }}</h4>
                                            <div>
                                                <p>Usia: {{ $favorit->resep->usia }}</p>
                                                <form class="favoritForm" action="{{ route('hapus_favorit', $favorit->id_resep) }}" method="POST">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="background-color: rgba(255, 0, 0, 0.8); border: none; border-radius: 5px; color: white; padding: 3px 5px; cursor: pointer;">
                                                        <i class="fa-solid fa-trash" style="margin-right: 5px;"></i> Hapus
                                                    </button>

                                                </form>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Product Section End -->
    <!-- Footer-->
    <x-footer />
    <div class="container">
    @yield('content')
     </div>



    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script>
        // This script will increment the value of i when a new favorit is added
        var i = {{ count($favoritResep) }};
    </script>

<script>
    function confirmLogout() {
        Swal.fire({
            title: 'Apakah anda yakin ingin logout?',
            icon: 'question',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout',
            cancelButtonText: 'Tidak'
        }).then((result) => {
            if (result.isConfirmed) {
                Swal.fire({
                    title: 'Logout Berhasil!',
                    text: 'Anda akan logout dari akun Anda.',
                    icon: 'success',
                    timer: 2000,
                    timerProgressBar: true,
                    showConfirmButton: false
                });
                setTimeout(function() {
                    window.location.href = "{{ route('logout') }}";
                }, 2000);
            }
        });
    }
</script>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const forms = document.querySelectorAll('.favoritForm');
        forms.forEach(form => {
            form.addEventListener('submit', function (event) {
                event.preventDefault();
                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>

</body>

</html>
