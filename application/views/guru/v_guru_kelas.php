<?php
$title = "LSCS - Lihat Kelas";
$page = "kelas";
include_once "v_header.php";
include "v_nav_guru_atas.php";
?>

<div class="card-body p-0">
    <h5 style="text-align:center; font-size: 34px; font-family: Poppins; margin-top: 5px; ">Lihat Kelas</h5>
    <button type="button" class="button-masuk btn-masuk text-center" style="font-family: Poppins; font-size: 16px; float: right; margin-bottom: 20px" data-toggle="modal" data-target="#addKelas">Buat Kelas</button>
    <?= $this->session->flashdata('message'); ?>
        <div class="table-responsive" style="background-color: #EDEBF5; border-radius: 10px; font-family: Poppins">
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
                <?php $i=1;foreach ($fetch_data as $key) {?> 
                    <tr>
                    <td><?php echo $i++;?></td>
                    <td><a href="<?= base_url('guru/hasil_tes/'.$key->id_kelas) ?>"><?php echo $key->nama_kelas;?></a></td>
                    <td><?php echo $key->kode_kelas;?></td>
                    <td>
                    <button type="button" class="btn btn-icon btn-outline-secondary" data-toggle="modal" data-target="#editKelas<?php echo $key->id_kelas;?>" style="border-color:transparent;" style="margin:1px;"><i class="feather icon-edit"><img src="<?php echo base_url();?>assets/img/icon_edit.png" alt="edit" style="width: 30px; height:30px;"></i></button>
                    
                    <button type="button" class="btn btn-icon btn-outline-secondary" data-toggle="modal" data-target="#hapusKelas<?php echo $key->id_kelas;?>" style="border-color:transparent;" style="margin:1px;"><i class="bi bi-trash"><img src="<?php echo base_url();?>assets/img/icon_trash.png" style="width: 30px; height:30px;"></i></button>
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
        <h5 class="modal-title" id="exampleModalLabel" style="font-family: Poppins; text-align: center;">Buat Kelas</h5>
        <?= $this->session->flashdata('success'); ?>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
    foreach($fetch_data as $key):
?>
<div id="hapusKelas<?php echo $key->id_kelas;?>" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">Hapus Data Kelas</h5>
                <?= $this->session->flashdata('message'); ?>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <?php echo form_open('guru/hapus_kelas');?>
            <input type="hidden" name="id_akun" value="<?php echo $key->id_akun;?>">
            <input type="hidden" name="id_kelas" value="<?php echo $key->id_kelas;?>">
            <div class="modal-body">
                    Anda Yakin Untuk Menghapus Data Kelas <?php echo $key->nama_kelas;?>
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

<?php
        foreach($fetch_data as $akey):
        ?>
        <div class="modal fade" id="editKelas<?php echo $akey->id_kelas;?>" tabindex="1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">Edit Data Kelas</h5>
                        <?= $this->session->flashdata('success'); ?>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <?php echo form_open('guru/edit_kelas/'.$akey->id_kelas);?>
                    <input type="hidden" name="id_akun" value="<?php echo $akey->id_akun;?>">
                    <input type="hidden" name="id_kelas" value="<?php echo $akey->id_kelas;?>">
                    <div class="modal-body" style="font-family: Poppins; text-align: center;">
                        <div class="form-group">
                            <label for="nama">Nama Kelas</label>
                            <input type="text" class="form-control" id="namakelasedit" name="nama_kelas" value="<?php echo $akey->nama_kelas;?>">
                        </div>
                        <div class="form-group">
                            <label for="notelp">Token Kelas</label>
                            <input type="text" class="form-control" id="kodekelasedit" name="kode_kelas" value="<?php echo $akey->kode_kelas;?>">
                        </div>
                    </div>
                    <div class="modal-footer" style="font-family: Poppins">
                        <button type="submit" class="button-masuk btn-masuk text-center" style="justify-content: center;">Simpan</button>
                    </div> 
                    <?php echo form_close();?>
                </div>
            </div>
        </div>
 
    <?php endforeach;?>

<?php include "v_nav_guru_bawah.php"; ?>