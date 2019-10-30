<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	function __construct(){
        parent::__Construct();
        $this->load->model('M_main');
	}
 
	public function index(){
        // $data=$this->M_main->data_modal();
		// echo json_encode($data);
		if($this->session->userdata('username') === null){
			redirect('auth');
		}else{
			$data=array(
			"konten"=>'modal/Tampil_Modal',
			"all"=>$this->M_main->data_modal());
			// "judul"=>"Tes");
			$this->load->view('template/header');
			$this->load->view('konten/data',$data);
			$this->load->view('template/footer');
		}
	}

	public function add()
	{
		$this->form_validation->set_rules('mod_name', 'mod_name', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
			redirect('data');
		}else{
			$data=array(
				"mod_name"=>$_POST['mod_name'],
			);
			$this->db->insert('t_mod',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('data');
		}
	}

	public function edit()
	{
		$this->form_validation->set_rules('mod_id', 'mod_id', 'required');
		$this->form_validation->set_rules('mod_name', 'mod_name', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Edit");
			redirect('data');
		}else{
			$data=array(
				"mod_name"=>$_POST['mod_name'],
			);
			$this->db->where('mod_id', $_POST['mod_id']);
			$this->db->update('t_mod',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Diedit");
			redirect('data');
		}
	}

	public function hapus($id)
	{
		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('data');
		}else{
			$this->db->where('mod_id', $id);
			$this->db->delete('t_mod');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('data');
		}
	}

}