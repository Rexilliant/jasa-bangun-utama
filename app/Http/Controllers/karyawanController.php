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

    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'jabatan' => 'required',
                'email' => 'required|email|unique:karyawan',
                'password' => 'required|min:6',
                'profil' => 'required|image|mimes:jpeg,png,jpg,gif|max:3048',
                'linkedin' => 'nullable',
                'instagram' => 'nullable',
            ],
            [
                'profil.required' => 'Profil harus diisi',
                'profil.image' => 'Profil harus berupa gambar',
                'profil.mimes' => 'Profil harus berupa JPEG, PNG, JPG, GIF',
                'profil.max' => 'Profil tidak boleh lebih besar dari 2MB',
                'linkedin.url' => 'Linkedin harus berupa URL',
                'instagram.url' => 'Instagram harus berupa URL',
                'jabatan.required' => 'Jabatan harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email harus berupa alamat email yang valid',
                'email.unique' => 'Email sudah terdaftar',
                'password.required' => 'Password harus diisi',
                'password.min' => 'Password harus memiliki minimal 6 karakter',
                'nama.required' => 'Nama harus diisi',
            ]
        );

        $profil = $request->file('profil');
        $filename = time() . '-' . uniqid() . '.' . $profil->getClientOriginalExtension();
        $profil->move(public_path('uploads/karyawan'), $filename);

        Karyawan::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'profil' => 'uploads/karyawan/' . $filename,
            'linkedin' => $request->linkedin,
            'instagram' => $request->instagram
        ]);
        return redirect()->back()->with('success', 'Karyawan berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        if ($karyawan->profil && file_exists(public_path($karyawan->profil))) {
            unlink(public_path($karyawan->profil));
        }
        $karyawan->delete();
        return redirect()->back()->with('success', 'Karyawan berhasil dihapus');
    }

    public function adminEditKaryawan($id)
    {
        $karyawan = Karyawan::findOrFail($id);
        return view('admin.edit-karyawan', compact('karyawan'));
    }

    public function update(Request $request, $id)
    {
        $karyawan = Karyawan::findOrFail($id);
        $request->validate(
            [
                'nama' => 'required',
                'jabatan' => 'required',
                'email' => 'required|email|unique:karyawan,email,' . $karyawan->id,
                'linkedin' => 'nullable',
                'instagram' => 'nullable',
                'password' => 'nullable|min:6',
                'profil' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:3048',
            ],
            [
                'jabatan.required' => 'Jabatan harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email harus berupa alamat email yang valid',
                'email.unique' => 'Email sudah terdaftar',
                'nama.required' => 'Nama harus diisi',
                'password.min' => 'Password harus memiliki minimal 6 karakter',
                'profil.image' => 'Profil harus berupa gambar',
                'profil.mimes' => 'Profil harus berupa JPEG, PNG, JPG, GIF',
                'profil.max' => 'Profil tidak boleh lebih besar dari 3MB',
            ]
        );

        if ($request->hasFile('profil')) {
            if ($karyawan->profil && file_exists(public_path($karyawan->profil))) {
                unlink(public_path($karyawan->profil));
            }
            $profil = $request->file('profil');
            $filename = time() . '-' . uniqid() . '.' . $profil->getClientOriginalExtension();
            $profil->move(public_path('uploads/karyawan'), $filename);
            $karyawan->profil = 'uploads/karyawan/' . $filename;
        }

        $karyawan->nama = $request->nama;
        $karyawan->jabatan = $request->jabatan;
        $karyawan->email = $request->email;
        if ($request->password) {
            $karyawan->password = Hash::make($request->password);
        }
        $karyawan->linkedin = $request->linkedin;
        $karyawan->instagram = $request->instagram;
        $karyawan->save();
        return redirect()->back()->with('success', 'Karyawan berhasil diupdate');
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

