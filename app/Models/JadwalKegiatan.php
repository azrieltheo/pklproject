<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKegiatan extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kegiatans';

    protected $fillable = [
        'Tanggal',
        'Deskripsi',
        'ID_GelombangAngkatan',
    ];

    public function gelombangAngkatan()
    {
        return $this->belongsTo(GelombangAngkatan::class, 'ID_GelombangAngkatan');
    }
}
