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

<body style="background-color: #4D3B98">
<div class="container-fluid px-1 px-md-5 px-lg-5 px-xl-5 py-5 mx-auto" style="border-radius: 10px">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6" style="margin-left: 25px; margin-top: 65px; margin-right: auto;">
                <div class="card1 pb-5 border-0 px-4 py-5" >
                    <div>
                        <div class="text-center" style="font-family: Poppins; font-weight: bold; font-size: 36px">Forum Login</div>
                        <?= $this->session->flashdata('message'); ?>
                    </div>
                    <form  method="post" action="<?= base_url('auth') ?>">
                        <div class="form-group" style="font-family: Poppins;"> 
                            <label>Nomor Identitas</label>
                            <input style="border-radius: 5px" type="text" name="no_identitas" placeholder="Masukkan NIP/NIS" value="<?= set_value('no_identitas'); ?>"> <?= form_error('no_identitas','<small class="text-danger pl-1">','</small>');?> 
                        </div>
                        <div class="form-group" style="font-family: Poppins;"> 
                            <label>Password</label> 
                            <input style="border-radius: 5px" type="password" name="password" placeholder="Masukkan password"> <?= form_error('password','<small class="text-danger pl-1">','</small>');?>
                        </div>                           
                        <div class="mb-15 form-group" style="font-family: Poppins"> 
                                <button type="submit" class="button-masuk btn-masuk text-center">MASUK</button> 
                            </div>
                        <div class="row mb-4 px-3" style="font-family: Poppins;"> Belum punya akun? <a class="text-danger" href="<?= base_url('auth/registration') ?>">Daftar</a>
                        </div>
                    </form>
                </div>
            </div>
            <div style="background-color: #EDEBF5; margin-right: 15px;">
                <img src="<?php echo base_url().'assets/img/girl_login.png'?>" style="width: 600px; height: 600px;">
            </div>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

</body>
</html>

