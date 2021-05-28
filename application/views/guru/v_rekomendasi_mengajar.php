<?php
$title = "LSCS - Lihat Kelas";
$page = "kelas";
include_once "v_header.php";
include "v_nav_guru_atas.php";
?>

<!-- <div style="font-family: Poppins">
	<div style="font-family: Poppins">
       	<button type="button" class="button-masuk btn-masuk text-center" style="justify-content: center;"><a href="<?= base_url('guru/hasil_tes'.$id->akun) ?>" style="color: #FFFF">Kembali</button></a>
   	</div> 
</div>  -->

<div class="card-body p-0" style="margin-top: 15px">
   <?= $this->session->flashdata('message'); ?>
        <div class="table-responsive" style="background-color: #EDEBF5; border-radius: 10px; font-family: Poppins">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th> 
                        <th>Gaya Belajar</th>
                        <th>Rekomendasi Mengajar</th>
                    </tr>
                </thead>
             <tbody>
           		<?php $i=1;foreach ($fetch_rekomendasi as $key) {?> 
                <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $key->jenis_gaya_belajar;?></a></td>
                <td><?php echo $key->rek_cara_mengajar;?></a></td>
                <td>
                </tr>
                <?php }?>
            </tbody> 
            </table>
        </div>
</div>

<?php
include "v_nav_guru_bawah.php";
?>