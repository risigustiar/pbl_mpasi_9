<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>BebyBit - Dashboard</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css ')}}" rel="stylesheet">
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon">
          <img src="{{ asset('img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">BebyBit</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link" href="index.html">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      <hr class="sidebar-divider">
  <div class="sidebar-heading">
    Features
  </div>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
       aria-expanded="true" aria-controls="collapseBootstrap" title="Halaman Kelola">
      <i class="far fa-fw fa-window-maximize"></i>
      <span>Halaman Kelola</span>
    </a>
        <div id="collapseBootstrap" class="collapse" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">KELOLA</h6>
            <a class="collapse-item" href="pengguna.html">Pengguna</a>
            <a class="collapse-item" href="{{ route('resep') }}">Resep MPASI</a>
          </div>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
          aria-controls="collapseTable">
          <i class="fas fa-fw fa-table"></i>
          <span>Aktivitas</span>
        </a>
        <div id="collapseTable" class="collapse" aria-labelledby="headingTable" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Tables</h6>
            <a class="collapse-item" href="riwayat.html">Riwayat</a>
            <a class="collapse-item" href="favorit.html">Favorit</a>
          </div>
        </div>
      </li>
      <li class="nav-item">

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
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                aria-labelledby="searchDropdown">
                <form class="navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-1 small" placeholder="What do you want to look for?"
                      aria-label="Search" aria-describedby="basic-addon2" style="border-color: #3f51b5;">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <img class="img-profile rounded-circle" src="{{ asset('img/boy.png ') }}"" style="max-width: 60px">
                <span class="ml-2 d-none d-lg-inline text-white small">Maman Ketoprak</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" data-target="#logoutModal">
                  <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->





{{-- dalam isinya --}}
<div class="container-fluid">
    <div class="card m-5">
      <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h6 class="m-0 font-weight-bold text-primary">Form Edit Resep MPASI</h6>
      </div>
      <div class="card-body">
        <form action="{{ url('update_resep' , $data->id_resep)}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_resep">Nama Resep MPASI</label>
                <input type="text" class="form-control" id="nama_resep" name="nama_resep" placeholder="Nama Resep MPASI" value="{{ $data->nama_resep }}" required>
            </div>
            @error('nama_resep')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="kategori">Kategori</label>
                <select class="form-control mb-3" id="kategori" name="kategori">
                    <option>-- Pilih kategori --</option>
                    <option value="Makanan Pokok" {{ $data->kategori == 'Makanan Pokok' ? 'selected' : '' }}>Makanan Pokok</option>
                    <option value="Lauk Hewani" {{ $data->kategori == 'Lauk Hewani' ? 'selected' : '' }}>Lauk Hewani</option>
                    <option value="Lemak" {{ $data->kategori == 'Lemak' ? 'selected' : '' }}>Lemak</option>
                    <option value="Sayuran" {{ $data->kategori == 'Sayuran' ? 'selected' : '' }}>Sayuran</option>
                </select>
            </div>

            @error('kategori')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
            <div class="form-group">
                <label for="usia_resep"><h1>Usia</h1></label><br>
                <label for="usia_resep">Pilih Usia</label><br>
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="usia" id="usia1" value="3-6" {{ $data->usia == '3-6' ? 'checked' : '' }}>
                            <label class="form-check-label" for="usia1">3-6 Tahun</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="usia" id="usia2" value="9-12" {{ $data->usia == '9-12' ? 'checked' : '' }}>
                            <label class="form-check-label" for="usia2">9-12 Tahun</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="usia" id="usia3" value="12-18" {{ $data->usia == '12-18' ? 'checked' : '' }}>
                            <label class="form-check-label" for="usia3">12-18 Tahun</label>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="usia" id="usia4" value="19-29" {{ $data->usia == '19-29' ? 'checked' : '' }}>
                            <label class="form-check-label" for="usia4">19-29 Tahun</label>
                        </div>
                    </div>
                </div>
            </div>

          @error('usia')
          <div class="alert alert-danger">{{ $message }}</div>
          @enderror
          <div class="form-group">
            <label for="customFile">Gambar</label>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="customFile" name="gambar" value="{{ $data->gambar }}" required>
                <label class="custom-file-label" for="customFile">-- Pilih Foto --</label>
            </div>
        </div>
        @error('gambar')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror

          <div class="form-group">
            <label>Kandungan Gizi:</label>
            <div class="row">
              <div class="col-md-6">
                <label for="karbohidrat">Karbohidrat (gram)</label>
                <input type="number" class="form-control" id="karbohidrat" min="0" step="0.1" placeholder="Masukkan jumlah karbohidrat" name="karbohidrat" value="{{ $data->karbohidrat }}" required>
              </div>
              <div class="col-md-6">
                <label for="protein">Protein (gram)</label>
                <input type="number" class="form-control" id="protein" min="0" step="0.1" placeholder="Masukkan jumlah protein" name="protein" value="{{ $data->protein }}" required>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <label for="vitamin">Lemak (gram)</label>
                <input type="number" class="form-control" id="vitamin" min="0" step="0.1" placeholder="Masukkan jumlah vitamin" name="lemak" value="{{ $data->lemak }}" required>
              </div>
              <div class="col-md-6">
                <label for="mineral">Energi (gram)</label>
                <input type="number" class="form-control" id="mineral" min="0" step="0.1" placeholder="Masukkan jumlah mineral" name="energi" value="{{ $data->energi }}" required>
              </div>
            </div>
          </div>
          @error('gizi')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          <div>
            <Label for="cara_pembuatan" class="form-label">Cara pembuatan</Label>
            <input type="text" name="cara_pembuatan" class="form-control" placeholder="Cara pembuatan" value="{{ $data->cara_pembuatan }}" required>

            @error('cara_pembuatan')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          </div>

          <div class="form-group">
            <label for="inputBahan">Bahan-bahan</label>
            <div id="bahanInputs">
              <!-- Kolom bahan akan ditambahkan di sini oleh JavaScript -->
            </div>
            <button type="button" class="btn btn-primary mt-2" onclick="tambahKolomBahan()"><i class="fa-solid fa-plus"></i> Tambah Bahan</button>
          </div>
          @error('nama_bahan[]')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror

          <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-danger">Batal</button>
        </form>
      </div>
    </div>
  </div>
    <!-- modal from -->

     <!-- Container Fluid-->

      <!-- Simple Tables -->

