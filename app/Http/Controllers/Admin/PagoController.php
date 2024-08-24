<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dueno;
use App\Models\Pago;
use App\Models\PagoFlotante;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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

    function storePagoFlotante(Request $request)
    {
        $request->validate([
            'telefono' => 'required|string|numeric',
            'pago' => 'required|numeric',
            'tipo' => ['required', Rule::in(['EFECTIVO', 'DEPOSITO', 'TRANSFERENCIA'])],
            'boleta' => 'nullable|string|max:255',
        ]);
        $dueno = Dueno::where('aux3', $request->telefono)->first();

        if (!$dueno) {
            return redirect()->route('linea.pagoenlinea')->withInput([
                'telefono' => $request->telefono,
                'pago' => $request->pago,
                'tipo' => $request->tipo,
                'boleta' => $request->boleta,
            ])->with(['info' => 'No exite datos con este telefono']);
        }


        $pago = PagoFlotante::create([
            'dueno_id' => $dueno->id,
            'pago' => $request->pago,
            'tipo' => $request->tipo,
            'boleta' => $request->boleta,
        ]);
        return back()->with(['info' => "Pago Realizado, espere a ser aprobado"]);
    }

    function pagosEnLinea()
    {
        $pagos = PagoFlotante::all();
        return view('admin.pagos.enlinea', compact('pagos'));
    }

    function aceptpagoenlinea(PagoFlotante $pago)
    {

        $p = new Pago();
        $p->dueno_id = $pago->dueno_id;
        $p->pago = $pago->pago;
        $p->tipo = $pago->tipo;
        $p->boleta = $pago->boleta;
        $p->save();

        $dueno = Dueno::find($pago->dueno_id);
        $dueno->asignado -= $pago->pago;
        $dueno->save();

        $pago->delete();

        return back()->with(['status-info' => "Se acepto el pago"]);
    }
}
