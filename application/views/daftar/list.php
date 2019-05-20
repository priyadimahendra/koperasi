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
  <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="<?php echo base_url() ?>assets/koperasi/images/contact.jpg" data-speed="0.8"></div>

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
                        <li><a href="<?php echo base_url('kontak') ?>">Kontak</a></li>
                        <li class="active"><a href="<?php echo base_url('daftar') ?>">Daftar</a></li>
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


<?php
// Eror Warning
echo validation_errors('<div class="alert alert-warning">','</div>');

//eror Upload
if(isset($error_upload))
{
  echo '<div class="alert alert-warning">'.$error_upload.'</div>';
}

//Atribut
$attribut = 'class = "alert alert-info"';
// Form Open
echo form_open(base_url('daftar/list'));
 ?>
<!-- Contact -->

<div class="contact">
  <div class="container">
    <div class="row">

      <!-- Contact form -->
      <div class="col-lg-8 contact_col">
        <div class="contact_form">
          <div class="contact_title">Daftar</div>
          <div class="contact_form_container">
            <form class="contact_form">
              <input type="text" class="contact_input" placeholder="Nama" required="required">
              <input type="text" class="contact_input" placeholder="Tempat Lahir" required="required">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-2 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <label>Tanggal Lahir</label>
              <select name="tanggal_lahir" class="contact_input" required="required">
                <option value=""></option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
                <option value="13">13</option>
                <option value="14">14</option>
                <option value="15">15</option>
                <option value="16">16</option>
                <option value="17">17</option>
                <option value="18">18</option>
                <option value="19">19</option>
                <option value="20">20</option>
                <option value="21">21</option>
                <option value="22">22</option>
                <option value="23">23</option>
                <option value="24">24</option>
                <option value="25">25</option>
                <option value="26">26</option>
                <option value="27">27</option>
                <option value="28">28</option>
                <option value="29">29</option>
                <option value="30">30</option>
                <option value="31">31</option>
              </select>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-2 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <label>Bulan Lahir</label>
              <select name="bulan" class="contact_input" required="required">
                <option value=""></option>
                <option value="Januari">Januari</option>
                <option value="Februari">Februari</option>
                <option value="Maret">Maret</option>
                <option value="April">April</option>
                <option value="Mei">Mei</option>
                <option value="Juni">Juni</option>
                <option value="Juli">Juli</option>
                <option value="Agustus">Agustus</option>
                <option value="September">September</option>
                <option value="Oktober">Oktober</option>
                <option value="November">November</option>
                <option value="Desember">Desember</option>
              </select>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-2 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <label>Tahun Lahir</label>
              <input type="text" class="contact_input" required="required">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-8 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <input type="text" class="contact_input" placeholder="No KTP" required>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <input type="text" class="contact_input" placeholder="Kelurahan/Desa" required="required">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <input type="text" class="contact_input" placeholder="Kecamatan" required="required">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <input type="text" class="contact_input" placeholder="Kabupaten/Kota" required="required">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-8 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-8 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form action="#" class="contact_form">
              <input type="text" class="contact_input" placeholder="Pekerjaan" required>
              <input type="text" class="contact_input" placeholder="Pendidikan Terakhir" required>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <labe>No HP</label>
              <input type="number" class="contact_input" required=>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-4 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <labe>No WhatsApp</label>
              <input type="number" class="contact_input" required>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-8 contact_col">
        <div class="contact_form">
          <div class="contact_form_container">
            <form class="contact_form">
              <input type="email" class="contact_input" placeholder="E-mail" required>
            </form>
          </div>
        </div>
      </div>

    </div>
    <button type="submit" class="contact_button">Daftar</button>
  </div>
</div>

<div class="clearfix"></div>
<?php
echo form_close();
 ?>


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
  		</div>
  	</footer>
  </div>

  <script src="<?php echo base_url() ?>assets/koperasi/js/jquery-3.3.1.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/styles/bootstrap4/popper.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/styles/bootstrap4/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/easing/easing.js"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/plugins/parallax-js-master/parallax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
  <script src="<?php echo base_url() ?>assets/koperasi/js/contact.js"></script>

  </body>
  </html>
