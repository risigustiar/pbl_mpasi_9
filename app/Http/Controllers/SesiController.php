<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{

    public function landingpage()
    {
        return view('landingpage');
    }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
           'email' => 'required|email',
           'password' => 'required',
        ],
        [
            'email.required' => ' Email harus diisi',
            'password.required' => ' Password harus diisi',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($infologin)){

            if(Auth::user()->role == 'admin'){
                return redirect('register/admin');
            }elseif(Auth::user()->role == 'orangtua'){
                return redirect('register/orangtua');
            }

        }else{
            return redirect('login')->withErrors('Email atau Password anda salah')->withInput();
        }
    }
    function logout()
    {
        Auth::logout();
        return redirect('');
    }

    public function register()
    {
        return view('register');
    }

}
