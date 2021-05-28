<?php
$title = "LSCS - Hasil Tes LSCS";
$page = "hasil";
include_once "v_header.php";
include "v_nav_tes_atas.php";
?>


<div>
	<div style="font-family: Poppins; text-align: center;">
		<button type="button" class="button-masuk btn-masuk text-center" style="justify-content: center; margin-top: 20px;"><a href="<?php echo base_url() . "Siswa/hasil/" ?>" style="color: #FFFF">Kembali</button></a>
	</div>
	<h2>Rekomendasi Anda</h2>

	<?php foreach ($fetch_data as $key) { ?>
		<h3>Rekomendasi Bidang Kuliah</h3>
		<div>
			<h4 style="font-family: Poppins; text-align: center; margin-top: 20px"><?php echo $key->rek_bidang_kuliah; ?></h4>
		</div>
		<h3>Rekomendasi Bidang Pekerjaan</h3>
		<div>
			<h4 style="font-family: Poppins; text-align: center; margin-top: 20px"><?php echo $key->rek_pekerjaan; ?></h4>
		</div>
	<?php } ?>

</div>


<?php
include "v_nav_tes_bawah.php";
?>