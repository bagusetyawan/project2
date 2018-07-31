<?php
class M_transaksi extends CI_Model{

	function tmp_trans_list(){
		$hasil=$this->db->query("SELECT * FROM tmp_transaksi where 1 = 1 order by id_barang desc");
		return $hasil->result();
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
        return $id;
        
    }

    function getSuggestionBarang($nama){
        $this->db->select("id_barang,nama_barang, kategori, harga");
        $this->db->like('nama_barang', $nama , 'both');
        $this->db->from('mst_barang');
        $this->db->where("1","1");
        return $this->db->get()->result();

        
    }

	function add_barang($id_transaksi, $id_barang, $nama_barang, $jumlah, $harga_satuan, $subtotal){
        $hasil = $this->db->query("INSERT INTO tmp_transaksi (id_transaksi, id_barang, nama_barang, jumlah, harga_satuan, subtotal, created_at) VALUES ('$id_transaksi', '$id_barang', '$nama_barang', '$jumlah', '$harga_satuan', '$subtotal', NOW())");
        
        return $hasil;
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
	
}