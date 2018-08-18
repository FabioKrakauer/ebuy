<?php
   $user = $_POST["email"];
   $pass = $_POST["password"];
   require("Funset.php");

   function verifyUser($user){
      return $user === "admin";
   }
   function verifyLogin($user, $pass){
      return verifyUser($user) && $pass === "ebuy";
   }
   
   if(verifyLogin($user, $pass)){
      if(!empty($_POST["remember"])){
         // Salva senha no cookie
         $info = array("usuario"=> $user,"senha"=>$pass);
         setcookie("savelogin", json_encode($info), 2147483647);
         createSession("login", $info);
      }else{
         $info = array("usuario"=> $user,"senha"=>$pass);
         createSession("login", $info);
      }
      header("Location: profile.php");
      exit();
   }else{
      header("Location: login.php?error=2");
      exit();
   }





 ?>
