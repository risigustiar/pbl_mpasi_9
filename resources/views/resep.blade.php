<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo-web.PNG" rel="icon">
  <title>BabyBites - Dashboard</title>
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
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
                        <input type="text" class="form-control" id="nama_resep" name="nama_resep" placeholder="Nama Resep MPASI" required style="width: 40%;">
                    </div>
                    @error('nama_resep')
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
                                <input type="radio" id="usia2" name="usia" value="9-11" required>
                                <label for="usia2">9-11 Bulan</label>
                            </div>
                            <div class="usia-option">
                                <input type="radio" id="usia3" name="usia" value="12-23" required>
                                <label for="usia3">12-23 Bulan</label>
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
                    <label for="kandunganGizi" class="font-weight-bold">Kandungan Gizi:</label>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="protein">Protein (gram):</label>
                            <input type="number" class="form-control" id="protein" min="0" step="0.1" placeholder="Masukkan jumlah protein" name="protein" required style="width: 30%;">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="lemak">Lemak (gram):</label>
                            <input type="number" class="form-control" id="lemak" min="0" step="0.1" placeholder="Masukkan jumlah lemak" name="lemak" required style="width: 30%;">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="energi">Energi (kalori):</label>
                            <input type="number" class="form-control" id="energi" min="0" step="0.1" placeholder="Masukkan jumlah energi" name="energi" required style="width: 30%;">
                        </div>
                    </div>
                    @error('gizi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    </div>

                  <div>
                    <Label for="cara_pembuatan" class="form-label" style="font-weight: bold">Cara pembuatan</Label>
                    <textarea name="cara_pembuatan" class="form-control" rows="5" placeholder="Tuliskan cara pembuatan resep di sini..." required style="width: 50%"></textarea>
                    @error('cara_pembuatan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                  </div>


                  <div class="form-group -mb-2">
                    <Label for="porsi" class="form-label" style="font-weight: bold" >Masukkan Jumlah Porsi</Label>
                    <input type="number" class="form-control" id="porsi" min="1" step="1" placeholder="Masukkan jumlah porsi" name="porsi" required style="width: 20% ">
                    @error('porsi')
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
                                        <td><img src="{{ asset($d->gambar) }}" alt="Gambar Resep" width="100" style="max-height: 100px;"></td>
                                        <td>
                                            <a href="#" class="btn btn-danger p-wd-0" onclick="hapusResep({{ $d->id_resep }})">
                                                <i class="fa-solid fa-trash"></i><br>
                                                <span style="font-size: 10px;">Hapus</span>
                                            </a>
                                            |
                                            <a href="{{ route('edit_resep', $d->id_resep) }}" class="btn btn-warning p-wd-1 editButton">
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
                inputUkuran.type = "number";
                inputUkuran.classList.add("form-control", "col");
                inputUkuran.placeholder = "Jumlah";
                inputUkuran.name = "takaran[]";

                // Membuat select untuk takaran
                var selectTakaran = document.createElement("select");
                selectTakaran.classList.add("form-control", "col");
                selectTakaran.name = "satuan[]";

                // Menambahkan opsi Pilih Takaran
                var optionPilih = document.createElement("option");
                optionPilih.value = "";
                optionPilih.textContent = "-- Pilih Takaran --";
                selectTakaran.appendChild(optionPilih);

                // Menambahkan opsi Gram
                var optionGram = document.createElement("option");
                optionGram.value = "gram";
                optionGram.textContent = "Gram (gr)";
                selectTakaran.appendChild(optionGram);

                // Menambahkan opsi Mililiter
                var optionMl = document.createElement("option");
                optionMl.value = "ml";
                optionMl.textContent = "Mililiter (ml)";
                selectTakaran.appendChild(optionMl);

                // Menambahkan opsi Sendeok Teh
                var optionSdt = document.createElement("option");
                optionSdt.value = "sdt";
                optionSdt.textContent = "Sendeok Teh (sdt)";
                selectTakaran.appendChild(optionSdt);

                // Menambahkan opsi Sendok Makan
                var optionSdm = document.createElement("option");
                optionSdm.value = "sdm";
                optionSdm.textContent = "Sendok Makan (sdm)";
                selectTakaran.appendChild(optionSdm);

                // Menambahkan opsi Potong
                var optionPtg = document.createElement("option");
                optionPtg.value = "ptg";
                optionPtg.textContent = "Potong (ptg)";
                selectTakaran.appendChild(optionPtg);

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


</body>

</html>
