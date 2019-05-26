
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
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/koperasi/styles/responsive.css">
</head>
<body>

<div class="super_container">

<!-- Home -->

<div class="home">
  <div class="background_image" style="background-image:url(<?php echo base_url() ?>assets/koperasi/images/awal2.jpeg)"></div>

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
                        <li class="active"><a href="<?php echo base_url() ?>">Beranda</a></li>
                        <li><a href="<?php echo base_url('tentang_kami') ?>">Tentang Kami</a></li>
                        <li><a href="<?php echo base_url('berita') ?>">Berita</a></li>
                        <li><a href="<?php echo base_url('kontak') ?>">Kontak</a></li>
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
          <div class="home_title">Visi Misi Koperasi Halal Umat</div>
          <div class="home_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada lorem maximus mauris scelerisque, at rutrum nulla dictum. Ut ac ligula sapien.</div>
          <div class="button home_button"><a href="<?php echo base_url('daftar') ?>"><span>Daftar</span><span>Daftar</span></a></div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- Info Boxes -->

<div class="info">
  <div class="container">
    <div class="row row-eq-height">

      <?php $i=1; foreach ($berita as $berita) { ?>
      <!-- Info Box -->
      <div class="col-lg-4 info_box_col">
        <div class="info_box">
          <div class="info_image"><img src="<?php echo base_url('assets/upload/image/'.$berita->gambar) ?>" alt=""></div>
          <div class="info_content">
            <div class="info_title"><?php echo $berita->judul_berita ?></div>
            <div class="info_text"><?php echo character_limiter($berita->isi_berita,200) ?></div>
            <div class="button info_button"><a href="<?php echo base_url('berita/read') ?>"><span>baca lebih</span><span>baca lebih</span></a></div>
          </div>
        </div>
      </div>

      <?php $i++; } ?>

    </div>
  </div>
</div>

<!-- CTA -->

<div class="cta">
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/koperasi/images/cta_1.jpg" data-speed="0.8"></div>
  <div class="container">
    <div class="row">
      <div class="col">
        <div class="cta_container d-flex flex-xl-row flex-column align-items-xl-start align-items-center justify-content-xl-start justify-content-center">
          <div class="cta_content text-xl-left text-center">
            <div class="cta_title">"Setiap orang di dunia ini adalah seorang tamu, dan uangnya adalah pinjaman. Tamu itu pastilah akan pergi, cepat atau lambat, dan pinjaman itu haruslah dikembalikan."</div>
            <div class="cta_subtitle">Ibnu Mas’ud</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Services -->

<div class="services">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title">Kelebihan Halal Ummat</div>
        <div class="section_subtitle">sebagai koperasi</div>
      </div>
    </div>
    <div class="row icon_boxes_row">

      <!-- Icon Box -->
      <div class="col-xl-4 col-lg-6">
        <div class="icon_box">
          <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="icon_box_icon"><img src="<?php echo base_url() ?>assets/koperasi/images/icon(1).png" alt=""></div>
            <div class="icon_box_title">Kelebihan 1</div>
          </div>
          <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-lg-6">
        <div class="icon_box">
          <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="icon_box_icon"><img src="<?php echo base_url() ?>assets/koperasi/images/icon(2).png" alt=""></div>
            <div class="icon_box_title">Kelebihan 2</div>
          </div>
          <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-lg-6">
        <div class="icon_box">
          <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="icon_box_icon"><img src="<?php echo base_url() ?>assets/koperasi/images/icon(3).png" alt=""></div>
            <div class="icon_box_title">Kelebihan 3</div>
          </div>
          <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-lg-6">
        <div class="icon_box">
          <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="icon_box_icon"><img src="<?php echo base_url() ?>assets/koperasi/images/icon(4).png" alt=""></div>
            <div class="icon_box_title">Kelebihan 4</div>
          </div>
          <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-lg-6">
        <div class="icon_box">
          <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="icon_box_icon"><img src="<?php echo base_url() ?>assets/koperasi/images/icon(5).png" alt=""></div>
            <div class="icon_box_title">Kelebihan 5</div>
          </div>
          <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
        </div>
      </div>

      <!-- Icon Box -->
      <div class="col-xl-4 col-lg-6">
        <div class="icon_box">
          <div class="icon_box_title_container d-flex flex-row align-items-center justify-content-start">
            <div class="icon_box_icon"><img src="<?php echo base_url() ?>assets/koperasi/images/icon(6).png" alt=""></div>
            <div class="icon_box_title">Kelebihan 6</div>
          </div>
          <div class="icon_box_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec lorem maximus malesuada lorem maximus mauris.</div>
        </div>
      </div>

    </div>
  </div>
</div>

<!-- Departments -->

<div class="departments">
  <div class="container">
    <div class="row">
      <div class="col text-center">
        <div class="section_title">Pengurus Inti Koperasi</div>
        <div class="section_subtitle">tahun 2019</div>
      </div>
    </div>
    <div class="row dept_row">
      <div class="col">
        <div class="dept_slider_container_outer">
          <div class="dept_slider_container">

            <!-- Slider -->
            <div class="owl-carousel owl-theme dept_slider">

              <!-- Slide -->
              <div class="owl-item dept_item">
                <div class="dept_image"><img src="<?php echo base_url() ?>assets/koperasi/images/farhan2.jpg" alt=""></div>
                <div class="dept_content">
                  <div class="dept_title">Farhan</div>
                  <div class="dept_link"><a href="#">Read More</a></div>
                </div>
              </div>

              <!-- Slide -->
              <div class="owl-item dept_item">
                <div class="dept_image"><img src="<?php echo base_url() ?>assets/koperasi/images/has.jpg" alt=""></div>
                <div class="dept_content">
                  <div class="dept_title">Hanif Has</div>
                  <div class="dept_link"><a href="#">Read More</a></div>
                </div>
              </div>

              <!-- Slide -->
              <div class="owl-item dept_item">
                <div class="dept_image"><img src="<?php echo base_url() ?>assets/koperasi/images/roza2.jpg" alt=""></div>
                <div class="dept_content">
                  <div class="dept_title">Roza</div>
                  <div class="dept_link"><a href="#">Read More</a></div>
                </div>
              </div>

              <!-- Slide -->
              <div class="owl-item dept_item">
                <div class="dept_image"><img src="<?php echo base_url() ?>assets/koperasi/images/mahendra.jpg" alt=""></div>
                <div class="dept_content">
                  <div class="dept_title">Mahendra</div>
                  <div class="dept_link"><a href="#">Read More</a></div>
                </div>
              </div>

              <!-- Slide -->
              <div class="owl-item dept_item">
                <div class="dept_image"><img src="<?php echo base_url() ?>assets/koperasi/images/ardiyas.jpg" alt=""></div>
                <div class="dept_content">
                  <div class="dept_title">Ardiyas</div>
                  <div class="dept_link"><a href="#">Read More</a></div>
                </div>
              </div>

            </div>
          </div>

          <!-- Dept Slider Nav -->
          <div class="dept_slider_nav"><i class="fa fa-chevron-right" aria-hidden="true"></i></div>

        </div>

      </div>
    </div>
  </div>
</div>

<!-- FAQ & News -->

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
<script src="<?php echo base_url() ?>assets/koperasi/plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="<?php echo base_url() ?>assets/koperasi/plugins/easing/easing.js"></script>
<script src="<?php echo base_url() ?>assets/koperasi/plugins/parallax-js-master/parallax.min.js"></script>
<script src="<?php echo base_url() ?>assets/koperasi/js/custom.js"></script>
</body>
</html>
