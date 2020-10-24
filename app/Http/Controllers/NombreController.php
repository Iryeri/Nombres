<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Nombre;
use Redirect,Response;

class NombreController extends Controller
{

    //LISTAR
    public function index()
	{
		$nombres = Nombre::all();
		return view('nombres.index',compact('nombres'));
    }


    public function store(Request $request)
    {
        $this->validate($request,
        [
            'nombre'=>'required',
            'apellido'=>'required',
        ]);
        $emps = new Nombre;
        $emps->nombre = $request->input('nombre');
        $emps->apellido = $request->input('apellido');
    
        $emps->save();
        return redirect('/nombres')->with('success', '¡Cliente registrado exitosamente!');

    }
 
    
    public function update(Nombre $nombre)
    {
        $this->validate(request(),
        [
            'nombre' => 'required',
            'apellido' => 'required',
        ]);
        $nombre->update(request()->all());
        /*
        $this->validate(request(),
        [
            'nombre' => 'required',
            'apellido' => 'required',
        ]);
        $nombre->update(request()->all());
        */
        return redirect('/nombres')->with('success', '¡Cliente actualizado exitosamente!');
    }


    public function destroy(Nombre $nombre) //$id
    {
        $nombre->delete();

        /*
        $emps = Nombre::find($id);
        $emps->delete();
        */
        return redirect('/nombres')->with('success', '¡Registro eliminado!');
    }

}
