@extends('base_layout')
@section('title', 'index subtipo')
@section('body')
    @foreach($subtipos as $subtipo)
        Nome:{{$subtipo->nome}}<br><br>
    @endforeach
@endsection