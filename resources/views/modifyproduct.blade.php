<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/modifyproduct.css">
    <title>Modificar produto!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="container">
  <div class="row">
    <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
      <div class="card card-signin my-5">
        <div class="card-body">
          <h5 class="card-title text-center">Adicionar Produto</h5>
          <form class="form-signin" action="/admin/produtos/modificar/{{$produto->id}}" method="post" enctype="multipart/form-data">
              @CSRF
              {{METHOD_FIELD('PUT')}}
              <?php
                 $estoqueArray = $produto->estoque->toArray();
                 $estoque = $estoqueArray[0]['quantidade'];
              ?>
              <div class="form-label-group">
                <input type="text" id="inputName" class="form-control" name="name" value="{{$produto->nome}}" required autofocus>
                <label for="inputName">Nome do Produto</label><br>
              </div>
              <div class="form-label-group">
                <input type="number" id="inputPrice" class="form-control" name="price" value="{{$produto->preco}}" step="0.1" required>
                <label for="inputName">Preço do Produto</label><br>
              </div>
              <div class="form-label-group">
                <input type="text" id="inputDesc" class="form-control" name="desc" value="{{$produto->descricao}}" required>
                <label for="inputDesc">Descrição do Produto</label><br>
              </div>
              <div class="form-label-group">
                <input type="number" id="inputEstoque" class="form-control" name="estoque" value="{{$estoque}}" required>
                <label for="inputDesc">Quantidade em Estoque</label><br>
              </div>
              <button class="btn btn-lg btn-block submit text-uppercase" type="submit"
              name="Modificar produto">Modificar produto</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
