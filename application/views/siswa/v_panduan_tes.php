<?php
$title = "LSCS - Panduan Tes Gaya Belajar Kolb";
$page = "tes";
include_once "v_header.php";
include "v_nav_tes_atas.php";
?>

<div class="jumbotron" style="background-color: #ffb298; padding:5pt;">
    <h5 style="text-align:center;">Panduan Penggunaan Learning Style</h5>
    <h5 style="text-align:center;">Checking System Untuk Siswa</h5>
</div>

<div>
    <div class="jumbotron" style="padding: 1rem; margin:0pt; margin-bottom:1rem;">
        <p style="margin:0pt;">1. Soal terdiri dari 80 butir pertanyaan</p>
        <p style="margin:0pt;">2. Jawaban terdiri dari dua pilihan yaitu Ya dan Tidak</p>
        <p style="margin:0pt;">3. Tidak ada jawaban yang benar ataupun salah, pilihlah jawaban sesuai dengan keyakinan masing-masing</p>
        <p style="margin:0pt;">4. Setiap poin jawaban nantinya akan dikalkulasikan untuk mengidentifikasi gaya belajar yang dimiliki</p>
    </div>
</div>

<div class="btn btn-success gelapin float kanan" style="background-color: #F3693D; border-color: transparent; margin-top:22vh;">
    <a href="<?php echo base_url() . "Siswa/tes"; ?>" style="color: #fff;">
        <p style="color: #fff; margin:3pt;">Kembali</p>
    </a>
</div>

<?php include "v_nav_tes_bawah.php"; ?>