<?php
class M_guru extends CI_Model{
	
	public function tambahDataKelas($tabel,$data){
		$query = $this->db->insert($tabel,$data);
	}

}