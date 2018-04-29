<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_User extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAllUser(){
		$query = $this->db->get('user');
		return $query->row_array();
	}

	public function insertUser($user){
		$this->db->insert('user', $user);
	}

	public function deleteUser($username){
		$this->db->where('username',$username);
		$this->db->delete('user');
	}
	
	public function updateUser($username, $user){
		$this->db->where('username', $username);
		$this->db->update('user', $user);
	}

}
