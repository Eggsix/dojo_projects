<?php
class Post extends CI_model {
	
	public function add()
	{
		$data = $this->input->post();
		$query = "INSERT INTO posts (description, created_at, updated_at) VALUES (?, ?, ?)";
		$values = array($data['post'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

	public function find_all_posts()
	{
		return $this->db->query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 5") -> result_array();
	}
}
?>