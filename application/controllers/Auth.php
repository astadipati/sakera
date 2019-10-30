<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller{

    function __construct(){
        parent:: __construct();
        $this->load->model('M_admin');
        // $this->load->library('Recaptcha'); 
    }

    function index(){
        // $info['info'] = $this->db->get_where('tabel_instansi',array('id_instansi'=> 1))->row_array();
        $this->load->view('login');
    }

    function chek_login(){
        if (isset($_POST['submit'])){
            // proses login disini
            $username =htmlspecialchars($this->input->post('username',TRUE),ENT_QUOTES);
            $password =htmlspecialchars ($this->input->post('password',TRUE),ENT_QUOTES);
            $result = $this->M_admin->checkLogin($username, $password);
            if (!empty($result)){
                $this->session->set_userdata($result);
                redirect('dashboard');
            }else {
                // $this->session->sess_destroy();
                redirect ('auth'); 
            }
            // print_r($result);
        }else {
            redirect('auth');
        }
    }

    function logout(){
        // $this->load->driver('cache');
        $this->session->sess_destroy();
        // $this->session->sess_destroy();
        // $this->cache->clean();
        redirect ('auth');
    }
}
