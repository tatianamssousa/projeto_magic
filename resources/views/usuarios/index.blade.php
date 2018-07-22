@extends('base_layout')
@section('title','Index Usuario')
@section('body')
    @foreach($usuarios as $usuario);
        Nome:{{$usuario->nome}}<br>
        Apelido:{{$usuario->apelido}}<br>
        Email:{{$usuario->email}}<br>
        Senha:{{$usuario->senha}}<br>
        DCI: {{$usuario->dci}}<br><br>
    @endforeach
@endsection