<!-- resources/views/asignacion_de_metros/edit.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1>Editar Asignación de Metros</h1>

                    <form action="{{ route('admin.asignacion_de_metros.actualizar', $asignacion->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="metros">Desde metros:</label>
                            <input type="number" value="{{ $asignacion->minimo }}" name="minimo" id="minimo"
                                class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="metros">Hasta metros:</label>
                            <input type="number" value="{{ $asignacion->maximo }}" name="maximo" id="maximo"
                                class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="precio">Precio:</label>
                            <input type="text" value="{{ $asignacion->precio }}" name="precio" id="precio"
                                class="form-control" required>
                        </div>


                        <button type="submit" class="btn btn-success">Actualizar</button>
                        <a href="{{ route('admin.asignacion_de_metros.listar') }}" class="btn btn-secondary">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
