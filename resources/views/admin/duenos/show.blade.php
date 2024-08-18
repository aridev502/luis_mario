@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Detalles del Dueño</h1>

        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nombre: {{ $dueno->nombre }}</h5>

                <p class="card-text"><strong>Dirección:</strong> {{ $dueno->direccion }}</p>
                <p class="card-text"><strong>Estado:</strong> {{ $dueno->estado }}</p>
                <p class="card-text"><strong>DPI:</strong> {{ $dueno->dpi }}</p>
                <p class="card-text"><strong>Ubicación:</strong> {{ $dueno->ubicacion }}</p>
                <p class="card-text"><strong>Tipo:</strong> {{ $dueno->tipo }}</p>
                <p class="card-text"><strong>Aux 1:</strong> {{ $dueno->aux1 }}</p>
                <p class="card-text"><strong>Aux 2:</strong> {{ $dueno->aux2 }}</p>
                <p class="card-text"><strong>Aux 3:</strong> {{ $dueno->aux3 }}</p>
            </div>

            <div class="card-footer">
                <a href="{{ route('admin.duenos.edit', $dueno->id) }}" class="btn btn-warning">Editar</a>

                <form action="{{ route('admin.duenos.destroy', $dueno->id) }}" method="POST"
                    style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('¿Estás seguro de eliminar este dueño?')">Eliminar</button>
                </form>

                <a href="{{ route('admin.duenos.index') }}" class="btn btn-secondary">Volver a la lista</a>
            </div>
        </div>
    </div>
@endsection
