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
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/styles/news.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/styles/news_responsive.css">
</head>
<body>

  <div class="super_container">

<!-- Home -->

<div class="home">
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/koperasi/images/berita.jpg" data-speed="0.8"></div>

  <!-- Header -->

  <header class="header" id="header">
    <div>
      <div class="header_top">
        <div class="container">
          <div class="row">
            <div class="col">
              <div class="header_top_content d-flex flex-row align-items-center justify-content-start">
                <img src="<?php echo base_url() ?>assets/koperasi/images/Umat8.jpg" href="<?php echo base_url() ?>">
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
                        <li class="active"><a href="<?php echo base_url('berita') ?>">Berita</a></li>
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


<!-- News -->

	<div class="news">
		<div class="container">
			<div class="row">

				<!-- News Posts -->
				<div class="col-lg-8">
					<div class="news_posts">

						<!-- News Post -->
						<div class="news_post">
							<div class="news_post_image"><img src="<?php echo base_url() ?>assets/koperasi/images/news_1.jpg" alt=""></div>
							<div class="news_post_content">
								<div class="news_post_date"><a href="#">17 April, 2018</a></div>
								<div class="news_post_title"><a href="#">10 Tips on how to live a healthy life</a></div>
								<div class="news_post_info">
									<ul class="d-flex flex-row align-items-center justify-content-start">
										<li><a href="#">by Jane Smith</a></li>
										<li><a href="#">April 25, 2018</a></li>
									</ul>
								</div>
								<div class="news_post_text">
									<p>Donec lorem maximus malesuada lorem max imus mauris. Proin vitae tortor nec risus tristiq ue efficitur. Aliquam luctus est urna, id aliqu am orci tempus sed. Aenean sit amet leo id enim dapibus eleifend. Phasellus ut erat dapibus, tempor sapien non, porta urna. Cras quis ante nibh. Proin tincidunt gravida interdum. Proin sed urna mauris.</p>
								</div>
								<div class="button news_post_button"><a href="#"><span>baca lebih</span><span>baca lebih</span></a></div>
							</div>
						</div>
            <div class="pagination">
							<ul class="d-flex flex-row align-items-center justify-content-start">
								<li class="active"><a href="#">01.</a></li>
								<li><a href="#">02.</a></li>
								<li><a href="#">03.</a></li>
							</ul>
						</div>
					</div>
				</div>

        <!-- Sidebar -->
<div class="col-lg-4">
  <div class="news_sidebar">

    <!-- Search -->
    <div class="sidebar_search">
      <form action="#" id="sidebar_search" class="sidebar_search">
        <input type="text" class="sidebar_search_input" placeholder="Pencaharian" required="required">
        <button class="sidebar_search_button"><i class="fa fa-search" aria-hidden="true"></i></button>
      </form>
    </div>

    <!-- Latest News -->
    <div class="sidebar_latest">
      <div class="sidebar_title">Berita Terbaru</div>
      <div class="sidebar_latest_container">

        <!-- Latest News Post -->
        <div class="latest d-flex flex-row align-items-start justify-content-start">
          <div><div class="latest_image"><img src="<?php echo base_url() ?>assets/koperasi/images/latest_1.jpg" alt=""></div></div>
          <div class="latest_content">
            <div class="latest_title"><a href="news.html">A simple blog post</a></div>
            <div class="latest_info">
              <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#">by Jane Smith</a></li>
                <li><a href="#">April 25, 2018</a></li>
              </ul>
            </div>
            <div class="latest_comments"><a href="#">2 Comments</a></div>
          </div>
        </div>

        <!-- Latest News Post -->
        <div class="latest d-flex flex-row align-items-start justify-content-start">
          <div><div class="latest_image"><img src="<?php echo base_url() ?>assets/koperasi/images/latest_2.jpg" alt=""></div></div>
          <div class="latest_content">
            <div class="latest_title"><a href="news.html">A new way to see things</a></div>
            <div class="latest_info">
              <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#">by Jane Smith</a></li>
                <li><a href="#">April 25, 2018</a></li>
              </ul>
            </div>
            <div class="latest_comments"><a href="#">2 Comments</a></div>
          </div>
        </div>

        <!-- Latest News Post -->
        <div class="latest d-flex flex-row align-items-start justify-content-start">
          <div><div class="latest_image"><img src="<?php echo base_url() ?>assets/koperasi/images/latest_3.jpg" alt=""></div></div>
          <div class="latest_content">
            <div class="latest_title"><a href="news.html">Why is Pharma industry so big?</a></div>
            <div class="latest_info">
              <ul class="d-flex flex-row align-items-start justify-content-start">
                <li><a href="#">by Jane Smith</a></li>
                <li><a href="#">April 25, 2018</a></li>
              </ul>
            </div>
            <div class="latest_comments"><a href="#">2 Comments</a></div>
          </div>
        </div>

      </div>
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
  Copyright &copy;<?php echo date('Y') ?>. All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/greensock/TweenMax.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/greensock/TimelineMax.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/scrollmagic/ScrollMagic.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/greensock/animation.gsap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/greensock/ScrollToPlugin.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/easing/easing.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/parallax-js-master/parallax.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/js/news.js"></script>


  </body>
  </html>
