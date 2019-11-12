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
    'middleware' => 'auth',
  ],
  function () {
      //Guardias
      Route::get('guardias', 'GuardiaController@index')->middleware('auth')->name('admin.guardias.index');
      Route::get('guardias/create', 'GuardiaController@create')->middleware('auth')->name('admin.guardias.create');
      Route::post('guardias', 'GuardiaController@store')->middleware('auth')->name('admin.guardias.store');
      Route::get('guardias/{guardias}/edit', 'GuardiaController@edit')->middleware('auth')->name('admin.guardias.edit');
      Route::put('guardias/{guardias}', 'GuardiaController@update')->name('admin.guardias.update');
      Route::delete('guardias/{guardias}', 'GuardiaController@destroy')->name('admin.guardias.destroy');

      //Estados
      Route::get('estados', 'EstadoController@index')->middleware('auth')->name('admin.estados.index');
      Route::get('estados/create', 'EstadoController@create')->middleware('auth')->name('admin.estados.create');
      Route::post('estados', 'EstadoController@store')->middleware('auth')->name('admin.estados.store');
      Route::get('estados/{estado}/edit', 'EstadoController@edit')->middleware('auth')->name('admin.estados.edit');
      Route::put('estados/{estado}', 'EstadoController@update')->name('admin.estados.update');
      Route::delete('estados/{estado}', 'EstadoController@destroy')->name('admin.estados.destroy');

      //Municipios
      Route::get('municipios', 'MunicipioController@index')->middleware('auth')->name('admin.municipios.index');
      Route::get('municipios/create', 'MunicipioController@create')->middleware('auth')->name('admin.municipios.create');
      Route::post('municipios', 'MunicipioController@store')->middleware('auth')->name('admin.municipios.store');
      Route::get('municipios/{municipio}/edit', 'MunicipioController@edit')->middleware('auth')->name('admin.municipios.edit');
      Route::put('municipios/{municipio}', 'MunicipioController@update')->middleware('auth')->name('admin.municipios.update');
      Route::delete('municipios/{municipio}', 'MunicipioController@destroy')->middleware('auth')->name('admin.municipios.destroy');

      //Fraccionamientos
      Route::get('fraccionamientos', 'FraccionamientoController@index')->middleware('auth')->name('admin.fraccionamientos.index');
      Route::get('fraccionamientos/create', 'FraccionamientoController@create')->middleware('auth')->name('admin.fraccionamientos.create');
      Route::post('fraccionamientos', 'FraccionamientoController@store')->middleware('auth')->name('admin.fraccionamientos.store');
      Route::get('fraccionamientos/{fraccionamiento}/edit', 'FraccionamientoController@edit')->middleware('auth')->name('admin.fraccionamientos.edit');
      Route::put('fraccionamientos/{fraccionamiento}', 'FraccionamientoController@update')->middleware('auth')->name('admin.fraccionamientos.update');
      Route::delete('fraccionamientos/{fraccionamiento}', 'FraccionamientoController@destroy')->middleware('auth')->name('admin.fraccionamientos.destroy');

       //Horario de guardias
     Route::get('horarios', 'HorarioGuardiaController@index')->middleware('auth')->name('admin.horario_guardias.index');
     Route::get('horarios/create', 'HorarioGuardiaController@create')->middleware('auth')->name('admin.horario_guardias.create');
     Route::post('horarios', 'HorarioGuardiaController@store')->middleware('auth')->name('admin.horario_guardias.store');
 
    }
);
