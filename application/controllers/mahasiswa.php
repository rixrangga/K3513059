<?php
class Mahasiswa extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('m_mahasiswa');
	}

	function index(){
		$this->load->view('home');
	}

	function about(){
		$this->load->view('about');
	}

	function lihat(){
		$data['data_mahasiswa']=$this->m_mahasiswa->m_lihat();
		$this->load->view('v_lihat',$data);
	}

	function tambah(){
		$this->load->view('v_tambah');
	}

	function tambah_act(){
	$suka = $this->input->post('hobi');
	$hobi = implode(',',$suka);
	$data=array(
		'nama' => $this->input->post('nama'),
		'alamat' => $this->input->post('alamat'),
		'jk' => $this->input->post('jk'),
		'prodi' => $this->input->post('prodi'),
		'hobi' => $hobi
		);
	$this->m_mahasiswa->m_tambah_act($data);	
	redirect(base_url().'index.php/mahasiswa/lihat');
	}

	function hapus($id){
		$data=array(
			'id' => $id
			);
		$this->m_mahasiswa->m_hapus($data);
		redirect(base_url().'index.php/mahasiswa/lihat');
	}

	function edit($id){
		$data=array(
			'id'=>$id
			);
		$data['data_edit']=$this->m_mahasiswa->m_edit($data);
		$this->load->view('v_edit',$data);
	}

	function edit2($id){
		$data=array(
			'id'=>$id
			);
		$data['data_edit']=$this->m_mahasiswa->m_edit($data);
		$this->load->view('v_detail',$data);
	}

	function update(){
		$id = $this->input->post('id');
		$suka = $this->input->post('hobi');
		$hobi = implode(',',$suka);
		$data=array(
			'nama' => $this->input->post('nama'),
			'alamat' => $this->input->post('alamat'),
			'jk' => $this->input->post('jk'),
			'prodi' => $this->input->post('prodi'),
			'hobi' => $hobi
			);
		$this->m_mahasiswa->m_update($data,$id);
		redirect(base_url().'index.php/mahasiswa/lihat');
	}
	
}
 
?>