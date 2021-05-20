<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function index(){
		$data['tb_akun'] = $this->db->get_where('tb_akun',['nomor_identitas' => $this->session->userdata('nomor_identitas')])->row_array();
		
		$this->load->view('guru/v_panduan_guru');
	}

	public function login_siswa(){
		$data['tb_akun'] = $this->db->get_where('tb_akun',['nomor_identitas' => $this->session->userdata('nomor_identitas')])->row_array();
		
		$this->load->view('siswa/v_panduan');
	}

}