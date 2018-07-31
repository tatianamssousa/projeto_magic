<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <script src="/js/jquery.min.js"></script>
    <script src="/js/propper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
     <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/carta.css">
    <style>
        /*#div1 {*/
            /*background-color: red;*/
        /*}*/
        /*.teste2 {*/
            /*background-color: blue;*/
        /*}*/
        /*.teste {*/
            /*background-color: black;*/
        /*}*/
    </style>
    @yield('csstatiana')
</head>
<body>
<div class="container">
@yield('body')
</div>
{{--<div id="div1" class="teste">div1 teste</div>--}}
{{--<div id="div2" class="teste">div2 teste</div>--}}
{{--<div id="div3" class="teste">div3 teste</div>--}}
{{--<div id="div4" class="teste2">div4 teste2</div>--}}
{{--<div id="div5" class="teste teste2">div5 teste2</div>--}}
@yield('rodape')
</body>
</html>
