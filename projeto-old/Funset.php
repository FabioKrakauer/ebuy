<?php 
		session_start();

        function existsSession($session){
          return isset($_SESSION[$session]);
        }
        function existsCookie($cookie){
          return isset($_COOKIE[$cookie]);
        }
        function createSession($session, $ArrayContent){
        		$_SESSION[$session] = $ArrayContent;
        }
        





 ?>