<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GelombangAngkatan extends Model
{
    use HasFactory;

    
    protected $table = 'gelombang_angkatan';

    protected $fillable = [
        'angkatan_id',
        'nama_gelombang',
        'waktu_mulai',
        'waktu_selesai',
    ];
}
