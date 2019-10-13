<?php

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
  return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




Route::group(
  [
    'prefix' => 'admin',
    'namespace' => 'Admin',
    'middleware' => 'auth'
  ],
  function () {

    //Guardias
    Route::get('guardias', 'GuardiaController@index')->middleware('auth')->name('admin.guardias.index');
    Route::get('guardias/create', 'GuardiaController@create')->middleware('auth')->name('admin.guardias.create');

    //Estados
    Route::get('estados', 'EstadoController@index')->middleware('auth')->name('admin.estados.index');
    Route::get('estados/create', 'EstadoController@create')->middleware('auth')->name('admin.estados.create');

    //Municipios
    Route::get('municipios', 'MunicipioController@index')->middleware('auth')->name('admin.municipios.index');
    Route::get('municipios/create', 'MunicipioController@create')->middleware('auth')->name('admin.municipios.create');

    //Fraccionamientos
    Route::get('fraccionamientos', 'FraccionaminetoController@index')->middleware('auth')->name('admin.fraccionamientos.index');
    Route::get('fraccionamientos/create', 'FraccionaminetoController@create')->middleware('auth')->name('admin.fraccionamientos.create');




  }
);
