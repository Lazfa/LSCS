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
        $this->load->model('m_guru');
        $data['fetch_data'] = $this->m_guru->getDataKelas($this->session->userdata('id_akun'));
        $this->load->view('guru/v_guru_kelas', $data);
    }

    public function profil()
    {
        echo "hasil belum beres kaka :)";
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

    public function edit_kelas($id){
        $id_kelas   = $this->input->post('id_kelas');
        $nama_kelas = $this->input->post('nama_kelas');
        $kode_kelas = $this->input->post('kode_kelas');
        $id_akun    = $this->db->insert_id();

        $data = array('kode_kelas'  =>$kode_kelas,
                    'nama_kelas'    =>$nama_kelas);
        
        $this->load->model('m_guru');
        $this->m_guru->update_kelas($id_kelas,$data,'tb_kelas');
        $this->session->set_flashdata('succses', 'kelas berhasil diubah!');

        redirect('guru/kelas');
    }

    public function hapus_kelas(){
        $this->load->model('m_guru');
        if (! $this->m_guru->delete_kelas($this->input->post('id_kelas'),$this->input->post('id_akun') )) {
            // $this->session->set_flashdata('message','Record tidak bisa dihapus!');
        }else{
            $this->session->set_flashdata('message',"Data Berhasil Dihapus");
        }
        redirect('guru/kelas');
    }

}
