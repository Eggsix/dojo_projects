<?php
class Book extends CI_model{
	public function insert_book($book)
	{
		$this->db->insert('books', $book);
   	$insert_id = $this->db->insert_id();
		return $insert_id;
	}
	public function find_book($book)
	{
		$this->db->select('id, title, authors_id');
		$this->db->from('books');
		$this->db->where('id', $book);
		$this->db->limit(1);
		$query = $this->db->get();
		$result = $query->row_array();
		return $result;
	}
	public function find_all_books()
	{
		$this->db->select('*');
		$this->db->from('books');
		$this->db->order_by('created_at', 'desc');
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
	}


}
?>