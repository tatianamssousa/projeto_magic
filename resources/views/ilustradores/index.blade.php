@extends('base_layout')
@section('title', 'index ilustrador')
@section('body')
    @foreach($ilustradores as $ilustrador)
        Nome:{{$ilustrador->nome}}<br><br>
    @endforeach
@endsection