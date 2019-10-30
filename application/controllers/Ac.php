<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ac extends CI_Controller {

	function __construct(){
        parent::__Construct();
        $this->load->model('M_main');
	}
 
	public function index(){
		if($this->session->userdata('username') === null){
			redirect('auth');
		}else{
			$data=array(
			"konten"=>'modal/Tampil_Ac',
			"all"=>$this->M_main->tampil_ac());
			// "judul"=>"Tes");
			$this->load->view('template/header');
			$this->load->view('konten/data',$data);
			$this->load->view('template/footer');
		}
	}

	function cari(){
		if($this->session->userdata('username') === null){
			redirect('auth');
		}else{
		$keyword = $this->input->post('keyword');
		$this->load->view('template/header');
		$this->load->view('konten/cari1');
		$this->load->view('template/footer');
		}
	}

	// buat manual
	function data_ac(){
		if($this->session->userdata('username') === null){
			redirect('auth');
		}else{
		$this->load->library('pagination');
		$config['base_url'] = base_url().'/ac/data_ac/';
		$config['total_rows'] = $this->M_main->data_ac()->num_rows(); 
		$data['total'] = $this->M_main->data_ac()->num_rows(); 
		$config['per_page'] = 25;
		$this->pagination->initialize($config);
		$data['paging']     = $this->pagination->create_links();
		$halaman            = $this->uri->segment(3);
		$halaman            = $halaman ==''?0:$halaman;
		$data ['ac']  = $this->M_main->data_ac_paging($halaman,  $config['per_page']);
		$this->load->view('template/header');
		$this->load->view('konten/paging_ac',$data);
		$this->load->view('template/footer');
		}
	}
	// end manual

	public function detil(){
	if($this->session->userdata('username') === null){
		redirect('auth');
	}else{
		$noe= $this->uri->segment(3);
		// $data['ac'] = $this->db->get_where('v_sifa', array(regex_replace('[^a-zA-Z0-9\-]','',nomor_perkara)=>$noe))->row_array();
		$this->load->view('template/header');
		$this->load->view('konten/detil_ac',$data);
		$this->load->view('template/footer');
		// redirect('data_ac');
		}
	}

	public function search()
	{
		if($this->session->userdata('username') === null){
			redirect('auth');
		}else{
			$keyword = $this->input->post('keyword');
			$data['carian'] = $this->M_main->cari($keyword);
			$this->load->view('template/header');
			$this->load->view('konten/cari2',$data);
			$this->load->view('template/footer');
		}
	}


}