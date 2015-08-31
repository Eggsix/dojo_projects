<?php
class Book extends CI_model {
	public function insert_book($book)
	{
		$this->db->insert('books', $book);
		$id = $this->db->insert_id();
		return $id;
	}
	public function find_book($id)
	{
		$this->db->select('title, author');
		$this->db->from('books');
		$this->db->where('id', $id);
		$query = $this->db->get();
		$result= $query -> result_array();
		return $result;
	}
	public function find_all_books()
	{
		$this->db->select('id, title');
		$this->db->from('books');
		$query = $this->db->get();
		$result= $query -> result_array();
		return $result;
	}
}
?>