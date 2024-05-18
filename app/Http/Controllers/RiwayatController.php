<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Gizi;
use App\Models\Resep;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RiwayatController extends Controller
{


    public function index()
    {
        $riwayat_resep = Riwayat::where('id', Auth::id())->with('resep')->get();
        return view('riwayat', compact('riwayat_resep'));
    }

    public function tambah_riwayat($id_resep)
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

        return redirect('/riwayat');
    }


    public function detail_riwayat($id_resep) {
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
            // Contohnya, Anda bisa memberikan nilai default atau menampilkan pesan kesalahan
            abort(404, 'Data gizi tidak ditemukan');
        }

    $bahan = Bahan::where('id_resep', $id_resep)->get();

    if (!$bahan) {
        // Jika tidak ditemukan, mungkin ingin menangani kasus ini dengan cara tertentu
        // Contohnya, Anda bisa memberikan nilai default atau menampilkan pesan kesalahan
        abort(404, 'Data bahan tidak ditemukan');
    }

    return view('detail_riwayat', compact('resep','gizi', 'bahan'));

   }

   public function hapus_riwayat($id_resep) {

    DB::table('riwayats')->where('id_resep', $id_resep)->where('id', Auth::id())->delete();

    return redirect()->back();
   }

    }
