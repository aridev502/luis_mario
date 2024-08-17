<?php

use App\Http\Controllers\Admin\DuenoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['prefix' => "admin", 'as' => 'admin.', 'namespace' => 'App\Http\Controllers\Admin', 'middleware' => ['auth', 'AdminPanelAccess']], function () {

    Route::get('/', 'HomeController@index')->name('home');

    Route::resource('/users', 'UserController');
    Route::resource('/roles', 'RoleController');
    Route::resource('/permissions', 'PermissionController')->except(['show']);


    Route::resource('asignacion_de_metros', 'AsigancionDeMetrosController')->names([
        'create' => 'asignacion_de_metros.nueva',
        'store' => 'asignacion_de_metros.guardar',
        'edit' => 'asignacion_de_metros.editar',
        'update' => 'asignacion_de_metros.actualizar',
        'destroy' => 'asignacion_de_metros.eliminar',
        'index' => 'asignacion_de_metros.listar',
        'show' => 'asignacion_de_metros.ver'
    ]);

    Route::get('/duenos', [DuenoController::class, 'index'])->name('duenos.index');
    Route::get('/duenos/create', [DuenoController::class, 'create'])->name('duenos.create');
    Route::post('/duenos', [DuenoController::class, 'store'])->name('duenos.store');
    Route::get('/duenos/{dueno}', [DuenoController::class, 'show'])->name('duenos.show');
    Route::get('/duenos/{dueno}/edit', [DuenoController::class, 'edit'])->name('duenos.edit');
    Route::put('/duenos/{dueno}', [DuenoController::class, 'update'])->name('duenos.update');
    Route::delete('/duenos/{dueno}', [DuenoController::class, 'destroy'])->name('duenos.destroy');

    // Route::resource('asignacion_de_metros', 'AsigancionDeMetrosController'::class);

});
