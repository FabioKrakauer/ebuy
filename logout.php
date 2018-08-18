<?php
	session_start();
	session_destroy();
	unset($_SESSION["login"]);
	header("location:login.php");
?>
<<<<<<< HEAD

=======
>>>>>>> 630dbd0bd87b11d76cbf1812c2e67fa5e264ba28
