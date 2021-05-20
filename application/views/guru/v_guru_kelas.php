<?php
$title = "LSCS - Panduan";
$page = "panduan";
include_once "v_header.php";
include "v_nav_guru_atas.php";
?>



<div class="card-body p-0">
    <h5 style="text-align:center; font-size: 34px; font-family: Poppins; margin-top: 5px; ">Lihat Kelas</h5>
    <button type="button" class="button-masuk btn-masuk text-center" style="font-family: Poppins; font-size: 16px; float: right;" data-toggle="modal" data-target="#addKelas">Buat Kelas</button>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th> 
                        <th>Nama Kelas</th>
                        <th>Token Kelas</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
            <tbody>
           <!--  <?php $i=1;foreach ($tb_kelas as $key) {?> -->
               <!--  <tr>
                <td><?php echo $i++;?></td>
                <td><?php echo $key->nama_kelas;?></td>
                <td><?php echo $key->kode_kelas;?></td> -->
                <td>
                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#editKelas<?php echo $key->id_kelas ?>"><i class="feather icon-edit"></i></button>
                <button type="button" class="btn btn-icon btn-warning" data-toggle="modal" data-target="#hapusKelas<?php echo $key->id_kelas?>"><i class="feather icon-trash"></i></button>
                </td>
                    </tr>
                <?php }?>
            </tbody>
            </table>
        </div>
</div>

<!-- Modal -->
<div class="modal fade" id="addKelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: Poppins; text-align: center;">Buat Kelas</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form action="<?= base_url('guru/buat_kelas') ?>" method="post">
         <div class="modal-body" style="font-family: Poppins; text-align: center;">
                <div class="form-group">
                    <label for="nama">Nama Kelas</label>
                    <input type="text" class="form-control" id="nama" name="nama_kelas">
                </div>
                <div class="form-group">
                    <label for="notelp">Token Kelas</label>
                    <input type="text" class="form-control" id="notelp" name="kode_kelas"></textarea>
                </div>
            </div>
        <div class="modal-footer" style="font-family: Poppins">
        <button type="submit" class="button-masuk btn-masuk text-center" style="justify-content: center;">Buat Kelas</button>
      </div> 
      </form>
    </div>
  </div>
</div>

<?php
include "v_nav_guru_bawah.php";
?>