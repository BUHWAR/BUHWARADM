<?php

namespace BUHWAR\Http\Controllers\Admin;

use Illuminate\Http\Request;
use BUHWAR\Http\Controllers\Controller;
use BUHWAR\Guardia;
class GuardiaController extends Controller
{
    public function index(){
      $guardias=Guardia::get();
      return view('admin.guardias.index',compact('guardias'));
    }


    public function create()
    {
      return view('admin.guardias.create');
    }
}
