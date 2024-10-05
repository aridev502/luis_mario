<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AsigancionDeMetros;
use App\Models\Dueno;
use App\Models\PagoFlotante;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $duenos = Dueno::count();
        $users = User::count();
        $pagoenlinea = PagoFlotante::count();
        $deudores = Dueno::where('asignado', '>', 0)->get();

        $metros = AsigancionDeMetros::all();



        return view('admin.home', compact('duenos', 'users', 'pagoenlinea', 'deudores', 'metros'));
    }
}
