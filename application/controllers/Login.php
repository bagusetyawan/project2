<?php
class Login extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_login');
        $this->load->library('session');
        $this->load->helper('url');

	}
	
    public function index(){
        if(!empty($this->session->userdata('username'))){
            redirect('/transaksi','refresh');
        } else{
            $this->session->sess_destroy();
            $this->load->view('login/v_login');
        }
    }

    public function getCredentials(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $hasil = $this->m_login->getCredentials($username, $password);
        echo json_encode($hasil);
    }

    function logout(){
        $this->session->sess_destroy();
        redirect(base_url());
    }
}