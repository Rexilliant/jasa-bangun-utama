<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class KategoriProyek extends Model
{
    protected $table = 'kategori_proyek';
    protected $fillable = [
        'nama',
        'slug',
    ];
    public function proyek()
    {
        return $this->hasMany(Proyek::class, 'kategori_id', 'id');
    }

    public function konsultasi()
    {
        return $this->hasMany(Konsultasi::class, 'kategori_id', 'id');
    }
}
