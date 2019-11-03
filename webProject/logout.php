<?php
	session_start();
	//session_unset($_SESSION['username']);
	session_destroy();
	setcookie("sessionName", $user[0], time()-5, "/");
	header('location: signin.php');
?>