<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Model{

	public function getHasilSiswa($id){
		$this->db->select('*');
		$this->db->from('tb_hasil_tes');
		$this->db->where('id_akun', $id);
		$results = $this->db->get();
		return $results->result();
	}

	public function getRekSiswa($id){
		$this->db->select('*');
		$this->db->from('tb_rekomendasi');
		$this->db->where('id_rekomendasi', $id);
		$results = $this->db->get();
		return $results->result();
	}

	public function getDataKelasSiswa($id){
		$this->db->select('*');
		$this->db->from('tb_join_kelas');
		$this->db->join('tb_kelas', 'tb_kelas.id_kelas = tb_join_kelas.id_kelas','LEFT');
		$this->db->join('tb_akun', 'tb_kelas.id_akun = tb_akun.id_akun','LEFT');
		$this->db->where('tb_join_kelas.id_akun',$id);
		$query = $this->db->get();
		return $query->result();
	}
	
	public function tambahKelas($kode_kelas, $id_akun){
		$this->db->select('id_kelas');
		$this->db->from('tb_kelas');
		$this->db->where('kode_kelas',$kode_kelas);
		$query = $this->db->get();
		$idkel = $query->row()->id_kelas;
		$data_join = array('id_akun' => $id_akun,
                    'id_kelas' => $idkel);
		$this->db->insert('tb_join_kelas',$data_join);
	}

	public function delete_kelas($id_join_kelas){
    	$db_debug = $this->db->db_debug; 
	    $this->db->db_debug = FALSE;

	    $this->db->where('id_join_kelas',$id_join_kelas);
	    $this->db->delete('tb_join_kelas');

	    $db_error = $this->db->error();
	    $this->db->db_debug = $db_debug; 

	    if ($db_error['code']==0) {
	       $result = TRUE;
	    } else  {
	       $result = FALSE;
	    }
	    return $result;
  	}

	public function getProfileSiswa($id){
		$this->db->select('*');
		$this->db->from('tb_akun');
		$this->db->where('tb_akun.id_akun',$id);
		$results = $this->db->get();
		return $results->result();
	}

	public function getSoalNomor($no){
		$this->db->select('*');
		$this->db->from('tb_tes');
		$this->db->where('tb_tes.nomor_soal', $no);
		$results = $this->db->get();
		return $results->result();
	}

	public function getAllSoal(){
		$this->db->select('*');
		$this->db->from('tb_tes');
		$results = $this->db->get();
		return $results->result();
	}

	public function insertDetailTesRecord($id_akun, $jawaban, $id_soal){
		$data = array(
			'id_akun' => $id_akun,
			'jawaban' => $jawaban,
			'id_soal' => $id_soal
		);
		$this->db->insert('tb_detail_hasil', $data);
	}

	public function getRekomendasi($gaya){
		$this->db->select('*');
		$this->db->from('tb_rekomendasi');
		$this->db->where('tb_rekomendasi.jenis_gaya_belajar', $gaya);
		$results = $this->db->get();
		return $results->result();
	}

	public function insertHasilTes($id_akun, $deskripsi, $id_rekomendasi, $gaya){
		$data = array(
			'id_akun' => $id_akun,
			'deskripsi' => $deskripsi,
			'id_rekomendasi' => $id_rekomendasi,
			'jenis_gaya_belajar' => $gaya
		);
		$this->db->insert('tb_hasil_tes', $data);
	}
}