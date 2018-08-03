@extends('base_layout')
@section('title', 'edicoes')
@section('body')
    <form method="post" action="{{route('edicoes.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome" class="obrigatorio"><br><br>
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