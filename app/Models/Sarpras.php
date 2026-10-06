<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sarpras extends Model
{
    protected $table = 'sarpras';

    protected $fillable = [
        'nama',
        'icon',
        'deskripsi',
        'gambar',
        'gambar2',
        'gambar3',
        'urutan',
    ];
}