<!-- javascript modal bahan-bahan  -->
<script>
function tambahKolomBahan() {
  // Membuat elemen div untuk kolom bahan
  var divBahan = document.createElement("div");
  divBahan.classList.add("form-row", "bahanInput");

  // Membuat input untuk nama bahan
  var inputNamaBahan = document.createElement("input");
  inputNamaBahan.type = "text";
  inputNamaBahan.classList.add("form-control", "col");
  inputNamaBahan.placeholder = "Nama Bahan";
  inputNamaBahan.name = "nama_bahan[]";
  inputNamaBahan.value = "{{ $data->nama_bahan }}";

  // Membuat input untuk ukuran
  var inputUkuran = document.createElement("input");
  inputUkuran.type = "text";
  inputUkuran.classList.add("form-control", "col");
  inputUkuran.placeholder = "Takaran";
  inputUkuran.name = "takaran[]";
  inputUkuran.value = "{{ $data->takaran }}";

  // Membuat select untuk takaran
  var selectTakaran = document.createElement("select");
  selectTakaran.classList.add("form-control", "col");
  selectTakaran.name = "satuan[]";
  var optionPilih = document.createElement("option");
  optionPilih.value = "";
  optionPilih.textValue = "Pilih Takaran";
  selectTakaran.appendChild(optionPilih);
  var optionSdt = document.createElement("option");
  optionSdt.value = "sdt";
  optionSdt.textContent = "Sendok Teh (sdt)";
  selectTakaran.appendChild(optionSdt);
  var optionSdm = document.createElement("option");
  optionSdm.value = "sdm";
  optionSdm.textContent = "Sendok Makan (sdm)";
  selectTakaran.appendChild(optionSdm);
  var optionGram = document.createElement("option");
  optionGram.value = "gram";
  optionGram.textContent = "Gram (gr)";
  selectTakaran.appendChild(optionGram);
  var optionMl = document.createElement("option");
  optionMl.value = "ml";
  optionMl.textContent = "Mililiter (ml)";
  selectTakaran.appendChild(optionMl);


  // Membuat button untuk menghapus kolom bahan
  var buttonHapus = document.createElement("button");
  buttonHapus.type = "button";
  buttonHapus.classList.add("btn", "btn-danger", "ml-2");
  buttonHapus.textContent = "Hapus";
  buttonHapus.onclick = function() {
    divBahan.remove();
  };

  // Menambahkan input nama bahan, select takaran, input ukuran, dan button hapus ke dalam div kolom bahan
  divBahan.appendChild(inputNamaBahan);
  divBahan.appendChild(inputUkuran);
  divBahan.appendChild(selectTakaran);
  divBahan.appendChild(buttonHapus);

  // Menambahkan div kolom bahan ke dalam div bahanInputs
  var divBahanInputs = document.getElementById("bahanInputs");
  divBahanInputs.appendChild(divBahan);
}

</script>









          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="#" class="btn btn-primary">Logout</a>
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
