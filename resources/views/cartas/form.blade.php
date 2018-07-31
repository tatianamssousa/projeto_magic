@extends('base_layout')
@section('title', 'formulario cartas')
@section('body')
    <form method="post" action="{{route('cartas.store')}}">
        {{csrf_field()}}
           <div id="nome-container"> Nome: <input type="text" name="nome" id="nome" class="obrigatorio"></div>
            Custo: <input type="text" name="custo" id="custo" class="obrigatorio"><br>
            Texto: <input type="text" name="texto" id="texto" class="obrigatorio"><br>
            Flavor: <input type="text" name="flavor" id="flavor" class="obrigatorio"><br>
            Thougness: <input type="text" name="thougness" id="thougness" class="obrigatorio"><br>
            Power: <input type="text" name="power" id="power" class="obrigatorio"><br>
            Lealdade: <input type="text" name="lealdade" id="lealdade" class="obrigatorio"><br><br>
                <input type="submit" id="enviar" value="Enviar">
    </form>
@endsection
@section('rodape')
    <script>
//        $('#nome-container').hover(function () {
//            console.log("entrou");
//            $(this).hide();
//        }, function (){
//            console.log("saiu");
//            $(this).show();
//        });

        function verificarCampos() {
            console.log('enviar');
//            if (
//                !$('#nome').val() ||
//                !$('#custo').val() ||
//                !$('#texto').val() ||
//                !$('#flavor').val() ||
//                !$('#thougness').val() ||
//                !$('#power').val() ||
//                !$('#lealdade').val()
//            ){
//                return esconderEnviar();
//            }
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