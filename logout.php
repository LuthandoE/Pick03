<?php
	session_start();
	
	if (!isset($_SESSION['user'])) {
		header("Location: SignIn.php");
	} else if(isset($_SESSION['user'])!="") {
		header("Location: Forum.php");
	}
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['user']);
		header("Location: SignIn.php");
		exit;
	}
