<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AsigancionDeMetros;
use App\Models\Consumo;
use App\Models\Dueno;
use Illuminate\Http\Request;

class ConsumoController extends Controller
{
    public function index(Request $request)
    {
        $consumos = null;


        if (isset($request->mes) && isset($request->ano)) {

            $consumos = Consumo::whereMonth('created_at', $request->mes)
                ->whereYear('created_at', $request->ano)
                ->with('dueno')
                ->get();

            // dd($consumos);
        } else {

            $consumos = Consumo::with('dueno')
                ->whereMonth('created_at', date('m'))
                ->whereYear('created_at', date('Y'))
                ->get();
        }

        // dd($consumo);

        return view('admin.consumos.index', compact('consumos'));
    }

    public function create()
    {
        $duenos = Dueno::all();
        return view('admin.consumos.create', compact('duenos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dueno_id' => 'required|exists:duenos,id',
            'metros' => 'required|numeric|nullable',
            'total' => 'numeric|nullable',
            'fecha_de_pago' => 'required|date',
        ]);

        // Consumo::create($request->all());

        $asign = AsigancionDeMetros::where('minimo', '<=', $request->metros)
            ->where('maximo', '>=', $request->metros)
            ->first();

        $consumo = Consumo::create([
            'dueno_id' => $request->dueno_id,
            'metros' => $request->metros,
            'total' => $asign->precio,
            'fecha_de_pago' => $request->fecha_de_pago,
            'asignacion_de_metros_id' => $asign->id
        ]);


        $dueno = Dueno::find($request->dueno_id);
        $dueno->asignado += $asign->precio;
        $dueno->save();




        // dd('alto detengase', $asign);

        return redirect()->route('admin.consumos.index')->with('success', 'Consumo creado con éxito.');
    }

    public function show(Consumo $consumo)
    {
        return view('admin.consumos.show', compact('consumo'));
    }

    public function edit(Consumo $consumo)
    {
        $duenos = Dueno::all();
        return view('admin.consumos.edit', compact('consumo', 'duenos'));
    }

    public function update(Request $request, Consumo $consumo)
    {
        $request->validate([
            'dueno_id' => 'required|exists:duenos,id',
            'metros' => 'required|numeric',
            'total' => 'numeric|nullable',
            'fecha_de_pago' => 'required|date',
        ]);

        $consumo->update($request->all());

        return redirect()->route('admin.consumos.index')->with('success', 'Consumo actualizado con éxito.');
    }

    public function destroy(Consumo $consumo)
    {
        $consumo->delete();

        return redirect()->route('admin.consumos.index')->with('success', 'Consumo eliminado con éxito.');
    }
}
