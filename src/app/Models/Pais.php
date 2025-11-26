<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    protected $table = 'paises';
    public $timestamp = false;
    protected $fillable = [
        'nombre',
    ];
}
