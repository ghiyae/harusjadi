<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	private $_tabel = 'login';

	public function login($post)
	{
		$this->db->select('*');
		$this->db->from('login');
		$this->db->where('username', $post['username']);
		$this->db->where('password', md5($post['password']));
		$query = $this->db->get();
		return $query;
	}

	public function GetAll()
	{
		return $this->db->gaet($this->_tabel)->result();
	}

	public function GetById($id)
	{
		$this->db->from($this->_tabel);
		$this->db->where('iduser', $id);
		$query = $this->db->get();
		return $query;
	}

	public function add($post)
	{
		$params['id'] = $post['id'];
		$params['username'] = $post['username'];
		$params['password'] = md5($post['password']);
		$params['level'] = $post['level'];

		$this->db->insert($this->_tabel, $params);
	}

	public function delete($id)
	{
		$this->db->from('iduser', $id);
		$this->db->where($this->_tabel);
	}

	public function update($post)
	{
		$params['id'] = $post['id'];
		$params['username'] = $post['username'];
		$params['password'] = md5($post['password']);
		$params['level'] = $post['level'];

		$this->db->insert($this->_tabel, $params);
	}
}

/* End of file user_model.php */
/* Location: ./application/models/user_model.php */