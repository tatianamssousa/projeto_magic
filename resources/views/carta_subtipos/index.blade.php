@extends('base_layout')
@section('title', 'index carta_subtipo')
@section('body')
    @foreach($carta_subtipos as $carta_subtipo)
        Carta:{{$carta_subtipo->carta->nome}}<br>
        Subtipo:{{$carta_subtipo->subtipo->nome}}<br><br>
    @endforeach
@endsection