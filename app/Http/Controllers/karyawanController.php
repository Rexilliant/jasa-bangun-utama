<?php

namespace App\Http\Controllers;
use App\Models\Karyawan;
use Illuminate\Http\Request;

class karyawanController extends Controller
{
    public function adminKaryawan()
    {
        $karyawans = Karyawan::all();
        return view('admin.karyawan', compact('karyawans'));
    }
}
