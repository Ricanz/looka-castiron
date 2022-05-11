<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    protected $fillable = [
        'nama',
        'gambar',
        'detail_gambar',
        'deskripsi',
        'link',
        'kategori_id'
    ];

    public function kategori()
    {
        return $this->BelongsTo(Kategori::class, 'kategori_id', 'id');
    }
}
