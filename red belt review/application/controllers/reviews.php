<?php
class Reviews extends CI_controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('review');
		$this->load->model('book');
	}
	public function add_review()
	{
		$data = $this->input->post();	
		if($data['author_list'] === '-select-' && strlen($data['author_name']) > 0)
		{
			$book = array(
					'id' => '',
					'title' => $data['book_title'],
					'author' => $data['author_name'],
					'created_at' => date('Y-m-d'),
					'updated_at' => date('Y-m-d')
				);
		$book_id = $this->book->insert_book($book);
		}
		$book = array(
				'id' => '',
				'title' => $data['book_title'],
				'author' => $data['author_list'],
				'created_at' => date('Y-m-d'),
				'updated_at' => date('Y-m-d')
			);
		$book_id = $this->book->insert_book($book);
		$review = array(
				'id' => '',
				'rating' => $data['rating'],
				'review' => $data['review'],
				'created_at' => date('Y-m-d'),
				'updated_at' => date('Y-m-d'),
				'users_id' => $this->session->userdata('id'),
				'books_id' => $book_id
			);
		$review_id = $this->review->insert_review($review);
		redirect('/book_review_page/' . $book_id);
	}
	public function add_book_review($book_id)
	{

		$data = $this->input->post();
		$review = array(
				'id' => '',
				'rating' => $data['rating'],
				'review' => $data['review'],
				'created_at' => date('Y-m-d'),
				'updated_at' => date('Y-m-d'),
				'users_id' => $this->session->userdata('id'),
				'books_id' => $book_id
			);
		$review_id = $this->review->insert_review($review);
		redirect('/book_review_page/' . $book_id);
	}
}
?>