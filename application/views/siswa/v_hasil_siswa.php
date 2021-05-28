<?php
$title = "LSCS - Hasil Tes LSCS";
$page = "hasil";
include_once "v_header.php";
include "v_nav_tes_atas.php";
?>


<div>
	
	<h2>Hasil Test Learning Style Checking System</h2>
	<h3>Gaya Belajar Anda Adalah</h3>

	<?php foreach ($fetch_data as $key) { ?>
		<div>
			<h4 style="font-family: Poppins; text-align: center; margin-top: 20px"><?php echo $key->jenis_gaya_belajar; ?></h4>
		</div>
	<?php } ?>
	<div>
		<div class="table-responsive" style="font-family: Poppins; float: center; margin-top: 20px">
			<table class="table table-hover mb-0" style="width: 40%; margin-left: auto; margin-right: auto;">
				<thead>
					<?php foreach ($fetch_data as $key) { ?>
						<?php echo $key->deskripsi; ?>

						<div style="font-family: Poppins; text-align: center;">
							<button type="button" class="button-masuk btn-masuk text-center" style="justify-content: center; margin-top: 20px;"><a href="<?php echo base_url() . "Siswa/rekomendasi/" . $key->id_rekomendasi; ?>" style="color: #FFFF">Lihat Rekomendasi</button></a>
						</div>
					<?php } ?>
				</thead>
			</table>
		</div>
	</div>
</div>


<?php
include "v_nav_tes_bawah.php";
?>