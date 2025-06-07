<?php

namespace App\Http\Controllers;

use App\Models\Konsultasi;
use App\Models\Proyek;
use App\Models\Testimoni;
use App\Models\Karyawan;

class DashboardController extends Controller
{
    public function index()
    {
        $proyeks = Proyek::with(['kategori', 'karyawan'])->latest()->get();
        $konsultasis = Konsultasi::with('kategori')->latest()->get();
        $testimonis = Testimoni::all();
        $karyawans = Karyawan::all();

        $jumlahKonsultasi = $konsultasis->count();
        $jumlahProyek = $proyeks->count();
        $jumlahTestimoni = $testimonis->count();
        $jumlahKaryawan = $karyawans->count();

        return view('admin.index', compact(
            'proyeks',
            'konsultasis',
            'jumlahKonsultasi',
            'jumlahProyek',
            'jumlahTestimoni',
            'jumlahKaryawan'
        ));
    }
}
