<!DOCTYPE html>
<!-- saved from url=(0051)https://getbootstrap.com/docs/4.0/examples/product/ -->
<html lang="en">
  <head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>Produtos</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link href="css/product.css" rel="stylesheet">
    <link href="css/navbar.css" rel="stylesheet">
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
  			<li class="nav-item">
  				<a href="#"><i class="fas fa-user"></i></a>
  			</li>
  			<li class="nav-item">
  				<a href="#"><i class="fas fa-shopping-cart"></i></a>
  			</li>
  		</ul>
  	</nav>
  </header>
  <div class="container">
    <hr>

    <div class="row">
        <div class="col-sm-8 offset-sm-2">
    <p>Pagamento</p>

    <article class="card">
    <div class="card-body p-5">
    <p> <img src="http://bootstrap-ecommerce.com/main/images/icons/pay-visa.png">
        <img src="http://bootstrap-ecommerce.com/main/images/icons/pay-mastercard.png">
    <img src="http://bootstrap-ecommerce.com/main/images/icons/pay-american-ex.png">
    </p>

    <form role="form">
    <div class="form-group">
    <label for="username">Nome Completo do Cartão</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-user"></i></span>
        </div>
        <input type="text" class="form-control" name="username" placeholder="" required="">
    </div>
    </div>

    <div class="form-group">
    <label for="cardNumber">Numero do Cartão</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <span class="input-group-text"><i class="fa fa-credit-card"></i></span>
        </div>
        <input type="text" class="form-control" name="cardNumber" placeholder="">
    </div>
    </div>

    <div class="row">
        <div class="col-sm-8">
            <div class="form-group">
                <label><span class="hidden-xs">Data de Expiração</span> </label>
                <div class="form-inline">
                    <select class="form-control" style="width:45%">
                    <option>MM</option>
                    <option>01 - Janeiro</option>
                    <option>02 - Fevereiro</option>
                    <option>03 - Março</option>
                    <option>04 - Abril</option>
                    <option>05 - Maio</option>
                    <option>06 - Junho</option>
                    <option>07 - Julho</option>
                    <option>08 - Agosto</option>
                    <option>09 - Setembro</option>
                    <option>10 - Outubro</option>
                    <option>11 - Novembro</option>
                    <option>12 - Dezembro</option>
                    </select>
                    <span style="width:10%; text-align: center"> / </span>
                    <select class="form-control" style="width:45%">
                    <option>YY</option>
                    <option>2018</option>
                    <option>2019</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <label data-toggle="tooltip" title="" data-original-title="3 digitos do verso do cartão">CVV <i class="fa fa-question-circle"></i></label>
                <input class="form-control" required="" type="text">
            </div>
        </div>
    </div>
    <button class="subscribe btn btn-primary btn-block" type="button">Confirma</button>
    </form>
    </div>
    </article>
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
