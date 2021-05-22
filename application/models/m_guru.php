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

	public function getNamaKelas($id){
		$this->db->select('*');
		$this->db->from('tb_join_kelas');
		$this->db->join('tb_kelas', 'tb_join_kelas.id_kelas = tb_kelas.id_kelas','INNER');
		$this->db->where('tb_kelas.id_kelas',$id);
		$query = $this->db->get();
		return $query->result();
	}

	public function update_kelas($id, $data, $table) {
			// Buat update akun
		if($table == 'tb_akun'){
			$this->db->where(array('id_akun' => $id));
	    	return $this->db->update('tb_akun',$data);
		}else{
			// Buat update kelasnya
		    $this->db->where(array('id_kelas' => $id));
		    return $this->db->update('tb_kelas',$data);
		}
    }

	public function delete_kelas($id_kelas,$id_akun){
    	$db_debug = $this->db->db_debug; 
	    $this->db->db_debug = FALSE;

	    $this->db->where('id_kelas',$id_kelas);
	    $this->db->delete('tb_join_kelas');
	    $this->db->where('id_kelas',$id_kelas);
	    $this->db->delete('tb_join_kelas');

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