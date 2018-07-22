@extends('base_layout')
@section('title', 'cartas index')
@section('body')
    @foreach($cartas as $carta);
        Nome: {{$carta->nome}}<br>
        Custo: {{$carta->custo}}<br>
        Texto: {{$carta->texto}}<br>
        Flavor: {{$carta->flavor}}<br>
        Thougness: {{$carta->thougness}}<br>
        Power: {{$carta->power}}<br>
        Lealdade: {{$carta->lealdade}}<br><br>
    @endforeach
@endsection