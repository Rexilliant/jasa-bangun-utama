<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriProyekSeeder extends Seeder
{
    public function run()
    {
        DB::table('kategori_proyek')->insert([
            ['id' => 1, 'nama' => 'Bangun Baru', 'slug' => 'bangun-baru'],
            ['id' => 2, 'nama' => 'Renovasi', 'slug' => 'renovasi'],
            ['id' => 3, 'nama' => 'Desain', 'slug' => 'desain'],
        ]);
    }
}

