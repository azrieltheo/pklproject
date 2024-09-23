<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiswaPkl extends Model
{
    use HasFactory;

    protected $table = 'siswa_pkl';

    protected $fillable = [
        'ID_User',
        'DataDiri',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_User');
    }
}
