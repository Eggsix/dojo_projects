<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->output->enable_profiler();
	}
	public function index()
	{
		$this->load->view('login');
	}
	public function register()
	{
		$this->user->register_user();
	}
	public function login()
	{
		$result = $this->user->login_user();
		$result = array(
				'id' => $result['id'],
				'name' => $result['name'],
				'logged_in' => TRUE
			);
		$this->session->set_userdata($result);
		redirect('/main');
	}
	public function main()
	{
		$favs = $this->quote->find_favs();
		$quotes = $this->quote->find_all_quotes();
		$this->load->view('main', array(
				'quotes' => $quotes,
				'favorites' => $favs
			)
		);
	}
	public function add_quote()
	{
		$this->user->add_quote();
	}
	public function add_fav($id, $quote)
	{
		$this->user->add_to_list($id, $quote);
	}
	public function remove_fav($id, $quote_id)
	{
		$this->quote->remove_quote($id, $quote_id);
	}
	public function logoff()
	{
		$this->session->sess_destroy();
		redirect('/');
	}
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */