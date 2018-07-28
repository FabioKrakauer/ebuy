<?php

  $email = $password = $password_conf = $name = $gender = $cpf = $birth = $phone = '';
  $emailErr = $passwordErr = $password_confErr = $nameErr = $genderErr = $cpfErr = $birthErr = $phoneErr = '';

  if ($_POST) {
    if (empty($_POST['email'])) {
      $emailErr = 'E-mail é obrigatório';
    } else {
      $email = $_POST['email'];
    }

    if (empty($_POST['password'])) {
      $passwordErr = 'Senha é obrigatória';
    } else {
      $password = $_POST['password'];
    }

    if (empty($_POST['password_conf'])) {
      $password_confErr = 'Confirmação de Senha é obrigatória';
    } else {
      $password_conf = $_POST['password_conf'];
    }

    if ($_POST['password'] && $_POST['password_conf']) {
      if ($_POST['password'] !== $_POST['password_conf']) {
        $password_confErr = 'Senhas não são iguais';
      }
    }

    if (empty($_POST['name'])) {
      $nameErr = 'Nome é obrigatório';
    } else {
      $name = $_POST['name'];
    }

    if (empty($_POST['gender'])) {
      $genderErr = 'Sexo é obrigatório';
    } else {
      $gender = $_POST['gender'];
    }

    if (empty($_POST['birth'])) {
      $birthErr = 'Nascimento é obrigatório';
    } else {
      $birth = $_POST['birth'];
    }

    if (empty($_POST['phone'])) {
      $phoneErr = 'Telefone é obrigatório';
    } else {
      $phone = $_POST['phone'];
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
      <form class="flex-form" method="post">
        <div class="flex-form-item">
          <label class="item-label" for="email">E-mail: <span class="item-span">* <?= $emailErr ?></span></label>
          <input class="item-input" type="email" name="email" placeholder="Digite seu e-mail">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="password">Senha: <span class="item-span">* <?= $passwordErr ?></span></label>
          <input class="item-input" type="password" name="password" placeholder="Digite sua senha">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="password_conf">Confirme sua senha: <span class="item-span">* <?= $password_confErr ?></span></label>
          <input class="item-input" type="password" name="password_conf" placeholder="Confirme sua senha">
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Nome completo: <span class="item-span">* <?= $nameErr ?></span></label>
          <input class="item-input" type="name" name="name" placeholder="Digite seu nome completo" >
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Sexo: <span class="item-span">* <?= $genderErr ?></span></label>
          <div class="item-radio">
            <div class="radio-option">
              <input class="option-input" type="radio" name="gender" value="male"><label for="gender">Masculino</label>
            </div>
            <div class="radio-option">
              <input class="option-input" type="radio" name="gender" value="female"><label for="gender">Feminino</label>
            </div>
            <div class="radio-option">
              <input class="option-input" type="radio" name="gender" value="other"><label for="gender">Other</label>
            </div>
          </div>
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">CPF: <span class="item-span">* <?= $cpfErr ?></span></label>
          <input class="item-input" type="number" name="cpf" placeholder="___.___.___-__" >
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Data de Nascimento: <span class="item-span">* <?= $birthErr ?></span></label>
          <input class="item-input" type="date" name="birth" placeholder="" >
        </div>
        <div class="flex-form-item">
          <label class="item-label" for="name">Telefone de Contato: <span class="item-span">* <?= $phoneErr ?></span></label>
          <input class="item-input" type="name" name="phone" placeholder="(__)_____-____" >
        </div>
        <input class="btn-register" type="submit" name="register" value="Cadastrar">
      </form>
      <footer class="footer">
        Copyright 2018 - Todos os direitos reservados -
      </footer>
    </div>
  </body>
</html>
