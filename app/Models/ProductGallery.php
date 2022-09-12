<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductGallery extends Model
{
    use HasFactory;
    protected $table = 'product_galleries';
    protected $fillable = [
        'id',
        'product_id',
        'image',
        'sequence',
        'role',
        'created_at',
        'updated_at'
    ];

    public function product()
    {
        return $this->BelongsTo(Produk::class, 'product_id', 'id');
    }
}
