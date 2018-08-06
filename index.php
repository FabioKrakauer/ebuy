!DOCTYPE html>
<html dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Home</title>
  </head>
  <body>
      <?php
        require("Funset.php");
        if(!existsSession("login")){
          if(existsCookie("savelogin")){
            $getInfo = json_decode($_COOKIE["savelogin"], true);
            createSession("login", $getInfo);
          }
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
            <?php 
              if(existsSession("login")){ 
                ?>
                <li class="nav-li">
              <a class="nav-a" href="profile.php">Perfil</a>
            </li>
            <li class="nav-li">
              <a class="nav-a" href="logout.php">Deslogar</a>
            </li>
        <?php }else{
         ?>
            <li class="nav-li">
              <a class="nav-a" href="login.php">Login</a>
            </li>
            <li class="nav-li">
              <a class="nav-a" href="register.php">Cadastro</a>
            </li>
<?php } ?>
            <li class="nav-li">
              <a class="nav-a" href="faq.php">FAQ</a>
            </li>
          </ul>
        </div>
    </header>
    <div class="flex-container">
      <div class="flex-banner">
        <img class="banner-img" src="images/banner-1.jpg" alt="banner">
      </div>
      <div class="flex-articles">
        <article class="articles-product">
          <img class="product-img" src="images/produto-2.jpg" alt="produto 02">
          <h2 class="product-h2">Produtos diversificados</h2>
          <p class="product-p">A nossa loja possui uma grande variedade de chocolates</p>
        </article>
        <article class="articles-product">
          <img class="product-img" src="images/produto-3.jpg" alt="produto 03">
          <h2 class="product-h2">Arte em forma de chocolate</h2>
          <p class="product-p">Nossos produtos são de uma beleza incomparável, Você vai começar a comer com os olhos </p>
        </article>
        <article class="articles-product">
          <img class="product-img" src="images/produto-4.jpg" alt="produto 04">
          <h2 class="product-h2">Entregamos em qualquer lugar</h2>
          <p class="product-p">Encomende nossos chocolates conosco</p>
        </article>
        <article class="articles-product">
          <img class="product-img" src="images/produto-5.jpg" alt="pdto 02">
          <h2 class="product-h2">Sabor e Qualidade</h2>
          <p class="product-p">Os produtos passam por um rigoroso controle de qualidade,
          sempre inovando para trazer para você o melhor chocolate</p>
        </article>
      </div>
      <footer class="footer">
        Copyright 2018 - Todos os direitos reservados -
      </footer>
    </div>
  </body>
</html>
