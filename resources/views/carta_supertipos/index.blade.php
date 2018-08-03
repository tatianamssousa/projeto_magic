@extends('base_layout')
@section('title', 'index carta_supertipo')
@section('body')
    @foreach($carta_supertipos as $carta_supertipo)
        Carta:{{$carta_supertipo->carta->nome}}<br>
        Supertipo:{{$carta_supertipo->supertipo->nome}}<br><br>
    @endforeach
@endsection