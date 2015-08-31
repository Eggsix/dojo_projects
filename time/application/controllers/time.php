<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Time extends CI_Controller {
	public function index()
	{
		$date = date("M d, o h:s A");
		$this->session->set_flashdata('time', $date);
		$this->load->view('time'); 
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */