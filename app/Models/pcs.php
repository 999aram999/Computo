<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pcs extends Model
{
    use HasFactory;
    protected $fillable = 
    [
        'Num',
        'Marca',
        'Monitor',
        'RAM',
        'Procesador',
        'Estatus',
        'Conexion',
    ];
}
