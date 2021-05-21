<?php
class M_guru extends CI_Model{
	
	public function tambahDataKelas($tabel,$data){
		$query = $this->db->insert($tabel,$data);
	}

	public function getDataKelas(){
		$this->db->select('tb_kelas.*, tb_akun.*');
		$this->db->from('tb_kelas');
		$this->db->join('tb_akun', 'tb_akun.id_akun = tb_kelas.id_akun','inner');
		$query = $this->db->get();
		return $query->result();
	}


}