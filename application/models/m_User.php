<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class m_User extends CI_Model
{
	public function add($email, $password, $namespace)
	{
		$data = array(
				'email' => $email,
				'password' => $password,
				'namespace' => $namespace
		);
		$this->db->insert('user', $data);
	}
	
	public function check_id($email, $password)
	{
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$q = $this->db->get('user');
		if ($q->num_rows() > 0)
			return true;
	}
}

?>