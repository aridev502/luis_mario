@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Agregar Consumo</h1>


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('admin.consumos.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="dueno_id">Dueño:</label>
                <select name="dueno_id" id="dueno_id" class="form-control" required>
                    <option value="">Seleccione un dueño</option>
                    @foreach ($duenos as $dueno)
                        <option value="{{ $dueno->id }}">{{ $dueno->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="metros">Metros:</label>
                <input type="number" name="metros" id="metros" class="form-control" required>
            </div>

            <div class="form-group d-none">
                <label for="total">Total:</label>
                <input type="number" name="total" id="total" class="form-control">
            </div>

            <div class="form-group">
                <label for="fecha_de_pago">Fecha de Pago:</label>
                <input type="date" name="fecha_de_pago" id="fecha_de_pago" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Guardar</button>
            <a href="{{ route('admin.consumos.index') }}" class="btn btn-secondary">Volver</a>
        </form>
    </div>
@endsection


@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slim-select/1.26.0/slimselect.min.js"></script>
    <script>
        new SlimSelect({
            select: '#dueno_id'
        })
    </script>
@endsection
