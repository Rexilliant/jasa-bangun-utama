<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    protected $table = 'konsultasi';
    protected $fillable = [
        'nama', 'no_wa', 'lokasi', 'kategori_id', 'estimasi_biaya', 'kebutuhan'
    ];
    public function kategori()
    {
        return $this->belongsTo(KategoriProyek::class, 'kategori_id');
    }
}
