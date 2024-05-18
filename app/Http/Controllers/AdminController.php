<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use App\Models\Riwayat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        return view('/login');
    }

    function admin()
    {
        return view('/admin');
    }

    function orangtua()
    {
        $resep = Resep::paginate(8);

        return view('orangtua', compact('resep'));
    }

    function resepuser()
    {
        return view('/resepuser');
    }

    public function riwayat_admin()
    {
        $riwayat_admin = Riwayat::all();
        return view('riwayat_admin', compact('riwayat_admin'));
    }
}
