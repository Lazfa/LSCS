<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>LSCS - Landing Page</title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Vendor CSS Files -->
	<link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo base_url() ?>assets/css/style.css" rel="stylesheet">

	<!-- =======================================================
  * Template Name: FlexStart - v1.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="header fixed-top">
		<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

			<a href="index.html" class="logo d-flex align-items-center">
				<span>LSCS</span>
			</a>

			<nav id="navbar" class="navbar">
				<ul>
					<li><a class="nav-link scrollto active" href="#home">Home</a></li>
					<li><a class="nav-link scrollto" href="#values">Gaya Belajar</a></li>
					<li><a class="nav-link scrollto" href="#team">Tentang Kami</a></li>
					<li><a class="nav-link scrollto" href="#footer">Kontak</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->

	<!-- ======= Home Section ======= -->
	<section id="home" class="home d-flex align-items-center">

		<div class="container">
			<div class="row">
				<div class="col-lg-6 d-flex flex-column justify-content-center">
					<div class="read-home">
						<h1 data-aos="fade-up">Temukan Gaya Belajar</h1>
						<h1 data-aos="fade-up">Kamu Dengan LSCS!</h1>
						<h2 data-aos="fade-up" data-aos-delay="400">LSCS (Learning Style Checking System) adalah sebuah alat untuk menentukkan gaya belajar kamu beserta rekomendasi-rekomendasi untuk gaya belajar kamu.</h2>
						<div data-aos="fade-up" data-aos-delay="600">
							<div class="text-center text-lg-start">
								<a href="" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
									<span>Login</span>
								</a>
								<a href="" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
									<span>Daftar</span>
								</a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-5 home-img" data-aos="zoom-out" data-aos-delay="200">
					<img src="assets/img/home-img.png" class="img-fluid" alt="">
				</div>
			</div>
			<div class="row row-cols-4 kolb-home" data-aos="zoom-out" style="color: #4D3B98;">
				<div class="col text-center">Diverger</div>
				<div class="col text-center">Asimilator</div>
				<div class="col text-center">Convergen</div>
				<div class="col text-center">Akomodator</div>
			</div>
		</div>

	</section><!-- End Home -->

	<main id="main">
		<!-- ======= Values Section ======= -->
		<section id="values" class="values">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<p>Gaya Belajar</p>
					<h2>Gaya belajar merupakan cara yang lebih disukai oleh seseorang dalam melakukan</h2>
					<h2>kegiatan berfikir, memproses, dan mengerti pada suatu informasi (Gunawan, 2006: 139)</h2>
				</header>

				<div class="row">

					<div class="col-lg-3">
						<div class="box" data-aos="fade-up" data-aos-delay="200">
							<img src="assets/img/gb-1.png" class="img-fluid" alt="">
							<h3>Diverger</h3>
							<p>Kombinasi dari perasaan dan pengamatan (feeling and watching). Anak dengan tipe ini unggul dalam melihat situasi konkret dari berbagai sudut pandang yang berbeda, kemudian menghubungkannya menjadi suatu kesatuan yang utuh.</p>
						</div>
					</div>

					<div class="col-lg-3 mt-4 mt-lg-0">
						<div class="box" data-aos="fade-up" data-aos-delay="400">
							<img src="assets/img/gb-2.png" class="img-fluid" alt="">
							<h3>Asimilator</h3>
							<p>Kombinasi dari berpikir dan mengamati (thinking and watching). Anak dengan tipe ini lebih tertarik pada konsep-konsep yang abstrak. Mereka juga tidak terlalu memerhatikan penerapan praksis dari ide-ide mereka dan mereka juga kurang perhatian pada orang lain, serta cenderung lebih teoritis.</p>
						</div>
					</div>

					<div class="col-lg-3 mt-4 mt-lg-0">
						<div class="box" data-aos="fade-up" data-aos-delay="600">
							<img src="assets/img/gb-3.png" class="img-fluid" alt="">
							<h3>Convergen</h3>
							<p>Kombinasi dari berfikir dan berbuat (thinking and doing). Seseorang dengan tipe ini biasanya mempunyai kemampuan yang unggul dalam menemukan fungsi praktis dari berbagai ide dan teori.</p>
						</div>
					</div>

					<div class="col-lg-3 mt-4 mt-lg-0">
						<div class="box" data-aos="fade-up" data-aos-delay="800">
							<img src="assets/img/gb-3.png" class="img-fluid" alt="">
							<h3>Akomodator</h3>
							<p>Kombinasi dari perasaan dan tindakan (feeling and doing). Anak dengan tipe ini memiliki kemampuan belajar yang baik dari hasil pengalaman nyata yang dilakukan sendiri, mereka juga berminat pada pengembangan konsep-konsep.</p>
						</div>
					</div>

				</div>

				<div class="source-gb">
					<p>Sumber: <br>
						https://www.idntimes.com/life/education/jihan-mawaddah/4-gaya-belajar-dari-david-kolb-c1c2/4</p>
				</div>

			</div>

		</section><!-- End Values Section -->

		<!-- ======= Team Section ======= -->
		<section id="team" class="team">

			<div class="container" data-aos="fade-up">

				<header class="section-header">
					<p>LSCS Team</p>
				</header>

				<div class="row gx-5 justify-content-md-center">

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
						<div class="member">
							<div class="member-img">
								<img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>Krisna Milenia</h4>
								<span>1801578</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
						<div class="member">
							<div class="member-img">
								<img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>Gunawan Pratama</h4>
								<span>1801665</span>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
						<div class="member">
							<div class="member-img">
								<img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
							</div>
							<div class="member-info">
								<h4>Ahmad Afzalulhaq</h4>
								<span>1806506</span>
							</div>
						</div>
					</div>

				</div>

			</div>

		</section><!-- End Team Section -->

	</main><!-- End #main -->

	<!-- ======= Footer ======= -->
	<footer id="footer" class="footer">

		<div class="footer-top">
			<div class="container">
				<div class="row gy-3">
					<div class="col-lg-5 col-md-12 footer-info">
						<a href="index.html" class="logo d-flex align-items-center">
							<span>LSCS</span>
						</a>
						<br>
						<p>LSCS atau Learning Style Checking System adalah sebuah perangkat lunak yang dapat digunakan sebagai alat tes siswa dalam menentukkan gaya belajar serta menyarankan berbagai rekomendasi, baik dalam hal pendidikan ataupun dalam hal lainnya.</p>
						<br>
						<p>Aplikasi berbasis website ini ditujukkan untuk tugas besar mata kuliah Rekayasa Perangkat Lunak. Membuat sebuah perangkat lunak yang dapat berguna di bidang pendidikan.</p>
					</div>

					<div class="col-lg-3 col-6 footer-links">
						<h4>Kelompok LSCS</h4>
						<ul>
							<li>- Krisna Milenia (1801578)</li>
							<li>- Gunawan Pratama (1801665)</li>
							<li>- Ahmad Afzalulhaq (1806506)</li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-12 footer-contact text-center text-md-start">
						<h4>Hubungi Kami</h4>
						<p>
							Gedung FPMIPA C<br>
							Jl. Dr. Setiabudi No.229, Isola, Kec. Sukasari<br>
							Kota Bandung, Jawa Barat 40154 <br><br>
							<strong>Phone:</strong> +62 838 2041 2143<br>
							<strong>Email:</strong> afzal@upi.edu<br>
						</p>

					</div>

				</div>
			</div>
		</div>

		<div class="container">
			<div class="copyright">
				&copy; Copyright <strong><span>FlexStart</span></strong>. All Rights Reserved
			</div>
			<div class="credits">
				<!-- All the links in the footer should remain intact. -->
				<!-- You can delete the links only if you purchased the pro version. -->
				<!-- Licensing information: https://bootstrapmade.com/license/ -->
				<!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
				Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
			</div>
		</div>
	</footer><!-- End Footer -->

	<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

	<!-- Vendor JS Files -->
	<script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/aos/aos.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/php-email-form/validate.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/swiper/swiper-bundle.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/purecounter/purecounter.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
	<script src="<?php echo base_url() ?>assets/vendor/glightbox/js/glightbox.min.js"></script>

	<!-- Template Main JS File -->
	<script src="<?php echo base_url() ?>assets/js/main.js"></script>

</body>

</html>