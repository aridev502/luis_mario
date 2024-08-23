@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Dueños</h1>
    <a href="{{ route('admin.duenos.create') }}" class="btn btn-primary mb-3">Agregar Dueño</a>

    @if ($duenos->isEmpty())
    <p>No hay dueños disponibles.</p>
    @else
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
                <th>Acciones</th>
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
                <td>
                    <a href="{{ route('admin.duenos.show', $dueno->id) }}" class="btn btn-info">Ver</a>
                    <a href="{{ route('admin.duenos.edit', $dueno->id) }}" class="btn btn-warning">Editar</a>
                    <form action="{{ route('admin.duenos.destroy', $dueno->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este dueño?')">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>
@endsection