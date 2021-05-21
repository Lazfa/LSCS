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


}