<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawan';
    protected $fillable = [
          'nama', 'email', 'password', 'jabatan', 'instagram', 'linkedin'
    ];
    public function proyek()
    {
        return $this->hasMany(Proyek::class, 'karyawan_id', 'id');
    }

    public function testimoni()
    {
        return $this->hasMany(Testimoni::class, 'karyawan_id', 'id');
    }
}
