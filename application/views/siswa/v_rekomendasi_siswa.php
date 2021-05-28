<?php
$title = "LSCS - Rekomendasi Siswa";
$page = "hasil";
include_once "v_header.php";
include "v_nav_tes_atas.php";
?>


<div>
	<div style="font-family: Poppins;">
		<button type="button" class="button-masuk btn-masuk text-center" style="justify-content: left; margin-top: 20px;"><a href="<?php echo base_url() . "Siswa/hasil/" ?>" style="color: #FFFF">Kembali</button></a>
	</div>

	<div class="card-body p-0" style="text-align:center;">
		<h5 style="font-size: 30px; margin-top: 5px; margin-bottom: 40px; ">Rekomendasi Anda</h5>
		<?php foreach ($fetch_data as $key) { ?>
			<h5>Rekomendasi Bidang Kuliah</h5>
			<div>
				<p style="font-family: Poppins; text-align: center; margin-top: 20px"><?php echo $key->rek_bidang_kuliah; ?></p>
			</div>
			<h5>Rekomendasi Bidang Pekerjaan</h5>
			<div>
				<p style="font-family: Poppins; text-align: center; margin-top: 20px"><?php echo $key->rek_pekerjaan; ?></p>
			</div>
		<?php } ?>
	</div>

</div>


<?php
include "v_nav_tes_bawah.php";
?>