<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="css/register.css">
    <title>Cadastro</title>
  </head>
  <body>
    <header class="">

    </header>
        <div class="container">
        <div class="row">
          <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
            <div class="card card-signin my-5">
              <div class="card-body">
                <h5 class="card-title text-center">Cadastro</h5>
                {{-- Confirmar se a classe do form está correta, se alterar, muda o botão --}}
                <form action="/login" class="form-signin" method="post">
                  {{-- Fábio checar método post do laravel --}}
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
                    <input type="email" id="inputName" class="form-control" name="name"           placeholder="Digite seu nome completo" required>
                    <label for="inputName">Nome completo</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inputFemale" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Feminino</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inputMale" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Masculino</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inputOther" value="option3" checked>
                    <label class="form-check-label" for="inlineRadio3">Outro</label>
                  </div><br>
                  <div class="form-label-group">
                    <input type="number" id="inputCPF" class="form-control"  name="cpf" placeholder="___.___.___-__" required>
                    <label for="inputCPF">CPF</label>
                  </div>
                  <div class="flex-form-item">
                    <label for="inputBirth">Data de Nascimento</label>
                    <div class="form-label-group">
                      <input type="date" id="inputBirth" class="form-control" name="dateOfBirth" required>
                    </div>
                  </div>
                  <div class="flex-form-item form-label-group">
                    <label for="inputPhone">Telefone de Contato</label>
                    <input type="number" id="inputPhone" class="form-control" name="phone">
                  </div>
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" name="password"
                       placeholder="Digite sua senha!" required>
                    <label for="inputPassword">Senha</label>
                  </div>
                  <div class="form-label-group">
                    <input type="password-confirmation" id="inputPasswordConfirmation" class="form-control" name="password-confirmation"
                       placeholder="Digite sua senha!" required>
                    <label for="inputPasswordConfirmation">Confirme a Senha</label>
                  </div>
                  <button class="btn btn-lg btn-block submit text-uppercase" type="submit"
                          name="btn">Cadastrar</button>
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
