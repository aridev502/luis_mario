<?php

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
    // Route::resource('asignacion_de_metros', 'AsigancionDeMetrosController'::class);

});
