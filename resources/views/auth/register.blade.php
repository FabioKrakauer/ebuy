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
                <form action="/register" class="form-signin" method="post">
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
                  @if ($errors->has('name'))
                      <span class="help-block"><strong style="color: red;">{{ $errors->first('name') }}</strong></span>
                    @endif
                  <div class="form-label-group">
                    <input type="text" id="inputName" class="form-control" name="name" placeholder="Digite seu nome completo" required>
                    <label for="inputName">Nome completo</label>
                  </div>
                  @if ($errors->has('sexo'))
                      <span class="help-block"><strong style="color: red;">{{ $errors->first('sexo') }}</strong></span>
                    @endif
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inputFemale" name="sexo" value="option1">
                    <label class="form-check-label" for="inlineRadio1">Feminino</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inputMale" name="sexo" value="option2">
                    <label class="form-check-label" for="inlineRadio2">Masculino</label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" id="inputOther" name="sexo" value="option3" checked>
                    <label class="form-check-label" for="inlineRadio3">Outro</label>
                  </div><br>
                   @if ($errors->has('cpf'))
                      <span class="help-block"><strong style="color: red;">{{ $errors->first('cpf') }}</strong></span>
                    @endif
                  <div class="form-label-group">
                    <input type="number" id="inputCPF" class="form-control"  name="cpf" placeholder="___.___.___-__" required>
                    <label for="inputCPF">CPF</label>
                  </div>
                   @if ($errors->has('born'))
                      <span class="help-block"><strong style="color: red;">{{ $errors->first('born') }}</strong></span>
                    @endif
                  <div class="flex-form-item">
                    <label for="inputBirth">Data de Nascimento</label>
                    <div class="form-label-group">
                      <input type="date" id="inputBirth" class="form-control" name="born" required>
                    </div>
                  </div>
                   @if ($errors->has('phone'))
                      <span class="help-block"><strong style="color: red;">{{ $errors->first('phone') }}</strong></span>
                    @endif
                  <div class="flex-form-item form-label-group">
                    <label for="inputPhone">Telefone de Contato</label>
                    <input type="number" id="inputPhone" class="form-control" name="phone">
                  </div>
                   @if ($errors->has('password'))
                      <span class="help-block"><strong style="color: red;">{{ $errors->first('password') }}</strong></span>
                    @endif
                  <div class="form-label-group">
                    <input type="password" id="inputPassword" class="form-control" name="password"
                       placeholder="Digite sua senha!" required>
                    <label for="inputPassword">Senha</label>
                  </div>
                  @if ($errors->has('password_confirmation'))
                      <span class="help-block"><strong style="color: red;">{{ $errors->first('password_confirmation') }}</strong></span>
                    @endif
                  <div class="form-label-group">
                    <input type="password-confirmation" id="inputPasswordConfirmation" class="form-control" name="password_confirmation"
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


{{-- <!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <title>Cadastro</title>
  </head>
  <body>
    <header class="flex-header">
        <label class="header-logo">
          <a class="logo-a" href="index.php">E-Buy</a>
        </label>
        <label for="toggle-menu"><img class="toggle-menu-icon" src="images/toggle.png" alt=""></label>
        <input type="checkbox" id="toggle-menu">
        <div class="navigation">
          <ul class="nav-ul">
            <li class="nav-li">
              <a class="nav-a" href="index.php">Home</a>
            </li>
            <li class="nav-li">
              <a class="nav-a" href="login.php">Login</a>
            </li>
            <li class="nav-li">
              <a class="nav-a" href="register.php">Cadastro</a>
            </li>
            <li class="nav-li">
              <a class="nav-a" href="faq.php">FAQ</a>
            </li>
          </ul>
        </div>
    </header>
    <div class="flex-container">
      <form class="flex-form" action="/register" method="post">
        @CSRF
        {{METHOD_FIELD('POST')}}

        <div class="flex-form-item">
          <label class="item-label" for="email">E-mail: <span class="item-span">*</span></label>
          <input class="item-input" type="email" name="email" placeholder="Digite seu e-mail" >
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Nome completo <span class="item-span">*</span></label>
          <input class="item-input" type="name" name="name" placeholder="Digite seu nome completo" value="">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Sexo <span class="item-span">*</span></label>
          <div class="item-radio">
            <div class="radio-option">
              <input class="option-input" type="radio" name="sexo" value="Masculino"><label for="gender">Masculino</label>
            </div>
            <div class="radio-option">
              <input class="option-input" type="radio" name="sexo" value="Feminino"><label for="gender">Feminino</label>
            </div>
            <div class="radio-option">
              <input class="option-input" type="radio" name="sexo" value="Outro"><label for="gender">Outro</label>
            </div>
          </div>
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">CPF<span class="item-span">*</span></label>
          <input class="item-input" type="number" name="cpf" placeholder="___.___.___-__" value="" >
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Data de Nascimento <span class="item-span">*</span></label>
          <input class="item-input" type="date" name="born" placeholder="" value="">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Telefone de Contato <span class="item-span">* </span></label>
          <input class="item-input" type="number" name="phone" placeholder="(__)_____-____" value="">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="password">Senha <span class="item-span">*</span></label>
          <input class="item-input" type="password" name="password" placeholder="Digite sua senha">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="password_conf">Confirme sua senha <span class="item-span">*</span></label>
          <input class="item-input" type="password" name="password_confirmation" placeholder="Confirme sua senha">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="password_conf">Foto de perfil <span class="item-span">*</span></label>
          <input class="item-input" type="file" name="photo">
        </div>
        <input class="btn-register" type="submit" name="register" value="Cadastrar">
      </form>
      <footer class="footer">
        Copyright 2018 - Todos os direitos reservados -
      </footer>
    </div>
  </body>
</html> --}}
