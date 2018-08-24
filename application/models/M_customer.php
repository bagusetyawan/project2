<?php
class M_customer extends CI_Model{

	function customer_list(){
		$hasil=$this->db->query("SELECT * FROM mst_customers order by id desc");
		return $hasil->result();
	}

    function getSuggestionBarang($nama){
        $this->db->select("id_barang,nama_barang, kategori, harga");
        $this->db->like('nama_barang', $nama , 'both');
        $this->db->from('mst_barang');
        $this->db->where("1","1");
        return $this->db->get()->result();
    }

	function simpan_customer($nama,$alamat,$kota,$telepon){
        $q1 = "INSERT INTO mst_customers (nama,alamat,kota,telepon,created_at)VALUES('$nama','$alamat','$kota','$telepon',NOW())";
        $this->db->query($q1);
    }
 
    function get_customer_by_kode($id){
        $hsl=$this->db->query("SELECT * FROM mst_customers WHERE id='$id'");
        $hasil = 0;
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id' => $data->id,
                    'nama' => $data->nama,
                    'alamat' => $data->alamat,
                    'kota' => $data->kota,
                    'telepon' => $data->telepon
                    );
            }
        }
        // return $hsl;
        return $hasil;
    }
 
    function update_customer($id,$nama,$alamat,$kota,$telepon){
        $hasil=$this->db->query("UPDATE mst_customers SET nama='$nama',alamat='$alamat',kota='$kota',telepon='$telepon', updated_at=NOW() WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_customer($id){
        $hasil=$this->db->query("DELETE FROM mst_customers WHERE id='$id'");
        return $hasil;
    }
	
}