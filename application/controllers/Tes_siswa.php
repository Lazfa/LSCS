<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes_siswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('siswa/v_panduan');
    }

    public function panduan(){
        redirect(base_url()."Tes_siswa");
    }

    public function tes()
    {
        echo "tes belum beres kaka :)";
    }

    public function hasil()
    {
        echo "hasil belum beres kaka :)";
    }

    public function kelas()
    {
        $this->load->view('siswa/v_kelas_siswa');
    }

    public function profil(){
        echo "profil belum beres kaka :)";
    }

    public function buat_kelas(){

        $nama_kelas = $this->input->post('nama_kelas');
        $kode_kelas = $this->input->post('kode_kelas');
        $id_akun    = $this->session->userdata('id_akun');

        $data = array('kode_kelas'  =>$kode_kelas,
                    'nama_kelas'    =>$nama_kelas,
                    'id_akun'       => $id_akun);
        
        $this->load->model('m_guru');
        $this->m_guru->tambahDataKelas('tb_kelas',$data);
        $this->session->set_flashdata('succses', 'Kelas berhasil didaftarkan!');

        redirect('guru/kelas');
    }

}
