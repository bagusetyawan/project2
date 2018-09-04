<?php
class Customer extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_customer');
        if(empty($this->session->userdata('username'))){
            redirect(base_url("index.php/login"));
        }
	}
	function index(){
		$this->load->view('customer/v_customer');
	}

	function data_customer(){
		$data=$this->m_customer->customer_list();
		echo json_encode($data);
	}

	function get_customer(){
        $kobar=$this->input->get('id');
        $data=$this->m_customer->get_customer_by_kode($kobar);
        echo json_encode($data);
    }
 
    function simpan_customer(){
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $kota=$this->input->post('kota');
        $telepon=$this->input->post('telepon');
        $data=$this->m_customer->simpan_customer($nama, $alamat, $kota, $telepon);
        echo json_encode($data);
    }
 
    function update_customer(){
        $id=$this->input->post('id');
        $nama=$this->input->post('nama');
        $alamat=$this->input->post('alamat');
        $kota=$this->input->post('kota');
        $telepon=$this->input->post('telepon');
        $data=$this->m_customer->update_customer($id,$nama,$alamat,$kota,$telepon);
        echo json_encode($data);
    }
 
    function hapus_customer(){
        $id=$this->input->post('id');
        $data=$this->m_customer->hapus_customer($id);
        echo json_encode($data);
    }
}