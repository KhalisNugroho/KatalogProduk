<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard', [
            'key' => 'dashboard'
        ]);
    }

    public function produk()
    {
        return view('admin.produk', [
            'key' => 'produk'
        ]);
    }

    public function pesanan()
    {
        return view('admin.pesanan', [
            'key' => 'pesanan'
        ]);
    }

    public function kurir()
    {
        return view('admin.kurir', [
            'key' => 'kurir'
        ]);
    }
}
