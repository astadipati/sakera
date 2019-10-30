<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Komik extends CI_Controller {

	function __construct(){
        parent::__Construct();
        $this->load->model('M_main');
	}
 
	public function index(){
		if($this->session->userdata('username') === null){
			redirect('auth');
		}else{
			$data=array(
			"konten"=>'modal/Tampil_Komik',
			"all"=>$this->M_main->tampil_komik());
			// "judul"=>"Tes");
			$this->load->view('template/header');
			$this->load->view('konten/data',$data);
			$this->load->view('template/footer');
		}
	}

	public function add(){
	if($this->session->userdata('username') === null){
		redirect('auth');
	}else{	
		$this->form_validation->set_rules('genre_id', 'genre_id', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
			redirect('komik');
		}else{
			$data=array(
				"genre_id"=>$_POST['genre_id'],
				"gambar"=>$_POST['gambar'],
				"judul"=>$_POST['judul'],
				"synopsis"=>$_POST['synopsis'],
				"tanggal_buat"=>$_POST['tanggal_buat'],
				"status"=>$_POST['status'],
			);
			$this->db->insert('tbl_komik',$data);
			$this->session->set_flashdata('sukses',"Data Berhasil Disimpan");
			redirect('komik');
		}
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
			redirect('data');
		}
	}
	
	}

	public function hapus($id){
	if($this->session->userdata('username') === null){
		redirect('auth');
	}else{		
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

	// tambah chapter
	public function add_chapter(){
	if($this->session->userdata('username') === null){
		redirect('auth');
	}else{
		$this->form_validation->set_rules('komik_id', 'komik_id', 'required');
		$this->form_validation->set_rules('chapter_ke', 'chapter_ke', 'required');
		$this->form_validation->set_rules('gambar', 'gambar', 'required');
		$this->form_validation->set_rules('judul_chapter', 'judul_chapter', 'required');
		$this->form_validation->set_rules('komik_id', 'komik_id', 'required');
		if($this->form_validation->run()==FALSE){
			$this->session->set_flashdata('error',"Data Gagal Di Tambahkan");
			redirect('komik');
		}else{
			$data=array(
				
				"komik_id"=>$_POST['komik_id'],
				"chapter_ke"=>$_POST['chapter_ke'],
				"gambar"=>$_POST['gambar'],
				"judul_chapter"=>$_POST['judul_chapter'],
				"tanggal_posting"=>$_POST['tanggal_posting'],
			);
			$this->db->insert('tbl_chapter',$data);
			$this->session->set_flashdata('sukses',"Chapter Berhasil Disimpan");
			redirect('komik');
			}
		}
	}
	// end tambah chapter
}