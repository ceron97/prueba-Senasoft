@extends('adminlte::page')
@section('title', 'Grafica ')

@section('plugins.Sweetalert2', 'plugins.Chartjs')
    

@section('content_header')
    <h1>Grafica de Ventas</h1>
@stop

@section('content')
    <h3 class="display-4 text-center">Sucursal {{$sucursal->nombre_sucursal}}</h3>
    <div class="card">
        <canvas class="my-4 w-100" id="GraficaVentasSucursal" width="900" height="380"></canvas>
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

    <script>
        // Esta funcion llama la grafica de ventas en la vista sucursal
        
            var ctx = document.getElementById('GraficaVentasSucursal')
            // eslint-disable-next-line no-unused-vars
            var myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [
                    'Domingo',
                    'Lunes',
                    'Martes',
                    'Miercoles',
                    'Jueves',
                    'Viernes',
                    'Sabado'
                    ],
                    datasets: [{
                        data: [
                            15339,
                            21345,
                            18483,
                            24003,
                            23489,
                            24092,
                            12034
                        ],
                        lineTension: 0,
                        backgroundColor: 'transparent',
                        borderColor: '#007bff',
                        borderWidth: 4,
                        pointBackgroundColor: '#007bff'
                    }]
                },
                options: {
                    scales: {
                        yAxes: [{
                            ticks: {
                            beginAtZero: false
                            }
                        }]
                    },
                    legend: {
                    display: false
                    }
                }
            })
        
        
    </script>

    
@stop