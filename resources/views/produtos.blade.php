<!DOCTYPE html>
<html>
<head>
	<title>Produtos</title>
</head>
<body>

	@foreach ($produtos as $produto)
		<p>Nome do produto: <b>{{$produto->nome}}</b></p>
		<p>Preço: {{$produto->preco}}</p>
		<p>Sobre: {{$produto->descricao}}</p>
		<img src="{{$produto->img_source}}" alt="" />		
    @endforeach

</body>
</html>