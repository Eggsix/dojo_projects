<?php
class Quote extends CI_model {
	public function find_all_quotes()
	{
		$this->db->select('quotes.id, quotes.content, users.alias');
		$this->db->from('quotes');
		$this->db->join('users', 'users.id=quotes.user_id', 'left');
		$this->db->join('favorites', 'favorites.user_id=users.id', 'left');
		$query=$this->db->get();
		$result=$query->result_array();
		return $result;
	}
	public function find_favs()
	{
		$this->db->select('*');
		$this->db->from('favorites');
		$this->db->where('favorites.user_id', $this->session->userdata('id'));
		$this->db->join('quotes', 'quotes.id=favorites.quote_id', 'left');
		$this->db->join('users', 'users.id=favorites.user_id', 'left');
		$query=$this->db->get();
		$result = $query->result_array();
		return $result;
	}
	public function remove_quote($id, $quote_id)
	{
		$this->db->from('favorites');
		$this->db->where('user_id', $id);
		$this->db->where('quote_id', $quote_id);
		$this->db->delete();
		redirect('/main');
	}
}
?>