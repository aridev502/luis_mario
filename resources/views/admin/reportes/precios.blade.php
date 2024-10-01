@extends('layouts.reports')

@section('content')

<p class="my-3 text-center h3">PRECIOS</p>


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
        @foreach ($precio as $asignacion)
        <tr>
            <td>{{ $asignacion->id }}</td>
            <td>{{ $asignacion->minimo }} mts</td>
            <td>{{ $asignacion->maximo }} mts</td>
            <td>Q. {{ number_format($asignacion->precio, 2) }}</td>

        </tr>
        @endforeach
    </tbody>
</table>

@endsection