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
        if ($this->session->userdata("sedang_tes") != null) {
            echo "belum ada session";
        } else {
            // $this->sessions->set_userdata("sedang_tes", "true");
            $this->load->view("siswa/v_tes_landing");
        }
    }

    public function hasil()
    {
        $this->load->model('m_siswa');
        $data['fetch_data'] = $this->m_siswa->getHasilSiswa($this->session->userdata('id_akun'));
        $this->load->view('siswa/v_hasil_siswa', $data);
    }

    public function rekomendasi($idrek)
    {
        $this->load->model('m_siswa');
        $data['fetch_data'] = $this->m_siswa->getRekSiswa($idrek);
        $this->load->view('siswa/v_rekomendasi_siswa', $data);
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

    public function panduan_tes()
    {
        $this->load->view("siswa/v_panduan_tes");
    }

    public function mulai_tes($no=1){

        $this->load->model('m_siswa');
        $data['soal'] = $this->m_siswa->getSoalNomor($no);
        $data['jawaban'] = $_SESSION['j_nomor'][$no];
        $this->load->view("siswa/v_form_tes", $data);
    }

    public function init_tes(){
        if ($this->session->has_userdata('j_nomor')){
            $this->session->unset_userdata('jawaban');
        }
        
        $jawaban = array();
        for ($i=1; $i<=80; $i++){
            $jawaban["j_nomor"][$i] = "kosong";
        }

        $this->session->set_userdata($jawaban);
        redirect(base_url().'Siswa/mulai_tes/1');
    }

    public function set_jawaban($no, $jawab){
        $_SESSION['j_nomor'][$no]=$jawab;
        redirect(base_url() . 'Siswa/mulai_tes/'.$no);
    }

    public function confirm($no){
        $data['no'] = $no;
        $this->load->view("siswa/v_konfirmasi", $data);
    }

    public function kalkulasi(){
        $aktivis = 0;
        $pragmatis = 0;
        $teoris = 0;
        $reflektor = 0;

        $this->load->model('m_siswa');
        $soal = $this->m_siswa->getAllSoal();
        $id_akun = $this->session->userdata('id_akun');
        
        for($i=1; $i<=80; $i++){
            $id_soal = $soal[$i-1]->id_soal;
            $jawaban = $_SESSION['j_nomor'][$i];
            $this->m_siswa->insertDetailTesRecord($id_akun, $jawaban, $id_soal);

            if($_SESSION['j_nomor'][$i]=='ya'){
                if($soal[$i-1]->tipe=="A"){
                    $aktivis++;
                } else if ($soal[$i - 1]->tipe == "P"){
                    $pragmatis++;
                } else if ($soal[$i - 1]->tipe == "T"){
                    $teoris++;
                } else if ($soal[$i - 1]->tipe == "R"){
                    $reflektor++;
                }
            }
        }

        $hasil = array(
            'a' => $aktivis,
            'p' => $pragmatis,
            't' => $teoris,
            'r' => $reflektor
        );
        arsort($hasil);

        // catatan:
        // aktivis -> akomodator
        // reflektor -> diverger
        // teoris -> assimilator
        // pragmatis -> converger

        if (array_search('a', array_keys($hasil)) == 0){
            $gaya = 'Akomodator';
            $deskripsi = 'AKOMODATOR (Pengalaman Konkret/Penguji Coba Aktif) memiliki pendekatan yang paling praktis, dengan keinginan kuat untuk melakukan daripada memikirkan. Ketika mereka belajar, mereka akan bertanya “bagaimana jika” dan “mengapa tidak?” untuk mendukung pendekatan dengan aksinya. Mereka tidak menyukai hal rutin dan akan mengambil risiko kreatif untuk melihat apa yang akan terjadi. Mereka belajar lebih baik ketika belajar sendiri dari pada dengan orang lain.';
        } else if (array_search('p', array_keys($hasil)) == 0){
            $gaya = 'Converger';
            $deskripsi = 'CONVERGER (Konseptualisasi Abstrak/Penguji coba yang aktif) memikirkan sesuatu dan kemudian mencoba ide mereka untuk melihat apakah bekerja dengan baik. Ketika mereka belajar, mereka akan bertanya “bagaimana”, dan ingin mempelajari dengan memahami bagaimana hal itu bekerja. Mereka menyukai fakta dan akan mencarinya untuk membuat suatu hal menjadi efisien dengan membuat perubahan yang kecil dan hati-hati. Mereka lebih menyukai untuk bekerja sendiri atau tanpa bergantung dengan orang lain.';
        } else if (array_search('t', array_keys($hasil)) == 0){
            $gaya = 'Assimilator';
            $deskripsi = 'ASSIMILATOR (Konsepualisasi Abstrak/Pemantau Reflektif) memiliki pendekatan kognitif yang paling banyak, lebih memilih untuk berpikir daripada bertindak. Ketika mereka belajar mereka akan bertanya “Apa yang bisa saya ketahui?” dan menyukai pemahaman terstruktur dan terorganisir. Mereka suka belajar dari guru/pengajar, sebisa mungkin dengan demonstrasi, dan akan menghormati ahli pengetahuan. Orang-orang dengan tipe belajar ini akan memiliki kontrol keinginan yang kuat. Mereka belajar lebih baik dengan pengajar yang memulai dari konsep tingkat tinggi dan menuju detailnya.';
        } else if (array_search('r', array_keys($hasil)) == 0){
            $gaya = 'Diverger';
            $deskripsi = 'DIVERGER (Pengalaman Konkret/Pemantau Reflektif) mengambil pengalaman dan berpikir secara mendalam. Mereka membuat pengalaman tunggal menjadi banyak kemungkinan. Ketika mereka belajar, mereka akan bertanya “mengapa” dan akan mulai dari detilnya hingga menghasilkan kesimpulan yang lengkap. Mereka senang bekerja sama namun tetap tenang – mereka akan tertekan dengan konflik dalam kelompok. Mereka senang untuk mendapatkan respons yang konstruktif.';
        }

        $rekom = $this->m_siswa->getRekomendasi($gaya);
        $id_rekomendasi = $rekom['0']->id_rekomendasi;
        $this->m_siswa->insertHasilTes($id_akun, $deskripsi, $id_rekomendasi, $gaya);
        redirect(base_url() . "Siswa");
    }
}
