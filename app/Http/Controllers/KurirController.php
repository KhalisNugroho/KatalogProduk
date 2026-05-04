<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KurirController extends Controller
{
    public function dashboard()
    {
        return view('kurir.dashboard', [
            'key' => 'dashboard'
        ]);
    }

    public function pengiriman()
    {
        return view('kurir.pengiriman', [
            'key' => 'pengiriman'
        ]);
    }
}
