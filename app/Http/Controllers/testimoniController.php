<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;


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
        $validated = $request->validate(
            [
                'nama' => 'required',
                'komentar' => 'required',
                'gambar' => 'nullable|image|mimes:jpeg,png,jpg', // max 5MB
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'komentar.required' => 'Komentar harus diisi',
                'gambar.image' => 'Gambar harus berupa file gambar',
                'gambar.mimes' => 'Gambar harus berekstensi jpeg, png, jpg',
            ]
        );

        $testimoni = new Testimoni();
        $testimoni->nama = $validated['nama'];
        $testimoni->karyawan_id = 1;
        $testimoni->komentar = $validated['komentar'];

        if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
            $gambar = $request->file('gambar');
            $originalExtension = strtolower($gambar->getClientOriginalExtension());
            $namaFile = time() . '.' . ($originalExtension === 'svg' ? 'svg' : 'jpg');
            $fullPath = storage_path('app/public/testimoni/' . $namaFile);

            if ($originalExtension === 'svg') {
                $gambar->move(storage_path('app/public/testimoni'), $namaFile);
            } else {
                $manager = new ImageManager(new Driver());
                $image = $manager->read($gambar->getRealPath());

                $maxSize = 200 * 1024;
                $quality = 80;

                do {
                    switch ($originalExtension) {
                        case 'jpg':
                        case 'jpeg':
                            $encoded = $image->toJpeg($quality);
                            break;
                        case 'png':
                            $encoded = $image->toPng(intval(9 - ($quality / 100 * 9)));
                            break;
                        case 'gif':
                            $encoded = $image->toGif();
                            break;
                        case 'webp':
                            $encoded = $image->toWebp($quality);
                            break;
                        default:
                            $encoded = $image->toJpeg($quality);
                    }
                    // Hapus file sebelumnya jika ada sebelum save baru
                    if (file_exists($fullPath)) {
                        unlink($fullPath);
                    }
                    $encoded->save($fullPath);
                    $currentSize = filesize($fullPath);
                    $quality -= 5;
                } while ($currentSize > $maxSize && $quality > 10);
            }

            $testimoni->gambar = 'testimoni/' . $namaFile;
        }

        $testimoni->save();

        return redirect()->back()->with('success', 'Testimoni berhasil ditambahkan');
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate(
            [
                'nama' => 'required',
                'komentar' => 'required',
                'gambar' => 'image|mimes:jpeg,png,jpg',
            ],
            [
                'nama.required' => 'Nama harus diisi',
                'komentar.required' => 'Komentar harus diisi',
                'gambar.image' => 'Gambar harus berupa file gambar',
                'gambar.mimes' => 'Gambar harus berekstensi jpeg, png, jpg',
            ]
        );

        $testimoni = Testimoni::find($id);
        $testimoni->nama = $validated['nama'];
        $testimoni->karyawan_id = 1;
        $testimoni->komentar = $validated['komentar'];

        if ($request->hasFile('gambar') && $request->file('gambar')->isValid()) {
            $gambar = $request->file('gambar');
            $originalExtension = strtolower($gambar->getClientOriginalExtension());
            $namaFile = time() . '.' . ($originalExtension === 'svg' ? 'svg' : 'jpg'); // convert to jpg kecuali svg
            $fullPath = storage_path('app/public/testimoni/' . $namaFile);

            // Hapus gambar lama jika ada
            if ($testimoni->gambar && Storage::disk('public')->exists($testimoni->gambar)) {
                Storage::disk('public')->delete($testimoni->gambar);
            }

            if ($originalExtension === 'svg') {
                // Khusus SVG, langsung pindahkan tanpa compress
                $gambar->move(storage_path('app/public/testimoni'), $namaFile);
            } else {
                // === Kompresi Gambar ===
                $manager = new ImageManager(new Driver());
                $image = $manager->read($gambar->getRealPath());

                $maxSize = $maxSize = 200 * 1024;
                $quality = 80;

                do {
                    switch ($originalExtension) {
                        case 'jpg':
                        case 'jpeg':
                            $encoded = $image->toJpeg($quality);
                            break;
                        case 'png':
                            $encoded = $image->toPng(intval(9 - ($quality / 100 * 9))); // 0-9
                            break;
                        case 'gif':
                            $encoded = $image->toGif();
                            break;
                        case 'webp':
                            $encoded = $image->toWebp($quality);
                            break;
                        default:
                            $encoded = $image->toJpeg($quality); // fallback
                    }

                    $encoded->save($fullPath);
                    $currentSize = filesize($fullPath);
                    $quality -= 5;
                } while ($currentSize > $maxSize && $quality > 10);
            }

            $testimoni->gambar = 'testimoni/' . $namaFile;
        }

        $testimoni->save();

        return redirect()->back()->with('success', 'Testimoni berhasil diedit');
    }
    public function destroy($id)
    {
        $testimoni = Testimoni::findOrFail($id);
        // Hapus file gambarnya jika ada
        if ($testimoni->gambar && Storage::disk('public')->exists($testimoni->gambar)) {
            Storage::disk('public')->delete($testimoni->gambar);
        }
        $testimoni->delete();
        return redirect()->back()->with('success', 'Testimoni berhasil dihapus');
    }
}
