<?php
$title = "LSCS - Register Page";
include "v_header.php";
?>

<body style="background-color: #F3693D">
<div class="container-fluid px-1 px-md-5 px-lg-5 px-xl-5 py-5 mx-auto" style="border-radius: 10px">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6" style="margin-left: 25px; margin-top: -10px; margin-right: auto;">
                <div class="card1 pb-5 border-0 px-4 py-5" >
                    <div>
                        <div class="text-center" style="font-family: Poppins; font-weight: bold; font-size: 36px">Forum Daftar</div>
                    </div>
                    <form>
                        <div style="margin-top: 20px;  font-family: Poppins;"> 
                            </label> <input style="border-radius: 5px" class="mb-4" type="text" name="no_identitas" placeholder="No Identitas"> 
                        </div>
                        <div class="row px-3" style="margin-top: -8px; font-family: Poppins; border-radius: 5px;"> 
                            <label class="mb-1"> </label> <input type="text" name="name" placeholder="Nama" id="name_user"> 
                        </div>
                        <div class="row px-3" style="margin-top: 15px; font-family: Poppins; border-radius: 5px;"> 
                            <label class="mb-1"> </label> <input type="password" name="password" placeholder="Password" id="password_user"> 
                        </div>
                        <div class="row px-3" style="margin-top: 15px; font-family: Poppins; border-radius: 5px;"> 
                            <label class="mb-1"> </label> <input type="password" name="konf_password" placeholder="Konfirmasi Password" id="konfirmasi_password"> 
                        </div>
                        <div class="row px-3" style="margin-top: 15px; font-family: Poppins; border-radius: 5px;"> 
                            <label class="mb-1"> </label> <input type="text" name="sekolah" placeholder="Sekolah" id="sekolah_user"> 
                        </div>
                        <div style="margin-top: 15px; font-family: Poppins">
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
                        </div>
                        <div class="row px-3" style="margin-top: 15px; font-family: Poppins; border-radius: 5px;"> 
                            <label class="mb-1">Foto</label> <input type="file" name="upload_foto" placeholder="Upload" id="foto_user">
                        </div>
                        <div class="btn-center" style="margin-top: 220px;  font-family: Poppins;">
                        <div> <button type="submit" class="button-daftar btn-daftar text-center">DAFTAR</button> </div>
                        </div>
                        <div class="row mb-4 px-3" style="font-family: Poppins; margin-top: 100px"> Sudah punya akun? <a class="text-danger" href="<?= base_url('welcome/login') ?>">Login</a></div>
                    </form>
                </div>
            </div>
            <div style="background-color: #FEF0EC; width: 600px; height: 767px; margin-right: 15px;">
                <img src="<?php echo base_url().'assets/img/girl_regist.png'?>" style="width: 500px; height: 450px; margin-top: 150px; margin-left: 40px">
            </div>
        </div>
    </div>
</div>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

</body>
</html>

