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
echo form_open(base_url('admin/pendaftar/tambah'));
 ?>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" placeholder="Nama pendaftar" value="<?php echo set_value('nama') ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>Tempat Lahir</label>
      <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo set_value('tempat_lahir') ?>" required>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Tanggal Lahir</label>
      <select name="tanggal_lahir" class="form-control">
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
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Bulan Lahir</label>
      <select name="tanggal_lahir" class="form-control">
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
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Tahun Lahir</label>
      <input type="text" name="tahun_lahir" class="form-control" placeholder="Tahun Lahir" value="<?php echo set_value('tahun_lahir') ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>No KTP</label>
      <input type="text" name="no_ktp" class="form-control" placeholder="No KTP" value="<?php echo set_value('no_ktp') ?>" required>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Kelurahan/Desa</label>
      <input type="text" name="kelurahan_desa" class="form-control" placeholder="Kelurahan/Desa" value="<?php echo set_value('kelurahan_desa') ?>" required>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Kecamatan</label>
      <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?php echo set_value('kecamatan') ?>" required>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Kabupaten/Kota</label>
      <input type="text" name="kabupaten_kota" class="form-control" placeholder="Kabupaten/Kota" value="<?php echo set_value('kabupaten_kota') ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>Pekerjaan</label>
      <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?php echo set_value('pekerjaan') ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>Pendidikan Terakhir</label>
      <input type="text" name="pendidikan_terkahir" class="form-control" placeholder="Pendidikan Terakhir" value="<?php echo set_value('pendidikan_terkahir') ?>" required>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group form-group-lg">
      <label>No HP</label>
      <input type="text" name="no_hp" class="form-control" placeholder="No HP" value="<?php echo set_value('no_hp') ?>" required>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group form-group-lg">
      <label>No WhatsApp</label>
      <input type="text" name="no_wa" class="form-control" placeholder="No WhatsApp" value="<?php echo set_value('no_wa') ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>E-mail</label>
      <input type="text" name="email" class="form-control" placeholder="E-mail" value="<?php echo set_value('email') ?>" required>
  </div>

  <div class="form-group text-right">
      <button type="submit" name="submit" class="btn btn-success btn-lg">
        <i class="fa fa-save"></i> Simpan Berita
      </button>
      <button type="reset" name="reset" class="btn btn-default btn-lg">
        <i class="fa fa-times"></i> Reset
      </button>
  </div>
</div>

<div class="clearfix"></div>
<?php
echo form_close();
 ?>
