@extends('layouts.reports')

@section('content')

<p class="my-3 text-center h3">PAGOS</p>


<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>DUENO</th>
            <th>TIPO</th>
            <th>BOLETA</th>
            <th>PAGO</th>
            <th>FECHA DE PAGO</th>

        </tr>
    </thead>
    <tbody>
        @foreach ($pagos as $asignacion)
        <tr>
            <td>{{ $asignacion->id }}</td>
            <td>{{ $asignacion->dueno->nombre }}</td>
            <td>{{ $asignacion->tipo }}</td>
            <td>{{ $asignacion->boleta }}</td>
            <td>Q. {{ number_format($asignacion->pago, 2) }}</td>
            <td>{{ $asignacion->created_at->isoFormat('D [de] MMMM [de] YYYY') }}</td>

        </tr>
        @endforeach
    </tbody>

</table>


<p class="text-center h3"> Q. {{ number_format($pagos->sum('pago'), 2) }}</p>

@endsection