<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Random extends CI_Controller {

	public function index()
	{
		$this->load->view('random');
	}

	public function generate()
	{
		
		if($this->session->flashdata('count'))
		{
			$counter = $this->session->flashdata('count');
			$this->session->set_flashdata('count', $counter + 1);
		}
		else 
		{
			$this->session->set_flashdata('count', 1);
		}

		$string = array();
		$i = 1;
		while($i <= 14)
		{
			$numOrLet = rand(1, 2);
			if($numOrLet == 1)
			{
				$num = rand(48, 57);
				array_push($string, chr($num));
			}
			else 
			{
				$let = rand(65, 90);
				array_push($string, chr($let));
			}	
			$i++;
		}
		$random = implode("", $string);
		$this->session->set_flashdata('output', $random); 
		$this->load->view('random');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */