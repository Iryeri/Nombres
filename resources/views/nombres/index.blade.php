@extends('modalDeNombres.nombres')

    <head>        
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
        <script src="{{ asset('js/buscador.js') }}?v=<?php echo(rand()); ?>"defer></script>
        <p>             
        </p>
    </head>

<body>
<!--AQUÍ ESTABAN LOS MODAL-->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-40">
                <div class="card"><!--CUADRO GENERAL-->
                    <div class="card-header"><h4><b><center>Registro  de nombres</center></b></h4></div>
                        <div class="alert alert-danger" role="alert">
                            1- Pasar id por los botones del modal
                            2- Al editar no agregar espacios por ejemplo Iryeri Sofia, únicamente una palabra por campo.
                                Esto porque no es el parámetro id el que se pasa para llamar al modal.
                        </div>
                        @if(count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all()  as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(\Session::has('success'))
                            <div class="alert alert-success">
                                <p>{{\Session::get('success')}}</p>
                            </div>
                        @endif

                        <!--UN CUADRO DENTRO DEL BORDE GRIS CON TÍTULO-->
                        <div class="card-body">

                            <div class="row"> <!--BOTÓN MODAL AGREGAR-->
                                <div class="col-lg-12 margin-tb">
                                    <p>
                                        <button type="button" class="btn btn-success" data-toggle="modal" data-target="#ModalAgregar">Agregar</button>
                                    </p>
                                </div>
                            </div>

                            <ul class="list-group">
      <!--                      <table id="DatosDeNombres" class="table table-bordered table-striped table-dark">
                                    <tbody>
                                        <tr>
                                            <th scope="col">Identificador</th>
                                            @foreach($nombres as $nombre)
                                                <td><center>{{ $nombre->idNombre}}</center></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <th scope="col">Nombre</th>
                                            @foreach($nombres as $nombre)
                                                <td><center>{{ $nombre->nombre}}</center></td>
                                                <td><center>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEditarNombre">Editar</button>
                                                </center></td>
                                            @endforeach
                                        </tr>
                                        <tr>
                                            <th scope="col">Apellido</th>
                                            @foreach($nombres as $nombre)
                                                <td><center>{{$nombre->apellido}}</center></td>
                                                <td><center>
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#ModalEditarApellido">Editar</button>
                                                </center></td>
                                            @endforeach
                                        </tr>
                                    </tbody>
                                </table>
      -->

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
                                        @foreach($nombres as $nombre)
                                        <tr>
                                            <td>{{$nombre->idNombre}}</td>
                                            <td>{{$nombre->nombre}}</td>
                                            <td>{{$nombre->apellido}}</td>
                                            <td>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#">Mostrar</button>
                                                <button type="button" class="btn btn-success" data-toggle="modal" data-target="#{{$nombre->nombre}}">Editar</button>    
                                                <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#{{$nombre->apellido}}">Eliminar</button>                                                
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </ul><!--AQUÍ VA LA TABLA-->


                        </div><!--UN CUADRO DENTRO DEL BORDE GRIS CON TÍTULO-->
                    </div><!--UN CUADRO CON TÍTULO-->
                </div><!--CUADRO GENERAL-->
            </div>
            <br>
            <center><a href="/home" class="btn btn-dark">Ir al menú principal</a></center>
        </div>
    </div>








<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

<!--EL BUSCADOR DE TABLAS-->
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

</body>




