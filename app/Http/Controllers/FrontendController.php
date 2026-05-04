<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function beranda()
    {
        return view('frontend.beranda', [
            'key' => 'beranda'
        ]);
    }

    public function tentang()
    {
        return view('frontend.tentang', [
            'key' => 'tentang'
        ]);
    }

    public function produk()
    {
        return view('frontend.produk', [
            'key' => 'produk'
        ]);
    }

    public function jualbeli()
    {
        return view('frontend.produk.jualbeli'); // Mengarah ke folder produk
    }

    public function service()
    {
        return view('frontend.produk.service'); // Mengarah ke folder produk
    }

    public function artikel()
    {
        return view('frontend.artikel', [
            'key' => 'artikel'
        ]);
    }

    public function artikelDetail($slug)
    {
        // Mapping slug URL -> nama file blade di folder frontend/artikel/
        // Slug pakai strip (-), nama file pakai underscore (_)
        $articles = [
            'tips-memilih-brankas' => 'frontend.artikel.tips_memilih_brankas',
            'standar-tahan-api' => 'frontend.artikel.standar_tahan_api',
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
        return view('frontend.kontak', [
            'key' => 'kontak'
        ]);
    }

    public function dashboard()
    {
        return view('frontend.dashboard', [
            'key' => 'dashboard'
        ]);
    }

    public function pesanan()
    {
        return view('frontend.pesanan', [
            'key' => 'pesanan'
        ]);
    }
}
