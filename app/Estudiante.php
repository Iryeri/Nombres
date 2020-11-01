<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estudiante extends Model
{

//ESTABLECER LLAVE PRIMARIA DISTINTA AL ID POR DEFECTO
    protected $primaryKey = 'idEstudiante';


//ATRIBUTOS DE INGRESO MANUAL
    protected $table='estudiantes';
    protected $fillable = 
    [
        'nombre', 
        'apellido',
    ];
}
