@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <img class="card-img-top" src="holder.js/100x180/" alt="">
            <div class="card-body">
                <h4 class="card-title">Pagos</h4>

                <a href="{{ route('admin.pagos.create') }}" class="btn btn-primary mb-2">Crear Nuevo Pago</a>
                <ul class="list-group">
                    @foreach ($pagos as $pago)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a href="{{ route('admin.pagos.show', $pago->id) }}">{{$pago->dueno->nombre}} - {{ $pago->tipo }} - {{ $pago->pago }}</a>
                        <div class="btn-group" role="group">
                            <!-- <a href="{{ route('admin.pagos.edit', $pago->id) }}" class="btn btn-warning">Editar</a> -->
                            <form action="{{ route('admin.pagos.destroy', $pago->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar este pago?')">Eliminar</button>
                            </form>
                        </div>
                    </li>
                    @endforeach
                </ul>


            </div>
        </div>
    </div>
</div>
@endsection