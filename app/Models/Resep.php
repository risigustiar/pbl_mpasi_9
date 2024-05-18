<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resep extends Model
{
    use HasFactory;

    protected $table = 'reseps';

    protected $fillable = [
        'id_resep',
        'id',
        'nama_resep',
        'cara_pembuatan',
        'usia',
        'kategori',
        'gambar',
    ];

    public function bahans()
    {
        return $this->hasMany(Bahan::class, 'id_resep');
    }

    public function gizis()
    {
        return $this->hasOne(Gizi::class, 'id_resep');
    }
}
