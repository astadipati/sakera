<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class M_admin extends CI_Model{
    function checkLogin($username, $password){
        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $user = $this->db->get('tbl_kua')->row_array();
        return $user;
    }
}