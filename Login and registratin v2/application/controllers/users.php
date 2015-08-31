<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user');
		$this->output->enable_profiler();
	}
	public function index()
	{
		$this->load->view('index');
	}
	public function new_user()
	{	
		$this->form_validation->set_rules("f_name", "First Name", "trim|required");
		$this->form_validation->set_rules("l_name", "Last Name", "trim|required");
		$this->form_validation->set_rules("password", "Password", "trim|required|min_length[8]");
		$this->form_validation->set_rules("confirm_password", "Confirm", "trim|required|matches[password]");
		$this->form_validation->set_rules("email", "Email", "trim|required|valid_email");
		if($this->form_validation->run() === FALSE)
		{
		  $this->view_data["errors"] = validation_errors();
		  $this->load->view('index');
		}
		else
		{
			$data = $this->input->post();
			$this->user->add($data);	
			redirect('/');		
		}
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
