<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Dueno;
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
}
