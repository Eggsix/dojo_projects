<?php
class Author extends CI_Model {

	public function add_author($author)
	{
		$this->db->insert('authors', $author);
		return $this->db->insert_id();
	}

	public function find_author($author)
	{
		$this->db->select('id, name');
		$this->db->from('authors');
		$this->db->where('id', $author['id']);
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function all_authors()
	{
		$this->db->select('id, name');
		$this->db->from('authors');
		$query=$this->db->get();
		return $query->result_array();
	}
}
?>