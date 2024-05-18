<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Riwayat extends Model
{
    use HasFactory;

    protected $riwayat = 'riwayat';

    protected $fillable = [
        'id',
        'id_resep',
        'tanggal',
        'created_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }

    // Relasi dengan model Resep
    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep', 'id_resep');
    }
}
