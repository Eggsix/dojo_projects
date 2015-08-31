<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ninja extends CI_Controller {

	public function index()
	{
		$this->session->set_userdata('gold', 0);	
		$this->load->view('index');
	}
	
	public function gold() 
	{
		if($this->session->userdata('messages')!=null)
		{
			$messages = $this->session->userdata('messages');
		}
		else
		{
			$messages = array();
		}

		$gold = $this->session->userdata('gold');

			  if($this->input->post('action') == 'farm')
				{
					$rand = rand(10, 20);
					$messages[] = "<p class='green'>Earned " . $rand . " golds from the farm!</p>";
					$this->session->set_userdata('gold', $gold + $rand);
				}
				if($this->input->post('action') == 'cave')
				{
					$rand = rand(5, 10);
					$messages[] = "<p class='green'>Earned " . $rand . " golds from the cave!</p>";
					$this->session->set_userdata('gold', $gold + rand(5, 10));
				}
				if($this->input->post('action') == 'house')
				{
					$rand = rand(2, 5);
					$messages[] = "<p class='green'>Earned " . $rand . " golds from the house!</p>";
					$this->session->set_userdata('gold', $gold + rand(2, 5));
				}
				if($this->input->post('action') == 'casino')
				{
					$rand = rand(-50, 50);
					if($rand < 0)
					{
						$messages[] = "<p class='red'>Earned " . $rand . " golds from the casino!</p>";
					}
					else
					{
						$messages[] = "<p class='green'>Earned " . $rand . " golds from the casino!</p>";
					}
					
					$this->session->set_userdata('gold', $gold + rand(-50, 50));
				}

	
		$this->session->set_userdata('messages', $messages);
		$this->load->view('index');
	}
	public function reset() 
	{
		$this->session->set_userdata('gold', 0);
		$this->session->set_userdata('messages', 0);
		$this->load->view('index');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */