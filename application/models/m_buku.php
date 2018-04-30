<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Buku extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function getAll(){
		$query = $this->db->get('buku');
		return $query->result_array();
	}

	public function getByKategori($kategori){
		$query = $this->db->query("SELECT * FROM buku WHERE kategori = '$kategori'");
		return $query->result_array();
	}

	public function getByJudul($judul){
		$query = $this->db->query("SELECT * FROM buku WHERE judul LIKE '%$judul%'");
		return $query->result_array();
	}

	public function insert($buku){
		return $this->db->insert('buku', $buku);
	}

	public function delete($id){
		$this->db->where('id_buku',$id);
		$this->db->delete('buku');
	}
	
	public function update($id, $buku){
		$this->db->where('id_buku', $id);
		$this->db->update('buku', $buku);
	}

}
