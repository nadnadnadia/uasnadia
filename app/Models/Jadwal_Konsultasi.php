<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal_Konsultasi extends Model
{
    use HasFactory;

    protected $table = 'jadwal_konsultasi';

    protected $fillable = [
        'no_jadwal',
        'NIK',
        'nama',
        'jam',
        'hari'
    ];
}
