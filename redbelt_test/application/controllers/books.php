<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Books extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('book');
		$this->load->model('author');
		$this->load->model('review');
		$this->load->model('user');
	}
	public function add_view() 
	{
		$author_select['authors'] = $this->author->all_authors();
		$this->load->view('add_book', $author_select);
	}

	public function add()
	{
		$data = $this->input->post();
		if(isset($data['author_list']))	
		{	
			//add author if author_list = none
			$author = array(
				'name' => $data['add_author'],
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s")
			);	
			$author_return['author'] = $this->author->add_author($author);
		}
		else if(isset($data['add_author']))
		{
			//use existing author
			$author = array(
					'id' => $data['author_list']
			);
			//returns id, name
			$author_return['author'] = $this->author->find_author($author);
		}
		else if ($data['author_list'] != "none" && strlen($data['add_author']) > 0)
		{
			$this->session->set_flashdata('error', '<p class="error">Cannot select both fields</p>');
			redirect('/add_book_view');
		} 
		else if ($data['author_list'] == "none" && strlen($data['add_author']) == 0)
		{
			$this->session->set_flashdata('error', '<p class="error">leave authors field blank</p>');
			redirect('/add_book_view');
		} 		
			$book = array(
				'id' => '',
				'title' => $data['title'],
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s"),
				'authors_id' => $author['id']
			);
		//returns 
		$book_return = $this->book->insert_book($book);
		//session user id
		$user = $this->session->userdata('user');
		$rating = array(
				'rating' => $data['rating'],
				'comment' => $data['review'],
				'created_at' => date("Y-m-d H:i:s"),
				'updated_at' => date("Y-m-d H:i:s"),
				'users_id' => $user['id'],
				'books_id' => $book_return
			);
		$this->review->insert_review($rating);
		redirect('/books/'. $book_return);			
	}
	public function view($book)
	{
		$user_id = $this->user->find_users();
		$book_id = $this->book->find_book($book);
		$review_id = $this->review->find_review($book_id['id']);		
		$this->load->view('book_reviews', array(
				'users' => $user_id, 
				'book' => $book_id,
				'reviews' => $review_id
			));
	}	
}
?>