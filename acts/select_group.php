<?php 

	$user_id = $_POST["user_id"];
	$group_id = $_POST["group_id"];

	include("../db/db.php");
	$db = new MySQlither();

	$db->update_group($user_id, $group_id);

	header("Location: /self_shedule.php");





?>