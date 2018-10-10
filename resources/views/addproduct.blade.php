<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Adicionar produto!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="/produtos/adicionar" method="post" enctype="multipart/form-data">
        @CSRF
        {{METHOD_FIELD('POST')}}
        
        <input type="text" name="name" placeholder="Digite o nome do produto"/><br><br>
        <input type="number" name="price" placeholder="Digite o preço do produto"/><br><br>
        <input type="text" name="desc"  placeholder="Digite a descrição do produto"/><br><br>
        <input type="number" name="estoque" placeholder="Digite a quantidade no estoque" /><br><br>
        <label for="img">Coloque a imagem do produto </label><input type="file" name="file" /><br><br>
        <input type="submit" value="Adicionar produto">
        
    </form>
    @if(count($errors)>0)
        @foreach($errors as $e)
            {{$e}}
        @endforeach
    @endif
</body>
</html>