<!DOCTYPE html>
<html>
<head>

    <title>
        <?= $title; ?>
    </title>

	<!-- vendor css -->
    <link rel="stylesheet" href="<?php echo base_url().'assets/css/styleLR.css'?>">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
    <link rel="stylesheet" href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css'>
    <link rel="stylesheet" href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>

</head>

<body style="background-color: #F3693D">
<div class="container-fluid px-1 px-md-5 px-lg-5 px-xl-5 py-5 mx-auto" style="border-radius: 10px">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6" style="margin-left: 25px; margin-top: -10px; margin-right: auto;">
                <div class="card1 pb-5 border-0 px-4 py-5" >
                    <div>
                        <div class="text-center" style="font-family: Poppins; font-weight: bold; font-size: 36px">Forum Daftar</div>
                    </div>
                    <form class="modal-body" method="post" action="<?= base_url('auth/registration'); ?>">
                        <div class="form-group" style="font-family: Poppins; border-radius: 5px;"> 
                            <label>Nomor Identitas</label> 
                            <input type="text" name="no_id" placeholder="Masukkan NIP/NIS" id="no_identitas" value="<?= set_value('no_id'); ?>"> <?= form_error('no_id','<small class="text-danger pl-1">','</small>');?>
                        </div>
                        <div class="form-group" style="font-family: Poppins; border-radius: 5px;"> 
                            <label>Nama Lengkap</label> 
                            <input type="text" name="name" placeholder="Masukkan nama lengkap" id="name_user" value="<?= set_value('name'); ?>"> 
                            <?= form_error('name','<small class="text-danger pl-1">','</small>');?>
                        </div>
                        <div class="form-group" style=" font-family: Poppins; border-radius: 5px;"> 
                            <label>Password</label> 
                            <input type="password" name="password1" placeholder="Masukkan password" id="password1">  <?= form_error('password1','<small class="text-danger pl-1">','</small>');?>
                        </div>
                        <div class="form-group" style="font-family: Poppins; border-radius: 5px;"> 
                            <label>Konfirmasi Password</label> 
                            <input type="password" name="password2" placeholder="Konfirmasi password" id="password2"> 
                        </div>
                        <div class="form-group" style="font-family: Poppins; border-radius: 5px;"> 
                            <label>Asal Sekolah</label> 
                            <input type="text" name="sekolah" placeholder="Masukkan nama sekolah" id="sekolah_user" value="<?= set_value('sekolah'); ?>"> <?= form_error('sekolah','<small class="text-danger pl-1">','</small>');?>
                        </div>
                        <div class="form-group" style=" font-family: Poppins">
                            <div class="form-check form-check-inline">
                                <label>Role</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineGuru" value="option1"/>
                              <label class="form-check-label" for="inlineRadio1">Guru</label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineSiswa" value="option2"/>
                              <label class="form-check-label" for="inlineRadio2">Siswa</label>
                            </div> 
                            <div class="form-group" style=" font-family: Poppins; border-radius: 5px;"> 
                                <label class="mb-1">Foto</label> <input type="file" name="upload_foto" placeholder="Upload" id="foto_user">
                            </div>
                            <div class="btn-center" style="margin-top: 270px"> <button type="submit" class="button-daftar btn-daftar text-center">DAFTAR</button> </div>
                            <div class="row mb-4 px-3" style="font-family: Poppins; margin-top: 100px"> Sudah punya akun? <a class="text-danger" href="<?= base_url('auth/index') ?>">Login</a></div>
                        </div>

                    </form>
                </div>
            </div>
            <div style="background-color: #FEF0EC; width: 600px; height: 900px; margin-right: 15px;">
                <img src="<?php echo base_url().'assets/img/girl_regist.png'?>" style="width: 500px; height: 450px; margin-top: 230px; margin-left: 40px">
            </div>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

</body>
</html>

