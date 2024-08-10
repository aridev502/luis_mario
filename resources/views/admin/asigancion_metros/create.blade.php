<!-- resources/views/asignacion_de_metros/create.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1>Agregar Asignación de Metros</h1>

                    <form action="{{ route('admin.asignacion_de_metros.guardar') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="metros">Desde metros:</label>
                            <input type="number" name="minimo" id="minimo" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="metros">Hasta metros:</label>
                            <input type="number" name="maximo" id="maximo" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="text" name="precio" id="precio" class="form-control" required>
                        </div>

                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="{{ route('admin.asignacion_de_metros.listar') }}" class="btn btn-secondary">Volver</a>
                    </form>

                </div>
            </div>
        </div>
    </div>
@endsection
