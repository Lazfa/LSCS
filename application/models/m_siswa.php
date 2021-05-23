<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_siswa extends CI_Controller
{

	public function tambahDataKelas($tabel,$data){
		$query = $this->db->insert($tabel,$data);
	}

}