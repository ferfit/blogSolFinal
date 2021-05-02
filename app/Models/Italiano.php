<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Italiano extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo','subtitulo', 'descripcion','imagen','precioEuro','estado'
    ];

    /* Constantes de estado */
    const ACTIVO = 1;
    const DESACTIVADO = 0;
}
