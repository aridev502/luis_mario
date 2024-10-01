@extends('layouts.admin')

@section('content')

<div class="row">
    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Dueños</h4>
                <p class="card-text">Retorna el reporte de todos los dueños registrados</p>
                <a href="{{ route('admin.reportes.dueno') }}" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Consumos</h4>
                <p class="card-text">Retorna el reporte de todos los consumos registrados</p>

                <form action="{{ route('admin.reportes.consumos') }}" method="get">
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
                            <button type="submit" class="btn btn-primary mt-4">Ver</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Precios</h4>
                <p class="card-text">Retorna el reporte de todos los precios asignados y registrados</p>
                <a href="{{ route('admin.reportes.precios') }}" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Deudores</h4>
                <p class="card-text">Retorna el reporte de todos los precios asignados y registrados</p>
                <a href="{{ route('admin.reportes.deudores') }}" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Pagos</h4>
                <p class="card-text">Retorna el reporte de todos los pagos registrados</p>
                <form action="{{ route('admin.reportes.pagos') }}" method="get">
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
                            <button type="submit" class="btn btn-primary mt-4">Ver</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

</div>

@endsection