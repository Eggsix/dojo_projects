<?php
class Review extends CI_model {
	public function insert_review($review)
	{
		$this->db->insert('reviews', $review);
		$id = $this->db->insert_id();
		return $id;
	}
	public function find_reviews($book_id)
	{
		$this->db->select('users.alias, users.id, rating, review, reviews.created_at, users_id, books_id');
		$this->db->from('reviews');
		$this->db->where('books_id', $book_id);
		$this->db->join('users', 'users.id=reviews.users_id', 'left');
		$query = $this->db->get();
		$result= $query -> result_array();
		return $result;
	}
	public function review_count($user_id)
	{
		$this->db->select('*');
		$this->db->from('reviews');
		$this->db->join('books', 'books.id=reviews.books_id', 'left');
		$this->db->where('users_id', $user_id);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}
}
?>