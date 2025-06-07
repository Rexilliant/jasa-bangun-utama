<?php

namespace App\Http\Controllers;

use App\Models\DokumentasiProyek;
use App\Models\Proyek;
use App\Models\Testimoni;
use Illuminate\Http\Request;

class pageUserController extends Controller
{
    public function beranda()
    {
        $proyeks = Proyek::latest()->take(6)->get();
        $bangunbarus = Proyek::where('kategori_id', 2)->latest()->take(6)->get();
        $renovasis = Proyek::where('kategori_id', 3)->latest()->take(6)->get();
        $desains = Proyek::where('kategori_id', 1)->latest()->take(6)->get();
        $testimonis = Testimoni::all();
        return view('index', compact('testimonis', 'proyeks', 'bangunbarus', 'renovasis', 'desains'));
    }
    public function konsultasi()
    {
        $testimonis = Testimoni::all();
        return view('konsultasi', compact('testimonis'));
    }
    public function portofolio()
    {
        $proyeks = Proyek::paginate(8);
        $menu = 'semua';
        return view('portofolio', compact('proyeks', 'menu'));
    }
    public function portofolioDesain(){
        $proyeks = Proyek::where('kategori_id', 1)->paginate(8);
        $menu = 'desain';
        return view('portofolio', compact('proyeks', 'menu'));
    }
    public function portofolioRenovasi(){
        $proyeks = Proyek::where('kategori_id', 3)->paginate(8);
        $menu = 'renovasi';
        return view('portofolio', compact('proyeks', 'menu'));
    }
    public function portofolioBangunbaru(){
        $proyeks = Proyek::where('kategori_id', 2)->paginate(8);
        $menu = 'bangunbaru';
        return view('portofolio', compact('proyeks', 'menu'));
    }
    public function portofolioDetail($slug){
        $proyek = Proyek::where('slug', $slug)->first();
        $proyeks = Proyek::latest()->take(6)->get();
        $bangunbarus = Proyek::where('kategori_id', 2)->latest()->take(6)->get();
        $renovasis = Proyek::where('kategori_id', 3)->latest()->take(6)->get();
        $desains = Proyek::where('kategori_id', 1)->latest()->take(6)->get();
        $testimonis = Testimoni::all();
        $dokumentasis = DokumentasiProyek::where('proyek_id', $proyek->id)->get();
        return view('portofolio-detail', compact('proyek', 'dokumentasis', 'proyeks', 'testimonis', 'bangunbarus', 'renovasis', 'desains'));
    }
}
