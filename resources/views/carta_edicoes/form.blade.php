@extends('base_layout')
@section('title', 'formulario carta_edicao')
@section('body')
    <form method="post" action="{{route('carta-edicoes.store')}}">
        {{csrf_field()}}
        Carta:
        <select name="carta" id="carta">
            @foreach($cartas as $carta)
                <option value="{{$carta->id}}">{{$carta->nome}}</option>
            @endforeach
        </select><br>
        Ilustrador:
        <select name="ilustrador" id="ilustrador">
            @foreach($ilustradores as $ilustrador)
                <option value="{{$ilustrador->id}}">{{$ilustrador->nome}}</option>
            @endforeach
        </select><br>
        Edição:
        <select name="edicao" id="edicao">
            @foreach($edicoes as $edicao)
                <option value="{{$edicao->id}}">{{$edicao->nome}}</option>
            @endforeach
        </select><br>
        Número:<input type="text" name="numero" id="numero"><br><br>

        <input type="submit" value="Enviar">
    </form>
@endsection