<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AsigancionDeMetros;
use App\Models\Consumo;
use App\Models\Dueno;
use App\Models\Pago;
use Illuminate\Http\Request;

class ReporteController extends Controller
{

    function index()
    {
        $dunos = Dueno::all();
        return view('admin.reportes.index', compact('dunos'));
    }

    function dueno()
    {
        $duenos = Dueno::all();
        return view('admin.reportes.dueno', compact('duenos'));
    }

    function deudores()
    {
        $duenos = Dueno::where('asignado', '>', 0)->get();
        return view('admin.reportes.dueno', compact('duenos'));
    }

    function consumos(Request $request)
    {

        $consumos = Consumo::whereMonth('created_at', $request->mes)
            ->whereYear('created_at', $request->ano)
            ->with('dueno')
            ->get();

        return view('admin.reportes.consumos', compact('consumos'));
    }

    function precios()
    {
        $precio = AsigancionDeMetros::all();
        return view('admin.reportes.precios', compact('precio'));
    }

    function pagos(Request $request)
    {

        $pagos = Pago::whereMonth('created_at', $request->mes)
            ->whereYear('created_at', $request->ano)
            ->get();
        return view('admin.reportes.pagos', compact('pagos'));
    }


    function pagosDueno(Request $request)
    {
        $pagos = Pago::where('dueno_id', $request->id)
            ->get();
        return view('admin.reportes.pagosdueno', compact('pagos'));
    }
}
