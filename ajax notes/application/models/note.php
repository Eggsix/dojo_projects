<?php
class Note extends CI_model {
	public function create($data)
	{
		$query = "INSERT INTO notes (title, created_at, updated_at) VALUES(?, ?, ?)";
		$values = array($data['title'], date("Y-m-d, H:i:s"), date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}
	public function find_all_notes()
	{
		return $this->db->query("SELECT * FROM notes")->result_array();
	}
	public function update_note($id)
	{
		$data = $this->input->post();
		$query = "UPDATE notes SET description = ?, updated_at = ? WHERE id = ?";
		$values = array($data['description'], date("Y-m-d, H:i:s"), $id);
		return $this->db->query($query, $values);
	}
	public function delete($id)
	{
		$query = "DELETE FROM notes WHERE id = ?";
		$value = $id;
		return $this->db->query($query, $value);
	}
}
?>