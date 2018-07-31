@extends('base_layout')
@section('title', 'raridades')
@section('body')
    <form method="post" action="{{route('raridades.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome"><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection