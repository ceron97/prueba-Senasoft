@extends('adminlte::page')
@section('title', 'admin')

@section('plugins.Sweetalert2')
    
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
                        <a href="{{route('proveedores.edit',$proveedor->id)}}" class="btn btn-warning" ><i class="fas fa-pen"></i></a>
                        <form action="{{route('proveedores.destroy',$proveedor->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('delete')
                            <button type="submit" class="btn btn-danger"><i class="fas fa-trash"></i></button>
                        </form>
                        
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <!-- Modal Crear  -->
    <div id="modalNew" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Crear usuario</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <form action="{{route('proveedores.store')}}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="card-body">
                            
                            <div class="form-group">
                                <label>Nombre:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" name="nombre" placeholder="Escribe el nombre" required value="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-proveedor"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-group">
                                <label>Telefono:</label>
                                <div class="input-group">
                                    <input type="number" class="form-control input-lg" name="telefono" placeholder="Escribe el telefono" required value="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-proveedor"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label>Correo:</label>
                                <div class="input-group">
                                    <input type="email" class="form-control input-lg" name="correo" placeholder="Escribe el correo" required value="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-proveedor"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label>Dirección:</label>
                                <div class="input-group">
                                    <input type="text" class="form-control input-lg" name="direccion" placeholder="Escribe la direccion" required value="" min="0">
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <i class="fas fa-proveedor"></i>
                                        </div> 
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-group">
                                <label>Empresa:</label>
                                <select class="form-control" name="id_empresa" id="sel1" required>
                                    @foreach ($empresas as $item)
                                        <option value="{{$item->id}}">{{$item->nombre}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success" >Agregar</button>
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

   
@stop

@section('js')
    @if (session('mensaje'))
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '{{ session('mensaje') }}',
                showConfirmButton: false,
                timer: 1500
            });
        </script>
    @endif
@stop
