@extends('base_layout')
@section('title', 'formulario carta_supertipo')
@section('body')
    <form method="post" action="{{route('carta-supertipos.store')}}">
        {{csrf_field()}}
        Carta:
        <select name="carta" id="carta">
            @foreach($cartas as $carta)
                <option value="{{$carta->id}}">{{$carta->nome}}</option>
            @endforeach
        </select><br>
        Supertipo:
        <select name="supertipo" id="supertipo">
            @foreach($supertipos as $supertipo)
                <option value="{{$supertipo->id}}">{{$supertipo->nome}}</option>
            @endforeach
        </select><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection