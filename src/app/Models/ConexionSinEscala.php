<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConexionSinEscala extends Model
{
    protected $table = 'conexiones_sin_escalas';
    public $timestamp = false;
    protected $fillable = [
        'id_aeropuertoOrigen',
        'id_aeropuertoDestino',
    ];
}
