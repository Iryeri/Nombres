
<!-- INICIO: MODAL AGREGAR-->
<div class="modal fade" id="ModalAgregar" tabindex="-1" aria-labelledby="etiquetaAgregar" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="etiquetaAgregar"><strong><b><i>Agregar nuevo registro</i></b></strong></h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
            <form action="{{ action('NombreController@store') }}" method="POST">
                {{csrf_field()}}
                <div class="modal-body">   
                        <div class="form-row">
                            <label for="nombre"><b>Nombre</b></label>
                            <input type="text" class="form-control" placeholder="Escriba el nombre" name="nombre"/>
                            <br> </br>
                            <label for="apellido"><b>Apellido</b></label>
                            <input type="text" class="form-control" placeholder="Escriba el apellido" name="apellido"/>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-success">Registrar</button>
                </div>
            </form>
        </div>
    </div>
    </div>
<!-- FIN: MODAL AGREGAR-->

@foreach($nombres as $nombre)
    <!-- INICIO: MODAL MOSTRAR-->
    <div class="modal fade" id="" tabindex="-1" aria-labelledby="etiquetaMostrarCliente" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="etiquetaMostrarCliente"><strong><b><i>Editar nombre</i></b></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="/nombres/{{$nombre->idNombre}}" method="POST">
                    <div class="modal-body">   
                            <div class="form-row">
                                <label for="nombre"><b>Nombre</b></label>
                                <input type="text" class="form-control" id="nombre" readonly="nombre" value="{{$nombre->nombre}}"/>
                                <br> </br>
                                <label for="apellido"><b>Apellido</b></label>
                                <input type="text" class="form-control" id="apellido" readonly="apellido" value="{{$nombre->apellido}}"/>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    <!-- FIN: MODAL MOSTRAR-->


    <!-- INICIO: MODAL EDITAR-->
    <div class="modal fade" id="{{$nombre->nombre}}" tabindex="-1" aria-labelledby="etiquetaEditarCliente" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="etiquetaEditarCliente"><strong><b><i>Editar nombre</i></b></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="/nombres/{{$nombre->idNombre}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('PUT') }}
                    <div class="modal-body">   
                            <div class="form-row">
                                <label for="nombre"><b>Nombre</b></label>
                                <input type="text" class="form-control" name="nombre" placeholder="Escriba el nombre" value="{{$nombre->nombre}}"/>
                                <br> </br>
                                <label for="apellido"><b>Apellido</b></label>
                                <input type="text" class="form-control" name="apellido" placeholder="Escriba el apellido" value="{{$nombre->apellido}}"/>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">Guardar cambios</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    <!-- FIN: MODAL EDITAR-->



    <!-- INICIO: MODAL ELIMINAR-->
    <div class="modal fade" id="{{$nombre->apellido}}" tabindex="-1" aria-labelledby="etiquetaEliminarCliente" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="etiquetaEliminarCliente"><strong><b><i><center>Eliminar Cliente</center></i></b></strong></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
                <form action="/nombres/{{$nombre->idNombre}}" method="POST">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <div class="modal-body">   
                            <div class="form-row">
                            <input type="hidden" name="_method" value="DELETE"/>

                            <label for="nombre"><b>Nombre</b></label>
                            <input type="text" class="form-control" id="nombre" readonly="nombre" value="{{$nombre->nombre}}"/>
                            <br> </br>
                            <label for="apellido"><b>Apellido</b></label>
                            <input type="text" class="form-control" id="apellido" readonly="apellido" value="{{$nombre->apellido}}"/>
                            </div>
                            <div class="form-row">
                            <p> </p>   
                            <center><b>¿Está seguro(a) que desea eliminar este registro?</b></center>
                            </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn btn-success">¡Sí, eliminar!</button>
                    </div>
                </form>
            </div>
        </div>
        </div>
    <!-- FIN: MODAL ELIMINAR-->
@endforeach