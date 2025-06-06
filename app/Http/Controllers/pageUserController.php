<?php

namespace App\Http\Controllers;

use App\Models\Testimoni;
use Illuminate\Http\Request;

class pageUserController extends Controller
{
    public function beranda()
    {
        $testimonis = Testimoni::all();
        return view('index', compact('testimonis'));
    }
}
