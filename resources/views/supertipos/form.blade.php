<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('supertipos.store')}}">
        {{csrf_field()}}
        Nome:<input type="text" name="nome" id="nome"><br><br>
            <input type="submit" value="Enviar">
    </form>
</body>
</html>