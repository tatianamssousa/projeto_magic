@extends('base_layout')
@section('title','Index Usuario_carta')
@section('body')
    <div class="row">
        <div class="col-md-6">
        @foreach($usuario_cartas as $usuario_carta)
            Carta:{{$usuario_carta->carta->nome}}<br>
            Edição:{{$usuario_carta->edicao->nome}}<br>
            Usuario:{{$usuario_carta->usuario->nome}}<br>
            Posse:{{$usuario_carta->posse_usuario->nome}}<br>
            Estado:{{$usuario_carta->estado->nome}}<br>
            Lingua:{{$usuario_carta->lingua->nome}}<br><br>
        @endforeach
        </div>
    </div>
@endsection