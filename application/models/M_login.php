<?php
class M_login extends CI_Model{

    function __construct(){
        parent::__construct();
        $this->load->library('session');
    }

	public function getCredentials($user, $pass){
        

        
         $query = "SELECT * FROM mst_users WHERE username = '$user' AND password = '$pass' ";
        $hasil = $this->db->query($query);
        if($hasil->num_rows() > 0){
            $result = $hasil->row();
            $this->session->set_userdata('username', $result->username);
            
        }
        return $hasil->num_rows();
    }
	
}