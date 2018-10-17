<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Edit profile</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <link rel="stylesheet" href="/css/reset.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="/css/editprofile.css" >
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/navbar.css">
    <script src="main.js"></script>
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
      <div class="row">
        <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
          <div class="card card-signin my-5">
            <div class="card-body">
              <h5 class="card-title text-center">Editar Perfil</h5>
              {{-- Confirmar se a classe do form está correta, se alterar, muda o botão --}}
              <form action="/perfil" class="form-signin" method="post" enctype="multipart/form-data">
                @csrf
                {{METHOD_FIELD('POST')}}
                <div class="form-label-group">
                  <input type="email" id="inputEmail" class="form-control" name="email"
                  value="{{$user->email}}" disabled>
                  <label for="inputEmail">E-mail ou usuario</label>
                </div>
                <div class="form-label-group">
                  <input type="text" id="inputName" class="form-control" value="{{$user->name}}" name="name" required>
                  <label for="inputName">Nome completo</label>
                </div>
                {{-- @if ($errors->has('sexo'))
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
                </div><br> --}}
                <div class="form-label-group">
                  <input type="number" id="inputCPF" class="form-control"  name="cpf" value="{{$user->cpf}}" disabled>
                  <label for="inputCPF">CPF</label>
                </div>
                <div class="flex-form-item">
                  <label for="inputBirth" style="margin-left: 21px">Data de Nascimento</label>
                  <div class="form-label-group">
                    <input type="date" value="{{$user->born}}" id="inputBirth" class="form-control" name="born" required>
                  </div>
                </div>
                <div class="flex-form-item form-label-group">
                  <p for="inputPhone" style="margin-left: 21px">Telefone de Contato</p>
                  <input type="number" value="{{$user->phone}}" id="inputPhone" class="form-control" name="phone">
                </div>
                <div class="form-label-group">
                  <label for="inputPhone">Foto Atual</label>
                  <img src="{{ URL::to('/') }}/images/{{$user->img_perfil}}" alt="">
                </div>
                <div class="form-label-group">
                  <p for="inputImg" style="margin-left: 21px">Nova foto de Perfil</p>
                  <input type="file" class="form-control-file" name="file" id="inputPhoto">
                </div>
                <button class="btn btn-lg btn-block submit text-uppercase" type="submit"
                        name="btn">Atualizar</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    {{-- <form action="/perfil" method="post" enctype="multipart/form-data" >
      @csrf
      {{METHOD_FIELD('POST')}}
      Nome: <input type="text" value="{{$user->name}}" name="name"> <br><br>
      Email: {{$user->email}} <br><br>
      CPF: <input type="text" value="{{$user->cpf}}" name="cpf"><br><br>
      Telefone: <input type="number" value="{{$user->phone}}" name="phone"><br><br>
      Data de Nascimento: <input type="date" value="{{$user->born}}" name="born"><br><br>
      Foto de perfil atual: <img src="{{ URL::to('/') }}/images/{{$user->img_perfil}}" alt=""><br>
      Nova foto de perfil: <input type="file" name="file"><br>
      <input type="submit" value="Atualizar">
    </form> --}}
    <footer class="footer_home">
        <div class="footer-copyright text-center py-3">© 2018 Copyright:
        </div>
    </footer>
</body>
</html>
