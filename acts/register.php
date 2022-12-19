<?php 

	include("../db/db.php");
	$db = new MySQlither();


	$first_name = $_POST['first_name'];
	$last_name = $_POST["last_name"];
	$email = $_POST["email"];
	$password = $_POST["password"];


	if (!$db->exists_user($email)){
		$db->add_user($first_name, $last_name, $email, $password);
		setcookie("email", $email, time()+3600*24, "/");
		header("Location: /");
	}
	else{
		header("Location: /error_page.php?error=1");
	}


?>