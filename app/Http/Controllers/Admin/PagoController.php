<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dueno;
use App\Models\Pago;
use Illuminate\Http\Request;

class PagoController extends Controller
{
    public function index()
    {
        $pagos = Pago::whereDate('created_at', date('Y-m-d'))->get();
        return view('admin.pagos.index', compact('pagos'));
    }

    public function create()
    {
        $duenos = Dueno::all();
        return view('admin.pagos.create', compact('duenos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'dueno_id' => 'required|exists:duenos,id',
            'pago' => 'required|numeric',
            'tipo' => 'required|string',
            'boleta' => 'required|string',
            'aux1' => 'nullable|string',
            'aux2' => 'nullable|string',
        ]);

        $pag = Pago::create($request->all());


        $dueno = Dueno::find($request->dueno_id);
        $dueno->asignado -= $pag->pago;
        $dueno->save();


        return redirect()->route('admin.pagos.index');
    }

    public function show(Pago $pago)
    {

        return view('admin.pagos.reporte.pago', compact('pago'));
    }

    public function edit(Pago $pago)
    {
        return view('admin.pagos.edit', compact('pago'));
    }

    public function update(Request $request, Pago $pago)
    {
        $request->validate([
            'dueno_id' => 'required|exists:duenos,id',
            'pago' => 'required|numeric',
            'tipo' => 'required|string',
            'boleta' => 'required|string',
            'aux1' => 'nullable|string',
            'aux2' => 'nullable|string',
        ]);

        $pago->update($request->all());

        return redirect()->route('pagos.index');
    }

    public function destroy(Pago $pago)
    {
        $pago->delete();
        return redirect()->route('pagos.index');
    }

    function pagoenlinea()
    {
        return view('web.pagoenlinea');
    }
}
