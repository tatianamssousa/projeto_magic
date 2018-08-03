@extends('base_layout')
@section('title', 'formulario carta_subtipo')
@section('body')
    <form method="post" action="{{route('carta-subtipos.store')}}">
        {{csrf_field()}}
        Carta:
        <select name="carta" id="carta" class="obrigatorio">
            @foreach($cartas as $carta)
                <option value="{{$carta->id}}">{{$carta->nome}}</option>
            @endforeach
        </select><br>
        Subtipo:
        <select name="subtipo" id="subtipo" class="obrigatorio">
            @foreach($subtipos as $subtipo)
                <option value="{{$subtipo->id}}">{{$subtipo->nome}}</option>
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