<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resep</title>
    <style>
        /* Letakkan gaya tambahan di sini */
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
    </style>
    <script src="https://kit.fontawesome.com/2b50aa2221.js" crossorigin="anonymous"></script>
</head>
<body>





<div class="container">
    <div class="recipe-header" style="text-align: center; margin-bottom: 30px;">

        <form action="{{ route('back_favorit', $resep->id_resep) }}" method="POST">
            @csrf
            <div class="form-container">
                <button style="background-color: #fcfbff; color: rgb(0, 0, 0);">
                    <i class="fa-regular fa-circle-left large-icon"></i>
                </button>
                <span class="large-text">Back</span>
            </div>
        </form>
        <div style="border-radius: 15px; overflow: hidden; box-shadow: 0 0 10px rgba(77, 75, 75, 0.1);">
            <img src="{{ asset($resep->gambar) }}" alt="Nama Resep" class="recipe-image" style="width: 250px; height: 250px; object-fit: cover;">
        </div>
        <h1 class="recipe-title" style="font-size: 28px; margin-top: 15px; color: #0c0c0c; font-weight: bold;">{{ $resep->nama_resep }}</h1>
    </div>

    <div class="recipe-actions">
        @if(auth()->check())
            @php
                $favorit = auth()->user()->favorits->where('id_resep', $resep->id_resep)->first();
            @endphp
            <form id="favoritForm" action="{{ $favorit ? route('hapus_favorit', $resep->id_resep) : route('tambah_favorit', $resep->id_resep) }}" method="POST">
                @csrf
                @if($favorit)
                    @method('DELETE')
                    <button id="tambahButton" style="background-color: #dc3545; color: white;">
                        <i class="fas fa-heart"></i> Sudah Di Tambah ke Favorit
                    </button>
                @else
                    @method('POST')
                    <button id="tambahButton" style="background-color: #007bff; color: white;">
                        <i class="far fa-heart"></i> Tambah ke Favorit
                    </button>
                @endif
            </form>
        @else
            <p>Silakan <a href="{{ route('login') }}">masuk</a> atau <a href="{{ route('register') }}">daftar</a> untuk menambahkan resep ke favorit.</p>
        @endif
    </div>


    <div class="ingredient-card">
        <div class="recipe-body">
            <table style="width: 100%;">
                <thead>
                    <tr>
                        <th style="font-size: 20px; color: #333; border-bottom: 2px solid #ccc; padding-bottom: 10px;">Nama Bahan</th>
                        <th style="font-size: 20px; color: #333; border-bottom: 2px solid #ccc; padding-bottom: 10px;">Takaran</th>
                        <th style="font-size: 20px; color: #333; border-bottom: 2px solid #ccc; padding-bottom: 10px;">Satuan</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bahan as $bahan)
                        <tr>
                            <td style="font-size: 18px; color: #555; border-bottom: 1px solid #ccc; padding: 8px;">{{ $bahan->nama_bahan }}</td>
                            <td style="font-size: 18px; color: #555; border-bottom: 1px solid #ccc; padding: 8px;">{{ $bahan->takaran }}</td>
                            <td style="font-size: 18px; color: #555; border-bottom: 1px solid #ccc; padding: 8px;">{{ $bahan->satuan }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>


<div class="ingredient-card">
    <h2>Cara Pembuatan:</h2>
    <p>{{ $resep->cara_pembuatan }}</p>
</div>

    <div class="nutrition-card">
        <h2>Informasi Gizi:</h2>
        <p>Karbohidrat: {{ $gizi->karbohidrat }} Gram</p>
        <p>Protein: {{ $gizi->protein }} Gram</p>
        <p>Lemak: {{ $gizi->lemak }} Gram</p>
        <p>Energi: {{ $gizi->energi }} Gram</p>
        <!-- Tambahkan informasi gizi lainnya di sini -->
    </div>
</div>

<script>
    document.getElementById("tambahButton").addEventListener("click", function(event) {
        event.preventDefault();
        var button = this;
        var form = document.getElementById("favoritForm");

        var xhr = new XMLHttpRequest();
        xhr.open(form.method, form.action, true);
        xhr.setRequestHeader('X-CSRF-TOKEN', '{{ csrf_token() }}');
        xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        xhr.onreadystatechange = function() {
            if (xhr.readyState === 4 && xhr.status === 200) {
                var response = JSON.parse(xhr.responseText);
                if (response.success) {
                    if (button.innerHTML.includes("Tambah")) {
                        button.innerHTML = '<i class="fas fa-heart"></i> Telah ditambahkan ke Favorit';
                        button.style.backgroundColor = "#dc3545";
                    } else {
                        button.innerHTML = '<i class="far fa-heart"></i> Tambah ke Favorit';
                        button.style.backgroundColor = "#007bff";
                    }
                }
            }
        };
        xhr.send();
    });
</script>
</body>
</html>
