@extends('base_layout')
@section('title','Index Usuario')
@section('body')
    <form method="post" action="{{route('usuarios.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome"><br>
        Apelido:<input type="text" name="apelido" id="apelido"><br>
        Email:<input type="text" name="email" id="email"><br>
        Senha:<input type="text" name="senha" id="senha"><br>
        DCI:<input type="text" name="dci" id="dci"><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection