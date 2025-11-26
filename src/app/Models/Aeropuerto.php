<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aeropuerto extends Model
{
    protected $table = 'aeropuertos';
    public $timestamp = false;
    protected $fillable = [
        'nombre',
        'codigo',
        'ciudad',
        'tipo',
        'latitud',
        'longitud',
        'elevacion',
        'terminal',
        'anyo_apertura',
    ];
}