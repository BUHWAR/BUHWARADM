<?php

namespace BUHWAR\Http\Controllers\Admin;

use Illuminate\Http\Request;
use BUHWAR\Http\Controllers\Controller;

class HorarioGuardiaController extends Controller
{
    public function index()
    {
        return view('admin.horario_guardias.index');
    }
}
