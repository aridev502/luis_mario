@extends('layouts.admin')

@section('content')
<div class="row justify-content-center">
    <div class=" col-md-6">
        <div class="card">
            <div class="card-body">

                <a class="btn btn-primary" href="{{ route('admin.pagos.index') }}" role="button">PAGOS DE HOY</a>

                <h4 class="card-title">Crear Pago</h4>
                <form action="{{ route('admin.pagos.store') }}" method="POST">
                    @csrf


                    <select name="dueno_id" id="dueno_id">
                        <option value="">SELECCIONE UN DUEÑO</option>
                        @foreach ($duenos as $dueno)
                        <option value="{{ $dueno->id }}">{{ $dueno->nombre }}, Q. {{ number_format($dueno->asignado, 2) }}</option>
                        @endforeach
                    </select>

                    <div class="mb-3">
                        @error('dueno_id')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="pago" class="form-label">Pago</label>
                        <input type="number" step="0.01" class="form-control" id="pago" name="pago" value="{{ old('pago') }}">
                        @error('pago')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label for="tipo" class="form-label">Tipo</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="EFECTIVO" {{ old('tipo') == 'efectivo' ? 'selected' : '' }}>Efectivo</option>
                            <!-- <option value="DEPOSITO" {{ old('tipo') == 'deposito' ? 'selected' : '' }}>Depósito</option>
                            <option value="TRANSFERENCIA" {{ old('tipo') == 'transferencia' ? 'selected' : '' }}>Transferencia</option> -->
                        </select>
                        @error('tipo')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <!-- <div class="mb-3">
                        <label for="boleta" class="form-label">Boleta</label>
                        <input type="text" class="form-control" id="boleta" name="boleta" value="{{ old('boleta') }}">
                        @error('boleta')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div> -->
                    <!-- <div class="mb-3">
                        <label for="aux1" class="form-label">Aux1</label>
                        <input type="text" class="form-control" id="aux1" name="aux1" value="{{ old('aux1') }}">
                    </div>
                    <div class="mb-3">
                        <label for="aux2" class="form-label">Aux2</label>
                        <input type="text" class="form-control" id="aux2" name="aux2" value="{{ old('aux2') }}">
                    </div> -->
                    <button type="submit" class="btn btn-primary" onclick="return confirm('¿Estás seguro de crear el pago?')">Guardar</button>
                </form>

            </div>
        </div>
    </div>
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