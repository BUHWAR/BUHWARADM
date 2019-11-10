<?php

namespace BUHWAR\Http\Controllers\Admin;

<<<<<<< HEAD
=======
use Illuminate\Http\Request;
>>>>>>> 08f75151c6c76162b7dcedbebf03f69a4e7a4484
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
