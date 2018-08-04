<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Carta_subtipo;
use App\Models\Subtipo;
use Illuminate\Http\Request;

class CartaSubtipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carta_subtipos = Carta_subtipo::with('carta')->with('subtipo')->get();
        return view('carta_subtipos.index')->with('carta_subtipos', $carta_subtipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartas = Carta::all();
        $subtipos = Subtipo::all();
        return view('carta_subtipos.form')->with('cartas', $cartas)->with('subtipos', $subtipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carta_subtipo = new Carta_subtipo();
        $carta_subtipo->carta_id = $request->get('carta');
        $carta_subtipo->subtipo_id = $request->get('subtipo');
        $carta_subtipo->save();
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
