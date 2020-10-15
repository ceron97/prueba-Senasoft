@extends('adminlte::page')
@section('title', 'Ventas')

@section('plugins.Sweetalert2', true)
    
@section('content_header')
    <h1>ventas</h1>
@stop

@section('content')
    
    <form action="{{route('ventas.store')}}" method="post"> 
        @csrf
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
                            <input type="checkbox" name='producto[]' value="{{$item->id}}" > 
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <button type="submit" class="btn btn-danger">Facturar</button>
    </form>

    
    
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

