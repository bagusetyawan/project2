<?php
class M_barang extends CI_Model{

	function barang_list(){
		$hasil=$this->db->query("SELECT id_barang, nama_barang, FORMAT(harga,0) as harga, kategori, satuan, stok FROM mst_barang order by id_barang desc");
		return $hasil->result();
	}

    function getSuggestionBarang($nama){
        // $this->db->select("id_barang,nama_barang, kategori, harga");
        // $this->db->like('nama_barang', $nama , 'both');
        // $this->db->from('mst_barang');
        // $this->db->where("1","1");

        // return $this->db->get()->result();

        $a = $this->db->query("SELECT id_barang, nama_barang, kategori, harga FROM mst_barang WHERE nama_barang LIKE '%".$nama."%' OR id_barang LIKE '%".$nama."%'");
        return $a->result();
    }

	function simpan_barang($idBarang, $receiveDate, $namaBarang, $hpp, $hargaJual, $expDate, $kategori, $satuan, $minimumStok, $stokAwal, $penyimpanan, $supplier, $imgPath){
        $dataInsert = array(
            'id'    => $idBarang,
            'tanggalMasuk'  => $receiveDate,
            'namaBarang'    => $namaBarang,
            'HPP'   => $hpp,
            'hargaJual' => $hargaJual,
            'expDate'   => $expDate,
            'idKategori'    => $kategori,
            'idSatuan'  => $satuan,
            'minimumStok'   => $minimumStok,
            'stokAwal'  => $stokAwal,
            'idPenyimpanan' => $penyimpanan,
            'idSupplier'    => $supplier,
            'imgPath'   => $imgPath,
            'created_at'    => date('Y-m-d H:i:s'),
            'created_by'    => $this->session->userdata('username')
        );
        $this->db->insert('mstBarang', $dataInsert);
        return $this->db->last_query();
        
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