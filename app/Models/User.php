<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = [
        'nama',
        'email',
        'password',
        'role',
    ];

    public function siswaPkl()
    {
        return $this->hasOne(SiswaPkl::class, 'ID_User');
    }

    public function pembimbingLapangan()
    {
        return $this->hasOne(PembimbingLapangan::class, 'ID_User');
    }

    public function pembimbingSekolah()
    {
        return $this->hasOne(PembimbingSekolah::class, 'ID_User');
    }
}
