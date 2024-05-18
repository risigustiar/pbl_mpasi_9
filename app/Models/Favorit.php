<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorit extends Model
{
    use HasFactory;

    protected $table = 'favorits'; // Nama tabel yang sesuai

    protected $fillable = [
        'id',
        'id_resep',
        'tanggal',
        'created_at',
    ];

    // Relasi dengan model User
    public function user()
    {
        return $this->belongsTo(User::class, 'id', 'id');
    }

    // Relasi dengan model Resep
    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep','id_resep');
    }
}
