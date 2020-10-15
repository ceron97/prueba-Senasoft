@extends('adminlte::page')
@section('title', 'Ventas')

@section('plugins.Sweetalert2', true)
    
@section('content_header')
    <h1>ventas</h1>
@stop

@section('content')
    

    <table class="table">
        <thead class="thead-dark ">
        <tr class="center">
            <th scope="col">nombre</th>
            <th scope="col">descripcion</th>
            <th scope="col">precio</th>
            <th scope="col">cantidad</th>
            <th scope="col">Selecciona</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($productos as $item)
                <tr>
                    <th scope="row">{{$item->nombre}}</th>
                    <td>{{$item->descripcion}}</td>
                    <td>{{$item->precio}}</td>
                    <td>{{$item->cantidad}}</td>
                    <td>   
                        <button class="btn btn-primary" data-toggle="modal" data-target="#crear" value="{{$item->id}}"><i class="fas fa-shopping-cart"></i></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <button type="submit" class="btn btn-danger">Facturar</button>

    <div id="crear" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar usuario</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label>Cantidad:</label>
                            <div class="input-group">
                                <input type="text" class="form-control input-lg" name="empresa" placeholder="Empresa" required="">
                                <div class="input-group-append">
                                    <div class="input-group-text"><i class="fas fa-user"></i></div> 
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Agregar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin.custom.css">
@stop

@section('js')
    @if (session('mensaje'))
        <script>
            Swal.fire({
                position: 'top-end',
                type: 'success',
                title: '{{ session('mensaje') }}',
                showConfirmButton: false,
                timer: 3000
            });
        </script>
    @endif
@stop



