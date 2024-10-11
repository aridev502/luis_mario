@extends('layouts.admin')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h1>Consumos</h1>
                    <a href="{{ route('admin.consumos.create') }}" class="btn btn-primary mb-3">Agregar Consumo</a>



                    <form action="{{ route('admin.consumos.index') }}" method="GET">
                        <div class="form-row">
                            <div class="col">
                                <label for="mes">Mes:</label>
                                <select name="mes" id="mes" class="form-control">
                                    <option value="">--</option>

                                    @foreach (['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'] as $index => $mes)
                                    <option value="{{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}" {{ request()->query('mes') == str_pad($index + 1, 2, '0', STR_PAD_LEFT) ? 'selected' : '' }}>
                                        {{ $mes }}
                                    </option>
                                    @endforeach

                                </select>
                            </div>
                            <div class="col">
                                <label for="ano">Año:</label>
                                <select name="ano" id="ano" class="form-control">
                                    <option value="">--</option>
                                    @for ($i = 2024; $i <= 2040; $i++) <option value="{{ $i }}" {{ request()->query('ano') == $i ? 'selected' : '' }}>
                                        {{ $i }}
                                        </option>
                                        @endfor
                                </select>
                            </div>
                            <div class="col">
                                <button type="submit" class="btn btn-primary mt-4">Filtrar</button>
                            </div>
                        </div>
                    </form>

                    @if ($consumos->isEmpty())
                    <p>No hay consumos disponibles.</p>
                    @else
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Dueño</th>
                                <th>Metros</th>
                                <th>Total</th>
                                <th>Fecha de Pago</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($consumos as $consumo)
                            <tr>
                                <td>{{ $consumo->id }}</td>
                                <td>{{ $consumo->dueno->nombre }}</td>
                                <td>{{ $consumo->metros }}</td>
                                <td>Q. {{ number_format($consumo->total, 2) }}</td>
                                <td>{{ $consumo->fecha_de_pago }}</td>
                                <td>
                                    <a href="{{ route('admin.consumos.show', $consumo->id) }}" class="btn btn-info">Ver</a>
                                    <a href="{{ route('admin.consumos.edit', $consumo->id) }}" class="btn btn-warning">Editar</a>
                                    <form action="{{ route('admin.consumos.destroy', $consumo->id) }}" method="POST" style="display:inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este consumo?')">Eliminar</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection