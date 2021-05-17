<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tes_siswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('v_panduan');
    }

    public function panduan(){
        redirect(base_url()."Tes");
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
        echo "kelas belum beres kaka :)";
    }

    public function profil(){
        echo "profil belum beres kaka :)";
    }
}
