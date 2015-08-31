<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
	


		parent::__construct();
		$this->load->model('user');
		$this->output->enable_profiler();
		
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function add_user()
	{
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		$this->form_validation->set_rules('name', 'Name', 'required|alpha|trim');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|trim|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|md5|trim|min_length[8]');
		$this->form_validation->set_rules('confirm_password', 'Confirm Password', 'trim|matches[password]');
		if($this->form_validation->run() === FALSE)
		{
			$this->view_data['errors'] = validation_errors();
			$this->load->view('login');
		}
		else
		{
			$data = $this->input->post();
			$data = array(
					'name' => $data['name'],
					'username' => $data['username'],
					'email' => $data['email'],
					'password' => $data['password'],
					'created_at' => date("m.d.y"),
					'updated_at' => date("m.d.y")
				);
			$this->user->add($data);
			$this->session->set_flashdata('success', '<p class="success">You have successfully registered!</p>');
			redirect('/');
		}
	}
	public function login_user()
	{
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|md5');
		if($this->form_validation->run() === FALSE)
		{
			$this->session->set_flashdata('error', '<p class="error">field is empty</p>');
			redirect('/');
		}
		else 
		{
			$data = $this->input->post();
			$session = $this->user->login($data);
			$session['user'] = array (
					'id' => $session['id'],
					'email' => $session['email'],
					'name' => $session['name'],
					'is_logged_in' => TRUE
				);
			$this->session->set_userdata('user', $session['user']);
			$this->load->view('main', $session);
		}	
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */