<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Carta_edicao;
use App\Models\Edicao;
use App\Models\Ilustrador;
use Illuminate\Http\Request;

class CartaEdicaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $carta_edicoes = Carta_edicao::with('carta')->with('ilustrador')->with('edicao')->get();
        return view('carta_edicoes.index')->with('carta_edicoes', $carta_edicoes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartas = Carta::all();
        $ilustradores = Ilustrador::all();
        $edicoes = Edicao::all();
        return view('carta_edicoes.form')
            ->with('cartas', $cartas)
            ->with('ilustradores', $ilustradores)
            ->with('edicoes', $edicoes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $carta_edicao = new Carta_edicao();
        $carta_edicao->carta_id = $request->get('carta');
        $carta_edicao->ilustrador_id = $request->get('ilustrador');
        $carta_edicao->edicao_id = $request->get('edicao');
        $carta_edicao->numero = $request->get('numero');
        $carta_edicao->save();
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
