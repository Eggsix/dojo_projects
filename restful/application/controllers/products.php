<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Products extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('product');
	}

	public function index()
	{
		$show['all_products'] = $this->product->display_all();
		$this->load->view('products', $show);
	}

	public function add_new()
	{
		$this->load->view('new');
	}

	public function read($id)
	{
		$product['item'] = $this->product->show($id);
		$this->load->view('show', $product);
	}

	public function create() 
	{
		$product = $this->input->post();
		if(is_numeric($product['price'])) 
		{
			$this->product->create($product);
		}
		redirect('/');
	}

	public function update($item_id)
	{
		$input = $this->input->post();
		$this->product->update($item_id, $input);
		redirect('/');
	}
	
	public function destroy($item_id)
	{
		$this->product->delete($item_id);
		redirect('/');
	}
	public function show_edit($id)
	{
		$product['item'] = $this->product->show($id);
		$this->load->view('edit', $product);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */