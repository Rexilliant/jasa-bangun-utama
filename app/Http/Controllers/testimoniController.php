<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class testimoniController extends Controller
{
    public function adminTestimoni()
    {
        $testimonis = Testimoni::all();
        return view('admin.testimoni', compact('testimonis'));
    }

    public function adminEditTestimoni($id)
    {
        $testimoni = Testimoni::find($id);
        return view('admin.edit-testimoni', compact('testimoni'));
    }
    public function store(Request $request)
    {
        $request->validate(
            [
                'nama' => 'required',
                'komentar' => 'required|string|max:255',
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'komentar.required' => 'Komentar harus diisi',
                'komentar.max' => 'Komentar tidak boleh lebih dari 255 karakter',
                'gambar.required' => 'Gambar harus diisi',
                'gambar.image' => 'Gambar harus berupa file gambar',
                'gambar.mimes' => 'Gambar harus berekstensi jpeg, png, jpg',
                'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 5MB',
            ]
        );

        $gambar = time() . '_' . uniqid() . '.' . $request->file('gambar')->getClientOriginalExtension();
        $request->file('gambar')->move(public_path('uploads/testimoni'), $gambar);

        $testimoni = new Testimoni();
        $testimoni->nama = $request->input('nama');
        $testimoni->karyawan_id = Auth::guard('karyawan')->user()->id;
        $testimoni->komentar = $request->input('komentar');
        $testimoni->gambar = 'uploads/testimoni/' . $gambar;
        $testimoni->save();

        return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'nama' => 'required',
                'komentar' => 'required|string|max:255',
                'gambar' => 'required|image|mimes:jpeg,png,jpg|max:5000',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'komentar.required' => 'Komentar harus diisi',
                'komentar.max' => 'Komentar tidak boleh lebih dari 255 karakter',
                'gambar.required' => 'Gambar harus diisi',
                'gambar.image' => 'Gambar harus berupa file gambar',
                'gambar.mimes' => 'Gambar harus berekstensi jpeg, png, jpg',
                'gambar.max' => 'Ukuran gambar tidak boleh lebih dari 5MB',
            ]
        );

        $testimoni = Testimoni::findOrFail($id);
        $testimoni->nama = $request->input('nama');
        $testimoni->karyawan_id = Auth::guard('karyawan')->user()->id;
        $testimoni->komentar = $request->input('komentar');
        if ($request->hasFile('gambar')) {
            // Hapus file gambarnya jika ada
            if ($testimoni->gambar && file_exists(public_path($testimoni->gambar))) {
                unlink(public_path($testimoni->gambar));
            }
            $gambar = time() . '_' . uniqid() . '.' . $request->file('gambar')->getClientOriginalExtension();
            $request->file('gambar')->move(public_path('uploads/testimoni'), $gambar);
            $testimoni->gambar = 'uploads/testimoni/' . $gambar;
        }
        $testimoni->save();

        return redirect()->back()->with('success', 'Testimoni berhasil diperbarui');
    }
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        // Hapus file gambarnya jika ada
        if ($testimoni->gambar && file_exists(public_path($testimoni->gambar))) {
            unlink(public_path($testimoni->gambar));
        }
        $testimoni->delete();
        return redirect()->back()->with('success', 'Testimoni berhasil dihapus');
    }
}
