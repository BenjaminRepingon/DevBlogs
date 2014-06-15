<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Category_m extends CI_Model
{
	/*
	 * ADD
	 */
	public	function add($name)
	{
		$data = array(
			'name' => $name
		);
		$this->db->insert('category', $data);
	}

	/*
	 * DELETE
	 */
	public	function del_by_id($id, $del_article = false)
	{
		if ($del_article)
		{
			$this->load->model('Article_m');
			$this->Article_m->del_by_id_category($id);
		}
		$this->db->where('id', $id);
		$this->db->delete('category');
	}

	public	function del_by_name($name, $del_article = false)
	{
		if ($del_article)
		{
			$this->db->select('id');
			$this->db->from('category');
			$this->db->where('name', $name);
			$query = $this->db->get();
			$res = $query->result_array();
			if (isset($res[0]))
			{
				$id = $res[0]['id'];
				$this->load->model('Article_m');
				$this->Article_m->del_by_id_category($id);
			}
		}
		$this->db->where('name', $name);
		$this->db->delete('category');
	}
}
