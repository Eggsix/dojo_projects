<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Surveys extends CI_Controller {

	public function index()
	{
		$this->load->view('survey');
	}
	public function process_form()
	{
		if($this->session->userdata('counter')) 
		{
			$counter = $this->session->userdata('counter');
			$this->session->set_userdata('counter', $counter+1);
		}
		else
		{
			$this->session->set_userdata('counter', 1);
		}
		$data = $this->input->post();
		$this->session->set_userdata($data);
		redirect('/results');
	}
	public function results()
	{
		
		$
		
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */