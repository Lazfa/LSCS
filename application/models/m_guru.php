<?php
class M_guru extends CI_Model{
	
	public function tambahDataKelas($tabel,$data){
		$query = $this->db->insert($tabel,$data);
	}

	public function getDataKelas($idakun){
		$this->db->select('tb_kelas.*');
		$this->db->from('tb_kelas');
		$this->db->where('id_akun',$idakun);
		$query = $this->db->get();
		return $query->result();
	}

	public function delete_kelas($id_kelas,$id_akun){
    	$db_debug = $this->db->db_debug; 
	    $this->db->db_debug = FALSE;

	    //delete kelasnya dulu 
	    $this->db->where('id_kelas',$id_kelas);
	    $this->db->delete('tb_kelas');

	    //delete akun
	    $this->db->where('id_akun', $id_akun);
	    $this->db->delete('tb_akun');

	    $db_error = $this->db->error();
	    $this->db->db_debug = $db_debug; 

	    if ($db_error['code']==0) {
	       $result = TRUE;
	    } else  {
	       $result = FALSE;
	    }
	    return $result;
  	}

}