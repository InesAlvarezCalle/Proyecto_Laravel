<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ciudad extends Model
{
    protected $table = 'ciudades';
    public $timestamp = false;
    protected $fillable = [
        'nombre',
        'pais',
        'poblacion',
        'zona_horaria',
        'latitud',
        'longitud',
        'elevacion',
        'anyo_fundacion',
    ];
}
