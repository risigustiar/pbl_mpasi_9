<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Riwayat | BabyBites</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2b50aa2221.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

    <!-- Css Styles -->
    <link rel="icon" href="{{ asset("img/logo-web.PNG") }}">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <!-- footer -->
  <link rel="stylesheet" href="{{ asset('css/styles_footer.css') }}">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
  <link href="http://fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">
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
                            <li><a href="{{ route('resepuser' )}}">Semua Resep</a></li>
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
                            <a href="./index.html">Halaman Riwayat</a>
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
                    <h2 class="section-title">Riwayat Resep MPASI</h2>
                    <div class="filter__item">
                        <div class="filter__found">
                            <h6><span>{{ $riwayat_resep->count() }}</span> Resep MPASI Di Favorit</h6>
                        </div>
                    </div>
                </div>
            </div>

                <!-- Simple Tables -->
                <div class="card">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-dark">Riwayat Resep</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th><strong><span style="font-size: 1.2em;">N0</span></strong></th>
                                    <th><strong><span style="font-size: 1.2em;">Nama Resep</span></strong></th>
                                    <th><strong><span style="font-size: 1.2em;">Usia</span></strong></th>
                                    <th><strong><span style="font-size: 1.2em;">Tanggal</span></strong></th>
                                    <th><strong><span style="font-size: 1.2em;">foto</span></strong></th>
                                    <th><strong><span style="font-size: 1.2em;">Kelola</span></strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($riwayat_resep->isEmpty())
                                    <tr>
                                        <td colspan="6" class="text-center">Tidak ada riwayat resep</td>
                                    </tr>
                                @else
                                    @foreach($riwayat_resep as $resep)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td><strong>{{ $resep->resep->nama_resep }}</strong></td>
                                            <td><strong>{{ $resep->resep->usia }}</strong></td>
                                            <td><strong>{{ $resep->tanggal }}</strong></td>
                                            <td style="max-width: 120px;">
                                                <img src="{{ asset($resep->resep->gambar) }}" alt="#" class="img-fluid" style="max-width: 100%;" width="100px">
                                            </td>
                                            <td>
                                                <a href="{{ route('detail_resep', $resep->id_resep) }}" class="btn btn-sm btn-primary">Detail</a> |
                                                <a href="{{ route('hapus_riwayat', $resep->id_resep) }}" class="btn btn-sm btn-danger delete-button">Hapus</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
              </div>
            </div>
            <!--Row-->
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
            const deleteButtons = document.querySelectorAll('.delete-button');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function (event) {
                    event.preventDefault();

                    Swal.fire({
                        title: 'Apakah Anda yakin?',
                        text: "Anda tidak akan dapat mengembalikan ini!",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!',
                        cancelButtonText: 'Batal'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = this.href;
                        }
                    });
                });
            });
        });
    </script>



</body>

</html>
