<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PembimbingLapangan extends Model
{
    use HasFactory;

    protected $table = 'pembimbing_lapangan';

    protected $fillable = [
        'ID_User',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'ID_User');
    }
}
