
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Produtos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/product.css" >
  </head>

  <body>

    <div id='banner' class="position-relative overflow-hidden p-3 p-md-5 w-100 text-center">
      <div id="banner-content" class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 font-weight-normal">Wonka Chocolates</h1>
        <p class="lead font-weight-normal">chocolates maravilhosos! Venha e concorra a um ticket de ouro!</p>
      </div>
    </div>

    <div class="container-fluid">
      <div class="row">
          @foreach ($produtos as $produto)
          <div class="col-12 col-md-6 col-xl-4 mt-3">
            <div class="bg-light mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-purple overflow-hidden border-5 h-100 shadow-effect card-border">
              <div class="my-3 purple">
                <h2 class="display-5 h-100">{{$produto->nome}}</h2>
                <p class="lead">R${{$produto->preco}}</p>
                <p class="">{{$produto->descricao}}</p>
              </div>
              <div class="box-shadow mx-auto mb-3 product-img" style="background-image:url({{ URL::to('/') }}/images/{{$produto->img_source}})">
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </body>
</html>