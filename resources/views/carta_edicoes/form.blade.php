@extends('base_layout')
@section('title', 'formulario carta_edicao')
@section('body')
    <form method="post" action="{{route('carta-edicoes.store')}}">
        {{csrf_field()}}
        Carta:
        <select name="carta" id="carta">
            @foreach($cartas as $carta)
                <option value="{{$carta->id}}">{{$carta->nome}}</option>
            @endforeach
        </select><br>
        Ilustrador:
        <select name="ilustrador" id="ilustrador" class="obrigatorio">
            @foreach($ilustradores as $ilustrador)
                <option value="{{$ilustrador->id}}">{{$ilustrador->nome}}</option>
            @endforeach
        </select><br>
        Edição:
        <select name="edicao" id="edicao" class="obrigatorio">
            @foreach($edicoes as $edicao)
                <option value="{{$edicao->id}}">{{$edicao->nome}}</option>
            @endforeach
        </select><br>
        Número:<input type="text" name="numero" id="numero" class="obrigatorio"><br><br>

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