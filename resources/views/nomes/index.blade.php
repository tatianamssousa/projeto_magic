@extends('base_layout')
@section('title', 'index nome')
@section('body')
    @foreach($nomes as $nome)
        Nome:{{$nome->nome}}<br>
        Carta:{{$nome->carta->nome}}<br>
        Lingua:{{$nome->lingua->nome}}<br><br>
    @endforeach
@endsection