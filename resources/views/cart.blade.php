<!DOCTYPE html>
<html lang="pt-br">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <link rel="stylesheet" href="/css/footer.css">
    <title>Produtos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="css/cart.css" rel="stylesheet">
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
          <a class="dropdown-item" href="">Sair</a>
        </div>
        </li>
        <li class="nav-item mt-2">
          <a href="http://localhost:8000/carrinho"><i class="fas fa-shopping-cart"></i></a>
        </li>
      </ul>
    </nav>
  </header>
  <div class="container mt-5" style="margin:140px">
    <div class="row">
        <div class="col-sm-12">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Produto</th>
                        <th>Quantidade</th>
                        <th class="text-center">Preço</th>
                        <th class="text-center">Total</th>
                        <th> </th>
                    </tr>
                </thead>
                <tbody>
                    <?php $subtotal = 0; ?>
                    @foreach($carts as $cart)
                    <?php
                    $preco = (int)$cart['price'];
                    $total = $preco * $cart['qnt'];
                    ?>
                    <tr>
                        <td class="col-sm-8 col-md-6">
                        <div class="media">
                            <div class="media-body">
                                <h4 class="media-heading"><a class="purple" href="#">{{$cart['name']}}</a></h4>
                            </div>
                        </div></td>
                        <td class="col-sm-1 col-md-1" style="text-align: center">
                            <a class="purple" href="/carrinho/quantidade/adicionar/{{$cart['product_id']}}">
                                <i class="fas fa-plus-square"></i>
                            </a>
                            <a class="purple" href="/carrinho/quantidade/remover/{{$cart['product_id']}}">
                                <i class="fas fa-minus-square"></i>
                            </a>
                        <input type="email" class="form-control" id="exampleInputEmail1" value="{{$cart['qnt']}}" disabled>
                        </td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>{{$cart['price']}}</strong></td>
                        <td class="col-sm-1 col-md-1 text-center"><strong>R${{$total}}</strong></td>
                        <td class="col-sm-1 col-md-1">
                        <a href="/carrinho/remover/{{$cart['product_id']}}" class="btn btn-danger">
                            <span class="glyphicon glyphicon-remove"></span> Remover
                        </a></td>
                    </tr>
                    <?php
                        $subtotal += $total;
                    ?>
                    @endforeach
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h5>Subtotal</h5></td>
                        <td class="text-right"><h5><strong>R${{$subtotal}}</strong></h5></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td><h3>Total</h3></td>
                        <td class="text-right"><h3><strong>R${{$subtotal}}</strong></h3></td>
                    </tr>
                    <tr>
                        <td>   </td>
                        <td>   </td>
                        <td>   </td>
                        <td>
                        <a class="btn btn-default purple" href="/produtos">
                            <span class="glyphicon glyphicon-shopping-cart"></span> Continuar Comprando
                        </a></td>
                        <td>
                        <a href="/pagamento" class="btn btn-buy">
                            Comprar <span class="glyphicon glyphicon-play"></span>
                        </a></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
<footer class="footer_home">
    <div class="footer-copyright text-center py-3">© 2018 Copyright:
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
