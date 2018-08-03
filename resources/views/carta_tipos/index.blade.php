@extends('base_layout')
@section('title', 'index carta-tipo')
@section('body')
    @foreach($carta_tipos as $carta_tipo)
        Carta:{{$carta_tipo->carta->nome}}<br>
        Tipo:{{$carta_tipo->tipo->nome}}<br><br>
    @endforeach
@endsection