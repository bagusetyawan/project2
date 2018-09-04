<?php
class M_piutang extends CI_Model{

	function piutang_list(){
		$hasil=$this->db->query("select id_customer, FORMAT(sum(total), 0) as sum_total, FORMAT(sum(pembayaran), 0) as pembayaran, nama_customer, FORMAT(sum(total) - sum(pembayaran),0) as sisa from trans_piutang group by id_customer, nama_customer");
		return $hasil->result();
	}
 
    function get_piutang_by_kode($id){
        $hsl=$this->db->query("SELECT id, id_customer, FORMAT(total, 0) as total, FORMAT(pembayaran, 0) as pembayaran, FORMAT(total - pembayaran,0) as sisa, deadline FROM trans_piutang WHERE id_customer='$id'");
        return $hsl->result();
    }

    function get_piutang_by_id($id){
        $hsl=$this->db->query("SELECT * FROM trans_piutang WHERE id='$id'");
        if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id' => $data->id,
                    'total' => $data->total,
                    'deadline' => $data->deadline,
                    'pembayaran' => $data->pembayaran
                    );
            }
        }
        return $hasil;
    }
 
    function bayar_hutang($id,$bayar){
        $hasil=$this->db->query("UPDATE trans_piutang SET pembayaran='$bayar', updated_at=NOW() WHERE id='$id'");
        return $hasil;
    }
 
    function hapus_customer($id){
        $hasil=$this->db->query("DELETE FROM mst_customers WHERE id='$id'");
        return $hasil;
    }
	
}