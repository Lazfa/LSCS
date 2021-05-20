<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    public function index()
    {
        $this->load->view('guru/v_panduan_guru');
    }

    public function panduan()
    {
        redirect(base_url() . "Guru");
    }

    public function kelas()
    {
       $this->load->view('guru/v_guru_kelas');
    }

    public function profil()
    {
        echo "hasil belum beres kaka :)";
    }

    public function buat_kelas(){

        $nama_kelas = $this->input->post('nama_kelas');
        $kode_kelas = $this->input->post('kode_kelas');
        $data = array('nama_kelas'=>$nama_kelas,
                    'kode_kelas'=>$kode_kelas);
        
        $this->load->model('m_guru');
        $this->m_guru->tambahDataKelas('tb_kelas',$data);
        $this->session->set_flashdata('succses', 'kelas berhasil didaftarkan!');

        $this->load->view('guru/v_guru_kelas');
    }

}
