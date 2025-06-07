<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Karyawan extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'karyawan';
    protected $fillable = [
        'nama',
        'email',
        'password',
        'jabatan',
        'instagram',
        'linkedin'
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
