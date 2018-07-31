@extends('base_layout')
@section('title', 'index supertipo')
@section('body')
    @foreach($supertipos as $supertipo)
        Nome:{{$supertipo->nome}}<br><br>
    @endforeach
@endsection