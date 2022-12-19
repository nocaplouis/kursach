<?php 


class MYSQLither{

	public $db;

	function __construct(){
		$this->db = new mysqli("localhost", "root", "", "schedule");
		mysqli_set_charset($this->db, "utf8mb4");
	}

	function get_user_info($email){
		return $this->db->query("SELECT * FROM `abiturients` WHERE `email`='$email'")->fetch_assoc();
	}

	function exists_user($email){
		return $this->get_user_info($email);
	}

	function add_user($first_name, $last_name, $email, $password){
		$this->db->query("INSERT INTO `abiturients` (`first_name`, `last_name`, `email`, `group_id`, `password`) VALUES('$first_name', '$last_name', '$email', 0, '$password')");
	}

	function get_subjects(){
		return $this->db->query("SELECT * FROM `subjects`")->fetch_all();
	}

	function get_subject_by_id($subject_id){
		return $this->db->query("SELECT * FROM `subjects` WHERE `id`=$subject_id")->fetch_assoc();
	}

	function get_exams_by_subject($subject_id){
		return $this->db->query("SELECT * FROM `exams` WHERE `subject_id`=$subject_id")->fetch_all();
	}

	function get_examns_by_group_id($group_id){
		return $this->db->query("SELECT * FROM `exams` WHERE `group_id`=$group_id")->fetch_all();
	}

	function get_group_info($group_id){
		return $this->db->query("SELECT * FROM `groups` WHERE `id`=$group_id")->fetch_assoc();
	}

	function user_group($user_id){
		return $this->db->query("SELECT `group_id` FROM `abiturients` WHERE `id`=$user_id")->fetch_assoc()["group_id"];
	}

	function get_groups(){
		return $this->db->query("SELECT * FROM `groups`")->fetch_all();
	}

	function update_group($user_id, $group_id){
		$this->db->query("UPDATE `abiturients` SET `group_id`=$group_id WHERE `id`=$user_id");
	}


}


?>