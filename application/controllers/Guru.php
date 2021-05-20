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
}
