@extends('base_layout')
@section('title','Index Usuario')
@section('body')
    <form method="post" action="{{route('usuarios.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome" class="obrigatorio"><br>
        Apelido:<input type="text" name="apelido" id="apelido" class="obrigatorio"><br>
        Email:<input type="text" name="email" id="email" class="obrigatorio"><br>
        Senha:<input type="text" name="senha" id="senha" class="obrigatorio"><br>
        DCI:<input type="text" name="dci" id="dci" class="obrigatorio"><br><br>
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