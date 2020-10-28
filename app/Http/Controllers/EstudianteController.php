<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estudiante;

class EstudianteController extends Controller
{
   //LISTAR
    public function index()
    {
       $estudiantes = Estudiante::all();
       return view('estudiantes.index',compact('estudiantes'));
    }


    public function store(Request $request)
    {
        $estudiante = new Estudiante;

        $estudiante->nombre = $request->input('nombre');        
        $estudiante->apellido = $request->input('apellido');
        $estudiante->save();
    }


    public function update(Request $request, $id)
    {
        $estudiante = Estudiante::find($id);

        $estudiante->nombre = $request->input('nombre');        
        $estudiante->apellido = $request->input('apellido');
        $estudiante->save();
    }


    public function delete($id)
    {
        $estudiante = Estudiante::find($id);
        $estudiante->delete();
        return $estudiante;
    }
}
