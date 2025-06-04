<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Models\KategoriProyek;
use Illuminate\Http\Request;

class KonsultasiController extends Controller
{
    public function adminKonsultasi()
    {
        $konsultasis = Konsultasi::with('kategori')->latest()->get();
        return view('admin.konsultasi', compact('konsultasis'));
    }
    
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'nama' => 'required|string|max:255',
                'no_wa' => ['required', 'regex:/^(?:\+62|0)8[0-9]{7,11}$/'],
                'lokasi' => 'required|string',
                'kategori_id' => 'required|exists:kategori_proyek,id',
                'estimasi_biaya' => 'required|string',
                'kebutuhan' => 'required|string',
                'agree' => 'accepted',
            ]);
            
            Konsultasi::create($validated);

            return redirect()->back()->with('success', 'Konsultasi berhasil dikirim!');
        } catch (\Illuminate\Validation\ValidationException $e) {
            // kalau validasi gagal
            return redirect()->back()->withErrors($e->errors())->withInput();
        } catch (\Exception $e) {
            // debug exception
            return redirect()->back()->withErrors('Error: ' . $e->getMessage())->withInput();
        }
    }

    public function show($id)
    {
        $konsultasi = Konsultasi::with('kategori')->findOrFail($id);
        return view('admin.lihat-konsultasi', compact('konsultasi'));
    }

    public function destroy($id)
    {
        $konsultasi = Konsultasi::findOrFail($id);
        $konsultasi->delete();

        return redirect()->back()->with('success', 'Data konsultasi berhasil dihapus');
    }
}
