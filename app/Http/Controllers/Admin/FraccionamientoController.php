<?php

namespace BUHWAR\Http\Controllers\Admin;
use Illuminate\Http\Request;
use BUHWAR\Http\Controllers\Controller;
use BUHWAR\Admin\Fraccionamiento; 
use BUHWAR\Admin\Municipio;

class FraccionamientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $fraccionamientos=Fraccionamiento::
            where('estado','=',1)
            ->get();
        return  view('admin.fraccionamientos.index',
        compact("fraccionamientos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function create()
    {
        $municipios=Municipio::
        where('estado','=',1)
        ->get();
        return  view('admin.fraccionamientos.create',
        compact('municipios'));
    }
    

    
    



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fraccionamiento = new Fraccionamiento;
        $fraccionamiento->nombre = $request->get('nombre');
        $fraccionamiento->jefe_colonia = $request->get('jefe_colonia');
        $fraccionamiento->telefono=$request->get('telefono');
        $fraccionamiento->municipio_id = $request->get('municipio_id');
        $fraccionamiento->latitud = $request->get('latitud');
        $fraccionamiento->longitud = $request->get('longitud');
        $fraccionamiento->estado=1;
        $fraccionamiento->save();
        $fraccionamientos=Fraccionamiento::
        where('estado','=',1)
        ->get();
        return  view('admin.fraccionamientos.index',
        compact('fraccionamientos'));
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
        $fraccionamiento=  Fraccionamiento::findOrFail($id);
        $municipios=Municipio
        ::where('estado','=',1)
        ->get();
        return  view('admin.fraccionamientos.edit',
        compact('municipios','fraccionamiento'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $fraccionamiento = Fraccionamiento::findOrFail($id);
        $fraccionamiento->nombre = $request->get('nombre');
        $fraccionamiento->jefe_colonia = $request->get('jefe_colonia');
        $fraccionamiento->telefono=$request->get('telefono');
        $fraccionamiento->municipio_id = $request->get('municipio_id');
        $fraccionamiento->latitud = $request->get('latitud');
        $fraccionamiento->longitud = $request->get('longitud');
        $fraccionamiento->estado=1;
        $fraccionamiento->update();
       
        $fraccionamientos=Fraccionamiento::
        where('estado','=',1)
        ->get();
        return  view('admin.fraccionamientos.index',
        compact('fraccionamientos'));
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Fraccionamiento $fraccionamiento)
    {
        $fraccionamiento->update([
            'estado' => 0,
        ]);
        return redirect()->back();
    }
}
