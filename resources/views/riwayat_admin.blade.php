<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo-web.PNG" rel="icon">
  <title>BabyBites | Riwayat Admin</title><link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/b04c2e8e37.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="{{ asset('css/style_modal.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body id="page-top">
    {{-- header --}}
    <x-header_admin />

    <div class="container">
        @yield('content')
    </div>
     <!-- Header End -->

        {{-- isi dasbord --}}

        <section class="product spad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="filter__item">
                            <div class="filter__found">
                                <h6><span>{{ $riwayat_admin->count() }}</span> Resep MPASI Di Riwayat</h6>
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
                                    </tr>
                                </thead>
                                <tbody>
                                    @if($riwayat_admin->isEmpty())
                                        <tr>
                                            <td colspan="5" class="text-center">Tidak ada riwayat Resep Orangtua</td>
                                        </tr>
                                    @else
                                        @foreach($riwayat_admin as $resep)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><strong>{{ $resep->resep->nama_resep }}</strong></td>
                                                <td><strong>{{ $resep->resep->usia }}</strong></td>
                                                <td><strong>{{ $resep->tanggal }}</strong></td>
                                                <td style="max-width: 120px;">
                                                    <img src="{{ asset($resep->resep->gambar) }}" alt="#" class="img-fluid" style="max-width: 100%;" width="100px">
                                                </td>
                                            </tr>
                                        @endforeach
                                    @endif
                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer"></div>
                    </div>


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
                  <p>apakah kamu yakin ingin logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="{{ route('logout')}}" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        <!---Container Fluid-->
      </div>
    </div>
  </div>



  <script src="{{ asset('vendor/jquery/jquery.min.js ') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js ') }}"></script>
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js ') }}"></script>
  <script src="{{ asset('js/ruang-admin.min.js') }}"></script>
  <script src="{{ asset('vendor/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('js/demo/chart-area-demo.js') }}"></script>
</body>

</html>
