@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Detalles del Asignacion de Metros</h1>


    <div class="card">
        <div class="card-header">
            Asignacion de Metros ID: {{ $asignacion->id }}
        </div>
        <div class="card-body">
            <h5 class="card-title">Información del Asignacion de Metros</h5>

            <p class="card-text"><strong>Metros Mínimos:</strong> {{ $asignacion->minimo }}</p>
            <p class="card-text"><strong>Metros Máximos:</strong> {{ $asignacion->maximo }}</p>
            <p class="card-text"><strong>Precio:</strong>Q. {{ number_format($asignacion->precio, 2) }}</p>
        </div>

        <div class="card-footer">
            <a href="{{ route('admin.asignacion_de_metros.editar', $asignacion->id) }}" class="btn btn-warning">Editar</a>

            <form action="{{ route( 'admin.asignacion_de_metros.eliminar', $asignacion->id) }}" method="POST" style="display:inline-block;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta asignacion de metros?')">Eliminar</button>
            </form>

            <a href="{{ route('admin.asignacion_de_metros.listar') }}" class="btn btn-secondary">Volver a la lista</a>
        </div>
    </div>
</div>
@endsection