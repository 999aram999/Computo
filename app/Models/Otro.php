<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otro extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'image',
        'titulo',
        'autor',
        'editorial',
        'categoria',
        'estatus',
        'reseña',
        'avance',
        'comAvance',
        'metaAnual',
        'created_at',
        'updated_at',
    ];
}
