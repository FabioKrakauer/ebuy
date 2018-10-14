<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/login.css">
    <title>Login</title>
  </head>
  <body>
    <header class="">

    </header>
        <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Login</h5>
                <form action="/login" class="form-signin" method="post">
                    @CSRF
                    {{METHOD_FIELD('POST')}}
                    @if ($errors->has('email'))
                      <span class="help-block"><strong style="color: red;">{{ $errors->first('email') }}</strong></span>
                    @endif
                  <div class="form-label-group">
                    <input type="email" id="inputEmail" class="form-control" name="email"
                      placeholder="Digite seu e-mail ou usuario" required autofocus>
                    <label for="inputEmail">E-mail ou usuario</label>
                  </div>

                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" name="password"
                       placeholder="Digite sua senha!" required>
                    <label for="inputPassword">Senha</label>

                  </div>

                  <div class="row mb-3 justify-content-around remember-content">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="remember">
                      <label class="custom-control-label " name="remember" value="remember"
                          for="remember">Lembrar senha</label>
                    </div>
                    <div class="">
                      <a class="option-forget ml-5" href="remeber.html">Esqueceu sua senha?</a>
                    </div>
                  </div>

                  <button class="btn btn-lg btn-block submit text-uppercase" type="submit"
                          name="btn">Entrar</button>
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
