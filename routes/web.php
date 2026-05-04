<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\KurirController;
use App\Http\Controllers\AdminController;

// ═══════════════════════════════════════════
// GUEST — tidak login, pakai LandingController
// ═══════════════════════════════════════════
Route::middleware('landing')->group(function () {
    Route::get('/', [LandingController::class, 'beranda'])->name('landing.beranda');
    Route::get('/tentang', [LandingController::class, 'tentang'])->name('landing.tentang');
    Route::get('/produk/jual-beli', [LandingController::class, 'jualbeli'])->name('landing.produk.jualbeli');
    Route::get('/produk/service', [LandingController::class, 'service'])->name('landing.produk.service');
    Route::get('/artikel', [LandingController::class, 'artikel'])->name('landing.artikel');
    Route::get('/artikel/{slug}', [LandingController::class, 'artikelDetail'])->name('landing.artikel.detail');
    Route::get('/kontak', [LandingController::class, 'kontak'])->name('landing.kontak');
    Route::get('/syarat', [LandingController::class, 'syarat'])->name('landing.syarat');
    Route::get('/kebijakan', [LandingController::class, 'kebijakan'])->name('landing.kebijakan');
});

// ═══════════════════════════════════════════
// AUTH
// ═══════════════════════════════════════════
Route::get('/login', [AuthController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [AuthController::class, 'loginProcess'])->name('login.process');
Route::get('/registrasi', [AuthController::class, 'registrasi'])->name('auth.registrasi')->middleware('guest');
Route::post('/registrasi', [AuthController::class, 'registerProcess'])->name('register.process')->middleware('throttle:5,1');
Route::get('/lupa-password', [AuthController::class, 'lupaPassword'])->name('password.request')->middleware('guest');
Route::post('/lupa-password', [AuthController::class, 'kirimReset'])->name('password.email');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout')->middleware('auth');

// ═══════════════════════════════════════════
// PELANGGAN — sudah login, pakai FrontendController
// URL sama persis dengan landing (/) tapi pakai middleware auth
// ═══════════════════════════════════════════
Route::middleware('auth')->name('pelanggan.')->group(function () {
    Route::get('/', [FrontendController::class, 'beranda'])->name('beranda');
    Route::get('/tentang', [FrontendController::class, 'tentang'])->name('tentang');
    Route::get('/produk/jual-beli', [FrontendController::class, 'jualbeli'])->name('produk.jualbeli');
    Route::get('/produk/service', [FrontendController::class, 'service'])->name('produk.service');
    Route::get('/artikel', [FrontendController::class, 'artikel'])->name('artikel');
    Route::get('/artikel/{slug}', [FrontendController::class, 'artikelDetail'])->name('artikel.detail');
    Route::get('/kontak', [FrontendController::class, 'kontak'])->name('kontak');
    Route::get('/dashboard', [FrontendController::class, 'dashboard'])->name('dashboard');
    Route::get('/pesanan', [FrontendController::class, 'pesanan'])->name('pesanan');
});

// ═══════════════════════════════════════════
// KURIR
// ═══════════════════════════════════════════
Route::prefix('kurir')->name('kurir.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [KurirController::class, 'dashboard'])->name('dashboard');
    Route::get('/pengiriman', [KurirController::class, 'pengiriman'])->name('pengiriman');
});

// ═══════════════════════════════════════════
// ADMIN
// ═══════════════════════════════════════════
Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::get('/produk', [AdminController::class, 'produk'])->name('produk');
    Route::get('/pesanan', [AdminController::class, 'pesanan'])->name('pesanan');
    Route::get('/kurir', [AdminController::class, 'kurir'])->name('kurir');
});