<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AsigancionDeMetros;
use Illuminate\Http\Request;

class AsigancionDeMetrosController extends Controller
{
    // Mostrar la lista de asignaciones
    public function index()
    {
        $asignaciones = AsigancionDeMetros::all();
        return view('admin.asigancion_metros.index', compact('asignaciones'));
    }

    // Mostrar una asignación específica
    public function show($id)
    {
        $asignacion = AsigancionDeMetros::findOrFail($id);
        return response()->json($asignacion);
    }

    function create()
    {
        return view('admin.asigancion_metros.create');
    }

    // Crear una nueva asignación
    public function store(Request $request)
    {
        $request->validate([
            'minimo' => 'required|numeric',
            'maximo' => 'required|numeric',
            'precio' => 'required|numeric',
        ]);

        $asignacion = AsigancionDeMetros::create([
            'minimo' => $request->minimo,
            'maximo' => $request->maximo,
            'precio' => $request->precio,
        ]);

        return back()->with(['status-success' => "Asignación Creada"]);
    }

    // Actualizar una asignación existente
    public function update(Request $request, $id)
    {
        $request->validate([
            'minimo' => 'required|numeric',
            'maximo' => 'required|numeric',
            'precio' => 'required|numeric',
        ]);

        $asignacion = AsigancionDeMetros::findOrFail($id);
        $asignacion->update([
            'minimo' => $request->minimo,
            'maximo' => $request->maximo,
            'precio' => $request->precio,
        ]);

        return response()->json($asignacion);
    }

    // Eliminar una asignación
    public function destroy($id)
    {
        $asignacion = AsigancionDeMetros::findOrFail($id);
        $asignacion->delete();

        return back()->with(['status-success' => "Asignación Eliminada"]);
    }
}
