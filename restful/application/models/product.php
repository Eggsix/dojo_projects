<?php
class Product extends CI_Model {
	public function create($product)
	{
		$query = "INSERT INTO products (name, description, price, created_at, updated_at) VALUES(?,?,?,?,?)";
		$values = array($product['name'], $product['description'], $product['price'],  date("Y-m-d, H:i:s"),  date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}

	public function update($item_id, $array)
	{
	$this->db->where('id', $item_id);
	return $this->db->update('products', $array);
	}

	
	public function show($item_id)
	{
		return $this->db->query("SELECT * FROM products WHERE id = ?", array($item_id)) -> row_array();
	}
	public function delete($item_id)
	{
		//deletes item from database
		$this->db->where('id', $item_id);
		$this->db->delete('products');
	}
	public function display_all()
	{
		// displays all items from database
		return $this->db->query("SELECT * FROM products") -> result_array();
		
	}


	
}

?>