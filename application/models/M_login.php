<?php
class M_login extends CI_Model{

	public function getCredentials($user, $pass){
        $query = "SELECT * FROM mst_users WHERE username = '$user' AND password = '$pass' ";
        $hasil = $this->db->query($query)->row();
        // $result = 0;
        if(!empty($hasil)){
            return $hasil;
            $this->session->set_userdata('username', $hasil->username);
        } else{
            return '0';
        }
        // return (!empty($hasil)?$hasil:'0');
        // return $result;
    }
	
}