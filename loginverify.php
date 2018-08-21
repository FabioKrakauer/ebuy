<?php 
   $user = $_POST["email"];
   $pass = $_POST["password"];
<<<<<<< HEAD


   if($user === "admin"){ //busca no banco se o usuario existe!
   	if($pass === "ebuy"){ //Integrar banco de dados!
   		if(isset($_POST["remeber"])){
   			session_start();
   			if(!isset($_SESSION["logged"])){
   				$login = array("user"=>$user,"pass"=>$pass);
   				$_SESSION["logged"] = $login;
   			}else{   				
   		}
   		echo "Seja bem vindo, ".$_SESSION["logged"]["user"];
   		// header("Location: profile.php");
   	}else{
   		header("Location: login.php?error=2");
   	}
=======
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
>>>>>>> 3a86f6770d00bf32c287b7a0ef016ab4dc0e96d0
   }else{
      header("Location: login.php?error=2");
      exit();
   }





 ?>