<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Modificar produto!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

    <form action="/admin/produtos/modificar/{{$produto->id}}" method="post" enctype="multipart/form-data">
        @CSRF
        {{METHOD_FIELD('PUT')}}
        <?php 
           $estoqueArray = $produto->estoque->toArray();
           $estoque = $estoqueArray[0]['quantidade'];
        ?>
        Nome: <input type="text" name="name" value="{{$produto->nome}}"><br><br>
        Preço: <input type="number" name="price" value="{{$produto->preco}}" step="0.1"/><br><br>
        Descrição: <input type="text" name="desc"  value="{{$produto->descricao}}"/><br><br>
        Estoque: <input type="number" name="estoque"  value="{{$estoque}}" /><br><br>
        <input type="submit" value="Modificar produto">
        
    </form>
    
</body>
</html>