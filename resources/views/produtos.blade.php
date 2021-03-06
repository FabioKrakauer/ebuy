
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Produtos</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/product.css" >
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/navbar.css">
  </head>

  <body>
  <header>
    <nav class="navbar navbar-dark primary-color navbar_home">
      <a class="navbar-brand mt-2" href="#">
        <img src='/assets/logo.png' height="60" alt="mdb logo">
      </a>
      <ul class="nav navbar-nav navbar-right">
      <li class="nav-item dropdown">
        <a class="nav-link" id="navbarDropdownMenuLink"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fa fa-user"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="http://localhost:8000/perfil">Perfil</a>
          <a class="dropdown-item" href="http://localhost:8000/logout">Sair</a>
        </div>
        </li>
        <li class="nav-item mt-2">
          <a href="http://localhost:8000/carrinho"><i class="fas fa-shopping-cart"></i></a>
        </li>
      </ul>
    </nav>
  </header>


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
            <div class="bg-light mb-3 mr-md-3 pt-3 px-3 pt-md-5 px-md-5 text-center text-purple overflow-hidden border-5 h-100 shadow-effect card-border">
              <div class="my-3 purple">
                <h2 class="display-5 h-100">{{$produto->nome}}</h2>
                <p class="lead">R${{$produto->preco}}</p>
                <p class="">{{$produto->descricao}}</p>
                {{-- <a href="/carrinho/adicionar/{{$produto->id}}">Clique aqui para adicionar ao carrinho</a> --}}
              </div>
              <div class="box-shadow mx-auto mb-3 product-img" style="background-image:url({{ URL::to('/') }}/images/{{$produto->img_source}})">
              </div>
              <button href class="btn btn-lg btn-block submit text-uppercase" type="submit"
                      name="btn"><a class="add-link" href="/carrinho/adicionar/{{$produto->id}}">Adicionar ao Carrinho</a></button>
            </div>
          </div>
          @endforeach
      </div>
    </div>
    <footer class="footer_home mt-5">
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

  </body>
</html>
