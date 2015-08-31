<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {


	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function show($id)
	{
		echo $id;
	}
	public function edit($id)
	{
		echo $id;
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */