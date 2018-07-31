@extends('base_layout')
@section('title', 'formulario estado')
@section('body')
    <form method="post" action="{{route('estados.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome"><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection