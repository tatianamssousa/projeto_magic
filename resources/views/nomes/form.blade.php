@extends('base_layout')
@section('title', 'formulario nome')
@section('body')
    <form method="post" action="{{route('nomes.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome"><br>
        Carta:
        <select name="carta" id="carta">
            @foreach($cartas as $carta)
                <option value="{{$carta->id}}">{{$carta->nome}}</option>
            @endforeach
        </select><br>
        Lingua:
        <select name="lingua" id="lingua">
            @foreach($linguas as $lingua)
                <option value="{{$lingua->id}}">{{$lingua->nome}}</option>
            @endforeach
        </select><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection