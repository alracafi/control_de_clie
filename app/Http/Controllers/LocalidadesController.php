<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Localidades;
use App\Models\Zonas;
class LocalidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $localidade=Localidades::all(); 
        $zona=Zonas::all();
        return view('aplication.zona_localidad',compact('localidade','zona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.setup.localcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'localidad'=>'required'
        ]);
        Localidades::create($request->all());
        return redirect()->route('localidades.index')->with('success','Localidad creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Localidades $localidade)
    {
        return view('aplication.showlocalidad',compact('localidade'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Localidades $localidade)
    {
        return view('aplication.editlocalidad',compact('localidade'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Localidades $localidade)
    {
        $request->validate([
            'localidad' => 'required'
            
        ]);
        $localidade->update($request->all());

        return redirect()->route('localidades.index')->with('success','Localidad actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Localidades $localidade)
    {
        $localidade->delete();

        return redirect()->route('localidades.index')->with('success','Localidad eliminada');
    }
}
