<?php
class Transaksi extends CI_Controller{
	function __construct(){
		parent::__construct();
		
	}
	function index(){
        $this->load->model('m_barang');
		$this->load->view('transaksi/v_transaksi');
	}

    function getID(){
        $this->load->model('m_transaksi');
        $this->m_transaksi->getID();
    }

    function getAutocomplete(){
        $this->load->model('m_barang');
        if (isset($_GET['term'])) {
            $result = $this->m_barang->getSuggestionBarang($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row){
                $arr_result[] = array(
                    "id" => $row->id_barang,
                    "label" => $row->nama_barang,
                    "harga" => $row->harga
                );
            }
                echo json_encode($arr_result);
            }
        }
    }

    function data_transaksi(){
        $data=$this->m_barang->barang_list();
        echo json_encode($data);
    }

	function data_barang(){
		$data=$this->m_barang->barang_list();
		echo json_encode($data);
	}

	function get_barang(){
        $kobar=$this->input->get('id');
        $data=$this->m_barang->get_barang_by_kode($kobar);
        echo json_encode($data);
    }
 
    function simpan_barang(){
        $nabar=$this->input->post('nabar');
        $kat=$this->input->post('kat');
        $sat=$this->input->post('sat');
        $stok=$this->input->post('stk');
        $data=$this->m_barang->simpan_barang($nabar, $kat, $sat, $stok);
        echo json_encode($data);
    }
 
    function update_barang(){
        $kobar=$this->input->post('kobar');
        $nabar=$this->input->post('nabar');
        $kat=$this->input->post('kat');
        $sat=$this->input->post('sat');
        $stok=$this->input->post('stk');
        $data=$this->m_barang->update_barang($kobar,$nabar,$kat,$sat,$stok);
        echo json_encode($data);
    }
 
    function hapus_barang(){
        $kobar=$this->input->post('kode');
        $data=$this->m_barang->hapus_barang($kobar);
        echo json_encode($data);
    }
}