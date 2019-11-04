<?php

namespace BUHWAR\Http\Controllers\Admin;

use Illuminate\Http\Request;
use BUHWAR\Http\Controllers\Controller;
use BUHWAR\Guardia;
class GuardiaController extends Controller
{
    public function index(){
      $guardias=Guardia::
      where('estado','=',1)
      ->get();
      return view('admin.guardias.index',compact('guardias'));
    }


    public function create()
    {
      
      return view('admin.guardias.create');
    }

    public function store(Request $request)
    {
      $guardia = new Guardia;
      $guardia->nombre = $request->get('nombre');
      $guardia->direccion =$request->get('direccion');
      $guardia->telefono =$request->get('telefono');
      $guardia->sexo =$request->get('sexo');
      $guardia->no_tablet =$request->get('no_tablet');
      $guardia->no_equipo =$request->get('no_equipo');
      $guardia->estado =1;
      $guardia->save();
      $guardias=Guardia::
      where('estado','=',1)
      ->get();
      return view('admin.guardias.index',
      compact('guardias'));
    }

    public function edit(){
      return view('admin.guardias.edit');
    }
}
