<?php

namespace App\Http\Controllers;

use App\Models\Carta;
use App\Models\Edicao;
use App\Models\Estado;
use App\Models\Lingua;
use App\Models\Usuario;
use App\Models\Usuario_Carta;
use Illuminate\Http\Request;

class UsuarioCartaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario_cartas = Usuario_Carta::all();
        return view('usuario_cartas.index')->with('usuario_cartas',$usuario_cartas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cartas = Carta::all();
        $edicoes = Edicao::all();
        $usuarios = Usuario::all();
        $estados = Estado::all();
        $linguas = Lingua::all();
        $posses = Usuario::all();
        return view('usuario_cartas.form')
            ->with('cartas',$cartas)
            ->with('edicoes',$edicoes)
            ->with('usuarios',$usuarios)
            ->with('estados',$estados)
            ->with('linguas',$linguas)
            ->with('posses',$posses);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuario_carta = new Usuario_Carta();
        $usuario_carta->carta_id = $request->get('carta');
        $usuario_carta->edicao_id = $request->get('edicao');
        $usuario_carta->usuario_id = $request->get('usuario');
        $usuario_carta->posse = $request->get('posse');
        $usuario_carta->estado_id = $request->get('estado');
        $usuario_carta->lingua_id = $request->get('lingua');
        $usuario_carta->save();
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
