@extends('base_layout')
@section('title', 'formulario ilustrador')
@section('body')
    <form method="post" action="{{route('ilustradores.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome"><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection