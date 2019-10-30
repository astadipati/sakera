<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
        parent::__construct();
        $this->load->model('M_main');
	}
	
	
	public function index(){
	if($this->session->userdata('username') == null){
		redirect('auth');
	}else{
		$data['report'] = $this->M_main->report();
		// $query = $this->M_main->dashboard(); 
        // $d = $query->result();
        // $jmls = [];
        // foreach($d as $val){
        //     $jmls[] = $val->jml;
        // }
        // $data['click']= json_encode($jmls,JSON_NUMERIC_CHECK);
        // print_r($data);
		
		// die();
        // // $update = $this->M_main->updated()->num_rows();
 
		$this->load->view('template/header');
		$this->load->view('konten/dashboard', $data);
		$this->load->view('template/footer');
	}
	}
}
