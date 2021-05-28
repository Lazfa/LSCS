<?php
$title = "LSCS - Tes Gaya Belajar Kolb";
$page = "tes";
include_once "v_header.php";
include "v_nav_tes_atas.php";
?>

<div>
    <div class="btn btn-success gelapin float kanan" style="background-color: #F3693D; border-color: transparent; ">
        <a href="<?php echo base_url() . "Siswa/panduan_tes"; ?>" style="color: #fff;">
            <p style="color: #fff; margin:3pt;">Panduan Ikut Tes</p>
        </a>
    </div>

    <hr class="clear invisible">

    <div>
        <div class="" style="width: 5cm; height:5cm; background-color:#4D3B98; border-radius: 50%; margin:auto; margin-top:12vh;">
            <h3 style="padding-top:10vh; text-align:center;">
                <a href="<?php echo base_url() . "Siswa/init_tes"; ?>" style="color:#fff;"><b>Mulai Tes LSCS</b></a>
            </h3>
        </div>

        <div>
            <h5 style="text-align: center; margin-top:1.2cm">Jumlah Soal 80 Butir<br>Selamat Mengerjakan</h5>
        </div>
    </div>
</div>

<?php include "v_nav_tes_bawah.php"; ?>