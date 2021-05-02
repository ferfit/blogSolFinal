<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = [
        'titulo', 'contenido','imagen','titulo_en', 'contenido_en','slug_en','titulo_it', 'contenido_it','slug_it'
    ];
}
