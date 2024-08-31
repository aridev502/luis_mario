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
                <a href="{{ route('admin.reportes.dueno') }}" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Precios</h4>
                <p class="card-text">Retorna el reporte de todos los precios asignados y registrados</p>
                <a href="{{ route('admin.reportes.dueno') }}" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>

    <div class="col-md-3">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Deudores</h4>
                <p class="card-text">Retorna el reporte de todos los precios asignados y registrados</p>
                <a href="{{ route('admin.reportes.dueno') }}" class="btn btn-primary">Ver</a>
            </div>
        </div>
    </div>

</div>

@endsection