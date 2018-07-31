@extends('base_layout')
@section('title', 'index lingua')
@section('body')
    @foreach($linguas as $lingua)
        Nome:{{$lingua->nome}}<br><br>
    @endforeach
@endsection