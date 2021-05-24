<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('siswa/v_panduan');
    }

    public function panduan(){
        redirect(base_url()."Siswa");
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
        $this->load->model('m_siswa');
        $data['fetch_data'] = $this->m_siswa->getDataKelasSiswa($this->session->userdata('id_akun'));
        $this->load->view('siswa/v_kelas_siswa', $data);
    }

    public function tambah_kelas(){

        $kode_kelas = $this->input->post('kode_kelas');
        $id_akun    = $this->session->userdata('id_akun');
        $this->load->model('m_siswa');
        $this->m_siswa->tambahKelas($kode_kelas, $id_akun);
        $this->session->set_flashdata('succses', 'Kelas berhasil ditambahkan!');

        redirect('siswa/kelas');
    }

    public function hapus_kelas(){
        $this->load->model('m_siswa');
        if (! $this->m_siswa->delete_kelas($this->input->post('id_join_kelas'))) {
            $this->session->set_flashdata('message','Record tidak bisa dihapus!');
        }else{
            $this->session->set_flashdata('message',"Data Berhasil Dihapus");
        }
        redirect('siswa/kelas');
    }

    public function profil_siswa()
    {
        $this->load->model('m_siswa');
        $data['fetch_profile_siswa'] = $this->m_siswa->getProfileSiswa($this->session->userdata('id_akun'));
        $this->load->view('siswa/v_profile_siswa',$data);
    }

}
