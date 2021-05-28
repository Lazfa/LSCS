<?php
$title = "LSCS - Tes Gaya Belajar";
$page = "tes";
$nomor = $soal['0']->nomor_soal;
include_once "v_header.php";
?>

<body style="background-color: #4D3B98">

    <div class="jumbotron" style="padding: 5px; margin: 30pt; margin-bottom: 0pt; height:86vh; max-height:86vh; overflow:none; background-color:#4D3B98">
        <div class="jumbotron" style="margin:0px; height:84vh; max-height:84vh; background-color: #ffffff; padding:2rem; overflow:auto;">

            <h5 style="color:#8f8f8f;">Learning Style Checking System</h5>
            <div class="jumbotron" style="float: left;width: 75%; height:60vh; margin-top:18pt; margin-bottom:18pt; margin-right:0pt; background-color:#ffffff;">
                <h4><?php echo $nomor . ". " . $soal['0']->pertanyaan; ?></h4>

                <div style="margin-top:6rem;">
                    <a href="<?php echo base_url() . "Siswa/set_jawaban/" . $nomor . "/ya"; ?>">
                        <div class="btn btn-outline-secondary <?php if($jawaban=="ya"){echo 'disabled';} ?>" style="border-color: #4D3B98; float: left; width:3cm; margin-right:1cm; margin-left:43vh; border-width:1.5pt; <?php if($jawaban=='ya'){echo ' background-color:#8f7ed4;';} ?>">
                            Ya
                        </div>
                    </a>

                    <a href="<?php echo base_url() . "Siswa/set_jawaban/" . $nomor . "/tidak"; ?>">
                        <div class="btn btn-outline-secondary <?php if($jawaban=="tidak"){echo 'disabled';} ?>" style="border-color: #4D3B98; float: left; width:3cm; margin-right:1cm; margin-left:0.8cm; border-width:1.5pt; <?php if($jawaban=='tidak'){echo ' background-color:#8f7ed4;';} ?>">
                            Tidak
                        </div>
                    </a>
                    <hr class="invisible" style="clear:both;">
                </div>

                <a href="<?php echo base_url() . "Siswa/confirm/" . $nomor; ?>">
                        <div class="btn btn-outline-secondary" style="border-color: #4D3B98; float: left; width:3cm; margin-right:1cm; margin-top:5rem; margin-left: 43%; border-width:1.5pt; border-color:#F3693D;">
                            Selesai
                        </div>
                    </a>
            </div>

            <div class="jumbotron" style="float: left; width: 23%; height:60vh; margin-top:18pt; margin-bottom:18pt; margin: left 0pt; padding: 5pt; overflow:auto;">
                <?php $i = 1;
                for ($j = 1; $j <= 80; $j++) {
                ?>
                    <a href="<?php echo base_url() . "Siswa/mulai_tes/" . $j; ?>">
                        <div class="btn btn-outline-secondary" style="width: 30pt; height:30pt; margin:2pt; <?php if($_SESSION['j_nomor'][$j]!='kosong'){echo ' background-color:#F3693D; color:#ffffff;';} if($j==$nomor){echo 'border-width:2pt;';}?>">
                            <?php echo $j; ?>
                        </div>
                    </a>
                <?php } ?>

            </div>

        </div>
    </div>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>

</body>

</html>