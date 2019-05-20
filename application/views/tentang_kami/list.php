<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $title ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Health medical template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/styles/bootstrap4/bootstrap.min.css">
<link href="<?php echo base_url() ?>assets/koperasi/plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/styles/about.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/styles/about_responsive.css">

</head>
<body>

  <div class="super_container">

<!-- Home -->

<div class="home">
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/koperasi/images/about.jpg" data-speed="0.8"></div>

  <!-- Header -->

  <header class="header" id="header">
    <div>
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                <img src="<?php echo base_url() ?>assets/koperasi/images/Umat8.jpg" href="<?php echo base_url() ?>">
                <pre>  </pre>
                <div class="logo">
                  <a href="<?php echo base_url() ?>">Halal Ummat<span>*</span></a>
                </div>
              </div>
                <div class="hamburger ml-auto"><i class="fa fa-bars" aria-hidden="true"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="header_nav" id="header_nav_pin">
        <div class="header_nav_inner">
          <div class="header_nav_container">
            <div class="container">
              <div class="row">
                <div class="col">
                  <div class="header_nav_content d-flex flex-row align-items-center justify-content-start">
                    <nav class="main_nav">
                      <ul class="d-flex flex-row align-items-center justify-content-start">
                        <li><a href="<?php echo base_url() ?>">Beranda</a></li>
                        <li class="active"><a href="<?php echo base_url('tentang_kami') ?>">Tentang Kami</a></li>
                        <li><a href="<?php echo base_url('berita') ?>">Berita</a></li>
                        <li><a href="<?php echo base_url('kontak') ?>">Kontak</a></li>
                        <li><a href="<?php echo base_url('daftar') ?>">Daftar</a></li>
                      </ul>
                    </nav>
                    <div class="search_content d-flex flex-row align-items-center justify-content-end ml-auto">
                      <form action="#" id="search_container_form" class="search_container_form">
                        <input type="text" class="search_container_input" placeholder="Pencaharian" required="required">
                        <button class="search_container_button"><i class="fa fa-search" aria-hidden="true"></i></button>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <div class="home_container">
    <div class="container">
      <div class="row">
        <div class="col">
          <div class="home_content">
            <div class="home_title"><?php echo $title ?></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Doctors -->

	<div class="doctors">
		<div class="container">
			<div class="row">
				<div class="col text-center">
					<div class="section_title">Pengurus Koperasi</div>
					<div class="section_subtitle">periode 2019/2020</div>
				</div>
			</div>
			<div class="row doctors_row">

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="<?php echo base_url() ?>assets/koperasi/images/farhan2.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a>Farhan</a></div>
							<div class="doctor_title">Wakil</div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="<?php echo base_url() ?>assets/koperasi/images/mahendra.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a>Mahendra</a></div>
							<div class="doctor_title">Anggota 1</div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="<?php echo base_url() ?>assets/koperasi/images/roza2.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a>Roza</a></div>
							<div class="doctor_title">Anggota 2</div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="<?php echo base_url() ?>assets/koperasi/images/has.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a>Hasbi</a></div>
							<div class="doctor_title">Surgeon</div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="<?php echo base_url() ?>assets/koperasi/images/ardiyas.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a>Ardiyas</a></div>
							<div class="doctor_title">Surgeon</div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="<?php echo base_url() ?>assets/koperasi/images/doc_6.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a>Christina Smith</a></div>
							<div class="doctor_title">Laboratory</div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="<?php echo base_url() ?>assets/koperasi/images/doc_7.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a>Jessica Walsh</a></div>
							<div class="doctor_title">Pediatrist</div>
						</div>
					</div>
				</div>

				<!-- Doctor -->
				<div class="col-xl-3 col-md-6">
					<div class="doctor">
						<div class="doctor_image"><img src="<?php echo base_url() ?>assets/koperasi/images/doc_8.jpg" alt=""></div>
						<div class="doctor_content">
							<div class="doctor_name"><a>Martha James</a></div>
							<div class="doctor_title">Eye Doctor</div>
						</div>
					</div>
				</div>
      </div>
    </div>
  </div>



  <!-- Footer -->

  	<footer class="footer">
  		<div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/koperasi/images/Grey.jpg" data-speed="0.8"></div>
  		<div class="footer_content">
  			<div class="container">
  				<div class="row">

  					<!-- Footer About -->
  					<div class="col-lg-3 footer_col">
  						<div class="footer_about">
  							<div class="logo">
  								<a href="#">halal ummat<span>*</span></a>
  							</div>
  							<div class="footer_about_text">Lorem ipsum dolor sit amet, lorem maximus consectetur adipiscing elit. Donec malesuada lorem maximus mauris.</div>
  							<div class="footer_social">
  								<ul class="d-flex flex-row align-items-center justify-content-start">
  									<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>
  									<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
  									<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
  									<li><a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a></li>
  									<li><a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a></li>
  									<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
  								</ul>
  							</div>

  						</div>
  					</div>

  					<!-- Footer Contact -->
  					<div class="col-lg-5 footer_col"></div>

  					<!-- Footer Hours -->
  					<div class="col-lg-4 footer_col">
  						<div class="footer_hours">
  							<div class="footer_hours_title">Jam Kerja</div>
  							<ul class="hours_list">
  								<li class="d-flex flex-row align-items-center justify-content-start">
  									<div>Senin – Kamis</div>
  									<div class="ml-auto">9.00 – 16.00</div>
  								</li>
  								<li class="d-flex flex-row align-items-center justify-content-start">
  									<div>Jumat</div>
  									<div class="ml-auto">12.00 - 16.00</div>
  								</li>
  								<li class="d-flex flex-row align-items-center justify-content-start">
  									<div>Sabtu - Minggu</div>
  									<div class="ml-auto">Libur</div>
  								</li>
  							</ul>
  						</div>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div class="footer_bar">
  			<div class="container">
          <div class="row">
            <div class="col">
           <div class="copyright"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
         </div>
         </div>
        </div>
  		</div>
  	</footer>
  </div>

  <script src="<?php echo base_url() ?>assets/koperasi/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/styles/bootstrap4/popper.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/styles/bootstrap4/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/greensock/TweenMax.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/greensock/TimelineMax.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/greensock/animation.gsap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/easing/easing.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/parallax-js-master/parallax.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/js/about.js"></script>
  </body>
  </html>
