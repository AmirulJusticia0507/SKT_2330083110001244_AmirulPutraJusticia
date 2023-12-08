<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GunungApiActivity extends Model
{
    use HasFactory;

    protected $table = 'GunungApiActivity';

    protected $fillable = [
        'lokasi',
        'deskripsi',
        'kedalaman',
        'magnitude',
        'waktu_kejadian',
    ];

    protected $dates = [
        'waktu_kejadian',
    ];
}
