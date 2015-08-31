<?php
	class User extends CI_model {

		public function add($user)
		{
			$this->db->insert('users', $user);
		}

		public function login($user)
		{
			$this->db->select('id, name, username, password, email');
			$this->db->from('users');
			$this->db->where('email', $user['email']);
			$this->db->where('password', $user['password']);
			$this->db->limit(1);
			$query = $this->db->get();
			if($query->num_rows() == 1)
			{
				$result = $query->row_array();
				return $result;
			}
			else
			{
				$this->session->set_flashdata('error', '<p class"error">Check credentials</p>');
				redirect('/');								
			}
		}
		public function find_users()
		{
			$this->db->select('id, name, username, email');
			$this->db->from('users');
			$query = $this->db->get();
			$result = $query->result_array();
			return $result;
		}
		

	}
?>