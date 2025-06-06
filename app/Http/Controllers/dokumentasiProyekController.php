<?php

namespace App\Http\Controllers;

use App\Models\DokumentasiProyek;
use App\Models\Proyek;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class dokumentasiProyekController extends Controller
{
    public function store (Request $request,$id) {
        $request->validate([
            'dokumentasi.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ],
        [
            'dokumentasi.*.required' => 'Dokumentasi proyek harus diupload',
            'dokumentasi.*.image' => 'Dokumentasi proyek harus berupa gambar',
            'dokumentasi.*.mimes' => 'Dokumentasi proyek harus berupa JPEG, PNG, JPG, atau GIF',
            'dokumentasi.*.max' => 'Dokumentasi proyek tidak boleh lebih besar dari 2MB',
        ]);

        $proyek = Proyek::find($id);

        if (!$proyek) {
            return redirect()->back()->with('error', 'Proyek tidak ditemukan');
        }

        foreach ($request->file('dokumentasi') as $dokumentasi) {
            $dokumentasiFilename = time().'_'. uniqid().'.' . $dokumentasi->getClientOriginalExtension();
            $dokumentasiPath = 'app/public/uploads/dokumentasi';
            $dokumentasi->move(storage_path($dokumentasiPath), $dokumentasiFilename);
            $dokumentasiProyek = new DokumentasiProyek();
            $dokumentasiProyek->proyek_id = $proyek->id;
            $dokumentasiProyek->gambar = 'uploads/dokumentasi/'.$dokumentasiFilename;
            $dokumentasiProyek->save();
        }

        return redirect()->back()->with('success', 'Dokumentasi proyek berhasil diupload');

    }
    public function destroy($id)
    {
        $dokumentasi = DokumentasiProyek::findOrFail($id);
        // Hapus file gambarnya jika ada
        if ($dokumentasi->gambar && Storage::disk('public')->exists($dokumentasi->gambar)) {
            Storage::disk('public')->delete($dokumentasi->gambar);
        }
        $dokumentasi->delete();
        return redirect()->back()->with('success', 'Dokumentasi proyek berhasil dihapus');
    }
}
