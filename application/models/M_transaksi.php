<?php
class M_transaksi extends CI_Model{

	function tmp_trans_list(){
		$hasil=$this->db->query("SELECT id, id_transaksi, id_barang, nama_barang, jumlah, FORMAT(harga_satuan,0) as harga_satuan, FORMAT(subtotal,0) as subtotal, diskon FROM tmp_transaksi where 1 = 1 order by id_barang desc");
		return $hasil->result();
	}

    function getSuggestionCust($nama){
        $this->db->select("id,nama");
        $this->db->like('nama', $nama , 'both');
        $this->db->from('mst_customers');
        $this->db->where("1","1");
        return $this->db->get()->result();
    }

    function getID(){
        $this->db->select("id");
        $this->db->from("trans_master");
        $this->db->order_by("id", "DESC");
        $result = $this->db->get();
        $id;
        if($result->num_rows() > 0){
            $a = $result->row();
            $id = $a->id;
            $id++;
        } else{
            $id = 1;
        }
        $this->session->set_userdata('id_transaksi', $id);
        return $id;
        
    }

    function sumTrans($id){
        // $this->db->select_sum("subtotal");
        // $this->db->from("tmp_transaksi");
        // $this->db->where("id_transaksi", $id);
        // $result = $this->db->get()->result();
        
        $result = $this->db->query("SELECT FORMAT(SUM(subtotal),0) as subtotal FROM tmp_transaksi WHERE id_transaksi = '$id'")->result();

        return $result;
    }



    function getSuggestionBarang($nama){
        $this->db->select("id_barang,nama_barang, kategori, harga");
        $this->db->like('nama_barang', $nama , 'both');
        $this->db->from('mst_barang');
        $this->db->where("1","1");
        return $this->db->get()->result();

        
    }

	function add_barang($id_transaksi, $id_barang, $nama_barang, $jumlah, $diskon, $harga_satuan, $subtotal){
        $this->db->trans_start();
        $hasil = $this->db->query("INSERT INTO tmp_transaksi (id_transaksi, id_barang, nama_barang, jumlah, diskon, harga_satuan, subtotal, created_at) VALUES ('$id_transaksi', '$id_barang', '$nama_barang', '$jumlah', '$diskon', '$harga_satuan', '$subtotal', NOW())");
        $q2 = "INSERT INTO trans_barang(id_barang, nama_barang, jenis, jumlah, created_at) VALUES ('$id_barang', '$nama_barang', 'OUT', '$jumlah', NOW())";
        $q3 = "SELECT stok FROM mst_barang where id_barang = '$id_barang'";
        $hasil2 = $this->db->query($q3)->row();
        $stok = $hasil2->stok;
        $updateStok = $stok - $jumlah;
        $q4 = "UPDATE mst_barang SET stok = '$updateStok' WHERE id_barang = '$id_barang'";
        $this->db->query($q4);
        $this->db->query($q2);
        $this->db->trans_complete();
    }

    function saveTrans($id, $idPel, $total, $pembayaran, $pelanggan, $deadline){
        $id_transaksi = $this->session->userdata('id_transaksi');
        $q1 = 'INSERT INTO detail_trans(id_transaksi, id_barang, nama_barang, jumlah, harga_satuan, diskon, subtotal, created_at) SELECT id_transaksi, id_barang, nama_barang, jumlah, harga_satuan, diskon, subtotal, NOW() FROM tmp_transaksi';
        $q2 = 'TRUNCATE tmp_transaksi';
        $q3 = "INSERT INTO trans_master(id, id_customer, total, created_at) VALUES ('$id', '$idPel', '$total', NOW())";
        $q4 = "INSERT INTO trans_piutang(id_transaksi, id_customer, nama_customer, deadline, total, created_at) VALUES ('$id_transaksi', '$idPel', '$pelanggan', '$deadline', '$total', NOW())";
        
        if($pembayaran == 'hutang'){
            //start transaction
            $this->db->trans_start();
            $this->db->query($q1);
            $this->db->query($q3);
            $this->db->query($q4);
            $this->db->query($q2);
            $this->db->trans_complete();
        } else{
            $this->db->trans_start();
            $this->db->query($q1);
            $this->db->query($q3);
            $this->db->query($q2);
            $this->db->trans_complete();
        }
        //complete transaction
    }
 
    function get_barang_by_kode($kobar){
        $hsl=$this->db->query("SELECT * FROM tmp_transaksi WHERE id='$kobar'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id' => $data->id,
                    'id_barang' => $data->id_barang,
                    'nama_barang' => $data->nama_barang,
                    'jumlah' => $data->jumlah,
                    'harga_satuan' => $data->harga_satuan,
                    'subtotal' => $data->subtotal
                    );
            }
        }
        return $hasil;
    }
 
    function update_tmp_trans($id, $jumlah, $subtotal){
        $hasil=$this->db->query("UPDATE tmp_transaksi SET jumlah='$jumlah',subtotal='$subtotal' WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_tmp_trans($kobar){
        $hasil=$this->db->query("DELETE FROM tmp_transaksi WHERE id='$kobar'");
        return $hasil;
    }

    public function getDetail($idTrans){
        $hasil=$this->db->query("SELECT a.id, a.id_transaksi, a.id_barang, a.nama_barang, CONCAT(a.jumlah, ' ', b.satuan) as jumlah, FORMAT(a.harga_satuan,0) as harga_satuan, FORMAT(a.subtotal,0) as subtotal, a.diskon FROM detail_trans a LEFT JOIN mst_barang b ON a.id_barang = b.id_barang WHERE a.id_transaksi='$idTrans'")->result();
        return $hasil;
    }

    public function sumDetail($idTrans){
        // $this->db->select_sum("FORMAT(subtotal, 0) as subtotal");
        // $this->db->from("detail_trans");
        // $this->db->where("id_transaksi", $idTrans);
        // $result = $this->db->get()->row();
        $result = $this->db->query("SELECT FORMAT(SUM(subtotal),0) as subtotal FROM detail_trans WHERE id_transaksi = '$idTrans'")->row();
        return $result;
    }

    public function getPiutang($idTrans){
        $q1 = $this->db->query("SELECT created_at FROM trans_master WHERE id = '$idTrans'")->row();
        $tgl = $q1->created_at;
        $hari = date("Y-m-d");
        $result = $this->db->query("SELECT DATEDIFF(deadline, '$tgl') as tenggat, DATE_FORMAT(deadline, '%d %M %Y') deadline FROM trans_piutang WHERE id_transaksi= '$idTrans'")->row();
        return $result;
    }
	
    public function getTransByKode($idTrans){
        $result = $this->db->query("SELECT id, id_customer total, DATE_FORMAT(created_at, '%d %M %Y') as created_at, created_by FROM trans_master WHERE id = '$idTrans'")->row();
        return $result;
    }

    public function getList(){
        $hasil=$this->db->query("SELECT a.id, IF(b.nama IS NULL, '', b.nama) as nama, if(b.id IS NULL, '', b.id) as kodePel, FORMAT(a.total,0) as total, DATE_FORMAT(a.created_at, '%d %M %Y') as tanggal FROM trans_master a LEFT JOIN mst_customers b ON a.id_customer = b.id order by a.created_at desc");
        return $hasil->result();
    }
}