<?php
$title = "LSCS - Hasil Tes LSCS";
$page = "hasil";
include_once "v_header.php";
include "v_nav_tes_atas.php";
?>

<div class="card-body p-0" style="text-align:center;">
	<h5 style="font-size: 30px; margin-top: 5px; margin-bottom: 40px; ">Hasil Test Learning Style Checking System</h5>
	<h4>Gaya Belajar Anda Adalah</h4>
</div>

<div>

	<?php foreach ($fetch_data as $key) { ?>
		<div>
			<h3 style=" font-family: Poppins; font-weight: bold; text-align: center; margin: 20px 0 40px 0"><?php echo $key->jenis_gaya_belajar; ?></h3>
		</div>
	<?php } ?>
	<div>
		<?php foreach ($fetch_data as $key) { ?>
			<div style="margin: 50px; font-size: 14pt;">
				<p><?php echo $key->deskripsi; ?></p>
			</div>

			<div style="text-align: center;">
				<button type="button" class="button-masuk btn-masuk text-center" style="justify-content: center; margin-top: 20px;"><a href="<?php echo base_url() . "Siswa/rekomendasi/" . $key->id_rekomendasi; ?>" style="color: #FFFF">Lihat Rekomendasi</button></a>
			</div>
		<?php } ?>
	</div>
</div>


<?php
include "v_nav_tes_bawah.php";
?>