<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;
    protected $table = 'galleries';
    protected $filllable = [
        'role', 
        'image', 
        'deskripsi', 
        'status',
        'sequence', 
        'created_at', 
        'updated_at'
    ];
}
