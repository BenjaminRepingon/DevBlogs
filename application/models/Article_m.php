<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Article_m extends CI_Models
{
	/*
	 * ADD
	 */
	public	function add($name, $content, $id_category)
	{
		$data = array(
			'name' => $name,
			'content' => $content,
			'id_category' => $id_category
		);
		$this->db->insert('article', $data);
	}

	/*
	 * DELETE
	 */
	public	function del_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('article');
	}

	public	function del_by_name($name)
	{
		$this->db->where('name', $name);
		$this->db->delete('article');
	}

	public	function del_by_id_category($id_category)
	{
		$this->db->where('id_category', $id_category);
		$this->db->delete('article');
	}

	/*
	 * UPDATE
	 */
	public	function update_by_id($id, Array $data)
	{
		$this->db->where('id', $id);
		$this->db->update('article', $data);
	}

	public	function update_by_name($name, Array $data)
	{
		$this->db->where('name', $name);
		$this->db->update('article', $data);
	}
}
