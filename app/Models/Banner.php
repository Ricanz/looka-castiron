<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;
    protected $table = 'banner';
    protected $fillable = [
        'judul',
        'gambar',
        'deskripsi',
        'sub_judul',
        'status',
        'tombol_text',
        'tombol_link'
    ];
}
