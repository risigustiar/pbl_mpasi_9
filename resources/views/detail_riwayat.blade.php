<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resep | BabyBites</title>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <style>
        /* Letakkan gaya tambahan di sini */
        @media (max-width: 1024px) {
        .ingredient-card ul li {
            font-size: 15px !important;
        }
    }

    @media (max-width: 768px) {
        .ingredient-card ul li {
            font-size: 14px !important;
        }
    }

    @media (max-width: 480px) {
        .ingredient-card ul li {
            font-size: 12px !important;
        }
    }
        .container {
            font-family: Arial, sans-serif;
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 5px;
        }
        .recipe-header {
            text-align: center;
            margin-bottom: 20px;
        }
        .recipe-image {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .recipe-title {
            margin-top: 10px;
            font-size: 24px;
            color: #333;
        }
        .recipe-actions {
            text-align: center;
            margin-bottom: 20px;
        }
        .recipe-actions button {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }
        .ingredients-list {
            list-style-type: none;
            padding: 0;
        }
        .instructions-list {
            padding-left: 20px;
        }
        .nutrition-info {
            margin-top: 20px;
        }

        /* Gaya tambahan */
        .ingredient-card,
        .nutrition-card {
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }

        .ingredient-card h2,
        .nutrition-card h2 {
            color: #333;
            font-size: 20px;
            margin-bottom: 10px;
        }

        .ingredient-card ul,
        .nutrition-card ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }

        .ingredient-card li,
        .nutrition-card p {
            font-size: 16px;
            color: #555;
            margin-bottom: 8px;
        }
        .form-container {
        display: flex;
        justify-content: flex-start;
        align-items: center;
    }
    .large-text {
        font-size: 20px; /* Sesuaikan ukuran teks sesuai kebutuhan */
        margin-left: 2px; /* Jarak antara ikon dan teks */
    }
    .large-icon {
        font-size: 35px; /* Sesuaikan ukuran ikon sesuai kebutuhan */

    }
    @media (max-width: 768px) {
        .recipe-title {
            width: 75%;
            font-size: 24px;
            padding: 10px;
        }
    }

    @media (max-width: 480px) {
        .recipe-title {
            width: 90%;
            font-size: 20px;
            padding: 12px;
        }
    }
    @media only screen and (max-width: 768px) {
        #imageContainer img {
            width: 100%;
            height: auto;
        }
    }

    </style>
    <script src="https://kit.fontawesome.com/2b50aa2221.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container" style="background-color: #7fad39">
    <div class="recipe-header" style="text-align: center; margin-bottom: 30px;">
        <form action="{{ route('back_resep', $resep->id_resep) }}" method="POST">
            @csrf
            <div class="form-container">
                <button style="background-color: #fcfbff; color: rgb(0, 0, 0);">
                    <i class="fa-regular fa-circle-left large-icon"></i>
                </button>
                <span class="large-text">Back</span>
            </div>
        </form>
    </div>

    <h1 class="recipe-title" style="
    font-size: 28px;
    margin-top: 15px;
    color: #ffffff;
    font-weight: bold;
    background-color: #384246;
    border-radius: 3px;
    width: 100%;
    padding: 5px;
    text-align: center;
    margin-left: auto;
    margin-right: auto;
    display: block;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
">
    {{ $resep->nama_resep }}
</h1>
<div style="display: flex; border-radius: 15px; overflow: hidden; ">
    <div id="imageContainer" style="flex: 1; display: flex; justify-content: center; align-items: center; position: relative;">
        <img src="{{ asset($resep->gambar) }}" alt="Nama Resep" style="width: 110%; height: 400px; object-fit: cover; border-radius: 15px; margin-left: 10%; margin-right: auto; margin-bottom: 20px; ">
        <div id="recipeActions" class="recipe-actions" style="display: none; position: absolute; bottom: 20px; left: 50%; transform: translateX(-50%); background-color: rgba(0, 0, 0, 0.5); padding: 3%; border-radius: 10px; text-align: center; margin-bottom: 20px ; margin-left: 5%; margin-right: auto;">
            @if(auth()->check())
                @php
                    $favorit = auth()->user()->favorits->where('id_resep', $resep->id_resep)->first();
                @endphp
                <form id="favoritForm" action="{{ route('tambah_favorit', $resep->id_resep) }}" method="POST">
                    @csrf
                    @if($favorit)
                        <button type="button" class="favorit-button" style="background-color: #dc3545; color: white;" disabled>
                            <i class="fas fa-heart"></i> Telah ditambahkan ke Favorit
                        </button>
                    @else
                        <button type="button" class="favorit-button" style="background-color: #007bff; color: white;">
                            <i class="far fa-heart"></i> Tambah ke Favorit
                        </button>
                    @endif
                </form>
            @else
                <p style="color: white;">Silakan <a href="{{ route('login') }}" style="color: #007bff;">masuk</a> atau <a href="{{ route('register') }}" style="color: #007bff;">daftar</a> untuk menambahkan resep ke favorit.</p>
            @endif
        </div>
    </div>
    <div style="flex: 1; padding: 20px; display: flex; flex-direction: column; align-items: flex-start;">
        <h2 style="color: #ffffff; font-size: 20px; margin-bottom: 20px; margin-left: 35%; margin-right: 25%; background-color: #384246; border-radius: 5px; padding: 10px; text-align: center;">
            <span></i>resep untuk</span><br>
            <span>{{ $resep->porsi }} Porsi</span>

        </h2>
        <div class="ingredient-card" style="margin: 0 auto; width: 80%; margin-left: 10%; margin-right: 20%;">
            <h2 style="color: #333; font-size: 18px; margin-bottom: 10px; text-align: center;">Bahan - Bahan</h2>
            <ul style="padding-left: 0; list-style-type: none;">
                @foreach ($bahan as $b)
                    <li style="margin-bottom: 5px;">{{ $loop->iteration }}. {{ $b->nama_bahan }} {{ $b->takaran }} {{ $b->satuan }}</li>
                @endforeach
            </ul>
        </div>
    </div>



