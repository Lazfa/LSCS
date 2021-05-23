<body style="background-color: #4D3B98">

    <div class="jumbotron" style="padding: 5px; margin: 30pt; margin-bottom: 0pt; height:86vh; max-height:86vh; overflow:none; background-color:#4D3B98">
        <div class="jumbotron" style="width: 20%; float:left; height:fit-content; margin:0; background-color:#4D3B98; padding-top:40px; padding-right:0%; max-height:84vh;">
            <h1 style="font-family: Poppins; color: #ffffff;">LSCS</h1>

            <ul class="nav nav-pills" style="margin-top:3rem; margin-left:0rem;">
                <?php if ($page == "panduan") { ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #ffffff; font-family:Poppins; color: #F3693D; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/info_active.png" alt="info" style=" width:20px; height:20px; margin-right: 3pt;">
                        <b>Panduan</b>
                    </li>
                <?php } else { ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #4D3B98; font-family:Poppins; color: #ffffff; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/info.png" alt="info" style=" width:20px; height:20px; margin-right: 3pt;">
                            <a href="<?php echo base_url()."Siswa/panduan"; ?>" style="font-family:Poppins; color: #ffffff;">Panduan</a>
                    </li>
                <?php } if($page == "tes"){ ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #ffffff; font-family:Poppins; color: #F3693D; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/tes_active.png" alt="tes" style=" width:20px; height:20px; margin-right: 3pt;">
                        <b>Tes LSCS</b>
                    </li>
                <?php } else { ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #4D3B98; font-family:Poppins; color: #ffffff; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/tes.png" alt="tes" style=" width:20px; height:20px; margin-right: 3pt;">
                            <a href="<?php echo base_url()."Siswa/tes"; ?>" style="font-family:Poppins; color: #ffffff;">Tes LSCS</a>
                    </li>
                <?php } if($page == "hasil"){ ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #ffffff; font-family:Poppins; color: #F3693D; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/book_active.png" alt="book" style=" width:20px; height:20px; margin-right: 3pt;">
                        <b>Hasil</b>
                    </li>
                <?php } else { ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #4D3B98; font-family:Poppins; color: #ffffff; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/book.png" alt="book" style=" width:20px; height:20px; margin-right: 3pt;">
                            <a href="<?php echo base_url()."Siswa/hasil"; ?>" style="font-family:Poppins; color: #ffffff;">Hasil</a>
                    </li>
                <?php } if($page == "kelas"){ ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #ffffff; font-family:Poppins; color: #F3693D; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/people_active.png" alt="people" style=" width:20px; height:20px; margin-right: 3pt;">
                        <b>Kelas</b>
                    </li>
                <?php } else { ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #4D3B98; font-family:Poppins; color: #ffffff; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/people.png" alt="people" style=" width:20px; height:20px; margin-right: 3pt;">
                            <a href="<?php echo base_url()."Siswa/kelas"; ?>" style="font-family:Poppins; color: #ffffff;">Kelas</a>
                    </li>
                <?php } if($page == "profil"){ ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #ffffff; font-family:Poppins; color: #F3693D; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/person_active.png" alt="person" style=" width:20px; height:20px; margin-right: 3pt;">
                        <b>Profil</b>
                    </li>
                <?php } else { ?>
                    <li class="" style="width: 100%; height:38pt; background-color: #4D3B98; font-family:Poppins; color: #ffffff; padding:10pt; border-radius: 4pt 0pt 0pt 4pt; margin-bottom:4pt; margin-left:6pt;">
                        <img src="<?php echo base_url(); ?>assets/img/icon_tes/person.png" alt="person" style=" width:20px; height:20px; margin-right: 3pt;">
                        <a href="<?php echo base_url()."Siswa/profil_siswa"; ?>" style="font-family:Poppins; color: #ffffff;">Profil</a>
                    </li>
                <?php }?>
            </ul>

            <h5 style="font-style: italic; font-weight:100; color:#8f7ed4; margin-top:1cm; margin-left:1.7rem;">Learning Style</h5>
            <h5 style="font-style: italic; font-weight:100; color:#8f7ed4; margin-left:3.7rem; margin-bottom:0pt;">Checking Systems</h5>
        </div>

        <div class="jumbotron" style=" width: 80%; float: left; margin:0px; height:84vh; max-height:84vh; background-color: #ffffff; padding:2rem; overflow:auto;">

