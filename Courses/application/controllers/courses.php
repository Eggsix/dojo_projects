<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends CI_Controller {

	public function __construct()
	{

		parent::__construct();
		$this->load->model("course");
	}

	public function index()
	{
		$show_courses['course'] = $this->course->get_all_courses();
		$this->load->view('index', array_reverse($show_courses));
		$this->output->enable_profiler(TRUE); 

	}
	public function add()
	{
		if(strlen($this->input->post('title')) <= 15)
		{
			echo "The course title is too short!";
		}
		else
		{
		$course_details = $this->input->post();
		$add_course = $this->course->add($course_details);
		redirect('/');
		}
	}
	public function check_delete($num)
	{
		$course_details['course'] = $this->course->get_course_by_id($num);
		$this->load->view('delete', $course_details);
	}
	public function delete($num1)
	{
		$this->course->delete($num1);
		redirect('/');
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */