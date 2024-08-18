@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Editar Consumo</h1>

        <form action="{{ route('admin.consumos.update', $consumo->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="dueno_id">Dueño:</label>
                <select name="dueno_id" id="dueno_id" class="form-control" required>
                    @foreach ($duenos as $dueno)
                        <option value="{{ $dueno->id }}" {{ $dueno->id == $consumo->dueno_id ? 'selected' : '' }}>
                            {{ $dueno->nombre }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="metros">Metros:</label>
                <input type="number" name="metros" id="metros" class="form-control" value="{{ $consumo->metros }}"
                    required>
            </div>

            <div class="form-group">
                <label for="total">Total:</label>
                <input type="number" name="total" id="total" class="form-control" value="{{ $consumo->total }}"
                    required>
            </div>

            <div class="form-group">
                <label for="fecha_de_pago">Fecha de Pago:</label>
                <input type="date" name="fecha_de_pago" id="fecha_de_pago" class="form-control"
                    value="{{ $consumo->fecha_de_pago }}" required>
            </div>

            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{ route('admin.consumos.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection
