<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Carta_tipo;
use App\Models\Tipo;
use Illuminate\Http\Request;

class CartaTipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carta_tipos = Carta_tipo::with('carta')->with('tipo')->get();
        return view('carta_tipos.index')->with('carta_tipos', $carta_tipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartas = Carta::all();
        $tipos = Tipo::all();
        return view('carta_tipos.form')->with('cartas', $cartas)->with('tipos', $tipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carta_tipo = new Carta_tipo();
        $carta_tipo->carta_id = $request->get('carta');
        $carta_tipo->tipo_id = $request->get('tipo');
        $carta_tipo->save();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
