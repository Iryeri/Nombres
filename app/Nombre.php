<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nombre extends Model
{
    protected $primaryKey = 'idNombre';

    protected $fillable = 
    [
        'nombre', 
        'apellido',
    ];
}
