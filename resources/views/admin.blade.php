<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('img/logo-web.PNG') }}" rel="icon">
  <title>BabyBites - Dashboard</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <script src="https://kit.fontawesome.com/b04c2e8e37.js" crossorigin="anonymous"></script>
  <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poetsen+One&display=swap" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('img/logo-web.PNG') }}" style="border-radius: 5px">
        </div>
        <div class="sidebar-brand-text mx-3">BabyBites</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <hr class="sidebar-divider">
      <div class="sidebar-heading">
        Menu Admin
      </div>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
           aria-expanded="true" aria-controls="collapseBootstrap" title="Halaman Kelola">
          <i class="far fa-fw fa-window-maximize"></i>
          <span>Halaman Kelola</span>
        </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Kelola Resep</h6>
            <a class="collapse-item" href="{{ route('resep') }}">Resep MPASI</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
           aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Cek Aktivitas Pengguna</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="{{ route('riwayat_admin') }}">Riwayat</a>
          </div>
        </div>
      </li>
      <hr class="sidebar-divider">
      <div class="version" id="version-ruangadmin"></div>
    </ul>
    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">
      <div id="content">
        <!-- TopBar -->
        <nav class="navbar navbar-expand navbar-light bg-navbar topbar mb-4 static-top">
          <button id="sidebarToggleTop" class="btn btn-link rounded-circle mr-3">
            <i class="fa fa-bars"></i>
          </button>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item dropdown no-arrow">
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                   aria-labelledby="searchDropdown">
              </div>
            </li>
            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                 aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('img/profil/profil.webp') }}" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Admin</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Keluar
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->

        <!-- isi dasbord -->
        <div class="container">
          <h1 class="main-heading text-center animate__animated animate__fadeInDown"><i class="fas fa-home"></i> Selamat Datang Admin</h1>
          <div class="subtext text-center">
            <p class="animate__animated animate__fadeInUp animate__delay-1s"><i class="fas fa-smile"></i> Selamat datang di dashboard admin kami.</p>
            <p class="animate__animated animate__fadeInUp animate__delay-2s"><i class="fas fa-utensils"></i> Di sini, Anda memiliki akses penuh untuk mengelola resep MPASI seperti mengedit, menambahkan, dan menghapus resep.</p>
            <p class="animate__animated animate__fadeInUp animate__delay-3s"><i class="fas fa-history"></i> Anda juga dapat melihat aktivitas riwayat resep pengguna.</p>
            <p class="animate__animated animate__fadeInUp animate__delay-4s"><i class="fas fa-thumbs-up"></i> Terima Kasih.</p>
          </div>
        </div>
        <!-- isi dasbord end -->

        <!-- Modal Logout -->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
             aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Tunggu !</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p>Apakah Kamu Yakin Ingin keluar?</p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="{{ route('logout') }}" class="btn btn-primary">Keluar</a>
              </div>
            </div>
          </div>
        </div>
        <!-- Modal Logout end -->

      </div>
    </div>
  </div>

  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>
  <script src="{{ asset('js/ruang-admin.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
</body>

</html>
