<?php
class User extends CI_model {


	public function add_user($data)
	{
		$data = $this->db->escape($data);
		$this->db->insert('users', $data);
		$id = $this->db->insert_id();
		return $id;
	}
	public function find_user($data)
	{
		$this->db->select('id, name');
		$this->db->from('users');
		$this->db->where('email', $data['email']);
		$this->db->where('password', $data['password']);
		$this->db->limit(1);
		$query = $this->db->get();
		if($query->num_rows() == 1)
			{
				$result = $query->row_array();
				return $result;
			}
			else
			{
				$this->session->set_flashdata('error', '<p class="error">Check credentials</p>');
				redirect('/');								
			}
	}
	public function user_profile($id)
	{
		$this->db->select('id, name, alias, email');
		$this->db->from('users');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
	}
}
?>