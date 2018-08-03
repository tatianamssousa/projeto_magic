@extends('base_layout')
@section('title', 'formulario nome')
@section('body')
    <form method="post" action="{{route('nomes.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome" class="obrigatorio"><br>
        Carta:
        <select name="carta" id="carta" class="obrigatorio">
            @foreach($cartas as $carta)
                <option value="{{$carta->id}}">{{$carta->nome}}</option>
            @endforeach
        </select><br>
        Lingua:
        <select name="lingua" id="lingua" class="obrigatorio">
            @foreach($linguas as $lingua)
                <option value="{{$lingua->id}}">{{$lingua->nome}}</option>
            @endforeach
        </select><br><br>
            <input type="submit" value="Enviar">
    </form>
@endsection
@section('rodape')
    <script>
        function verificarCampos() {
            console.log('enviar');

            mostrarEnviar();
            $('.obrigatorio').each(function () {
                if (!$(this).val()){
                    esconderEnviar();
                }
            })
        }
        function mostrarEnviar() {
            $('#enviar').show();
        }
        function esconderEnviar() {
            $('#enviar').hide();
        }
        verificarCampos();
        $('.obrigatorio').on('keyup', function () {
            verificarCampos();
        })
    </script>
@endsection