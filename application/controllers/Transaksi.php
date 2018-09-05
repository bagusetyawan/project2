<?php
class Transaksi extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_transaksi');
        $this->load->model('m_barang');
        if(empty($this->session->userdata('username'))){
            redirect(base_url("index.php/login"));
        }
	}
	function index(){
		$this->load->view('transaksi/v_transaksi');
	}

    function getIDAjax(){
        $hasil = $this->m_transaksi->getID();
        echo json_encode($hasil);
    }

    function getID(){
        $this->m_transaksi->getID();
    }

    function sumTrans(){
        $id = $this->m_transaksi->getID();
        $total = $this->m_transaksi->sumTrans($id);
        echo json_encode($total);
    }

    function getAutocomplete(){
        
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

    function getAutocompleteCust(){
        
        if (isset($_GET['term'])) {
            $result = $this->m_transaksi->getSuggestionCust($_GET['term']);
            if (count($result) > 0) {
            foreach ($result as $row){
                $arr_result[] = array(
                    "id" => $row->id,
                    "label" => $row->nama
                );
            }
                echo json_encode($arr_result);
            }
        }
    }

    function data_tmp_trans(){
        $data=$this->m_transaksi->tmp_trans_list();
        echo json_encode($data);
    }


	function get_tmp_trans(){
        $kobar=$this->input->get('id');
        $data=$this->m_transaksi->get_barang_by_kode($kobar);
        echo json_encode($data);
    }
 
    function add_barang(){
        $idBarang = $this->input->post('idBarang');
        $namaBarang = $this->input->post('namaBarang');
        $idTrans = $this->input->post('idTrans'); //$this->m_transaksi->getID();
        $jumlah = $this->input->post('jumlah');
        $diskon = $this->input->post('diskon');
        $harga = $this->input->post('harga');
        $subTotal = $this->input->post('subTotal');
        $data=$this->m_transaksi->add_barang($idTrans, $idBarang, $namaBarang, $jumlah, $diskon, $harga, $subTotal);
        echo json_encode($data);
    }

    function saveTrans(){
        $id = $this->input->post('idTrans');
        $idPel = $this->input->post('idPel');
        $total = $this->input->post('total');
        $total = str_replace(',', '', $total);
        $pembayaran = $this->input->post('pembayaran');
        $pelanggan = $this->input->post('pelanggan');
        $deadline = date("Y-m-d", strtotime($this->input->post('jatuh_tempo')));
        $data = $this->m_transaksi->saveTrans($id, $idPel, $total, $pembayaran, $pelanggan, $deadline);
        echo json_encode($data);
    }
 
    function update_tmp_trans(){
        $id=$this->input->post('id');
        $jumlah=$this->input->post('jumlah');
        $subtotal=$this->input->post('subtotal');
        
        $data=$this->m_transaksi->update_tmp_trans($id, $jumlah, $subtotal);
        echo json_encode($data);
    }
 
    function hapus_tmp_trans(){
        $kobar=$this->input->post('kode');
        $data=$this->m_transaksi->hapus_tmp_trans($kobar);
        echo json_encode($data);
    }

    public function test()
    {
        echo 'ini';
    }

    public function cetakPDF(){
        $this->load->model('M_customer');
        $this->load->model('M_transaksi');

        $idPel = $this->input->get('kodePel');
        $idTrans = $this->input->get('kodeTrans');
        $data['customer'] = $this->M_customer->get_customer_by_kode($idPel);
        $data['items'] = $this->M_transaksi->getDetail($idTrans);
        $data['sum'] = $this->M_transaksi->sumDetail($idTrans);
        $data['piutang'] = $this->M_transaksi->getPiutang($idTrans);
        $data['transaksi'] = $this->M_transaksi->getTransByKode($idTrans);
        $data['idTrans'] = $this->M_transaksi->getID();
        $data['idTrans2'] = $idTrans;
        // print_r($data['transaksi']);
        $this->load->library('Pdf');
        $this->load->view('transaksi/cetakDO', $data);
    }

    public function listTransaksi(){
        
        $this->load->view('transaksi/listTransaksi');
    }

    public function getList(){
        $this->load->model('M_transaksi');
        $data=$this->M_transaksi->getList();
        echo json_encode($data);
    }
}