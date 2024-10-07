<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembimbingSekolah extends Model
{
    use HasFactory;

    protected $table = 'pembimbing_sekolah';

    protected $fillable = [
        'id_user', // Perbaiki menjadi huruf kecil
        'nama',
        'instansi'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user'); // Pastikan relasi benar
    }
}
