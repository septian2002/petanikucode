<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AADataAnggotaController;
use App\Http\Controllers\LADataAnggotaController;
use App\Http\Controllers\BDataBarangController;
use App\Http\Controllers\PDataBarangController;
use App\Http\Controllers\DataPemesananController;
use App\Http\Controllers\DataBantuanController;

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

// Route::get('/home', [HomeController::class, 'home']);

Route::group(['namespace' => 'frontend'], function(){
    Route::get('/home', [HomeController::class, 'home']);
    Route::get('/login', [LoginController::class, 'login']);
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::get('/akun-anggota', [AADataAnggotaController::class, 'akunAnggota'])->name('akun-anggota');
    Route::get('/list-anggota', [LADataAnggotaController::class, 'listAnggota'])->name('list-anggota');
    Route::get('/benih', [BDataBarangController::class, 'benih'])->name('benih');
    Route::get('/pupuk', [PDataBarangController::class, 'pupuk'])->name('pupuk');
    Route::get('/data-pemesanan', [DataPemesananController::class, 'dataPemesanan'])->name('data-pemesanan');
    Route::get('/data-bantuan', [DataBantuanController::class, 'dataBantuan'])->name('data-bantuan');
});