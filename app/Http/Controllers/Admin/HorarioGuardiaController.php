<?php

namespace BUHWAR\Http\Controllers\Admin;


use Illuminate\Http\Request;
use BUHWAR\Http\Controllers\Controller;
use BUHWAR\Admin\Guardia;

class HorarioGuardiaController extends Controller
{
    public function index()
    {
        return view('admin.horario_guardias.index');
    }
    public  function create()
    {
        $guardias=Guardia::
            where('estado','=',1)
            ->get();
        return  view('admin.horario_guardias.create',
        compact('guardias'));
    }

    public function store(Request $request)
    {

    }

    public function edit(){

    }
    
}
