@extends('base_layout')
@section('title', 'index estado')
@section('body')
    @foreach($estados as $estado)
        Nome:{{$estado->nome}}<br><br>
    @endforeach
@endsection