</div>
<div class="nutrition-card" style="font-family: Arial, sans-serif; margin-bottom: 20px; padding: 2%; width: 320px; margin-top: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h2 style="font-size: 24px; margin-bottom: 20px; color: #333; text-align: center;">Informasi Nilai Gizi :</h2>
    <div style="display: flex; justify-content: space-between;">
        <div style="text-align: center; flex: 0.5; background-color: #ffffff; padding: 5%; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
            <span style="font-size: 100%; font-weight: bold; color: #333; ">Energi</span><br>
            <span style="font-size: 100%; font-weight: bold; color: #333;">{{ $gizi->energi }}</span><br>
            <span style="font-size: 100%; font-weight: bold; color: #333;">kkal</span>
        </div>
        <div style="text-align: center; flex: 0.5; background-color: #ffffff; padding: 5%; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-left: 3%;">
            <span style="font-size: 100%; font-weight: bold; color: #333;">Protein</span><br>
            <span style="font-size: 100%; font-weight: bold; color: #333;">{{ $gizi->protein }}</span><br>
            <span style="font-size: 100%; font-weight: bold; color: #333;">gr</span>
        </div>
        <div style="text-align: center; flex: 0.5; background-color: #ffffff; padding: 5%; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); margin-left: 3%;">
            <span style="font-size: 100%; font-weight: bold; color: #333;">Lemak</span><br>
            <span style="font-size: 100%; font-weight: bold; color: #333;">{{ $gizi->lemak }}</span><br>
            <span style="font-size: 100%; font-weight: bold; color: #333;">gr</span>
        </div>
    </div>
    <div style="margin-top: 20px; text-align: center;">
        <p style="font-size: 16px; color: #555;"><strong>*</strong> Informasi Gizi Ini Dari Resep Kemenkes</p>
    </div>
</div>

<div class="ingredient-card" style="background-color: #f9f9f9; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h2 style="font-size: 24px; margin-bottom: 10px; color: #333;">Cara Pembuatan:</h2>
    <div style="background-color: #fff; border-radius: 10px; padding: 15px;">
        <p style="font-size: 16px; line-height: 1.6; color: #555; white-space: pre-wrap;">{{ $resep->cara_pembuatan }}</p>
    </div>
</div>

<script>
    document.getElementById("imageContainer").addEventListener("mouseover", function() {
        document.getElementById("recipeActions").style.display = "block";
    });

    document.getElementById("imageContainer").addEventListener("mouseout", function() {
        document.getElementById("recipeActions").style.display = "none";
    });

    document.querySelectorAll('.favorit-button').forEach(button => {
        button.addEventListener('click', function(event) {
            event.preventDefault();
            var button = this;
            var form = button.closest('form');

            var xhr = new XMLHttpRequest();
            xhr.open(form.method, form.action, true);
            xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
            xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    var response = JSON.parse(xhr.responseText);
                    if (response.success) {
                        button.innerHTML = '<i class="fas fa-heart"></i> Telah ditambahkan ke Favorit';
                        button.style.backgroundColor = "#dc3545";
                        button.disabled = true;

                        // Menggunakan SweetAlert untuk menampilkan pesan berhasil
                        Swal.fire({
                            icon: 'success',
                            title: 'Resep telah ditambahkan ke Favorit!',
                            showConfirmButton: false,
                            timer: 1500
                        });
                    }
                }
            };
            xhr.send();
        });
    });
</script>
</body>
</html>
