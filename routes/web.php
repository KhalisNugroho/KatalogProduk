<?php
use Illuminate\Support\Facades\Route;

Route::get('/', 'LandingController@beranda')->name('landing.beranda');
Route::get('/tentang', 'LandingController@tentang')->name('landing.tentang');
Route::redirect('/produk', '/produk/jual-beli')->name('landing.produk');
Route::get('/produk/jual-beli', 'LandingController@jualbeli')->name('landing.produk.jualbeli');
Route::get('/produk/service', 'LandingController@service')->name('landing.produk.service');
Route::get('/artikel', 'LandingController@artikel')->name('landing.artikel');
Route::get('/artikel/{slug}', 'LandingController@artikelDetail')->name('landing.artikel.detail');
Route::get('/kontak', 'LandingController@kontak')->name('landing.kontak');