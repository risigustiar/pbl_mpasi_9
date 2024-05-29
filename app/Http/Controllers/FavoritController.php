<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Favorit;
use App\Models\Gizi;
use App\Models\Resep;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class FavoritController extends Controller
{
    public function index()
{
    // Dapatkan daftar resep yang ada dalam favorit pengguna saat ini
    $favoritResep = Favorit::where('id', Auth::id())->with('resep')->get();

    return view('favorit', compact('favoritResep'));
}

public function hapus_favorit($id_resep)
{
    Favorit::where('id', Auth::id())
           ->where('id_resep', $id_resep)
           ->delete();

    return redirect()->back();
}

public function tambah_favorit($id_resep)
{
    $favorit = Favorit::where('id_resep', $id_resep)
                      ->where('id', Auth::id())
                      ->first();

    if ($favorit) {
        $favorit->delete(); // Hapus dari daftar favorit jika sudah ada
    } else {
        Favorit::create([
            'id' => Auth::id(),
            'id_resep' => $id_resep
        ]); // Tambahkan ke daftar favorit jika belum ada
    }

    return response()->json(['success' => true]);
}


public function back_favorit($id_resep)
    {
        $riwayat = Riwayat::where('id_resep', $id_resep)
                          ->where('id', Auth::id())
                          ->first();

        if (!$riwayat) {
            // Tambahkan resep ke dalam riwayat jika belum ada
            Riwayat::create([
                'id' => Auth::id(),
                'id_resep' => $id_resep
            ]);
        }

        return redirect('/favorit');
    }

    public function detail_favorit($id_resep) {
        // Cari resep berdasarkan $id_resep
        $resep = Resep::where('id_resep', $id_resep)->firstOrFail();

        // Jika resep tidak ditemukan, tampilkan error 404
        if (!$resep) {
            abort(404);
        }

        // Cari data gizi yang terkait dengan resep tersebut
        $gizi = Gizi::where('id_resep', $id_resep)->first();

        // Periksa apakah data gizi ditemukan
        if (!$gizi) {
            // Jika tidak ditemukan, mungkin ingin menangani kasus ini dengan cara tertentu
            abort(404, 'Data gizi tidak ditemukan');
        }

    $bahan = Bahan::where('id_resep', $id_resep)->get();

    if (!$bahan) {

        abort(404, 'Data bahan tidak ditemukan');
    }

    return view('detail_favorit', compact('resep','gizi', 'bahan'));

   }

}
