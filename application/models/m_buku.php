<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Buku extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAllBuku(){
		$query = $this->db->get('buku');
		return $query->row_array();
	}

	public function insertBuku($buku){
		$this->db->insert('buku', $buku);
	}

	public function deleteBuku($id){
		$this->db->where('id_buku',$id);
		$this->db->delete('buku');
	}
	
	public function updateBuku($id, $buku){
		$this->db->where('id_buku', $id);
		$this->db->update('buku', $buku);
	}

}
