<?php

namespace BUHWAR\Http\Controllers\Admin;

use BUHWAR\Http\Controllers\Controller;

class HorarioGuardiaController extends Controller
{
    public function index()
    {
        return view('admin.horario_guardias.index');
    }
}
