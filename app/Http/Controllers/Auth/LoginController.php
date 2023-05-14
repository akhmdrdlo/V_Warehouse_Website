<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('/login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('uname', 'password');
        if (Auth::attempt($credentials)) {
            // Authentikasi berhasil dilakukan
            $nama_lengkap = Auth::user()->nama_lengkap;
            return redirect('/menu')->with('success', "Selamat datang kembali, $nama_lengkap di V-Warehouse!!");
        } else {
            // Authentikasi gagal dilakukan
            return redirect('/login')->with('error', 'Username atau password yang Anda masukkan salah. Silakan coba lagi.');
        }
    }

    public function logout(Request $request)
{
    // hapus session login
    Auth::logout();

    $request->session()->invalidate();

    $request->session()->regenerateToken();

    // redirect ke halaman login
    return redirect('/login')->with('danger', 'Anda berhasil logout.');
}
}

