<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function beranda()
    {
        return view('frontend.public.beranda', [
            'key' => 'beranda'
        ]);
    }

    public function tentang()
    {
        return view('frontend.public.tentang', [
            'key' => 'tentang'
        ]);
    }

    public function produk()
    {
        return view('frontend.public.produk', [
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
        return view('frontend.public.artikel', [
            'key' => 'artikel'
        ]);
    }

    public function kontak()
    {
        return view('frontend.public.kontak', [
            'key' => 'kontak'
        ]);
    }
}
