@extends('base_layout')
@section('title', 'index carta_edicao')
@section('body')
    @foreach($carta_edicoes as $carta_edicao)
        Carta:{{$carta_edicao->carta->nome}}<br>
        Ilustrador:{{$carta_edicao->ilustrador->nome}}<br>
        Edição:{{$carta_edicao->edicao->nome}}<br>
        Número:{{$carta_edicao->numero}}<br><br>
    @endforeach
@endsection