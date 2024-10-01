@extends('layouts.reports')

@section('content')

<p class="my-3 text-center h3">CONSUMOS</p>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Dueño</th>
            <th>Metros</th>
            <th>Total</th>
            <th>Fecha de Pago</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($consumos as $consumo)
        <tr>
            <td>{{ $consumo->id }}</td>
            <td>{{ $consumo->dueno->nombre }}</td>
            <td>{{ $consumo->metros }}</td>
            <td>Q. {{ number_format($consumo->total, 2) }}</td>
            <td>{{ $consumo->fecha_de_pago }}</td>

        </tr>
        @endforeach
    </tbody>
</table>
@endsection