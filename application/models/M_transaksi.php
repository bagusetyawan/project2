<?php
class M_transaksi extends CI_Model{

	function tmp_trans_list(){
		$hasil=$this->db->query("SELECT * FROM mst_barang order by id_barang desc");
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
        // $this->db->like('nama_barang', $nama , 'both');
        // $this->db->order_by('nama_barang', 'ASC');
        // $this->db->limit(50);
        $this->db->select("id_barang,nama_barang, kategori, harga");
        $this->db->like('nama_barang', $nama , 'both');
        $this->db->from('mst_barang');
        $this->db->where("1","1");
        return $this->db->get()->result();

        
    }

	function simpan_barang($nama_barang,$kategori,$satuan,$stok){
        $hasil=$this->db->query("INSERT INTO mst_barang (nama_barang,kategori,satuan,stok)VALUES('$nama_barang','$kategori','$satuan','$stok')");
        return $hasil;
    }
 
    function get_barang_by_kode($kobar){
        $hsl=$this->db->query("SELECT * FROM mst_barang WHERE id_barang='$kobar'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_barang' => $data->id_barang,
                    'nama_barang' => $data->nama_barang,
                    'kategori' => $data->kategori,
                    'satuan' => $data->satuan,
                    'stok' => $data->stok
                    );
            }
        }
        return $hasil;
    }
 
    function update_barang($kobar,$nabar,$kategori,$satuan,$stok){
        $hasil=$this->db->query("UPDATE mst_barang SET nama_barang='$nabar',kategori='$kategori',satuan='$satuan',stok='$stok' WHERE id_barang='$kobar'");
        return $hasil;
    }
 
    function hapus_barang($kobar){
        $hasil=$this->db->query("DELETE FROM mst_barang WHERE id_barang='$kobar'");
        return $hasil;
    }
	
}