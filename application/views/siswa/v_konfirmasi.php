<?php
$title = "LSCS - Tes Gaya Belajar";
$page = "tes";
include_once "v_header.php";
?>

<body style="background-color: #4D3B98">

    <div class="jumbotron" style="padding: 5px; margin: 30pt; margin-bottom: 0pt; height:86vh; max-height:86vh; overflow:none; background-color:#4D3B98">
        <div class="jumbotron" style="margin:0px; height:84vh; max-height:84vh; background-color: #ffffff; padding:2rem; overflow:auto;">

            <h5 style="color:#8f8f8f;">Learning Style Checking System</h5>
            <div class="jumbotron" style=" height:60vh; margin-top:18pt; margin-bottom:18pt; margin-right:0pt; background-color:#ffffff;">
                <h4 align=center>Apakah anda yakin ingin mengakhiri tes ini?</h4>

                <div style="margin-top:6rem;">
                    <a href="<?php echo base_url() . "Siswa/kalkulasi"; ?>">
                        <div class="btn btn-outline-secondary" style="border-color: #4D3B98; float: left; width:3cm; margin-right:1cm; margin-left:68vh; border-width:1.5pt;">
                            Ya
                        </div>
                    </a>

                    <a href="<?php echo base_url() . "Siswa/mulai_tes/".$no; ?>">
                        <div class="btn btn-outline-secondary" style="border-color: #4D3B98; float: left; width:3cm; margin-right:1cm; margin-left:0.8cm; border-width:1.5pt;">
                            Tidak
                        </div>
                    </a>
                    <hr class="invisible" style="clear:both;">
                </div>

            </div>

        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

</body>

</html>