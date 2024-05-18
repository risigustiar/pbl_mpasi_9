<?php

namespace App\Http\Controllers;

use App\Models\Bahan;
use App\Models\Gizi;
use App\Models\Resep;
use App\Models\Riwayat;
use Brick\Math\BigInteger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class ResepController extends Controller
{

    public function index()
{
    $data = Resep::join('bahans', 'reseps.id_resep', '=', 'bahans.id_resep')
        ->join('gizis', 'reseps.id_resep', '=', 'gizis.id_resep')
        ->select('reseps.*', 'bahans.nama_bahan', 'bahans.takaran', 'bahans.satuan', 'gizis.karbohidrat', 'gizis.lemak', 'gizis.protein', 'gizis.energi')
        ->get(); // Menggunakan get() untuk mengambil semua data

    return view('resep', compact('data'));
}


    //hapus resep

    function hapus_resep($id_resep) {

        //Resep::destroy(request('id_resep'));
        DB::table('reseps')->where('id_resep', $id_resep)->delete();

        return redirect()->back()->with('berhasil', 'Resep berhasil dihapus!');
    }

    function hapus_resep_admin($id_resep) {

        //Resep::destroy(request('id_resep'));
        DB::table('reseps')->where('id_resep', $id_resep)->delete();

        return redirect()->back()->with('berhasil', 'Resep berhasil dihapus!');
    }


    //edit resep

    function edit_resep($id_resep) {
        $data = Resep::join('bahans', 'reseps.id_resep', '=', 'bahans.id_resep')
            ->join('gizis', 'reseps.id_resep', '=', 'gizis.id_resep')
            ->select('reseps.*', 'bahans.nama_bahan', 'bahans.takaran', 'bahans.satuan', 'gizis.karbohidrat', 'gizis.lemak', 'gizis.protein', 'gizis.energi')
            ->where('reseps.id_resep', $id_resep)
            ->first(); // Menggunakan first() untuk mengambil satu data saja

        return view('resep', compact('data'));
    }

    //input
public function input_resep() {
    return view('input_resep');
}

//input resep
public function input(Request $request) {
    $request->validate([
        'nama_resep' => 'required',
        'kategori' => 'required',
        'usia' => 'required',
        'gambar' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // Tambahkan validasi untuk input lainnya sesuai kebutuhan
    ]);

    $userId = auth()->user()->id;
    $data1 = new Resep();
    $data2 = new Bahan();
    $data3 = new Gizi();

    DB::transaction(function () use ($request, $userId, $data1, $data2, $data3) {
        // Simpan data resep dan bahan-bahan
        $gambar = $request->file('gambar');
        $nama_file = time() . "_" . $gambar->getClientOriginalName();
        $lokasi_file = 'img/resep';
        $gambar->move($lokasi_file, $nama_file);

        $data1->nama_resep = $request->input('nama_resep');
        $data1->id = $userId;
        $data1->id_resep = $id_resep = DB::table('reseps')->max('id_resep') + 1;
        $data1->gambar = $lokasi_file.'/'.$nama_file;
        $data1->cara_pembuatan = $request->input('cara_pembuatan');
        $data1->usia = $request->input('usia');
        $data1->kategori = $request->input('kategori');
        $data1->save();

        $id_resep_baru = $data1->id_resep;

        $data3->id_resep = $id_resep_baru;
        $data3->karbohidrat = $request->input('karbohidrat');
        $data3->lemak = $request->input('lemak');
        $data3->protein = $request->input('protein');
        $data3->energi = $request->input('energi');
        $data3->save();

        $namaBahan = $request->input('nama_bahan');

        if (is_array($namaBahan)) {
            DB::beginTransaction();

            try {
                foreach ($namaBahan as $key => $bahan) {
                    $data2 = new Bahan();
                    $data2->id_resep = $id_resep_baru;
                    $data2->nama_bahan = $bahan;
                    $data2->takaran = $request->input('takaran')[$key];
                    $data2->satuan = $request->input('satuan')[$key];
                    $data2->save();
                }

                DB::commit();
            } catch (\Exception $e) {
                DB::rollBack();
                throw $e;
            }
        } else {
            $namaBahanArray = explode(',', $namaBahan);

            foreach ($namaBahanArray as $key => $bahan) {
                $data2 = new Bahan();
                $data2->id_resep = $id_resep_baru;
                $data2->nama_bahan = $bahan;
                $data2->takaran = $request->input('takaran')[$key];
                $data2->satuan = $request->input('satuan')[$key];
                $data2->save();
            }
        }
    });

    // Arahkan pengguna ke halaman resep setelah berhasil menambahkan resep
    return redirect()->back()->with('success', 'Resep berhasil ditambahkan');
}



//semua resep

    public function semua_resep() {

        $resep = Resep::all();

        return view('resepuser', compact('resep'));
    }



    //detail resep
    public function detail_resep($id_resep) {
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

    return view('detail_resep', compact('resep','gizi', 'bahan'));

}

public function back_resep($id_resep)
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

        return redirect('/resepuser');
    }



//cari resep
public function cari_resep(Request $request)
{

    $keyword = $request->input('cari');

    $resep = Resep::where('id_resep', 'like', '%' . $keyword . '%')
    ->orWhere('nama_resep', 'like', '%' . $keyword . '%')
    ->orWhere('usia', 'like', '%' . $keyword . '%')
    ->orWhere('kategori', 'like', '%' . $keyword . '%')
    ->orWhere('cara_pembuatan', 'like', '%' . $keyword . '%')
    ->get();

    return view('resepuser', compact('resep'));
}
}
