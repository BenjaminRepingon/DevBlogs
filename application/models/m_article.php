<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_Article extends CI_Model
{
	/*
	 * ADD
	 */
	public function add($name, $content, $id_category)
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
	public function del_by_id($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('article');
	}

	public function del_by_name($name)
	{
		$this->db->where('name', $name);
		$this->db->delete('article');
	}

	public function del_by_id_category($id_category)
	{
		$this->db->where('id_category', $id_category);
		$this->db->delete('article');
	}

	/*
	 * UPDATE
	 */
	public function update_by_id($id, Array $data)
	{
		$this->db->where('id', $id);
		$this->db->update('article', $data);
	}

	public function update_by_name($name, Array $data)
	{
		$this->db->where('name', $name);
		$this->db->update('article', $data);
	}

	/*
	 * SELECT
	 */
	public function select( $select, $where = NULL )
	{
		$this->db->select($select);
		$this->db->from('article');
		if ( $where != NULL )
			$this->db->where( $where );
		$query = $this->db->get();
		return $query->result();
	}

	public function select_by_id($select, $id)
	{
		return $this->select($select, array('id' => $id));
	}

	public function select_by_name($select, $name)
	{
		return $this->select($select, array('name' => $name));
	}

	public function select_by_date_between($select, $timestamp_min, $timestamp_max)
	{
		return $this->select($select, array('date >' => $timestamp_min, 'date <' => $timestamp_max));
	}
}
