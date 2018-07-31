@extends('base_layout')
@section('title', 'formulario lingua')
@section('body')
    <form method="post" action="{{route('linguas.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome"><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection