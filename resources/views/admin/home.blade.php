@extends('layouts.admin')

@section('content')

<div class="row">


    <div class="col-6">
        <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title">TABLAS DE PRECIOS</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MINIMO</th>
                            <th>MAXIMO</th>
                            <th>Precio</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($metros as $asignacion)
                        <tr>
                            <td>{{ $asignacion->id }}</td>
                            <td>{{ $asignacion->minimo }} mts</td>
                            <td>{{ $asignacion->maximo }} mts</td>
                            <td>Q. {{ number_format($asignacion->precio, 2) }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-6">
        <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title">DEUDORES</h4>
                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Telefono</th>
                            <th>Dirección</th>
                            <th>Estado</th>
                            <th>DPI</th>
                            <th>Ubicación</th>
                            <th>Tipo</th>
                            <th>Total de Deuda</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($deudores as $dueno)
                        <tr>
                            <td>{{ $dueno->id }}</td>
                            <td>{{ $dueno->nombre }}</td>
                            <td>{{ $dueno->aux3 }}</td>
                            <td>{{ $dueno->direccion }}</td>
                            <td>{{ $dueno->estado }}</td>
                            <td>{{ $dueno->dpi }}</td>
                            <td>{{ $dueno->ubicacion }}</td>
                            <td>{{ $dueno->tipo }}</td>
                            <td>Q. {{ number_format($dueno->asignado, 2) }}</td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pagos en linea Pendientes </h4>
                <p class="card-text">Falta aprovar: {{$pagoenlinea}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Usurios Registrados</h4>
                <p class="card-text">{{$users}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Duenos / Casas, Registrados</h4>
                <p class="card-text">{{$duenos}}</p>
            </div>
        </div>
    </div>

    <div class="col-12 text-center">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRWj2nt-4tHXV1jYD5j3EVttXFBLOSK3UFORA&s" alt="">
    </div>


</div>

@endsection