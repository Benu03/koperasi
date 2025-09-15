<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    MainController,
    TestController

};

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

Route::group(['middleware' => ['session_key']],function(){

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/profile', [MainController::class, 'profile'])->name('profile');
    Route::post('/logout', [MainController::class, 'logout'])->name('logout');
    Route::get('/lobby', [MainController::class, 'lobby'])->name('lobby');
    Route::get('/get-notification', [MainController::class, 'getNotifications'])->name('getnotif');
    Route::post('/update-notif', [MainController::class, 'updateNotifIsread'])->name('updatenotif');


    
    Route::get('/transaksi', [TestController::class, 'transaksi'])->name('transaksi');
    Route::get('/simpanan', [TestController::class, 'simpanan'])->name('simpanan');
    Route::get('/pinjaman', [TestController::class, 'pinjaman'])->name('pinjaman');
    Route::get('/belanja-produk', [TestController::class, 'belanjaProduk'])->name('belanja-produk');
    Route::get('/master-date', [TestController::class, 'masterDate'])->name('master-date');
    Route::get('/anggota', [TestController::class, 'anggota'])->name('anggota');
    Route::get('/produk-toko', [TestController::class, 'produkToko'])->name('produk-toko');
    Route::get('/laporan', [TestController::class, 'laporan'])->name('laporan');
    Route::get('/laporan-simpanan', [TestController::class, 'laporanSimpanan'])->name('laporan-simpanan');
    Route::get('/laporan-pinjaman', [TestController::class, 'laporanPinjaman'])->name('laporan-pinjaman');
    Route::get('/laporan-penjualan', [TestController::class, 'laporanPenjualan'])->name('laporan-penjualan');
    Route::get('/laporan-kas', [TestController::class, 'laporanKas'])->name('laporan-kas');
    Route::get('/pengaturan', [TestController::class, 'pengaturan'])->name('pengaturan');
    Route::get('/user-akses', [TestController::class, 'userAkses'])->name('user-akses');
    Route::get('/limit-bunga', [TestController::class, 'limitBunga'])->name('limit-bunga');


    
});

Route::fallback(function () {
    return response()->view('global.notification.url_forbidden', ['title' => 'Forbidden'], 403);
});