<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chapter extends CI_Controller {

	function __construct(){
        parent::__Construct();
        $this->load->model('M_main');
	}
 
	public function index(){
		if($this->session->userdata('username') === null){
			redirect('auth');
		}else{
			$data=array(
			"konten"=>'modal/Tampil_Chapter',
			"all"=>$this->M_main->tampil_chapter());
			// "judul"=>"Tes");
			$this->load->view('template/header');
			$this->load->view('konten/data',$data);
			$this->load->view('template/footer');
		}
	}

	public function edit(){
	if($this->session->userdata('username') === null){
		redirect('auth');
	}else{
		$this->form_validation->set_rules('genre_id', 'genre_id', 'required');
		// $this->form_validation->set_rules('mod_name', 'mod_name', 'required');
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
			redirect('chapter');
		}
	}
	}

	public function hapus($id){
	if($this->session->userdata('username') === null){
		redirect('auth');
	}else{
		if($id==""){
			$this->session->set_flashdata('error',"Data Anda Gagal Di Hapus");
			redirect('chapter');
		}else{
			$this->db->where('chapter_detil_id', $id);
			$this->db->delete('tbl_chapter_detil');
			$this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
			redirect('chapter');
		}
	}
    }

    // tambah detil chapter
	public function add_chapter(){
	if($this->session->userdata('username') === null){
		redirect('auth');
	}else{
		$this->form_validation->set_rules('data', 'data', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Detil Chapter Gagal Di Tambahkan");
			redirect('chapter');
		}else{
			$data=array(
				
				"chapter_id"=>$_POST['chapter_id'],
				"data"=>$_POST['data']
			);
			$this->db->insert('tbl_chapter_detil',$data);
			$this->session->set_flashdata('sukses',"Chapter Detil Berhasil Disimpan");
			redirect('chapter');
		}
	}
	}
    // end tambah chapter
    // tambah detil chapter khusus 1 tok
	public function add_chapter_detil(){
	if($this->session->userdata('username') === null){
		redirect('auth');
	}else{
		$this->form_validation->set_rules('data', 'data', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Detil Chapter Gagal Di Tambahkan");
			redirect('chapter');
		}else{
			$data=array(
				
				"chapter_id"=>$_POST['chapter_id'],
				"data"=>$_POST['data']
			);
			$this->db->insert('tbl_chapter_detil',$data);
			$this->session->set_flashdata('sukses',"Chapter Detil Berhasil Disimpan");
			redirect('chapter');
		}
	}

	}

	// tampilkan semuanya
	public function semua_chapter(){
		if($this->session->userdata('username') === null){
			redirect('auth');
		}else{
			
			$data=array(
				"konten"=>'modal/Tampil_Chapter',
				"all"=>$this->M_main->semua_chapter());
				// "judul"=>"Tes");
				$this->load->view('template/header');
				$this->load->view('konten/data',$data);
				$this->load->view('template/footer');
		}
	}
	// tampilkan semuanya
	public function semua_chapter_detil(){
		if($this->session->userdata('username') === null){
			redirect('auth');
		}else{
			$data=array(
				"konten"=>'modal/Tampil_chapter_detil',
				"all"=>$this->M_main->semua_chapter_detil());
				// "judul"=>"Tes");
				$this->load->view('template/header');
				$this->load->view('konten/data',$data);
				$this->load->view('template/footer');
		}
	}
    // end tambah chapter


}