<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin produtos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
    @foreach ($produtos as $produto)
    <?php 
        $estoqueArray = $produto->estoque->toArray();
        $estoque = $estoqueArray[0]['quantidade'];
    ?>
		<p>Nome do produto: <b>{{$produto->nome}}</b></p>
		<p>Preço: {{$produto->preco}}</p>
		<p>Sobre: {{$produto->descricao}}</p>
        <p>Quantidade no estoque: {{$estoque}} </p>
		<img src="{{ URL::to('/') }}/images/{{$produto->img_source}}" alt="" />		
    @endforeach
    
</body>
</html>