<!-- resources/views/asignacion_de_metros/index.blade.php -->
@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <div class="">
                        <h1>Asignaciones de Metros</h1>
                        <a href="{{ route('admin.asignacion_de_metros.nueva') }}" class="btn btn-primary mb-3">Agregar
                            Asignación</a>

                        @if ($asignaciones->isEmpty())
                            <p>No hay asignaciones disponibles.</p>
                        @else
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>MINIMO</th>
                                        <th>MAXIMO</th>

                                        <th>Precio</th>
                                        <th>Acciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($asignaciones as $asignacion)
                                        <tr>
                                            <td>{{ $asignacion->id }}</td>
                                            <td>{{ $asignacion->minimo }}</td>
                                            <td>{{ $asignacion->maximo }}</td>
                                            <td>Q. {{ number_format($asignacion->precio, 2) }}</td>
                                            <td>
                                                <a href="{{ route('admin.asignacion_de_metros.ver', $asignacion->id) }}"
                                                    class="btn btn-info">Ver</a>
                                                <a href="{{ route('admin.asignacion_de_metros.editar', $asignacion->id) }}"
                                                    class="btn btn-warning">Editar</a>
                                                <form
                                                    action="{{ route('admin.asignacion_de_metros.eliminar', $asignacion->id) }}"
                                                    method="POST" style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger"
                                                        onclick="return confirm('¿Estás seguro de eliminar esta asignación?')">Eliminar</button>
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
