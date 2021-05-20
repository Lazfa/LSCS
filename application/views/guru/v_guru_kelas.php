<?php
$title = "LSCS - Panduan";
$page = "panduan";
include_once "v_header.php";
include "v_nav_guru_atas.php";
?>

<head>
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/styleLR.css'?>">
</head>

<h5 style="text-align:center; font-size: 34px; font-family: Poppins; margin-top: 5px; ">Lihat Kelas</h5>




<div class="card-body p-0">
    <button type="button" class="button-masuk btn-masuk text-center" style="font-family: Poppins; font-size: 16px; float: right;" data-bs-toggle="modal" data-bs-target="#exampleModal">Buat Kelas</button>
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
            <!--  <?php $i=1;foreach ($pengajar as $key) {?> -->
                <tr>
                <!-- <td><?php echo $i++;?></td>
                <td><?php echo $key->nama_pengajar;?></td>
                <d><?php echo $key->username;?></td>
                <td><?php echo $key->keterangan;?></td>
                <td> -->
                <button type="button" class="btn btn-icon btn-info" data-toggle="modal" data-target="#editPengajar<?php echo $key->id_pengajar ?>"><i class="feather icon-edit"></i></button>
                <button type="button" class="btn btn-icon btn-warning" data-toggle="modal" data-target="#hapusPengajar<?php echo $key->id_pengajar?>"><i class="feather icon-trash"></i></button>
                </td>
                    </tr>
                <?php }?>
            </tbody>
            </table>
        </div>
</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<?php
include "v_nav_guru_bawah.php";
?>