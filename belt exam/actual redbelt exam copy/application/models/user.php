<?php
class User extends CI_model {

	public function register_user()
	{
		$data = $this->input->post();
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		$this->form_validation->set_rules('name', 'Name', 'required|trim|alpha');
		$this->form_validation->set_rules('alias', 'Alias', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|md5|trim');
		$this->form_validation->set_rules('confirm_password', 'Confirm password', 'required|matches[password]');
		if($this->form_validation->run() === FALSE)
		{
			$this->load->view('login');
		}
		else
		{
			$password = md5($data['password']);
			$query = "INSERT INTO users (name, alias, email, password, birthday, created_at, updated_at) VALUES(?,?,?,?,?,?,?)";
			$values = array($data['name'], $data['alias'], $data['email'], $password, $data['birthday'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
			$this->db->query($query, $values);
			$this->session->set_flashdata('success', '<p class="success">You have been registered</p>');
			redirect('/');
		}		
	}
	public function login_user()
	{
		$data = $this->input->post();
		$password = md5($data['password']);
		$data = array(
			'email' => $data['email'],
			'password' => $password
			);
		$this->db->select('id, name, alias');
		$this->db->from('users');
		$this->db->where('email', $data['email']);
		$this->db->where('password', $data['password']);
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->row_array();

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
		$result = array(
				'id' => $result['id'],
				'name' => $result['name'],
				'logged_in' => TRUE
			);
		$this->session->set_userdata($result);
		redirect('/main');
	}
	public function add_quote()
	{
		$data = $this->input->post();
		$data = array(
			'quoted_by' => $data['quoted_by'],
			'content' => $data['quote'],
			'created_at' => date("Y-m-d, H:i:s"),
			'updated_at' => date("Y-m-d, H:i:s"),
			'user_id' => $this->session->userdata('id')
			);
		$this->db->insert('quotes', $data);
		redirect('/main');
	}
	public function add_to_list($id, $quote)
	{
		$quote = str_replace('%20', " ", $quote);
		$this->db->select('id');
		$this->db->from('quotes');
		$this->db->where('content', $quote);
		$query = $this->db->get();
		$result = $query->row_array();
		$data = array(
			'created_at' => date("Y-m-d, H:i:s"),
			'updated_at' => date("Y-m-d, H:i:s"),
			'user_id' => $id,
			'quote_id' => $result['id']
			);
		$this->db->insert('favorites', $data);
		redirect('/main');
	}
}
?>