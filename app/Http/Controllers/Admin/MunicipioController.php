<?php

namespace BUHWAR\Http\Controllers\Admin;

use Illuminate\Http\Request;
use BUHWAR\Http\Controllers\Controller;
use BUHWAR\Admin\Municipio;
use BUHWAR\Admin\Estado;

class MunicipioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $municipios = Municipio::
            where('estado','=',1)
            ->get();
        return  view(
            'admin.municipios.index',
            compact('municipios')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $estados = Estado::where('estado', '=', 1)
            ->get();
        return  view(
            'admin.municipios.create',
            compact('estados')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $municipio = new Municipio;
        $municipio->nombre = $request->get('nombre');
        $municipio->clave_municipio = $request->get('clave_municipio');
        $municipio->estado_id = $request->get('estado_id');
        $municipio->estado=1;
        $municipio->save();
        $municipios=Municipio::
        where('estado','=',1)
        ->get();
        return  view('admin.municipios.index',compact('municipios'));
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
        $municipio= Municipio::findOrFail($id);
        $estados = Estado::where('estado', '=', 1)
            ->get();
        return  view(
            'admin.municipios.edit',
            compact('estados','municipio')
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Municipio $municipio)
    {
        $municipio->update([
            'nombre' => $request->nombre,
            'clave_municipio' => $request->clave_municipio, 
            'estado_id' => $request->estado_id,
        ]);
        $municipios=Municipio::
        where('estado','=',1)
        ->get();
        return  view('admin.municipios.index',compact('municipios'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Municipio $municipio)
    {
        $municipio->update([
            'estado' => 0,
        ]);
        return redirect()->back();
    }
}
