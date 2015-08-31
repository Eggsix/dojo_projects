<?php
class User extends CI_model {

	public function add($user) 
	{
		$password = md5($user['password']);
		$query = "INSERT INTO users (first_name, last_name, email, password, created_at, updated_at) VALUES(?,?,?,?,?,?)";
		$values = array($user['f_name'], $user['l_name'], $user['email'], $password, date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}
}
?>