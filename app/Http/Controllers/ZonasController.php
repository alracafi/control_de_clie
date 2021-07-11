<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zonas;

class ZonasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $zona=Zonas::all();
        return view('clientes.setup.ajustes',compact('zona'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clientes.setup.zonacreate');
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
            'zona'=>'required',
            'descripcion'=>'nullable'
        ]);
        Zonas::create($request->all());
        return redirect()->route('localidades.index')->with('success','Zona creada correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Zonas $zona)
    {
        return view('aplication.showzona',compact('zona'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Zonas $zona)
    {
        return view('aplication.editzona',compact('zona'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Zonas $zona)
    {
        $request->validate([
            'zona' => 'required',
            'descripcion'=>'nullable'
        ]);
        $zona->update($request->all());

        return redirect()->route('localidades.index')->with('success','Zona actualizada correctamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zonas $zona)
    {
        $zona->delete();

        return redirect()->route('localidades.index')->with('success','Zona eliminada');
    }
}
