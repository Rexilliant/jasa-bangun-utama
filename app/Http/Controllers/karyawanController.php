<?php

namespace App\Http\Controllers;

use App\Models\Karyawan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class karyawanController extends Controller
{
    public function adminKaryawan()
    {
        $karyawans = Karyawan::all();
        return view('admin.karyawan', compact('karyawans'));
    }
    public function login()
    {
        if (Auth::guard('karyawan')->check()) {
            return redirect()->intended('/admin');
        }
        return view('login');
    }
    public function loginpost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credential = $request->only('email', 'password');

        if (Auth::guard('karyawan')->attempt($credential)) {
            $karyawan = Auth::guard('karyawan')->user();
            // Ganti = dengan == atau === untuk perbandingan
            if ($karyawan && $karyawan->jabatan === 'admin' || $karyawan->jabatan === 'CEO') {
                return redirect()->intended('/admin');
            } else {
                return redirect()->back()->with('error', 'Anda bukan Admin');
            }
        }
        return back()->withInput()->with('error', 'Email atau password salah');
    }
    public function logout(Request $request)
    {
        Auth::guard('karyawan')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
