<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//ese slider es el carrusel de arriba y no tiene nada q ver OKAS
class Slider extends Model
{
    use HasFactory;

    protected $table = 'sliders';
    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'ruta',
        'estado',
        'posicion',
    ];
}
