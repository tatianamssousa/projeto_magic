@extends('base_layout')
@section('title', 'Formulario Usuario_carta')
@section('csstatiana')

@endsection
@section('body')
    <form method="post" action="{{route('usuario-cartas.store')}}">
    <div class="row">
        {{csrf_field()}}
        <div class="col-md-6">
            Carta:
            <select name="carta" id="carta" class="custom-select">
            @foreach($cartas as $carta)
                <option value="{{$carta->id}}">{{$carta->nome}}</option>
            @endforeach
        </select>
        </div>
        <div class="col-md-6">
            Edição:
            <select name="edicao" id="edicao" class="custom-select">
            @foreach($edicoes as $edicao)
                <option value="{{$edicao->id}}">{{$edicao->nome}}</option>
            @endforeach
        </select>
        </div>
        <div class="col-md-4">
            Usuario:
            <select name="usuario" id="usuario" class="custom-select">
                @foreach($usuarios as $usuario)
                    <option value="{{$usuario->id}}">{{$usuario->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            Posse:
            <select name="posse" id="usuario" class="custom-select">
                @foreach($posses as $posse)
                    <option value="{{$posse->id}}">{{$posse->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-4">
            Estado:
            <select name="estado" id="estado" class="custom-select">
                @foreach($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="offset-md-4 col-md-4">
            Lingua:
            <select name="lingua" id="lingua" class="custom-select">
                @foreach($linguas as $lingua)
                    <option value="{{$lingua->id}}">{{$lingua->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <input type="submit" value="Enviar" class="btn btn-info">
        </div>
    </div>
    </form>
@endsection