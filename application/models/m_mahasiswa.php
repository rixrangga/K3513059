<?php
class M_mahasiswa extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->database();
	}

	function m_lihat(){
		$lihat = $this->db->get('mahasiswa');
		return $lihat->result();
	}

	function m_tambah_act($data){
		$this->db->insert('mahasiswa',$data);
	}

	function m_hapus($data){
		$this->db->delete('mahasiswa',$data);
	}
	function m_edit($data){
		$this->db->where($data);
		$edit = $this->db->get('mahasiswa');
		return $edit->result();
	}
	function m_update($data,$id){
		$this->db->where('id', $id);
		$this->db->update('mahasiswa',$data);
	}
	
}
 
?>