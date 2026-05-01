<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function beranda()
    {
        return view('landing.beranda', [
            'key' => 'beranda'
        ]);
    }

    public function tentang()
    {
        return view('landing.tentang', [
            'key' => 'tentang'
        ]);
    }

    public function produk()
    {
        return view('landing.produk', [
            'key' => 'produk'
        ]);
    }

    public function jualbeli()
    {
        return view('landing.produk.jualbeli'); // Mengarah ke folder produk
    }

    public function service()
    {
        return view('landing.produk.service'); // Mengarah ke folder produk
    }

    public function artikel()
    {
        return view('landing.artikel', [
            'key' => 'artikel'
        ]);
    }

    public function artikelDetail($slug)
    {
        // Mapping slug URL -> nama file blade di folder landing/artikel/
        // Slug pakai strip (-), nama file pakai underscore (_)
        $articles = [
            'tips-memilih-brankas' => 'landing.artikel.tips_memilih_brankas',
            'standar-tahan-api' => 'landing.artikel.standar_tahan_api',
        ];

        // Jika slug tidak ditemukan, tampilkan halaman 404
        if (!array_key_exists($slug, $articles)) {
            abort(404);
        }

        return view($articles[$slug], [
            'key' => 'artikel'
        ]);
    }

    public function kontak()
    {
        return view('landing.kontak', [
            'key' => 'kontak'
        ]);
    }
}
