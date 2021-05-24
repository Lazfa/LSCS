<?php
$title = "LSCS - Kelas Siswa";
$page = "kelas";
include_once "v_header.php";
include "v_nav_tes_atas.php";
?>

<div class="card-body p-0">
    <h5 style="text-align:center; font-size: 34px; font-family: Poppins; margin-top: 5px; ">Daftar Kelas Kamu</h5>
    <button type="button" class="button-masuk btn-masuk text-center" style="font-family: Poppins; font-size: 16px; float: right; margin-bottom: 20px" data-toggle="modal" data-target="#addKelas">Tambah Kelas</button>
    <?= $this->session->flashdata('message'); ?>
        <div class="table-responsive" style="background-color: #EDEBF5; border-radius: 10px; font-family: Poppins">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>No</th> 
                        <th>Nama Kelas</th>
                        <th>Token Kelas</th>
                        <th>Nama Guru</th>
                        <th>Hapus</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=1;foreach ($fetch_data as $key) {?> 
                        <tr>
                            <td><?php echo $i++;?></td>
                            <td><?php echo $key->nama_kelas;?></td>
                            <td><?php echo $key->kode_kelas;?></td>
                            <td><?php echo $key->nama;?></td>
                            <td>                       
                                <button type="button" class="btn btn-icon btn-outline-secondary" data-toggle="modal" data-target="#hapusKelas<?php echo $key->id_join_kelas;?>" style="border-color:transparent;" style="margin:1px;"><i class="bi bi-trash"><img src="<?php echo base_url();?>assets/img/icon_trash.png" style="width: 30px; height:30px;"></i></button>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
        </div>
</div>

<div class="modal fade" id="addKelas" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: Poppins; text-align: center;">Tambah Kelas</h5>
        <?= $this->session->flashdata('success'); ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      </div>
      <form action="<?= base_url('siswa/tambah_kelas') ?>" method="post">
         <div class="modal-body" style="font-family: Poppins; text-align: center;">
                <div class="form-group">
                    <label for="kokel">Token Kelas</label>
                    <input type="text" class="form-control" id="kokel" name="kode_kelas"></textarea>
                </div>
            </div>
        <div class="modal-footer" style="font-family: Poppins">
        <button type="submit" class="button-masuk btn-masuk text-center" style="justify-content: center;">Tambahkan</button>
      </div> 
      </form>
    </div>
  </div>
</div>

<?php
    foreach($fetch_data as $key):
?>
<div id="hapusKelas<?php echo $key->id_join_kelas;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Kelas</h5>
                <?= $this->session->flashdata('message'); ?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <?php echo form_open('siswa/hapus_kelas');?>
            <input type="hidden" name="id_join_kelas" value="<?php echo $key->id_join_kelas;?>">
            <div class="modal-body">
                Anda Yakin Untuk Menghapus Kelas <?php echo $key->nama_kelas;?>?
            </div>
                
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="Submit" class="btn btn-danger">Hapus</button>
            </div>
            <?php echo form_close();?>
        </div>
    </div>
</div>
<?php
    endforeach;
?>

<?php include "v_nav_tes_bawah.php"; ?>