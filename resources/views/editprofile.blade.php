<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="/perfil" method="post" enctype="multipart/form-data" >
    @csrf
    {{METHOD_FIELD('POST')}}
    Nome: <input type="text" value="{{$user->name}}" name="name"> <br><br>
    Email: {{$user->email}} <br><br>
    CPF: <input type="text" value="{{$user->cpf}}" name="cpf"><br><br>
    Telefone: <input type="number" value="{{$user->phone}}" name="phone"><br><br>
    Data de Nascimento: <input type="date" value="{{$user->born}}" name="born"><br><br>
    Foto de perfil atual: <img src="{{ URL::to('/') }}/images/{{$user->img_perfil}}" alt=""><br>
    Nova foto de perfil: <input type="file" name="file"><br>
    <input type="submit" value="Atualizar">

    </form>
    
</body>
</html>