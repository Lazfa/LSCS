<?php
$title = "LSCS - Login Page";
include "v_header.php";
?>

<body style="background-color: #4D3B98">
<div class="container-fluid px-1 px-md-5 px-lg-5 px-xl-5 py-5 mx-auto" style="border-radius: 10px">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6" style="margin-left: 25px; margin-top: 65px; margin-right: auto;">
                <div class="card1 pb-5 border-0 px-4 py-5" >
                    <div>
                        <div class="text-center" style="font-family: Poppins; font-weight: bold; font-size: 36px">Forum Login</div>
                    </div>
                    <form>
                        <div style="margin-top: 20px;  font-family: Poppins;"> 
                            </label> <input style="border-radius: 5px" class="mb-4" type="text" name="no_identitas" placeholder="No Identitas"> </div>
                        <div class="row px-3" style="margin-top: 15px; font-family: Poppins; border-radius: 5px;"> 
                            <label class="mb-1"> </label> <input style="border-radius: 5px" type="password" name="password" placeholder="Password"> 
                        </div>
                        <div class="btn-center" style="margin-top: 40px;  font-family: Poppins">
                        <div> 
                            <button type="submit" class="button btn-masuk text-center">MASUK</button> </div>
                        </div>
                        <div class="row mb-4 px-3" style="font-family: Poppins; margin-top: 100px"> Belum punya akun? <a class="text-danger" href="<?= base_url('welcome/registration') ?>">Daftar</a>
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

