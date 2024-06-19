<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home | BabyBites</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/2b50aa2221.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<!-- Favicon -->
<link rel="icon" href="{{ asset('img/logo-web.PNG') }}">

<!-- Css Styles -->
<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/elegant-icons.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/nice-select.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/jquery-ui.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/slicknav.min.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('css/styles_footer.css') }}" type="text/css">

<!-- External CSS -->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
<link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slicknav/1.0.10/slicknav.min.css" integrity="sha384-fZstJpvlsbX1v6r7HVzMhvfZOk0c7UN7++HiB6gIigb1zDHptNe7VzcdVS6Bd0Un" crossorigin="anonymous">


</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>



    {{-- header --}}
   <x-header />

   <div class="container">
       @yield('content')
   </div>
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
                    <div class="hero__item set-bg" data-setbg="{{ asset('img/hero/banner.jpeg') }}">
                        <div class="hero__text">
                            <h2>Tumbuhkan Cinta Lewat MPASI  <br />Baca panduannya, Sehatkan Si Kecil</h2>
                            <a href="{{ route('panduan')}}" class="primary-btn">LIHAT PANDUAN</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- sampai dengan panduan MPASI -->



    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Rekomendasi Resep MPASI</h2>
                    </div>
                    <div class="featured__controls">
                        <ul>
                            <li class="active" data-filter="*">Semua</li>
                            <li data-filter=".oranges">6-8 Bulan</li>
                            <li data-filter=".fresh-meat">9-11 Bulan</li>
                            <li data-filter=".vegetables">12-23 Bulan</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row featured__filter">
                @if($resep->isEmpty())
                    <div class="col-lg-12" style="text-align: center;">
                        <p>Tidak ada resep MPASI tersedia saat ini</p>
                    </div>
                @else
                    @foreach($resep as $rsp)
                        <div class="col-lg-3 col-md-4 col-sm-6 mix
                            <?php
                               $usia = (int)$rsp->usia;

                               // Tentukan kelas filter berdasarkan usia
                               if ($usia >= 6 && $usia <= 8) {
                                   echo 'oranges';
                               } elseif ($usia >= 9 && $usia <= 11) {
                                   echo 'fresh-meat';
                               } elseif ($usia >= 12 && $usia <= 23) {
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
                            </a>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    </section>

    <!-- Featured Section End -->


    <!-- Footer-->
    <x-footer />
    <div class="container">
    @yield('content')
     </div>

    <!-- Js Plugins -->
    <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/jquery.slicknav.js') }}"></script>
    <script src="{{ asset('js/mixitup.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>

    <script>
        function confirmLogout() {
            Swal.fire({
                title: 'Apakah anda yakin ingin keluar?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, keluar',
                cancelButtonText: 'Tidak'
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        title: ' Berhasil keluar!',
                        text: 'Anda akan keluar dari akun Anda.',
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



</body>

</html>
