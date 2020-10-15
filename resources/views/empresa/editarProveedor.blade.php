@extends('adminlte::page')
@section('title', 'admin')

@section('plugins.Sweetalert2')
    
@section('content_header')
    <h1>Editar Proveedor {{$provedor->nombre}} </h1>
@stop

@section('content')
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Editar Proveedor</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <form action="{{route('proveedores.update', $provedor->id)}}" method="POST" align="center" >
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="card-body">
                    
                    <div class="form-group">
                        <label>Nombre:</label>
                        <div class="input-group align-center">
                        <input type="text" class="form-control col-md-12 text-center input-lg" name="nombre" placeholder="Escribe el nombre" required value="{{$provedor->nombre}}" min="0">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label>Telefono:</label>
                        <div class="input-group ">
                            <input type="number" class="form-control col-md-12 text-center input-lg" name="telefono" placeholder="Escribe el telefono" required value="{{$provedor->telefono}}" min="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Correo:</label>
                        <div class="input-group ">
                            <input type="email" class="form-control col-md-12 text-center input-lg" name="correo" placeholder="Escribe el correo" required value="{{$provedor->correo}}" min="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Dirección:</label>
                        <div class="input-group ">
                            <input type="text" class="form-control col-md-12 text-center input-lg" name="direccion" placeholder="Escribe la direccion" required value="{{$provedor->direccion}}" min="0">
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Empresa:</label>
                        <select class="form-control col-md-12 text-center" name="id_empresa" id="sel1" required>
                            @foreach ($empresas as $item)
                                <option class="text-center" value="{{$item->id}}">{{$item->nombre}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-success" >Modificar</button>
                <a href="{{route('proveedores.index')}}" class="btn btn-danger" >Regresar</a>
            </div>
        </form>
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