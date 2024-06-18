<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="{{ asset('img/logo-web.png') }}" rel="icon">
  <title>BabyBites | Edit Resep</title>
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }} rel="stylesheet" type="text/css">
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css ') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('css/ruang-admin.min.css ')}}" rel="stylesheet">
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

    {{-- isi edit --}}
    <div class="card m-5">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Form Edit Resep MPASI</h6>
        </div>
        <div class="card-body">
            <form action="{{ url('update_resep', $resep->id_resep) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="edit_nama_resep">Nama Resep MPASI</label>
                    <input type="text" class="form-control" id="edit_nama_resep" name="nama_resep" placeholder="Nama Resep MPASI" value="{{ $resep->nama_resep }}" required style="width: 40%;">
                </div>
                @error('nama_resep')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="usia_resep">Usia</label><br>
                    <div class="usia-options">
                        <div class="usia-option">
                            <input type="radio" id="usia1" name="usia" value="6-8" {{ $resep->usia == '6-8' ? 'checked' : '' }} required>
                            <label for="usia1">6-8 Bulan</label>
                        </div>
                        <div class="usia-option">
                            <input type="radio" id="usia2" name="usia" value="9-11" {{ $resep->usia == '9-11' ? 'checked' : '' }} required>
                            <label for="usia2">9-11 Bulan</label>
                        </div>
                        <div class="usia-option">
                            <input type="radio" id="usia3" name="usia" value="12-23" {{ $resep->usia == '12-23' ? 'checked' : '' }} required>
                            <label for="usia3">12-23 Bulan</label>
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
                    <img src="{{ asset($resep->gambar) }}" id="edit_preview" style="display:block; margin-top:10px; max-width:200px;">
                </div>
                @error('gambar')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
                <div class="form-group">
                    <label for="edit_kandunganGizi" class="font-weight-bold">Kandungan Gizi:</label>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="edit_protein">Protein (gram):</label>
                            <input type="number" class="form-control" id="edit_protein" min="0" step="0.1" placeholder="Masukkan jumlah protein" value="{{ $gizi->protein }}" name="protein" required style="width: 30%;" >
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="edit_lemak">Lemak (gram):</label>
                            <input type="number" class="form-control" id="edit_lemak" min="0" step="0.1" placeholder="Masukkan jumlah lemak" value="{{ $gizi->lemak }}" name="lemak" required style="width: 30%;">
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-md-6">
                            <label for="edit_energi">Energi (kalori):</label>
                            <input type="number" class="form-control" id="edit_energi" min="0" step="0.1" placeholder="Masukkan jumlah energi" value="{{ $gizi->energi }}" name="energi" required style="width: 30%;">
                        </div>
                    </div>
                    @error('protein')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('lemak')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    @error('energi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="edit_cara_pembuatan" class="form-label" style="font-weight: bold">Cara pembuatan</label>
                    <textarea name="cara_pembuatan" class="form-control" rows="5" placeholder="Tuliskan cara pembuatan resep di sini..." required style="width: 50%;">{{ $resep->cara_pembuatan }}</textarea>
                    @error('cara_pembuatan')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group -mb-2">
                    <label for="porsi" class="form-label" style="font-weight: bold">Masukkan Jumlah Porsi</label>
                    <input type="number" class="form-control" id="porsi" min="1" step="1" placeholder="Masukkan jumlah porsi" name="porsi" required style="width: 20%;" value="{{ $resep->porsi }}">
                    @error('porsi')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inputBahan">Bahan-bahan</label>
                    <div id="bahanInputs">
                        @foreach ($bahan as $item)
                        <div class="form-row bahanInput mb-2">
                            <input type="text" class="form-control col mr-2" name="nama_bahan[]" value="{{ $item->nama_bahan }}" placeholder="Nama Bahan" required>
                            <input type="text" class="form-control col mr-2" name="takaran[]" value="{{ $item->takaran }}" placeholder="Takaran" required>
                            <select class="form-control col mr-2" name="satuan[]" required>
                                <option value="" disabled>Pilih Takaran</option>
                                <option value="gram" {{ $item->satuan == 'gram' ? 'selected' : '' }}>Gram (gr)</option>
                                <option value="ml" {{ $item->satuan == 'ml' ? 'selected' : '' }}>Mililiter (ml)</option>
                                <option value="sdt" {{ $item->satuan == 'sdt' ? 'selected' : '' }}>Sendok Teh (sdt)</option>
                                <option value="sdm" {{ $item->satuan == 'sdm' ? 'selected' : '' }}>Sendok Makan (sdm)</option>
                                <option value="ptg" {{ $item->satuan == 'ptg' ? 'selected' : '' }}>Potong (ptg)</option>
                                <option value="siung" {{ $item->satuan == 'siung' ? 'selected' : '' }}>Siung</option>
                                <option value="cm" {{ $item->satuan == 'cm' ? 'selected' : '' }}>Centimeter (cm)</option>
                                <option value="batang" {{ $item->satuan == 'batang' ? 'selected' : '' }}>Batang</option>
                                <option value="buah" {{ $item->satuan == 'buah' ? 'selected' : '' }}>Buah</option>
                                <option value="butir" {{ $item->satuan == 'butir' ? 'selected' : '' }}>Butir</option>
                                <option value="lembar" {{ $item->satuan == 'lembar' ? 'selected' : '' }}>Lembar</option>

                            </select>
                            <button type="button" class="btn btn-danger ml-2" onclick="this.parentElement.remove();">Hapus</button>
                        </div>
                        @endforeach
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
    {{-- isi edit --}}

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
                  <p>Are you sure you want to keluar?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="{{ route('logout')}}" class="btn btn-primary">Keluar</a>
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
  {{--di edit untuk gambar baru --}}
<script>
    function previewEditImage(event) {
        var output = document.getElementById('edit_preview');
        var file = event.target.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function () {
                output.src = reader.result;
            };
            reader.readAsDataURL(file);
        } else {
            output.src = "{{ asset('$resep->image') }}";
        }
    }

