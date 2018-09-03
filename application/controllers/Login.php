<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
	}
	
    public function index(){
        $this->load->view('login/v_login');
    }

    public function getCredentials(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hasil = $this->m_login->getCredentials($username, $password);
        // $this->session->set_userdata('username', 'aaaaaaa');
        // echo $this->session->userdata('username');
        echo json_encode($hasil);
        // print_r($hasil);
    }
}