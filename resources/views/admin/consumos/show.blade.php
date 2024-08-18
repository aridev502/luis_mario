@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Detalles del Consumo</h1>

        <div class="card">
            <div class="card-header">
                Consumo ID: {{ $consumo->id }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Información del Consumo</h5>

                <p class="card-text"><strong>Dueño:</strong> {{ $consumo->dueno->nombre }}</p>
                <p class="card-text"><strong>Metros:</strong> {{ $consumo->metros }}</p>
                <p class="card-text"><strong>Total:</strong> {{ $consumo->total }}</p>
                <p class="card-text"><strong>Fecha de Pago:</strong> {{ $consumo->fecha_de_pago }}</p>
            </div>

            <div class="card-footer">
                <a href="{{ route('admin.consumos.edit', $consumo->id) }}" class="btn btn-warning">Editar</a>

                <form action="{{ route(admin . 'consumos.destroy', $consumo->id) }}" method="POST"
                    style="display:inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"
                        onclick="return confirm('¿Estás seguro de eliminar este consumo?')">Eliminar</button>
                </form>

                <a href="{{ route('admin.consumos.index') }}" class="btn btn-secondary">Volver a la lista</a>
            </div>
        </div>
    </div>
@endsection
