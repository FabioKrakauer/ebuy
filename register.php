<?php
  //FUNÇÕES
  function isPartUppercase($string) {
    return (bool) preg_match('/[A-Z]/', $string);
  }

  function haveNumber($string) {
    return (bool) preg_match('/[0-9]/', $string);
  }

  function passwordValidation($password, $password_conf) {
    if ((haveNumber($password) && isPartUppercase($password) && strlen($password) >= 8) && $password === $password_conf) {
      return true;
    }
    return false;
  }

  function nameValidation($name) {
    if (preg_match("/^[a-zA-Z ]*$/",$name)) {
      return true;
    }
    return false;
  }

  function validateDate($date, $format = 'Y-m-d') {
    $d = DateTime::createFromFormat($format, $date);
    // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
    return $d && $d->format($format) === $date;
  }

  function mantemInput($erro, $dado) {
    if ($_POST) {
      if ($erro === '') {
        echo $_POST[$dado];
      }
    }
  }

  function mantemSexo() {
    if (condition) {
      // code...
    }
    echo "checked";
  }

  //CÓDIGO
  $email = $password = $password_conf = $name = $gender = $cpf = $birth = $phone = '';
  $emailErr = $passwordErr = $password_confErr = $nameErr = $genderErr = $cpfErr = $birthErr = $phoneErr = '';

  //SE POST
  if ($_POST) {

    if (empty($_POST['name'])) {
      $nameErr = 'Nome é obrigatório';
    } elseif (nameValidation($_POST['name'])) {
      $name = $_POST['name'];
    } else {
      $nameErr = 'Nome inválido';
    }

    if (empty($_POST['email'])) {
      $emailErr = 'E-mail é obrigatório';
    } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
      $email = $_POST['email'];
    } else {
      $emailErr = 'E-mail inválido';
    }

    if (empty($_POST['gender'])) {
      $genderErr = 'Sexo é obrigatório';
    } else {
      $gender = $_POST['gender'];
    }

    if (empty($_POST['cpf'])) {
      $cpfErr = 'CPF obrigatório';
    } elseif(is_numeric($_POST['cpf']) && strlen($_POST['cpf']) === 11) {
      $cpf = $_POST['cpf'];
    } else {
      $cpfErr = 'CPF inválido';
    }

    if (empty($_POST['birth'])) {
      $birthErr = 'Data obrigatória';
    } else {
      if (validateDate($_POST['birth'])) {
        $birth = $_POST['birth'];
      } else {
        $birthErr = 'Data inválida';
      }
    }

    if (empty($_POST['phone'])) {
      $phoneErr = 'Telefone é obrigatório';
    } elseif(is_numeric($_POST['phone']) && (strlen($_POST['phone']) >= 10 && strlen($_POST['phone']) <= 11)) {
      $phone = $_POST['phone'];
    } else {
      $phoneErr = 'Telefone inválido';
    }

    if (empty($_POST['password'])) {
      $passwordErr = 'Senha é obrigatória';
      $password_confErr = 'Senha é obrigatória';
    } elseif (passwordValidation($_POST['password'], $_POST['password_conf'])) {
      $password = md5($_POST['password']);
    } elseif ($_POST['password'] !== $_POST['password_conf']) {
      $passwordErr = 'Senhas não são iguais';
      $password_confErr = 'Senhas não são iguais';
    } else {
      $passwordErr = 'Senha inválida';
      $password_confErr = 'Senha inválida';
    }
  }
?>


<!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/register.css">
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
    <title>Cadastro</title>
  </head>
  <body>
    <?php 
    require("Funset.php"); 
      if(existsSession("login")){
        header("Location: profile.php");
      }

     ?>
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
      <form class="flex-form">
        <div class="caixa">
            <div class="caixa-interna">
              <div class="caixa-texto">
                <h5>Sua foto de perfil</h5>
              </div>
              <img src="images/rosto.png" width="110" height="110" alt="avatar"
              class="img-avatar">
            </div>
        </div>
        <div class="botao">
           <input type="file" name="botao" value="Alterar Foto" class="btn">
        </div>
      <form class="flex-form" method="post">
        <div class="flex-form-item">
          <label class="item-label" for="name">Nome completo <span class="item-span">* <?= $nameErr ?></span></label>
          <input class="item-input" type="name" name="name" placeholder="Digite seu nome completo" value="<?php mantemInput($nameErr, 'name') ?>">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="email">E-mail <span class="item-span">* <?= $emailErr ?></span></label>
          <input class="item-input" type="email" name="email" placeholder="Digite seu e-mail" value="<?php mantemInput($emailErr, 'email') ?>">
        </div>
                <div class="flex-form-item">
          <label class="item-label" for="name">Sexo <span class="item-span">* <?= $genderErr ?></span></label>
          <div class="item-radio">
            <div class="radio-option">
              <input class="option-input" type="radio" name="gender" value="male" <?= (isset($_POST['gender']) && $_POST['gender'] === 'male')?'checked':'' ?>><label for="gender">Masculino</label>
            </div>
            <div class="radio-option">
              <input class="option-input" type="radio" name="gender" value="female" <?= (isset($_POST['gender']) && $_POST['gender'] === 'female')?'checked':'' ?>><label for="gender">Feminino</label>
            </div>
            <div class="radio-option">
<<<<<<< HEAD
              <input class="option-input" type="radio" name="gender" value="other"><label for="gender">Outro</label>
=======
              <input class="option-input" type="radio" name="gender" value="other" <?= (isset($_POST['gender']) && $_POST['gender'] === 'other')?'checked':'' ?>><label for="gender">Outro</label>
>>>>>>> 630dbd0bd87b11d76cbf1812c2e67fa5e264ba28
            </div>
          </div>
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">CPF <span class="item-span">* <?= $cpfErr ?></span></label>
          <input class="item-input" type="number" name="cpf" placeholder="___.___.___-__" value="<?php mantemInput($cpfErr, 'cpf') ?>" >
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Data de Nascimento <span class="item-span">* <?= $birthErr ?></span></label>
          <input class="item-input" type="date" name="birth" placeholder="" value="<?php mantemInput($birthErr, 'birth') ?>">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Telefone de Contato <span class="item-span">* <?= $phoneErr ?></span></label>
          <input class="item-input" type="number" name="phone" placeholder="(__)_____-____" value="<?php mantemInput($phoneErr, 'phone') ?>">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="password">Senha <span class="item-span">* <?= $passwordErr ?></span></label>
          <input class="item-input" type="password" name="password" placeholder="Digite sua senha">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="password_conf">Confirme sua senha <span class="item-span">* <?= $password_confErr ?></span></label>
          <input class="item-input" type="password" name="password_conf" placeholder="Confirme sua senha">
        </div>
        <input class="btn-register" type="submit" name="register" value="Cadastrar">
      </form>
      <footer class="footer">
        Copyright 2018 - Todos os direitos reservados -
      </footer>
    </div>
  </body>
</html>
