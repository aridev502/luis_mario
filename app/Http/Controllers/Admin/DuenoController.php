<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dueno;
use Illuminate\Http\Request;

class DuenoController extends Controller
{
    public function index()
    {
        $duenos = Dueno::all();
        return view('admin.duenos.index', compact('duenos'));
    }

    public function create()
    {
        return view('admin.duenos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'estado' => 'required|string|max:50',
            'dpi' => 'required|string|max:20',
            'ubicacion' => 'required|string|max:255',
            'tipo' => 'required|string|max:50',
            'aux1' => 'nullable|string|max:255',
            'aux2' => 'nullable|string|max:255',
            'aux3' => 'nullable|string|max:255',
        ]);

        Dueno::create($request->all());

        return redirect()->route('admin.duenos.index')->with('success', 'Dueño creado con éxito.');
    }

    public function show(Dueno $dueno)
    {
        return view('admin.duenos.show', compact('dueno'));
    }

    public function edit(Dueno $dueno)
    {
        return view('admin.duenos.edit', compact('dueno'));
    }

    public function update(Request $request, Dueno $dueno)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'direccion' => 'required|string|max:255',
            'estado' => 'required|string|max:50',
            'dpi' => 'required|string|max:20',
            'ubicacion' => 'required|string|max:255',
            'tipo' => 'required|string|max:50',
            'aux1' => 'nullable|string|max:255',
            'aux2' => 'nullable|string|max:255',
            'aux3' => 'nullable|string|max:255',
        ]);

        $dueno->update($request->all());

        return redirect()->route('admin.duenos.index')->with('success', 'Dueño actualizado con éxito.');
    }

    public function destroy(Dueno $dueno)
    {
        $dueno->delete();

        return redirect()->route('admin.duenos.index')->with('success', 'Dueño eliminado con éxito.');
    }
}
