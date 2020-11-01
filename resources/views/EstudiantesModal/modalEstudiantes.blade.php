
<link rel="stylesheet" type="text/css" href="css/modal.css">


<!--TAMAÑOS

modal-dialog modal-xl
modal-dialog modal-lg
modal-dialog modal-sm


SCROLL
modal-dialog modal-dialog-scrollable


-->



<!--MODALS-->
    <!-- MODAL AGREGAR-->
    <div class="modal fade" id="agregarEstudiante" tabindex="-1" aria-labelledby="labelAgregarEstudiante" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center col-11 text-center" id="labelAgregarEstudiante">Nuevo Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="agregarForm">
                        <div class="modal-body">
                            {{ csrf_field() }}
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
                            <button type="submit" class="btn btn-success">Registrar Estudiante</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL AGREGAR-->


    <!-- MODAL MOSTRAR-->
        <div class="modal fade" id="mostrarEstudiante" tabindex="-1" aria-labelledby="labelMostrarEstudiante" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title col-11 text-center" id="labelMostrarEstudiante">Mostrar Registro</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form id="mostrarForm">
                        <div class="modal-body">
                            <div class="form-row">
                                <input type="hidden" name="id" id="idMostrar">
                                <label for="nombre"><b>Nombre</b></label>
                                <input type="text" class="form-control" name="nombre1" readonly="nombre1" id="nombre1"/>
                                <br> </br>
                                <label for="apellido"><b>Apellido</b></label>
                                <input type="text" class="form-control" name="apellido1" readonly="apellido1" id="apellido1"/>
                            </div>

                            
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!--FIN MODAL MOSTRAR-->


    <!-- MODAL EDITAR-->
        <div class="modal fade" id="editarEstudiante" tabindex="-1" aria-labelledby="labelEditarEstudiante" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEditarEstudiante">Editar Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="editarForm">
                            <div class="modal-body">
                                {{ csrf_field() }}
                                {{method_field('PUT')}}
                                <div class="form-row">
                                    <input type="hidden" name="id" id="idEditar">
                                    <label for="nombre"><b>Nombre</b></label>
                                    <input type="text" class="form-control" placeholder="Escriba el nombre" name="nombre" id="nombre"/>
                                    <br> </br>
                                    <label for="apellido"><b>Apellido</b></label>
                                    <input type="text" class="form-control" placeholder="Escriba el apellido" name="apellido" id="apellido"/>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-success">Actualizar registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <!--FIN MODAL EDITAR-->


    <!-- MODAL ELIMINAR-->
        <div class="modal fade" id="eliminarEstudiante" tabindex="-1" aria-labelledby="labelEliminarEstudiante" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title col-11 text-center" id="labelEliminarEstudiante">Eliminar Registro</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form id="eliminarForm">
                            <div class="modal-body">
                                {{ csrf_field() }}
                                {{method_field('DELETE')}}
                                <div class="form-row">
                                    <input type="hidden" name="id" id="idEliminar">
                                    <label for="nombre"><b>Nombre</b></label>
                                    <input type="text" class="form-control" name="nombre3" readonly="nombre3" id="nombre3"/>
                                    <br> </br>
                                    <label for="apellido"><b>Apellido</b></label>
                                    <input type="text" class="form-control" name="apellido3" readonly="apellido3" id="apellido3"/>
                                    <p>
                                        ¿Está seguro que desea eliminar este registro?
                                    </p>
                                </div>

                                
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                                <button type="submit" class="btn btn-secondary">Eliminar registro</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
    <!--FIN MODAL ELIMINAR-->