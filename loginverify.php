<?php 
   $user = $_POST["email"];
   $pass = $_POST["password"];


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
   }else{
   		header("Location: login.php?error=1");
   }

 ?>