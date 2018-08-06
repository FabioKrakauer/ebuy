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
   			}		
   		}
         session_start();
         $login = array("user"=>$user,"pass"=>$pass);
         $_SESSION["logged"] = $login;
         if(isset($_SESSION["logged"])){ 
            echo "você já está logado";     
         } else {
            //session_start();
            echo "Seja bem vindo, $user";   
         }

   		// header("Location: profile.php");
   	}else{
   		header("Location: login.php?error=2");
   	}
   }else{
   		header("Location: login.php?error=1");
   }

 ?>