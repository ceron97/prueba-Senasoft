@extends('adminlte::page')
@section('title', 'Productos')

@section('plugins.Sweetalert2', true)
    

@section('content_header')
    <h1>Productos</h1>
@stop

@section('content')
<table class="table">
    <thead class="thead-dark ">
    <tr class="center">
        <th scope="col">nombre</th>
        <th scope="col">descripcion</th>
        <th scope="col">precio</th>
        <th scope="col">cantidad</th>
        <th scope="col">garantia</th>
        <th scope="col">Acciones</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($venta as $item)
            <tr>
                <th scope="row">{{$item->precio}}</th>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
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