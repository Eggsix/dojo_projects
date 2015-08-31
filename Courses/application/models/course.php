<?php
class Course extends CI_Model {
	function get_all_courses()
	{
		return $this->db->query("SELECT * FROM courses ORDER BY created_at DESC") -> result_array();
	}
	function get_course_by_id($course_id)
	{
		return $this->db->query("SELECT * FROM courses WHERE id = ?", array($course_id)) -> row_array();
	}
	function add($course)
	{
		$query = "INSERT INTO courses (title, description, created_at) VALUES(?,?,?)";
		$values = array($course['title'], $course['description'], date("Y-m-d, H:i:s"));
		return $this->db->query($query, $values);
	}
	function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('courses');
	}
}
?>