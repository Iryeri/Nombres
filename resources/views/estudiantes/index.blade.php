@extends('layouts.especial')
@extends('EstudiantesModal.modalEstudiantes')
@section('content')
    <head>
        
        <title>Estudiantes</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> 
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"><script src="https://code.jquery.com/jquery-3.1.1.slim.min.js">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="js/transaccionesDeEstudiantes.js"></script>
        <script src="js/buscador.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>
    </head>

    <body>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-40">
                    <div class="card">
                        <div class="card-header"><h4><b><center>Registro  de Estudiantes</center></b></h4></div>
                            <div class="card-body">
                                
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarEstudiante">Registrar</button>                                    </p>
                                    </div>
                                </div>

                                <ul class="list-group">
                                    <table id="dataTable" class="table table-bordered table-striped table-dark">
                                        <thead>
                                            <tr>
                                                <th scope="col"><center>Identificador</center></th>
                                                <th scope="col"><center>Nombre</center></th>
                                                <th scope="col"><center>Apellido</center></th>
                                                <th scope="col"><center>Acción<center></th>
                                            </tr>
                                        </thead>

                                        <tfoot>
                                            </tr>
                                                <th scope="col"><center>Identificador</center></th>
                                                <th scope="col"><center>Nombre</center></th>
                                                <th scope="col"><center>Apellido</center></th>
                                                <th scope="col"><center>Acción<center></th>
                                            </tr>
                                        </tfoot>

                                        <tbody>
                                            @foreach($estudiantes as $estudiante)
                                            <tr>
                                                <td>{{$estudiante->idEstudiante}}</td>
                                                <td>{{$estudiante->nombre}}</td>
                                                <td>{{$estudiante->apellido}}</td>
                                                <td>
                                                    <a href="#" class="btn btn-primary btnMostrar">Mostrar</a>    
                                                    <a href="#" class="btn btn-success btnEditar">Editar</a>
                                                    <a href="#" class="btn btn-danger btnEliminar">Eliminar</a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <center><a href="/home" class="btn btn-dark">Ir al menú principal</a></center>
            </div>
        </div> 
    </body>  
@endsection