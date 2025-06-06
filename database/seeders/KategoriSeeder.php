<?php

namespace Database\Seeders;

use App\Models\KategoriProyek;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KategoriProyek::create([
            'nama' => 'Desain',
            'slug' => 'desain',
        ]);
        KategoriProyek::create([
            'nama' => 'Bangun Baru',
            'slug' => 'bangun-baru',
        ]);
        KategoriProyek::create([
            'nama' => 'Renovasi',
            'slug' => 'renovasi',
        ]);
    }
}
