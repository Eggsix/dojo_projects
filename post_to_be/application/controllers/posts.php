<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Posts extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();

	}
	public function index()
	{
		$this->load->view('post_to_be');
	}

	public function index_json()
  {
    $data["posts"] = $this->post->find_all_posts();
    echo json_encode($data);
  }

	public function index_html()
	{
		$all_posts['posts'] = $this->post->find_all_posts();
		$this->load->view('partials/posts', $all_posts);
	}
	public function add_note()
	{
		$this->post->add();
		$all_posts["posts"] = $this->post->find_all_posts();
		$this->load->view('partials/posts', $all_posts);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */