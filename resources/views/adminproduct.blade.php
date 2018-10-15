<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/adminproduct.css" >
    <title>Admin produtos</title>
</head>
<body>

  <div class="container-fluid">
    <div class="row">
        @foreach ($produtos as $produto)
        <?php
            $estoqueArray = $produto->estoque->toArray();
            $estoque = $estoqueArray[0]['quantidade'];
        ?>
        <div class="col-12 col-md-6 col-xl-4 mt-3">
          <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-purple overflow-hidden border-5 h-100 shadow-effect card-border">
            <div class="my-3 purple">
              <h2 class="display-5 h-100">{{$produto->nome}}</h2>
              <p class="lead">R${{$produto->preco}}</p>
              <p>Estoque: {{$estoque}}</p>
              <p class="">{{$produto->descricao}}</p>
            </div>
            <div class="box-shadow mx-auto mb-3 product-img" style="background-image:url({{ URL::to('/') }}/images/{{$produto->img_source}})">
            </div>
            <div class="">
              <a class="badge badge-primary link" href="/admin/produtos/modificar/{{$produto->id}}">Clique aqui para modificar o produto</a>
            </div>
            <div class="badge badge-danger link" >
              <a href="/admin/produtos/deletar/{{$produto->id}}" style="color:white">Clique aqui para deletar o produto</a>
            </div>
          </div>
        </div>
        {{-- <p>Nome do produto: <b>{{$produto->nome}}</b></p>
        <p>Preço: {{$produto->preco}}</p>
        <p>Sobre: {{$produto->descricao}}</p>
            <p>Quantidade no estoque: {{$estoque}} </p>
            <a href="/admin/produtos/modificar/{{$produto->id}}">Clique aqui para modificar o produto</a>
            <a href="/admin/produtos/deletar/{{$produto->id}}">Clique aqui para deletar o produto</a>
        <img src="{{ URL::to('/') }}/images/{{$produto->img_source}}" alt="" /> --}}
        @endforeach
    </div>
  </div>



</body>
</html>
