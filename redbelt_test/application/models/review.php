<?php 
class Review extends CI_model {
	public function insert_review($review)
	{
		$this->db->insert('reviews', $review);
		$id = $this->db->insert_id();
		return $id;
	}
	public function find_review($review)
	{
		$this->db->select('rating, comment, users_id, books_id');
		$this->db->from('reviews');
		$this->db->where('books_id', $review);
		$this->db->limit(1);
		$query=$this->db->get();
		$result = $query->result();
		return $result;
	}
}
?>