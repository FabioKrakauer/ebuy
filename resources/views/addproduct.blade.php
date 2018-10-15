<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/addproduct.css">
    <title>Adicionar Produto</title>
  </head>
  <body>
    <header class="">

    </header>
        <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Adicionar Produto</h5>
                <form class="form-signin" action="/admin/produtos/adicionar" method="post" enctype="multipart/form-data">
                  @CSRF
                  {{METHOD_FIELD('POST')}}

                  <div class="form-label-group">
                    <input type="text" id="inputName" class="form-control" name="name" placeholder="Digite o nome do produto" required autofocus>
                    <label for="inputName">Nome do Produto</label><br>
                  </div>
                  <div class="form-label-group">
                    <input type="number" id="inputPrice" class="form-control" name="price" placeholder="Digite o preço do produto" required>
                    <label for="inputName">Preço do Produto</label><br>
                  </div>
                  <div class="form-label-group">
                    <input type="text" id="inputDesc" class="form-control" name="desc" placeholder="Digite a descrição do produto" required>
                    <label for="inputDesc">Descrição do Produto</label><br>
                  </div>
                  <div class="form-label-group">
                    <input type="number" id="inputEstoque" class="form-control" name="estoque" placeholder="Digite a quantidade no estoque" required>
                    <label for="inputDesc">Quantidade em Estoque</label><br>
                  </div>
                  <div class="form-label-group">
                    <input type="file" id="inputImg" class="form-control-file" name="file" required>
                    <label for="inputImg">Escolha a imagem do produto</label><br>
                  </div>
                  <button class="btn btn-lg btn-block submit text-uppercase" type="submit"
                  name="Adicionar produto">Adicionar Produto</button>
                </form>
                @if(count($errors)>0)
                    @foreach($errors as $e)
                        {{$e->first}}
                    @endforeach
                @endif
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
