
<!DOCTYPE html>
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Produtos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">
  </head>

  <body>

    <div id='banner' class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
      <div id="banner-content" class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Wonka Chocolates</h1>
        <p class="lead font-weight-normal">chocolates maravilhosos! Venha e concorra a um ticket de ouro!</p>
      </div>
    </div>

    <div class="d-md-flex flex-md-equal w-100 my-md-3 pl-md-3">
      <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-purple overflow-hidden">
        <div class="my-3 color-1">
          <h2 class="display-5">Produto 1</h2>
          <p class="lead">Descrição do produto 1</p>
        </div>
        <div class="bg-purple box-shadow mx-auto mb-3" style="width: 80%; height: 300px; border-radius: 21px;"></div>
      </div>
      <div class="bg-purple mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-white overflow-hidden">
        <div class="my-3">
          <h2 class="display-5">Produto 2</h2>
          <p class="lead">Descrição do produto 2</p>
        </div>
        <div class="bg-light box-shadow mx-auto mb-3" style="width: 80%; height: 300px; border-radius: 21px;"></div>
      </div>
    </div>

		@foreach ($produtos as $produto)
			<p>Nome do produto: <b>{{$produto->nome}}</b></p>
			<p>Preço: {{$produto->preco}}</p>
			<p>Sobre: {{$produto->descricao}}</p>
			<img src="{{ URL::to('/') }}/images/{{$produto->img_source}}" alt="" />
    @endforeach
  </body>
</html>
