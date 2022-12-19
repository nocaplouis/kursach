<?php 

	include("../db/db.php");
	$db = new MySQlither();

	$email = $_POST['email'];
	$password = $_POST["password"];

	$user_exists = $db->exists_user($email);
	if ($user_exists){
		if ($user_exists["password"] == $password){
			setcookie("email", $email, time()+3600*24, "/");
			header("Location: /");
		}
		else{
			header("Location: /error_page.php?error=3");

		}
	}
	else{
		header("Location: /error_page.php?error=2");
	}


?>