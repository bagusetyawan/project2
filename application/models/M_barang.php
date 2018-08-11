<?php
class M_barang extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT * FROM mst_barang order by id_barang desc");
		return $hasil->result();
	}

    function getSuggestionBarang($nama){
        $this->db->select("id_barang,nama_barang, kategori, harga");
        $this->db->like('nama_barang', $nama , 'both');
        $this->db->from('mst_barang');
        $this->db->where("1","1");
        return $this->db->get()->result();
    }

	function simpan_barang($nama_barang,$harga,$kategori,$satuan,$stok){
        $q1 = "INSERT INTO mst_barang (nama_barang,harga,kategori,satuan,stok)VALUES('$nama_barang','$harga','$kategori','$satuan','$stok')";
        
        $q2 = "SELECT id_barang FROM mst_barang ORDER BY id_barang DESC LIMIT 1";

        $this->db->trans_start();
        $this->db->query($q1);
        $res1 = $this->db->query($q2)->row();
        $id_barang = $res1->id_barang;
        $q3 = "INSERT INTO trans_barang(id_barang, nama_barang, jenis, jumlah, created_at) VALUES ('$id_barang', '$nama_barang', 'IN', '$stok', NOW())";
        $this->db->query($q3);
        $this->db->trans_complete();
        // return $hasil;
    }
 
    function get_barang_by_kode($kobar){
        $hsl=$this->db->query("SELECT * FROM mst_barang WHERE id_barang='$kobar'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_barang' => $data->id_barang,
                    'nama_barang' => $data->nama_barang,
                    'harga' => $data->harga,
                    'kategori' => $data->kategori,
                    'satuan' => $data->satuan,
                    'stok' => $data->stok
                    );
            }
        }
        return $hasil;
    }
 
    function update_barang($kobar,$nabar,$harga,$kategori,$satuan,$stok){
        $hasil=$this->db->query("UPDATE mst_barang SET nama_barang='$nabar',kategori='$kategori',satuan='$satuan',stok='$stok', harga='$harga' WHERE id_barang='$kobar'");
        return $hasil;
    }
 
    function hapus_barang($kobar){
        $hasil=$this->db->query("DELETE FROM mst_barang WHERE id_barang='$kobar'");
        return $hasil;
    }
	
}