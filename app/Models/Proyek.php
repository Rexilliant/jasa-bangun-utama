<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Proyek extends Model
{
    protected $table = 'proyek';
    protected $fillable = [
        'nama', 'kategori_id', 'deskripsi', 'detail', 'thumbnail', 'vidio', 'slug', 'karyawan_id'
    ];
    public function kategori()
    {
        return $this->belongsTo(KategoriProyek::class, 'kategori_id', 'id');
    }

    public function karyawan()
    {
        return $this->belongsTo(Karyawan::class, 'karyawan_id', 'id');
    }
}
