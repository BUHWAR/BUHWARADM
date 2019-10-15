<?php

namespace BUHWAR\Http\Controllers\Admin;

use Illuminate\Http\Request;
use BUHWAR\Admin\Estado;
use BUHWAR\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Symfony\Component\HttpKernel\HttpCache\Esi;

class EstadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estados=Estado::where('estado','=',1)
        ->get();
        return  view('admin.estados.index',compact('estados'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return  view('admin.estados.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estado = new Estado;
        $estado->nombre = $request->get('nombre');
        $estado->clave = $request->get('clave');
        $estado->estado=1;
        $estado->save();
        $estados=Estado::
        where('estado','=',1)
        ->get();
        return  view('admin.estados.index',compact('estados'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estado= Estado::findOrFail($id);
        return view('admin.estados.edit',compact('estado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Estado $estado)
    {
        $estado->update([
            'nombre' => $request->nombre,
            'clave' => $request->clave,  
        ]);
        $estados=Estado::get();
        return  view('admin.estados.index',compact('estados'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estado $estado)
    {
        $estado->update([
            'estado' => 0,
        ]);
        return redirect()->back();
    }
}
