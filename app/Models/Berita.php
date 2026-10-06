<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berita extends Model
{
    protected $fillable = [
        'judul',
        'slug',
        'isi',
        'gambar',
        'gambar2',
        'gambar3',
        'tanggal',
        'kategori',
    ];
}
