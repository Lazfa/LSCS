<?php
$title = "LSCS - Lihat Kelas";
$page = "kelas";
include_once "v_header.php";
include "v_nav_guru_atas.php";
?>


<div>
	<?php foreach ($fetch_profile as $akey) {?>
		<div style="text-align: center;">
			<img src="<?php echo base_url(); ?>assets/img/fotoProfile/<?php echo $akey->foto; ?>" width="160" height="160" style="border: 5px solid #F3693D;" class="rounded-circle">
		</div>
	<div>
		<h4 style="font-family: Poppins; text-align: center; margin-top: 20px"><?php echo $akey->nama;?></h4>
	</div>
	<?php }?>
	<div>
	<?= $this->session->flashdata('message'); ?>
		<div class="table-responsive" style="font-family: Poppins; float: center; margin-top: 20px">
		    <table class="table table-hover mb-0" style="width: 40%; margin-left: auto; margin-right: auto;">
		      	<thead>
		       		<?php foreach ($fetch_profile as $key) {?> 
			            <tr>
			              	<th>Nomor Identitas</th>  
			              	<th><?php echo $key->nomor_identitas++;?></th>
			           	</tr>
			           	<tr>
			           		<th>Role</th>
			           		<th>Guru</th>
			           	</tr>
			           	<tr>
			           		<th>Nama Sekolah</th>
			               	<th><?php echo $key->sekolah;?></a></th>
		                </tr>
	                <?php }?>
		   		</thead>  
		    </table>
	    </div>
	</div>
</div>

<div style="font-family: Poppins; text-align: center;">
    <button type="button" class="button-masuk btn-masuk text-center" style="justify-content: center; margin-top: 20px;"><a href="<?= base_url('auth/logout') ?>" style="color: #FFFF">Logout</button></a>
</div>
		
<?php
include "v_nav_guru_bawah.php";
?>