<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DokumentasiProyek extends Model
{
    protected $fillable = [
        'proyek_id',
        'gambar',
    ];

    public function proyek()
    {
        return $this->belongsTo(Proyek::class, 'id');
    }
}
