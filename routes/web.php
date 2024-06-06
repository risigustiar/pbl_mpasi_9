<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FavoritController;
use App\Http\Controllers\PanduanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\RiwayatController;
use App\Http\Controllers\SesiController;
use App\Models\Resep;
use App\Models\Riwayat;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


//ini jangan di ganggu
Route::middleware('guest')->group(function () {
    Route::get('/',[SesiController::class,'landingpage'])->name('login');
    Route::POST('/login',[SesiController::class,'login']);
    Route::get('/login',[SesiController::class,'index'])->name('login');
    Route::get('/register',[RegisterController::class,'index']);
    Route::POST('/register',[RegisterController::class,'register'])->name('register');
});

Route::get('/home',function(){
    return view('/home');
});



Route::middleware('auth')->group(function () {

    Route::get('/register/admin',[AdminController::class,'admin'])->middleware('user:admin');
    Route::post('/input_resep', [ResepController::class, 'input'])->name('input_resep')->middleware('user:admin');
    Route::get('/resep', [ResepController::class, 'index'])->name('resep')->middleware('user:admin');
    Route::get('/hapus_resep_admin/{id_resep}',[ResepController::class,'hapus_resep_admin'])->name('hapus_resep_admin')->middleware('user:admin');
    Route::get('/edit_resep/{id_resep}',[ResepController::class,'edit_resep'])->name('edit_resep')->middleware('user:admin');
    Route::put('/update_resep/{id_resep}',[ResepController::class,'update_resep'])->name('update_resep')->middleware('user:admin');
    Route::get('/cari_resep_admin', [ResepController::class, 'cari_resep_admin'])->name('cari_resep_admin')->middleware('user:admin');


    Route::get('/riwayat_admin',[AdminController::class, 'riwayat_admin'])->name('riwayat_admin')->middleware('user:admin');
    Route::get('/register/orangtua',[AdminController::class,'orangtua'])->middleware('user:orangtua')->name('orangtua');
    Route::get('/resepuser',[AdminController::class, 'resepuser'])->name('resepuser')->middleware('user:orangtua');
    Route::get('/resepuser', [ResepController::class, 'semua_resep'])->name('resepuser')->middleware('user:orangtua');
    Route::get('/detail_resep/{id_resep}', [ResepController::class, 'detail_resep'])->name('detail_resep')->middleware('user:orangtua');
    Route::get('/cari_resep', [ResepController::class, 'cari_resep'])->name('cari_resep')->middleware('user:orangtua');
    Route::get('/hapus_resep/{id_resep}',[ResepController::class,'hapus_resep'])->name('hapus_resep')->middleware('user:orangtua');

    Route::get('/favorit', [FavoritController::class, 'index'])->name('favorit')->middleware('user:orangtua');
    Route::get('/detail_favorit/{id_resep}', [FavoritController::class, 'detail_favorit'])->name('detail_favorit')->middleware('user:orangtua');
    Route::post('/back_favorit/{id_resep}', [FavoritController::class, 'back_favorit'])->name('back_favorit')->middleware('user:orangtua');
    Route::post('/tambah_favorit/{id_resep}', [FavoritController::class, 'tambah_Favorit'])->name('tambah_favorit')->middleware('user:orangtua');
    Route::delete('/hapus_favorit/{id_resep}', [FavoritController::class, 'hapus_Favorit'])->name('hapus_favorit')->middleware('user:orangtua');

    Route::get('/riwayat', [RiwayatController::class, 'index'])->name('riwayat')->middleware('user:orangtua');
    Route::post('/tambah_riwayat/{id_resep}', [RiwayatController::class, 'tambah_riwayat'])->name('tambah_riwayat')->middleware('user:orangtua');
    Route::get('/detail_riwayat/{id_resep}', [RiwayatController::class, 'detail_riwayat'])->name('detail_riwayat')->middleware('user:orangtua');
    Route::get('/hapus_riwayat/{id_resep}', [RiwayatController::class, 'hapus_riwayat'])->name('hapus_riwayat')->middleware('user:orangtua');

    Route::get('/panduan', [PanduanController::class, 'index'])->name('panduan')->middleware('user:orangtua');

    Route::get('/logout',[SesiController::class,'logout'])->name('logout');
    Route::get('/confirm-logout', [SesiController::class, 'confirmLogout'])->name('confirm-logout');


});





//end


Route::get('/resepadmin',[AdminController::class,'resepadmin'])->name('resepadmin');



Route::POST('/update_resep/{id_resep}',[ResepController::class,'update_resep']);





