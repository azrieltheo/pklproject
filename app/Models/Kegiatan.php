<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kegiatan extends Model
{
    use HasFactory;

    protected $table = 'kegiatans';

    protected $fillable = [
        'Laporan',
        'Tanggal_Pengumpulan',
        'ID_SiswaPKL',
        'ID_JadwalKegiatan',
    ];

    public function siswaPkl()
    {
        return $this->belongsTo(SiswaPkl::class, 'ID_SiswaPKL');
    }

    public function jadwalKegiatan()
    {
        return $this->belongsTo(JadwalKegiatan::class, 'ID_JadwalKegiatan');
    }
}
