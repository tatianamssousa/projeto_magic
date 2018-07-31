@extends('base_layout')
@section('title', 'formulario subtipo')
@section('body')
    <form method="post" action="{{route('subtipos.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome"><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection