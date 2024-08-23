@extends('layouts.admin')

@section('content')
<div class="container">
    <h1>Editar Dueño</h1>

    <form action="{{ route('admin.duenos.update', $dueno->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ $dueno->nombre }}" required>
        </div>

        <div class="form-group">
            <label for="direccion">Dirección:</label>
            <input type="text" name="direccion" id="direccion" class="form-control" value="{{ $dueno->direccion }}" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado:</label>
            <select name="estado" id="estado" class="form-control" required>
                <option value="activo" {{ $dueno->estado == 'activo' ? 'selected' : '' }}>Activo</option>
                <option value="inactivo" {{ $dueno->estado == 'inactivo' ? 'selected' : '' }}>Inactivo</option>
            </select>
        </div>

        <div class="form-group">
            <label for="dpi">DPI:</label>
            <input type="text" name="dpi" id="dpi" class="form-control" value="{{ $dueno->dpi }}" required>
        </div>

        <div class="form-group">
            <label for="ubicacion">Ubicación:</label>
            <input type="text" name="ubicacion" id="ubicacion" class="form-control" value="{{ $dueno->ubicacion }}" required>
        </div>

        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <input type="text" name="tipo" id="tipo" class="form-control" value="{{ $dueno->tipo }}" required>
        </div>


        <div class="form-group">
            <label for="aux3">Telefono:</label>
            <input type="text" name="aux3" id="aux3" class="form-control" value="{{ $dueno->aux3 }}">
        </div>

        <button type="submit" class="btn btn-success">Actualizar</button>
        <a href="{{ route('admin.duenos.index') }}" class="btn btn-secondary">Volver</a>
    </form>
</div>
@endsection