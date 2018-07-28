<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/login.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <title>Login</title>
  </head>
  <body>
    <header>
      <div class="flex-logo">
  			<label class="logo-title"><a class="logo-title-a" href="index.php">E-Buy</a></label>
        <label for="toggle-menu"><img id="toggle-menu-icon" src="images/toggle.png" alt=""></label>
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
      </div>
    </header>
    <div class="flex-container">
      <?php if(!empty($_GET["error"])){ ?>
      <div class="flex-error">
        <?php
            $value = $_GET["error"];
            if($value == 1){
              echo "Seu usuario não existe!";
            }elseif($value == 2){
              echo "Seu usuario ou senha estão incorretos!";
            }else{
              echo "Algo deu errado! Tente novamente!";
            }

          ?>
      </div>
      <?php } ?>
    <form action="loginverify.php" class="flex-form" method="post">
        <div class="flex-form-item">
          <label class="form-label">E-mail ou usuário*</label>
          <input class="form-input" type="text" name="email" placeholder="Digite seu e-mail ou usuario!">
        </div>
        <div class="flex-form-item">
          <label class="form-label">Senha*</label>
          <input class="form-input" type="password" name="password" placeholder="Digite sua senha!">
        </div>
        <div class=" option">
          <div class="option-remember">
            <input type="checkbox" name="remeber" value="remeber_pass"><label>Lembrar senha!</label>
          </div>
          <a class="option-register" href="remeber.html">Esqueceu sua senha!</a>
        </div>
        <div class="flex-form-item">
          <input type="submit" class="form-input btn-submit" name="btn" value="Logar">
        </div>
      </form>
      <footer>
        <div class="footer">
          Copyright 2018 - Todos os direitos reservados -
        </div>
      </footer>
    </div>


  </body>
</html>
