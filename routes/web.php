<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontendController::class, 'beranda'])->name('frontend.public.beranda');
Route::get('/tentang', [FrontendController::class, 'tentang'])->name('frontend.public.tentang');
Route::redirect('/produk', '/produk/jual-beli')->name('frontend.public.produk');
Route::get('/produk/jual-beli', [FrontendController::class, 'jualbeli'])->name('frontend.public.jualbeli');
Route::get('/produk/service', [FrontendController::class, 'service'])->name('frontend.public.service');
Route::get('/artikel', [FrontendController::class, 'artikel'])->name('frontend.public.artikel');
Route::get('/kontak', [FrontendController::class, 'kontak'])->name('frontend.public.kontak');