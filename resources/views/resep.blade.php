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
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <script src="https://kit.fontawesome.com/b04c2e8e37.js" crossorigin="anonymous"></script>
  <link href="{{ asset('css/ruang-admin.min.css') }}" rel="stylesheet" type="text/css" >
  <link rel="stylesheet" href="{{ asset('css/style_modal.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body id="page-top">
  <div id="wrapper">
    <!-- Sidebar -->
    <ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
      <a class="sidebar-brand d-flex align-items-center justify-content-center" >
        <div class="sidebar-brand-icon">
          <img src="img/logo/logo2.png">
        </div>
        <div class="sidebar-brand-text mx-3">BebyBit</div>
      </a>
      <hr class="sidebar-divider my-0">
      <li class="nav-item active">
        <a class="nav-link">
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
                <img class="img-profile rounded-circle" src="{{ asset('img/profil/profil.webp ') }}" style="max-width: 60px">
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
                  Logout
                </a>
              </div>
            </li>
          </ul>
        </nav>
        <!-- Topbar -->



        <!--modal from input-->
        <div class="modal" id="myModal">
            <div class="card m-5">
              <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                <h6 class="m-0 font-weight-bold text-primary">Form Input Resep MPASI</h6>
              </div>
              <div class="card-body">
                <form action="{{ route('input_resep') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="nama_resep">Nama Resep MPASI</label>
                        <input type="text" class="form-control" id="nama_resep" name="nama_resep" placeholder="Nama Resep MPASI" required>
                    </div>
                    @error('nama_resep')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select class="form-control custom-select" id="kategori" name="kategori" style="background-color: #ffffff; border-color: #7626b3; color: #000000;">
                            <option disabled selected style="display: none;">-- Pilih kategori --</option>
                            <option value="Makanan Pokok">Makanan Pokok</option>
                            <option value="Lauk Hewani">Lauk Hewani</option>
                            <option value="Lemak">Lemak</option>
                            <option value="Sayuran">Sayuran</option>
                        </select>
                    </div>
                    @error('kategori')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror

                    <div class="form-group">
                        <label for="usia_resep">Usia</label><br>
                        <div class="usia-options">
                            <div class="usia-option">
                                <input type="radio" id="usia1" name="usia" value="6-8" required>
                                <label for="usia1">6-8 Bulan</label>
                            </div>
                            <div class="usia-option">
                                <input type="radio" id="usia2" name="usia" value="9-12" required>
                                <label for="usia2">9-12 Bulan</label>
                            </div>
                            <div class="usia-option">
                                <input type="radio" id="usia3" name="usia" value="13-18" required>
                                <label for="usia3">13-18 Bulan</label>
                            </div>
                            <div class="usia-option">
                                <input type="radio" id="usia4" name="usia" value="19-24" required>
                                <label for="usia4">19-24 Bulan</label>
                            </div>
                        </div>
                    </div>

                  @error('usia')
                  <div class="alert alert-danger">{{ $message }}</div>
                  @enderror

                  <div class="form-group">
                    <label for="customFile" style="display:block;">Pilih Gambar:</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="customFile" name="gambar" required onchange="previewImage(event)">
                        <label class="custom-file-label" for="customFile" id="customFileLabel"><i class="fas fa-cloud-upload-alt"></i> Pilih Gambar</label>
                    </div>
                    <img id="preview" style="display:none; margin-top:10px; max-width:200px;">
                </div>

                @error('gambar')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror

                    <div class="form-group">
                        <label for="kandunganGizi">Kandungan Gizi:</label>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="karbohidrat">Karbohidrat (gram):</label>
                                <input type="number" class="form-control" id="karbohidrat" min="0" step="0.1" placeholder="Masukkan jumlah karbohidrat" name="karbohidrat" required>
                            </div>
                            <div class="col-md-6">
                                <label for="protein">Protein (gram):</label>
                                <input type="number" class="form-control" id="protein" min="0" step="0.1" placeholder="Masukkan jumlah protein" name="protein" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="lemak">Lemak (gram):</label>
                                <input type="number" class="form-control" id="lemak" min="0" step="0.1" placeholder="Masukkan jumlah lemak" name="lemak" required>
                            </div>
                            <div class="col-md-6">
                                <label for="energi">Energi (kalori):</label>
                                <input type="number" class="form-control" id="energi" min="0" step="0.1" placeholder="Masukkan jumlah energi" name="energi" required>
                            </div>
                        </div>
                    </div>
                    @error('gizi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror


                  <div>
                    <Label for="cara_pembuatan" class="form-label">Cara pembuatan</Label>
                    <textarea name="cara_pembuatan" class="form-control" rows="5" placeholder="Tuliskan cara pembuatan resep di sini..." required></textarea>
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
            <!-- modal from input-->

              <!-- Simple Tables -->
              <div class="card m-2">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <button type="button" class="btn btn-secondary mb-0" id="openModalBtn"><i class="fa-solid fa-plus"></i>  Resep</button>
                </div>
                @if(session()->has('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                    @endif
                    <div class="table-responsive">
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th>Nama Resep</th>
                                    <th>Usia</th>
                                    <th>Kategori</th>
                                    <th>Foto</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1; // Inisialisasi variabel penghitung
                                @endphp
                                @foreach ($data as $d)
                                    <tr>
                                        <td>{{ $d->nama_resep }}</td>
                                        <td>{{ $d->usia }}</td>
                                        <td>{{ $d->kategori }}</td>
                                        <td><img src="{{ asset($d->gambar) }}" alt="Gambar Resep" width="100" style="max-height: 100px;"></td>
                                        <td>
                                            <a href="#" class="btn btn-danger p-wd-0" onclick="hapusResep({{ $d->id_resep }})">
                                                <i class="fa-solid fa-trash"></i><br>
                                                <span style="font-size: 10px;">Hapus</span>
                                            </a>

                                            |
                                            <a href="#" class="btn btn-warning p-wd-1 editButton" data-id="{{ $d->id_resep }}" data-toggle="modal" data-target="#EditModal">
                                                <i class="fa-solid fa-pen-to-square p-0"></i><br>
                                                <span style="font-size: 12px;">Edit</span>
                                            </a>

                                        </td>
                                    </tr>
                                    @php
                                        $i++; // Increment variabel penghitung
                                    @endphp
                                @endforeach
                            </tbody>
                        </table>
                    </div>
      <div>


        <!-- Modal Edit Resep -->
        @foreach ($data as $d)
        <div class="modal" id="EditModal">
            <div class="card m-5">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Form Edit Resep MPASI</h6>
                </div>
                <div class="card-body">
                    <form action="#" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="edit_nama_resep">Nama Resep MPASI</label>
                            <input type="text" class="form-control" id="edit_nama_resep" name="nama_resep" placeholder="Nama Resep MPASI" value="{{ $d->nama_resep }}" required>
                        </div>
                        @error('nama_resep')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="edit_kategori">Kategori</label>
                            <select class="form-control custom-select" id="edit_kategori" name="kategori" style="background-color: #ffffff; border-color: #7626b3; color: #000000;">
                                <option disabled selected style="display: none;">-- Pilih kategori --</option>
                                <option value="Makanan Pokok" {{ $d->kategori == 'Makanan Pokok' ? 'selected' : '' }}>Makanan Pokok</option>
                                <option value="Lauk Hewani" {{ $d->kategori == 'Lauk Hewani' ? 'selected' : '' }}>Lauk Hewani</option>
                                <option value="Lemak" {{ $d->kategori == 'Lemak' ? 'selected' : '' }}>Lemak</option>
                                <option value="Sayuran" {{ $d->kategori == 'Sayuran' ? 'selected' : '' }}>Sayuran</option>
                            </select>
                        </div>
                        @error('kategori')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="edit_kandunganGizi">Kandungan Gizi:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="edit_karbohidrat">Karbohidrat (gram):</label>
                                    <input type="number" class="form-control" id="edit_karbohidrat" min="0" step="0.1" placeholder="Masukkan karbohidrat" value="{{ $d->karbohidrat }}" name="karbohidrat" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="edit_protein">Protein (gram):</label>
                                    <input type="number" class="form-control" id="edit_protein" min="0" step="0.1" placeholder="Masukkan jumlah protein" value="{{ $d->protein }}" name="protein" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="edit_lemak">Lemak (gram):</label>
                                    <input type="number" class="form-control" id="edit_lemak" min="0" step="0.1" placeholder="Masukkan jumlah lemak" value="{{ $d->lemak }}" name="lemak" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="edit_energi">Energi (kalori):</label>
                                    <input type="number" class="form-control" id="edit_energi" min="0" step="0.1" placeholder="Masukkan jumlah energi" value="{{ $d->energi }}" name="energi" required>
                                </div>
                            </div>
                        </div>

                        @error('usia')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                          <label for="edit_customFile" style="display:block;">Pilih Gambar:</label>
                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="edit_customFile" name="gambar" onchange="previewEditImage(event)">
                              <label class="custom-file-label" for="edit_customFile" id="edit_customFileLabel"><i class="fas fa-cloud-upload-alt"></i> Pilih Gambar</label>
                          </div>
                          <img src="{{ asset($d->gambar) }}" id="edit_preview" style="display:block; max-width:200px;">
                      </div>
                        @error('gambar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="edit_kandunganGizi">Kandungan Gizi:</label>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="edit_karbohidrat">Karbohidrat (gram):</label>
                                    <input type="number" class="form-control" id="edit_karbohidrat" min="0" step="0.1" placeholder="Masukkan jumlah karbohidrat" value="{{ $d->karbohidrat }}" name="karbohidrat" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="edit_protein">Protein (gram):</label>
                                    <input type="number" class="form-control" id="edit_protein" min="0" step="0.1" placeholder="Masukkan jumlah protein" value="{{ $d->protein }}" name="protein" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="edit_lemak">Lemak (gram):</label>
                                    <input type="number" class="form-control" id="edit_lemak" min="0" step="0.1" placeholder="Masukkan jumlah lemak" value="{{ $d->lemak }}" name="lemak" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="edit_energi">Energi (kalori):</label>
                                    <input type="number" class="form-control" id="edit_energi" min="0" step="0.1" placeholder="Masukkan jumlah energi" value="{{ $d->energi }}" name="energi" required>
                                </div>
                            </div>
                        </div>
                        @error('karbohidrat')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @error('protein')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @error('lemak')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                        @error('energi')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror

                        <div class="form-group">
                            <label for="edit_cara_pembuatan" class="form-label">Cara pembuatan</label>
                            <textarea name="cara_pembuatan" class="form-control" rows="5" placeholder="Tuliskan cara pembuatan resep di sini..." required>{{ $d->cara_pembuatan }}</textarea>
                            @error('cara_pembuatan')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                          <label for="inputBahan">Bahan-bahan</label>
                          <div id="bahanInputs">
                              <!-- Kolom bahan akan ditambahkan di sini oleh JavaScript -->
                          </div>
                          <button type="button" class="btn btn-primary mt-2" id="tambahKolomButton"><i class="fa-solid fa-plus"></i> Tambah Bahan</button>
                      </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <button type="reset" class="btn btn-danger">Batal</button>
                    </form>
                </div>
            </div>
        </div>
        @endforeach
        {{-- modal from Edit --}}
          <!--Row-->
          <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
          </a>
          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          {{-- untuk modal input --}}
        <script>
        $(document).ready(function(){
          $("#openModalBtn").click(function(){
            $("#myModal").modal();
          });
        });
        </script>




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

          // Membuat input untuk ukuran
          var inputUkuran = document.createElement("input");
          inputUkuran.type = "text";
          inputUkuran.classList.add("form-control", "col");
          inputUkuran.placeholder = "Takaran";
          inputUkuran.name = "takaran[]";

          // Membuat select untuk takaran
          var selectTakaran = document.createElement("select");
          selectTakaran.classList.add("form-control", "col");
          selectTakaran.name = "satuan[]";
          var optionPilih = document.createElement("option");
          optionPilih.value = "";
          optionPilih.textContent = "Pilih Takaran";
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

  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>
  @if(session('success'))
    <script>
        Swal.fire({
            title: 'Sukses!',
            text: '{{ session('success') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        });
    </script>
@endif

@if(session('error'))
    <script>
        Swal.fire({
            title: 'Oops...',
            text: '{{ session('error') }}',
            icon: 'error',
            confirmButtonText: 'OK'
        });
    </script>
@endif


<script>
    function hapusResep(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Anda tidak akan dapat mengembalikan ini!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, hapus!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location = "/hapus_resep_admin/" + id;
                return true;
            }
        });
    }
</script>

{{-- menampilkan gambar // --}}
<script>
    function previewImage(event) {
    const input = event.target;
    const file = input.files[0];

    if (file) {
        const reader = new FileReader();

        reader.onload = function(e) {
            const preview = document.getElementById('preview');
            preview.src = e.target.result;
            preview.style.display = 'block';
        }

        reader.readAsDataURL(file);

        // Update the label with the file name
        const fileName = file.name;
        const label = document.getElementById('customFileLabel');
        label.textContent = fileName;
    }
}

</script>
{{--di edit untuk gambar baru --}}
<script>
  function previewEditImage(event) {
      var input = event.target;
      var reader = new FileReader();
      reader.onload = function () {
          var dataURL = reader.result;
          var output = document.getElementById('edit_preview');
          output.src = dataURL;
      };
      reader.readAsDataURL(input.files[0]);
  }
</script>
{{-- untuk edit --}}
@foreach ($data as $d)
<script>
  function tambahKolomBahan(data) {
      // Membuat elemen div untuk kolom bahan
      var divBahan = document.createElement("div");
      divBahan.classList.add("form-row", "bahanInput");

      // Membuat input untuk nama bahan
      var inputNamaBahan = document.createElement("input");
      inputNamaBahan.type = "text";
      inputNamaBahan.classList.add("form-control", "col");
      inputNamaBahan.placeholder = "Nama Bahan";
      inputNamaBahan.name = "nama_bahan[]";

      // Membuat input untuk ukuran
      var inputUkuran = document.createElement("input");
      inputUkuran.type = "text";
      inputUkuran.classList.add("form-control", "col");
      inputUkuran.placeholder = "Takaran";
      inputUkuran.name = "takaran[]";

      // Membuat select untuk takaran
      var selectTakaran = document.createElement("select");
      selectTakaran.classList.add("form-control", "col");
      selectTakaran.name = "satuan[]";
      var optionPilih = document.createElement("option");
      optionPilih.value = "";
      optionPilih.textContent = "Pilih Takaran";
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

      // Jika ada data yang diberikan, isi nilai awal untuk kolom bahan
      if (data) {
          inputNamaBahan.value = data.nama_bahan;
          inputUkuran.value = data.takaran;
          selectTakaran.value = data.satuan;
      }

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

  // Memanggil fungsi tambahKolomBahan() sebanyak jumlah data bahan yang tersedia untuk diedit
  var dataBahan = [
      {
          {{$d->nama_bahan}},
          {{$d->takaran}},
          {{$d->satuan}},
      },
  ];
  dataBahan.forEach(function(data) {
      tambahKolomBahan(data);
  });

  // Mendengarkan klik tombol "Tambah Bahan" untuk menambah kolom bahan
  document.getElementById("tambahKolomButton").addEventListener("click", function() {
      tambahKolomBahan();
  });
</script>
{{-- unutuk edit --}}
@endforeach


</body>

</html>
