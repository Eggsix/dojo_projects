<?php
class Home extends CI_controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('book');
		$this->load->model('review');
	}
	public function main_page()
	{
		$books = $this->book->find_all_books();
		$this->load->view('main', array(
				'books' => $books
			));
	}
	public function book_page($book_id)
	{
		$book = $this->book->find_book($book_id);
		$reviews = $this->review->find_reviews($book_id);

		$this->load->view('book_review', array(
				'book' => $book,
				'review' => $reviews
			)
		);
	}
}
?>