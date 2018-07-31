@extends('base_layout')
@section('title', 'index tipo')
@section('body')
    @foreach($tipos as $tipo)
        Nome:{{$tipo->nome}}<br><br>
    @endforeach
@endsection