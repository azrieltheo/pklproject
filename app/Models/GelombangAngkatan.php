<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GelombangAngkatan extends Model
{
    use HasFactory;

    protected $table = 'gelombang_angkatans';

    protected $fillable = [
        'ID_GelombangAngkatan',
        'ID_Angkatan',
    ];

    public function jadwalKegiatan()
    {
        return $this->hasMany(JadwalKegiatan::class, 'ID_GelombangAngkatan');
    }
}
