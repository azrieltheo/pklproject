<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatans extends Model
{
    use HasFactory;

   
    protected $table = 'angkatans';  
    
    protected $fillable = [
        'tahun',
        'nama_angkatan',
    ];

    // Relasi ke GelombangAngkatan
    public function gelombangAngkatan()
    {
        return $this->hasMany(GelombangAngkatan::class, 'angkatan_id');  
    }
}
