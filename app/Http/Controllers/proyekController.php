<?php

namespace App\Http\Controllers;

use App\Models\DokumentasiProyek;
use App\Models\KategoriProyek;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class proyekController extends Controller
{
    public function adminProyek()
    {
        $proyeks = Proyek::all();
        return view('admin.proyek', compact('proyeks'));
    }

    public function adminTambahProyek()
    {
        $kategoris = KategoriProyek::all();
        return view('admin.tambah-proyek', compact('kategoris'));
    }

    public function store(Request $request)
    {
        $request->validate(
            [
                'kategori_id' => 'required|exists:kategori_proyek,id',
                'nama' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'detail' => 'required|string',
                'thumbnail' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'vidio' => 'required',
                'dokumentasi.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg,webp|max:3048',
                'slug' => 'nullable|string',
            ],
            [
                'kategori_id.required' => 'Kategori proyek harus dipilih',
                'kategori_id.exists' => 'Kategori proyek tidak ditemukan',
                'nama.required' => 'Nama proyek harus diisi',
                'deskripsi.required' => 'Deskripsi proyek harus diisi',
                'detail.required' => 'Detail proyek harus diisi',
                'thumbnail.required' => 'Thumbnail proyek harus diupload',
                'thumbnail.image' => 'Thumbnail proyek harus berupa gambar',
                'thumbnail.mimes' => 'Thumbnail proyek harus berupa JPEG, PNG, JPG, GIF, SVG, atau WebP',
                'thumbnail.max' => 'Thumbnail proyek tidak boleh lebih besar dari 3MB',
                'vidio.required' => 'Vidio proyek harus diisi',
                'dokumentasi.*.required' => 'Dokumentasi proyek harus diupload',
                'dokumentasi.*.image' => 'Dokumentasi proyek harus berupa gambar',
                'dokumentasi.*.mimes' => 'Dokumentasi proyek harus berupa JPEG, PNG, JPG, GIF, SVG, atau WebP',
                'dokumentasi.*.max' => 'Dokumentasi proyek tidak boleh lebih besar dari 3MB',
            ]
        );

        $proyek = new Proyek();
        $proyek->kategori_id = $request->kategori_id;
        $proyek->nama = $request->nama;
        $proyek->deskripsi = $request->deskripsi;
        $proyek->detail = $request->detail;
        $proyek->vidio = $request->vidio;
        $proyek->karyawan_id = Auth::guard('karyawan')->user()->id;

        $baseSlug = $request->slug ? Str::slug($request->slug) : Str::slug($request->nama);
        $slug = $baseSlug;
        $i = 2;
        while (Proyek::where('slug', $slug)->exists()) {
            $slug = $baseSlug . '-' . $i;
            $i++;
        }
        $proyek->slug = $slug;

        $thumbnail = $request->file('thumbnail');
        $thumbnailPath = 'uploads/proyek';
        $thumbnailFilename = time() . '_' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
        $thumbnail->move(public_path($thumbnailPath), $thumbnailFilename);
        $proyek->thumbnail = $thumbnailPath . '/' . $thumbnailFilename;
        $proyek->save();

        if ($request->hasFile('dokumentasi')) {
            foreach ($request->file('dokumentasi') as $dokumentasi) {
                $dokumentasiPath = 'uploads/dokumentasi';
                $dokumentasiFilename = time() . '_' . uniqid() . '.' . $dokumentasi->getClientOriginalExtension();
                $dokumentasi->move(public_path($dokumentasiPath), $dokumentasiFilename);
                DokumentasiProyek::create([
                    'proyek_id' => $proyek->id,
                    'gambar' => $dokumentasiPath . '/' . $dokumentasiFilename,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Proyek berhasil ditambahkan');
    }

    public function adminEditProyek($id)
    {
        $proyek = Proyek::find($id);
        $kategoris = KategoriProyek::all();
        $dokumentasis = DokumentasiProyek::where('proyek_id', $id)->get();
        return view('admin.edit-proyek', compact('proyek', 'kategoris', 'dokumentasis'));
    }

    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'kategori_id' => 'required|exists:kategori_proyek,id',
                'nama' => 'required|string|max:255',
                'deskripsi' => 'required|string',
                'detail' => 'required|string',
                'thumbnail' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp',
                'vidio' => 'required',
            ],
            [
                'kategori_id.required' => 'Kategori proyek harus dipilih',
                'kategori_id.exists' => 'Kategori proyek tidak ditemukan',
                'nama.required' => 'Nama proyek harus diisi',
                'deskripsi.required' => 'Deskripsi proyek harus diisi',
                'detail.required' => 'Detail proyek harus diisi',
                'thumbnail.image' => 'Thumbnail proyek harus berupa gambar',
                'thumbnail.mimes' => 'Thumbnail proyek harus berupa JPEG, PNG, JPG, GIF, SVG, atau WebP',
                'vidio.required' => 'Vidio proyek harus diisi',
            ]
        );

        $proyek = Proyek::find($id);
        $baseSlug = $request->slug ? Str::slug($request->slug) : Str::slug($request->nama);
        $slug = $baseSlug;
        $i = 2;
        while (Proyek::where('slug', $slug)->where('id', '<>', $id)->exists()) {
            $slug = $baseSlug . '-' . $i;
            $i++;
        }
        $proyek->kategori_id = $request->kategori_id;
        $proyek->nama = $request->nama;
        $proyek->deskripsi = $request->deskripsi;
        $proyek->detail = $request->detail;
        $proyek->vidio = $request->vidio;
        $proyek->karyawan_id = Auth::guard('karyawan')->user()->id;

        if ($request->hasFile('thumbnail')) {
            if ($proyek->thumbnail && file_exists(public_path($proyek->thumbnail))) {
                unlink(public_path($proyek->thumbnail));
            }
            $thumbnail = $request->file('thumbnail');
            $folderPath = 'uploads/proyek';
            $filename = time() . '-' . uniqid() . '.' . $thumbnail->getClientOriginalExtension();
            $thumbnail->move(public_path($folderPath), $filename);
            $proyek->thumbnail = $folderPath . '/' . $filename;
        }

        $proyek->slug = $slug;
        $proyek->update();

        return redirect()->back()->with('success', 'Proyek berhasil diupdate');
    }

    public function destroy($id)
    {
        $proyek = Proyek::findOrFail($id);
        if ($proyek->thumbnail && file_exists(public_path($proyek->thumbnail))) {
            unlink(public_path($proyek->thumbnail));
        }
        $proyek->delete();
        return redirect()->back()->with('success', 'Proyek berhasil dihapus');
    }
}
