<?php
$title = "LSCS - Lihat Kelas";
$page = "kelas";
include_once "v_header.php";
include "v_nav_guru_atas.php";
?>

<div style="font-family: Poppins">
	<div style="font-family: Poppins">
       	<button type="button" class="button-masuk btn-masuk text-center" style="justify-content: center;"><a href="<?= base_url('guru/kelas') ?>" style="color: #FFFF">Kembali</button></a>
   	</div> 
</div> 

<div class="card-body p-0">
    <h5 style="text-align:center; font-size: 28px; font-family: Poppins; margin-top: 5px; ">Hasil Tes LSCS</h5>
    <?php foreach ($fetch_nama as $key) {?> 
    <h6 style="text-align:center; font-size: 24px; font-family: Poppins; margin-top: 5px; "><?php echo $key->nama_kelas;?></h6>
    <?php }?>
 </div>

<div style="font-family: Poppins">
	<div style="font-family: Poppins; float: right; margin-bottom: 15px">
       	<button type="submit" class="button-masuk btn-masuk text-center" style="justify-content: center;"><a href="<?= base_url('guru/rekomendasi_mengajar') ?>" style="color: #FFFF">Lihat Rekomendasi</button></a>
  	</div> 
</div> 

<div class="card-body p-0" style="margin-top: 15px">
   <?= $this->session->flashdata('message'); ?>
        <div class="table-responsive" style="background-color: #EDEBF5; border-radius: 10px; font-family: Poppins">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th> 
                        <th>Nama Siswa</th>
                        <th>NIS</th>
                        <th>Gaya Belajar</th>
                    </tr>
                </thead>
             <tbody>
           		<?php $i=1;foreach ($fetch_nama as $key) {?> 
                <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $key->nama;?></a></td>
                <td><?php echo $key->nomor_identitas;?></td>
                <td><?php echo $key->jenis_gaya_belajar;?></a></td>
                <td>
                </td>
                </tr>
                <?php }?>
            </tbody> 
            </table>
        </div>
</div>

<?php
include "v_nav_guru_bawah.php";
?>