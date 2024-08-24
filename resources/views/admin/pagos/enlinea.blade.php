@extends('layouts.admin')

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">PAGOS EN LINEA</h4>
                <div class="card-columns">
                    @foreach ($pagos as $p)
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">{{ $p->created_at }}</h4>
                            <p class="card-text">Dueño: <b>{{ $p->dueno->nombre }}</b></p>
                            <p class="card-text">Boleta: {{ $p->boleta }}</p>
                            <p class="card-text">Tipo: {{ $p->tipo }}</p>
                            <p class="card-text">Total: {{ $p->pago }}</p>
                            <!-- <p class="card-text">Fecha de Pago: {{ $p->fecha_de_pago }}</p> -->
                            <a class="btn btn-primary" href="{{route('admin.pagos.aceptpagoenlinea', $p)}}" role="button"><i class="fa fa-check" aria-hidden="true"></i></a>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection