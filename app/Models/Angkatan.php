<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angkatan extends Model
{
    use HasFactory;

    protected $table = 'angkatans';

    protected $fillable = [
        'Tahun',
        'Semester',
    ];

    public function gelombangAngkatan()
    {
        return $this->hasMany(GelombangAngkatan::class, 'ID_Angkatan');
    }
}
