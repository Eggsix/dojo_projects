<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->load->model('review');
		$this->output->enable_profiler();
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function register_user()
	{
		$data = $this->input->post();
		$this->form_validation->set_error_delimiters('<p class="error">', '</p>');
		$this->form_validation->set_rules('name', 'Name', 'required|trim|alpha');
		$this->form_validation->set_rules('alias', 'Alias', 'required');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[8]|md5|trim');
		$this->form_validation->set_rules('confirm_password', 'Confirm password', 'matches[password]');
		if($this->form_validation->run() === FALSE)
		{
			$this->view_data['errors'] = validation_errors();
			$this->load->view('login');
		}
		else
		{
			$data = $this->input->post();
			$data = array(
					'id' => '',
					'name' => $data['name'],
					'alias' => $data['alias'],
					'email' => $data['email'],
					'password' => $data['password'],
					'created_at' => date('Y-m-d'),
					'updated_at' => date('Y-m-d')
				);
			$this->user->add_user($data);
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
		$result = $this->user->find_user($data);
		$result = array(
				'id' => $result['id'],
				'name' => $result['name'],
				'logged_in' => TRUE
			);
		$this->session->set_userdata($result);
		redirect('/main_page');
	}
	public function profile_page($id)
	{

		$user = $this->user->user_profile($id);
		$reviews = $this->review->review_count($user['id']);
		$this->load->view('profile', array(
				'info' => $user,
				'reviews' => $reviews
			));
	}
	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */