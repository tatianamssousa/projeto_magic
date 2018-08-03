@extends('base_layout')
@section('title', 'formulario carta-tipo')
@section('body')
    <form method="post" action="{{route('carta-tipos.store')}}">
        {{csrf_field()}}
        Carta:
        <select name="carta" id="carta">
            @foreach($cartas as $carta)
                <option value="{{$carta->id}}">{{$carta->nome}}</option>
            @endforeach
        </select><br>
        Tipo:
        <select name="tipo" id="tipo">
            @foreach($tipos as $tipo)
                <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
            @endforeach
        </select><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection