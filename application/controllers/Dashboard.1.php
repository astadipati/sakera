<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
	public function index(){
	if($this->session->userdata('username') == null){
		redirect('auth');
	}else{
		$query = $this->db->query("SELECT MONTH(tgl_akta_cerai) tanggal,
        CASE MONTH(tgl_akta_cerai) 
        WHEN 1 THEN 'Januari'
        WHEN 2 THEN 'Februari'
        WHEN 3 THEN 'Maret'
        WHEN 4 THEN 'April'
        WHEN 5 THEN 'Mei'
        WHEN 6 THEN 'Juni'
        WHEN 7 THEN 'Juli'      
        WHEN 8 THEN 'Agustus'  
        WHEN 9 THEN 'September'        
        WHEN 10 THEN 'Oktober'  
        WHEN 11 THEN 'November'        
        WHEN 12 THEN 'Desember'    
        END bulan
        , COUNT(*) jml
        FROM perkara_akta_cerai
        WHERE YEAR(tgl_akta_cerai) = YEAR(CURRENT_DATE)
        GROUP BY MONTH(tgl_akta_cerai);"); 
        $data['click'] = json_encode(array_column($query->result(), 'jml'),JSON_NUMERIC_CHECK);
 
		$this->load->view('template/header');
		$this->load->view('konten/dashboard',$data);
		$this->load->view('template/footer');
	}
	}
}
