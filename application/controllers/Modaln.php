<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modal extends CI_Controller {

	function __construct(){
		parent::__Construct();
	}

	public function index(){
		$data=array(
			"content"=>'Tampil_Modal',
			"all"=>$this->db->get('t_mod')->result(),
			"judul"=>"Modal",
		);

		$this->load->view('Template',$data);
	}
  
	public function add()
	{
		$this->form_validation->set_rules('mod_name', 'mod_name', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
			redirect('Modal');
		}else{
			$data=array(
				"mod_name"=>$_POST['mod_name'],
			);
			$this->db->insert('t_mod',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('Modal');
		}
	}

	public function edit()
	{
		$this->form_validation->set_rules('mod_id', 'mod_id', 'required');
		$this->form_validation->set_rules('mod_name', 'mod_name', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Edit");
			redirect('Modal');
		}else{
			$data=array(
				"mod_name"=>$_POST['mod_name'],
			);
			$this->db->where('mod_id', $_POST['mod_id']);
			$this->db->update('t_mod',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			redirect('Modal');
		}
	}

	public function hapus($id)
	{
		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('Modal');
		}else{
			$this->db->where('mod_id', $id);
			$this->db->delete('t_mod');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('Modal');
		}
	}

}