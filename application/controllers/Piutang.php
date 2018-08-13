<?php
class Piutang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_piutang');
	}
	function index(){
		$this->load->view('piutang/v_piutang');
	}

	function data_piutang(){
		$data=$this->m_piutang->piutang_list();
		echo json_encode($data);
	}

	function get_piutang(){
        $kobar=$this->input->get('id');
        $data=$this->m_piutang->get_piutang_by_kode($kobar);
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