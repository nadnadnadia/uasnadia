<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemeriksaan extends Model
{
    use HasFactory;

    protected $table = 'pemeriksaan';

    protected $fillable = [
        'no_hasil',
        'NIK',
        'nama_dokter',
        'tanggal',
        'hasil',
        'rekomendasi'
    ];
}
