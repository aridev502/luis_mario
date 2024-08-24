@extends('layouts.main')

@section('content')

<div class="row justify-content-center ">
    <div class="col-md-6">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">PAGOS</h4>

                @if (session('info'))
                <div class="alert alert-primary alert-dismissible fade show" role="alert">
                    {{ session('info') }}
                    <button type="button" class="close btn btn-danger" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true"> <i class="fa fa-window-close" aria-hidden="true"></i> </span>
                    </button>
                </div>
                @endif

                <form action="{{route('linea.storePagoFlotante')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">TELEFONO:</label>
                        <input type="text" class="form-control" name="telefono" placeholder="" value="{{ old('telefono') }}">
                        @error('telefono')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror

                    </div>

                    <div class="mb-3">
                        @error('dueno_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pago" class="form-label">Valor de Pago</label>
                        <input type="number" step="0.01" class="form-control" id="pago" name="pago" value="{{ old('pago') }}">
                        @error('pago')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="DEPOSITO" {{ old('tipo') == 'deposito' ? 'selected' : '' }}>Depósito</option>
                            <option value="TRANSFERENCIA" {{ old('tipo') == 'transferencia' ? 'selected' : '' }}>Transferencia</option>
                        </select>
                        @error('tipo')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="boleta" class="form-label">Boleta</label>
                        <input type="text" class="form-control" id="boleta" name="boleta" value="{{ old('boleta') }}">
                        @error('boleta')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary" onclick="return confirm('¿Estás seguro de crear el pago?')">Guardar</button>


                </form>



            </div>
        </div>
    </div>
</div>


@endsection