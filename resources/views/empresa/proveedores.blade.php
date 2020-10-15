@extends('adminlte::page')
@section('title', 'admin')

@section('plugins.Sweetalert2', true)
    
@section('content_header')
    <h1>Proveedores</h1>
@stop

@section('content')
    <button type="button" class="btn btn-info btn-lg mb-3" data-toggle="modal" data-target="#modalNew">Agregar proveedor</button>

    <table class="table text-center">
        <thead class="thead-dark ">
          <tr class="center">
            <th scope="col">Nombre</th>
            <th scope="col">Telefono</th>
            <th scope="col">Correo</th>
            <th scope="col">Direccion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($proveedores as $proveedor)
                <tr>
                    <th scope="row">{{ $proveedor->nombre }}</th>
                    <td>{{ $proveedor->telefono }}</td>
                    <td>{{ $proveedor->correo }}</td>
                    <td>{{ $proveedor->direccion }}</td>
                    <td>
                        <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalEdit"><i class="fas fa-pen"></i></button>
                        <button type="button" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal -->
    <div id="modalNew" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form  method="POST" action="{{ route('crear.proveedores') }}">      
                    @csrf 
                    <div class="modal-header">
                        <h4 class="modal-title">Agregar Proveedores</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" name="nombre" placeholder="Empresa" required="">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-building"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Telefono:</label>
                                <div class="input-group">
                                    <input type="mail" class="form-control input-lg" name="telefono" placeholder="Numero" required="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Correo:</label>
                                <div class="input-group">
                                    <input type="mail" class="form-control input-lg" name="correo" placeholder="Numero" required="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-at"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Dirección:</label>
                                <div class="input-group">
                                    <input type="mail" class="form-control input-lg" name="direccion" placeholder="Numero" required="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-route"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Guardar Proveedor
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modalEdit" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <form  method="POST" action="{{ route('crear.proveedores') }}">      
                    @csrf 
                    <div class="modal-header">
                        <h4 class="modal-title">Editar Proveedores</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="card-body">
                            <div class="form-group">
                                <label>Nombre:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" name="nombre" placeholder="Empresa" required="">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-building"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Telefono:</label>
                                <div class="input-group">
                                    <input type="mail" class="form-control input-lg" name="telefono" placeholder="Numero" required="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-mobile-alt"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Correo:</label>
                                <div class="input-group">
                                    <input type="mail" class="form-control input-lg" name="correo" placeholder="Numero" required="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-at"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Dirección:</label>
                                <div class="input-group">
                                    <input type="mail" class="form-control input-lg" name="direccion" placeholder="Numero" required="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-route"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">
                            Guardar Proveedor
                        </button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">
                            Close
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

