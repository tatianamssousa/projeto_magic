@extends('base_layout')
@section('title', 'edicoes')
@section('body')
    @foreach($edicoes as $edicao)
        Nome:{{$edicao->nome}}<br><br>
    @endforeach
@endsection