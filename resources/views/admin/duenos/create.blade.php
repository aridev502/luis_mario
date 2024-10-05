@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Agregar Dueño</h1>

                    <form action="{{ route('admin.duenos.store') }}" method="POST">
                        @csrf

                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" name="nombre" id="nombre" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="direccion">Dirección:</label>
                            <input type="text" name="direccion" id="direccion" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="estado">Estado:</label>
                            <input type="text" name="estado" id="estado" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="dpi">DPI:</label>
                            <input type="text" name="dpi" id="dpi" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="ubicacion">Ubicación:</label>
                            <input type="text" name="ubicacion" id="ubicacion" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="tipo">Tipo:</label>
                            <input type="text" name="tipo" id="tipo" class="form-control" required>
                        </div>



                        <div class="form-group">
                            <label for="aux3">Telefono: </label>
                            <input type="text" name="aux3" id="aux3" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="{{ route('admin.duenos.index') }}" class="btn btn-secondary">Volver</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection