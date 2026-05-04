<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Http;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function registrasi()
    {
        return view('auth.registrasi');
    }

    public function loginProcess(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            /** @var \App\User $user */
            $user = Auth::user();

            $user->update([
                'ip_login_terakhir' => $request->ip(),
                'login_terakhir_at' => now(),
            ]);

            if ($user->role->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }

            if ($user->role->role == 'kurir') {
                return redirect()->route('kurir.dashboard');
            }

            return redirect()->route('pelanggan.beranda');
        }

        return back()->with('error', 'Email atau password salah!');
    }

    public function lupaPassword()
    {
        return view('auth.lupapassword');
    }

    public function kirimReset(Request $request)
    {
        $request->validate([
            'email' => 'required|email'
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()
                ->withInput()
                ->with('error', 'Email tidak ditemukan. Pastikan email sudah terdaftar.');
        }

        return view('auth.lupapassword', [
            'step' => 2,
            'email' => $request->email,
        ]);
    }

    public function resetPassword(Request $request)
    {
        return redirect()->route('login')->with('success', 'Password berhasil direset');
    }

    public function registerProcess(Request $request)
    {
        // ✅ VALIDASI TURNSTILE DULU
        $response = $request->input('cf-turnstile-response');

        $verify = file_get_contents("https://challenges.cloudflare.com/turnstile/v0/siteverify", false, stream_context_create([
            'http' => [
                'method' => 'POST',
                'header' => "Content-type: application/x-www-form-urlencoded",
                'content' => http_build_query([
                    'secret' => env('TURNSTILE_SECRET_KEY'),
                    'response' => $response,
                    'remoteip' => $request->ip(),
                ]),
            ]
        ]));

        $result = json_decode($verify);

        if (!$result || !$result->success) {
            return back()->with('error', 'Verifikasi captcha gagal!');
        }

        // ✅ BARU VALIDASI INPUT
        $request->validate([
            'username' => [
                'required',
                'min:1',
                'max:24',
                'regex:/^[a-z0-9_.]+$/',
                'unique:users,username'
            ],
            'email' => 'required|email|max:255|unique:users,email',
            'password' => [
                'required',
                'min:8',
                'max:64',
                'confirmed',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[^A-Za-z0-9]/',
            ],
        ]);

        $rolePelanggan = Role::where('role', 'pelanggan')->first();

        User::create([
            'role_id' => $rolePelanggan->id,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nama_lengkap' => null,
        ]);

        return redirect()->route('login')->with('success', 'Registrasi berhasil.');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
