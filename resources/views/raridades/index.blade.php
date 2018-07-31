@extends('base_layout')
@section('title', 'raridades')
@section('body')
    @foreach($raridades as $raridade)
        Nome: {{$raridade->nome}}<br><br>
    @endforeach
@endsection