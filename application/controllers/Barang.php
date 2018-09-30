<?php
class Barang extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('m_barang');
        // initiate faker
        $this->faker = Faker\Factory::create();
        $this->load->helper(array('form', 'url'));
        if(empty($this->session->userdata('username'))){
            redirect(base_url("index.php/login"));
        }
	}
	function index(){
		$this->load->view('barang/v_barang');
	}

	function data_barang(){
		$data=$this->m_barang->barang_list();
		echo json_encode($data);
	}

    public function setKategori()
    {
        for ($i = 0; $i < 10; $i++) {
            $data = array(
                'kategori' => $this->faker->firstName
            );
            $this->db->insert('kategori', $data);
        }
    }

    public function addBarang()
    {
        $data['kategori'] = $this->db->get('kategori')->result();
        $this->load->view('barang/addBarang', $data, FALSE);
    }

	function get_barang(){
        $kobar=$this->input->get('id');
        $data=$this->m_barang->get_barang_by_kode($kobar);
        echo json_encode($data);
    }
 
    function simpanBarang(){
        $idBarang = $this->input->post('idBarang');
        $receiveDate = date("Y-m-d", strtotime($this->input->post('receiveDate')));
        $namaBarang = $this->input->post('namaBarang');
        $hpp = $this->input->post('hargaPokok');
        $hargaJual = $this->input->post('hargaJual');
        $expDate = date("Y-m-d", strtotime($this->input->post('expDate')));
        $kategori = $this->input->post('kategori');
        $satuan = $this->input->post('satuan');
        $minimumStok = $this->input->post('minimumStok');
        $stokAwal = $this->input->post('stokAwal');
        $penyimpanan = $this->input->post('penyimpanan');
        $supplier = $this->input->post('supplier');
        $imgPath = '';

        $config['upload_path']="./assets/uploads";
        $config['allowed_types']='gif|jpg|png';
        $config['encrypt_name'] = TRUE;

        $this->load->library('upload',$config);
        
        if($this->upload->do_upload("berkas")){
            $data = array('upload_data' => $this->upload->data());
            $imgPath= $data['upload_data']['file_name'];
            $error = array('error' => $this->upload->display_errors());
            if(!empty($error['error'])){
                $this->session->set_flashdata(array("class" => "alert-danger", "header" => "Sorry", "messages" => $error['error']));
            } else{
                $this->session->set_flashdata(array("class" => "alert-success", "header" => "Berhasil", "messages" => "Data Berhasil Ditambahkan"));
            }
        } else{
            $this->session->set_flashdata(array("class" => "alert-success", "header" => "Berhasil", "messages" => "Data Berhasil Ditambahkan"));
        }

        $data=$this->m_barang->simpan_barang($idBarang, $receiveDate, $namaBarang, $hpp, $hargaJual, $expDate, $kategori, $satuan, $minimumStok, $stokAwal, $penyimpanan, $supplier, $imgPath);
        redirect('/barang', 'refresh');
    }
 
    function update_barang(){
        $kobar=$this->input->post('kobar');
        $nabar=$this->input->post('nabar');
        $harga=$this->input->post('harga');
        $kat=$this->input->post('kat');
        $sat=$this->input->post('sat');
        $stok=$this->input->post('stk');
        $data=$this->m_barang->update_barang($kobar,$nabar,$harga,$kat,$sat,$stok);
        echo json_encode($data);
    }
 
    function hapus_barang(){
        $kobar=$this->input->post('kode');
        $data=$this->m_barang->hapus_barang($kobar);
        echo json_encode($data);
    }
}