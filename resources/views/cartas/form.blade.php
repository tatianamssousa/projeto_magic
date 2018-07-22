@extends('base_layout')
@section('title', 'formulario cartas')
@section('body')
    <form method="post" action="{{route('cartas.store')}}">
        {{csrf_field()}}
            Nome: <input type="text" name="nome" id="nome"><br>
            Custo: <input type="text" name="custo" id="custo"><br>
            Texto: <input type="texto" name="texto" id="texto"><br>
            Flavor: <input type="texto" name="flavor" id="flavor"><br>
            Thougness: <input type="texto" name="thougness" id="thougness"><br>
            Power: <input type="texto" name="power" id="power"><br>
            Lealdade: <input type="text" name="lealdade" id="lealdade"><br><br>
                <input type="submit" value="Enviar">
    </form>
    @endsection