</script>
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
<script>
    function tambahKolomBahan() {
        var divBahan = document.createElement("div");
        divBahan.classList.add("form-row", "bahanInput", "mb-2"); // menambahkan kelas mb-2 untuk margin bawah

        var inputNamaBahan = document.createElement("input");
        inputNamaBahan.type = "text";
        inputNamaBahan.classList.add("form-control", "col", "mr-2"); // menambahkan kelas mr-2 untuk margin kanan
        inputNamaBahan.placeholder = "Nama Bahan";
        inputNamaBahan.name = "nama_bahan[]";
        inputNamaBahan.required = true;

        var inputUkuran = document.createElement("input");
        inputUkuran.type = "number";
        inputUkuran.classList.add("form-control", "col", "mr-2"); // menambahkan kelas mr-2 untuk margin kanan
        inputUkuran.placeholder = "Jumlah";
        inputUkuran.name = "takaran[]";
        inputUkuran.required = true;

        var selectTakaran = document.createElement("select");
        selectTakaran.classList.add("form-control", "col", "mr-2"); // menambahkan kelas mr-2 untuk margin kanan
        selectTakaran.name = "satuan[]";
        selectTakaran.required = true;

        var optionPilih = document.createElement("option");
        optionPilih.value = "";
        optionPilih.textContent = "Pilih Takaran";
        optionPilih.disabled = true;
        optionPilih.selected = true;
        selectTakaran.appendChild(optionPilih);

        // Array of options to be added
        var options = [
            { value: "gram", text: "Gram (gr)" },
            { value: "ml", text: "Mililiter (ml)" },
            { value: "sdt", text: "Sendok Teh (sdt)" },
            { value: "sdm", text: "Sendok Makan (sdm)" },
            { value: "ptg", text: "Potong (ptg)" },
            { value: "siung", text: "Siung" },
            { value: "cm", text: "Centimeter (cm)" },
            { value: "batang", text: "Batang" },
            { value: "buah", text: "Buah" },
            { value: "butir", text: "Butir" },
            { value: "lembar", text: "Lembar" }
        ];

        // Loop through options array and add each option to the select
        options.forEach(function(option) {
            var opt = document.createElement("option");
            opt.value = option.value;
            opt.textContent = option.text;
            selectTakaran.appendChild(opt);
        });

        var buttonHapus = document.createElement("button");
        buttonHapus.type = "button";
        buttonHapus.classList.add("btn", "btn-danger", "ml-2");
        buttonHapus.textContent = "Hapus";
        buttonHapus.onclick = function() {
            divBahan.remove();
        };

        divBahan.appendChild(inputNamaBahan);
        divBahan.appendChild(inputUkuran);
        divBahan.appendChild(selectTakaran);
        divBahan.appendChild(buttonHapus);

        document.getElementById("bahanInputs").appendChild(divBahan);
    }
    </script>


</body>
</html>
