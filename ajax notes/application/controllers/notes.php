<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notes extends CI_Controller {



	public function __construct(){
		parent::__construct();

	}
	public function index()
	{
		$all_notes['all_notes'] = $this->note->find_all_notes();
		$this->load->view('index', $all_notes);
	}
	public function index_json()
	{
		$data['notes'] = $this->note->find_all_notes();
		echo json_encode($data);
	}
	public function index_html()
	{
		$all_notes['all_notes'] = $this->note->find_all_notes();
		$this->load->view('partials/notes', $all_notes);
	}
	public function add_note()
	{
		$data = $this->input->post();
		$this->note->create($data);
		$all_notes['all_notes'] = $this->note->find_all_notes();
		$this->load->view('partials/notes', $all_notes);
	}
	public function update($id)
	{
		$data = $this->note->update_note($id);
		$all_notes['all_notes'] = $this->note->find_all_notes();
		$this->load->view('partials/notes', $all_notes);
	}
	public function destroy($id)
	{
		$this->note->delete($id);
		$all_notes['all_notes'] = $this->note->find_all_notes();
		$this->load->view('partials/notes', $all_notes);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */