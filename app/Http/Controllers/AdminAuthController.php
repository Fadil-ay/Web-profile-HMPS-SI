<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    /**
     * Tampilkan form login admin.
     */
    public function showLoginForm()
    {
        return view('admin.login');
    }

    /**
     * Proses login admin.
     */
    public function login(Request $request)
    {
        // Validasi input
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Coba login
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Cek apakah user adalah admin
            if (Auth::user()->is_admin) {
                return redirect()->route('admin.data_ca.index')
                                 ->with('success', 'Selamat datang, Admin!');
            }

            // Jika bukan admin, langsung logout
            Auth::logout();
            return back()->withErrors([
                'email' => 'Akses ditolak! Hanya admin yang bisa login.',
            ])->onlyInput('email');
        }

        // Jika gagal login
        return back()->withErrors([
            'email' => 'Email atau password salah.',
        ])->onlyInput('email');
    }

    /**
     * Logout admin.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('admin.login')
                         ->with('success', 'Anda berhasil logout.');
    }
}
