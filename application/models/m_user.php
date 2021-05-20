<?php
class M_user extends CI_Model{
	
	public function tambahDataUser($tabel,$data){
		$query = $this->db->insert($tabel,$data);
	}

}