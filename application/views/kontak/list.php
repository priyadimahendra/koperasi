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
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/styles/contact.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/styles/contact_responsive.css">

</head>
<body>

  <div class="super_container">

<!-- Home -->

<div class="home">
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/koperasi/images/kontak1.jpeg" data-speed="0.8"></div>

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
                        <li><a href="<?php echo base_url('tentang_kami') ?>">Tentang Kami</a></li>
                        <li><a href="<?php echo base_url('berita') ?>">Berita</a></li>
                        <li class="active"><a href="<?php echo base_url('kontak') ?>">Kontak</a></li>
                        <li><a href="<?php echo base_url('daftar') ?>">Daftar</a></li>
                      </ul>
                    </nav>

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


<!-- Contact -->

<div class="contact">
  <div class="container">
    <div class="row">



      <!-- contact info -->
				<div class="contact_info">
					<div class="row">
						<div class="col-lg-3 offset-lg-1">
							<div class="contact_info_list">
								<div class="contact_info_title">Contact Info</div>
								<ul>
									<li><span>Address: </span>Mitlton Str. 26-27 Gibraltar</li>
									<li><span>Email: </span>yourmail@gmail.com</li>
									<li><span>Phone: </span>+53 345 7953 32453</li>
								</ul>
							</div>
						</div>
						<div class="col-lg-4">
							<div class="contact_info_list contact_info_list_2">
								<ul>
									<li><span>Address: </span>Mitlton Str. 26-27 London UK</li>
									<li><span>Email: </span>yourmail@gmail.com</li>
									<li><span>Phone: </span>+53 345 7953 32453</li>
								</ul>
							</div>
						</div>
					</div>
				</div>

    </div>
  </div>
</div>

<div class="contact_map">
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/koperasi/images/map.jpg" data-speed="0.8"></div>
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
  							<div class="footer_about_text">Koperasi yang berada dibawah pengawasan lembaga Majelis Ulama Indonesia. Koperasi yang bertujuan untuk memakmurkan umat islam.</div>

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
  		</div>
  	</footer>
  </div>

  <script src="<?php echo base_url() ?>assets/koperasi/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/styles/bootstrap4/popper.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/styles/bootstrap4/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/easing/easing.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/parallax-js-master/parallax.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/js/contact.js"></script>

  </body>
  </html>
