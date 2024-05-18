<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bahan extends Model
{
    use HasFactory;

    protected $table = 'bahans';

    protected $fillable = [
        'id_resep',
        'id_bahan',
        'nama_bahan',
        'takaran',
        'satuan'
    ];

    public function resep()
    {
        return $this->belongsTo(Resep::class, 'id_resep');
    }
}
