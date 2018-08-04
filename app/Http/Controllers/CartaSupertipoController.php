<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Carta_supertipo;
use App\Models\Supertipo;
use Illuminate\Http\Request;

class CartaSupertipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carta_supertipos = Carta_supertipo::with('carta')->with('supertipo')->get();
        return view('carta_supertipos.index')->with('carta_supertipos', $carta_supertipos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartas = Carta::all();
        $supertipos = Supertipo::all();
        return view('carta_supertipos.form')->with('cartas', $cartas)->with('supertipos', $supertipos);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carta_supertipo = new Carta_supertipo();
        $carta_supertipo->carta_id = $request->get('carta');
        $carta_supertipo->supertipo_id = $request->get('supertipo');
        $carta_supertipo->save();
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
