@extends('layouts.reports')

@section('content')

<div class="row">
    <div class="col">

        <p class="text-center h2">DUEÑOS REGISTRADOS</p>


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
                @foreach ($duenos as $dueno)
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

@endsection