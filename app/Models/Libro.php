<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    protected $fillable = [
        'titulo',
        'autor',
        'isbn',
        'categoria',
        'cantidad',
        'editorial',
        'anio_publicacion',
    ];
}