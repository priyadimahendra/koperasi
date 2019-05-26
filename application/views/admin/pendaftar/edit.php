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
echo form_open(base_url('admin/pendaftar/edit/'.$pendaftar->id_pendaftar));
 ?>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>Nama</label>
      <input type="text" name="nama" class="form-control" placeholder="Nama pendaftar" value="<?php echo $pendaftar->nama ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>Tempat Lahir</label>
      <input type="text" name="tempat_lahir" class="form-control" placeholder="Tempat Lahir" value="<?php echo $pendaftar->tempat_lahir ?>" required>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Tanggal Lahir</label>
      <select name="tanggal_lahir" class="form-control">
        <option value=""></option>
        <option value="1" <?php if($pendaftar->tanggal_lahir=="1"){echo "selected";} ?>>1</option>
        <option value="2" <?php if($pendaftar->tanggal_lahir=="2"){echo "selected";} ?>>2</option>
        <option value="3" <?php if($pendaftar->tanggal_lahir=="3"){echo "selected";} ?>>3</option>
        <option value="4" <?php if($pendaftar->tanggal_lahir=="4"){echo "selected";} ?>>4</option>
        <option value="5" <?php if($pendaftar->tanggal_lahir=="5"){echo "selected";} ?>>5</option>
        <option value="6" <?php if($pendaftar->tanggal_lahir=="6"){echo "selected";} ?>>6</option>
        <option value="7" <?php if($pendaftar->tanggal_lahir=="7"){echo "selected";} ?>>7</option>
        <option value="8" <?php if($pendaftar->tanggal_lahir=="8"){echo "selected";} ?>>8</option>
        <option value="9" <?php if($pendaftar->tanggal_lahir=="9"){echo "selected";} ?>>9</option>
        <option value="10" <?php if($pendaftar->tanggal_lahir=="10"){echo "selected";} ?>>10</option>
        <option value="11" <?php if($pendaftar->tanggal_lahir=="11"){echo "selected";} ?>>11</option>
        <option value="12" <?php if($pendaftar->tanggal_lahir=="12"){echo "selected";} ?>>12</option>
        <option value="13" <?php if($pendaftar->tanggal_lahir=="13"){echo "selected";} ?>>13</option>
        <option value="14" <?php if($pendaftar->tanggal_lahir=="14"){echo "selected";} ?>>14</option>
        <option value="15" <?php if($pendaftar->tanggal_lahir=="15"){echo "selected";} ?>>15</option>
        <option value="16" <?php if($pendaftar->tanggal_lahir=="16"){echo "selected";} ?>>16</option>
        <option value="17" <?php if($pendaftar->tanggal_lahir=="17"){echo "selected";} ?>>17</option>
        <option value="18" <?php if($pendaftar->tanggal_lahir=="18"){echo "selected";} ?>>18</option>
        <option value="19" <?php if($pendaftar->tanggal_lahir=="19"){echo "selected";} ?>>19</option>
        <option value="20" <?php if($pendaftar->tanggal_lahir=="20"){echo "selected";} ?>>20</option>
        <option value="21" <?php if($pendaftar->tanggal_lahir=="21"){echo "selected";} ?>>21</option>
        <option value="22" <?php if($pendaftar->tanggal_lahir=="22"){echo "selected";} ?>>22</option>
        <option value="23" <?php if($pendaftar->tanggal_lahir=="23"){echo "selected";} ?>>23</option>
        <option value="24" <?php if($pendaftar->tanggal_lahir=="24"){echo "selected";} ?>>24</option>
        <option value="25" <?php if($pendaftar->tanggal_lahir=="25"){echo "selected";} ?>>25</option>
        <option value="26" <?php if($pendaftar->tanggal_lahir=="26"){echo "selected";} ?>>26</option>
        <option value="27" <?php if($pendaftar->tanggal_lahir=="27"){echo "selected";} ?>>27</option>
        <option value="28" <?php if($pendaftar->tanggal_lahir=="28"){echo "selected";} ?>>28</option>
        <option value="29" <?php if($pendaftar->tanggal_lahir=="29"){echo "selected";} ?>>29</option>
        <option value="30" <?php if($pendaftar->tanggal_lahir=="30"){echo "selected";} ?>>30</option>
        <option value="31" <?php if($pendaftar->tanggal_lahir=="31"){echo "selected";} ?>>31</option>
      </select>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Bulan Lahir</label>
      <select name="bulan_lahir" class="form-control">
        <option >Bulan Lahir</option>
        <option value="Januari" <?php if($pendaftar->bulan_lahir=="Januari"){echo "selected";} ?>>Januari</option>
        <option value="Februari" <?php if($pendaftar->bulan_lahir=="Februari"){echo "selected";} ?>>Februari</option>
        <option value="Maret" <?php if($pendaftar->bulan_lahir=="Maret"){echo "selected";} ?>>Maret</option>
        <option value="April" <?php if($pendaftar->bulan_lahir=="April"){echo "selected";} ?>>April</option>
        <option value="Mei" <?php if($pendaftar->bulan_lahir=="Mei"){echo "selected";} ?>>Mei</option>
        <option value="Juni" <?php if($pendaftar->bulan_lahir=="Juni"){echo "selected";} ?>>Juni</option>
        <option value="Juli" <?php if($pendaftar->bulan_lahir=="Juli"){echo "selected";} ?>>Juli</option>
        <option value="Agustus" <?php if($pendaftar->bulan_lahir=="Agustus"){echo "selected";} ?>>Agustus</option>
        <option value="September" <?php if($pendaftar->bulan_lahir=="September"){echo "selected";} ?>>September</option>
        <option value="Oktober" <?php if($pendaftar->bulan_lahir=="Oktober"){echo "selected";} ?>>Oktober</option>
        <option value="November" <?php if($pendaftar->bulan_lahir=="November"){echo "selected";} ?>>November</option>
        <option value="Desember" <?php if($pendaftar->bulan_lahir=="Desember"){echo "selected";} ?>>Desember</option>
      </select>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Tahun Lahir</label>
      <input type="text" name="tahun_lahir" class="form-control" placeholder="Tahun Lahir" value="<?php echo $pendaftar->tahun_lahir ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>No KTP</label>
      <input type="text" name="no_ktp" class="form-control" placeholder="No KTP" value="<?php echo $pendaftar->no_ktp ?>" required readonly disabled>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>Alamat</label>
      <input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $pendaftar->alamat ?>" required>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Kelurahan/Desa</label>
      <input type="text" name="kelurahan_desa" class="form-control" placeholder="Kelurahan/Desa" value="<?php echo $pendaftar->kelurahan_desa ?>" required>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Kecamatan</label>
      <input type="text" name="kecamatan" class="form-control" placeholder="Kecamatan" value="<?php echo $pendaftar->kecamatan ?>" required>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group">
      <label>Kabupaten/Kota</label>
      <input type="text" name="kabupaten_kota" class="form-control" placeholder="Kabupaten/Kota" value="<?php echo $pendaftar->kabupaten_kota ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>Pekerjaan</label>
      <input type="text" name="pekerjaan" class="form-control" placeholder="Pekerjaan" value="<?php echo $pendaftar->pekerjaan ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>Pendidikan Terakhir</label>
      <input type="text" name="pendidikan_terakhir" class="form-control" placeholder="Pendidikan Terakhir" value="<?php echo $pendaftar->pendidikan_terakhir ?>" required>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group form-group-lg">
      <label>No HP</label>
      <input type="text" name="no_hp" class="form-control" placeholder="No HP" value="<?php echo $pendaftar->no_hp ?>" required>
  </div>
</div>

<div class="col-md-6">
  <div class="form-group form-group-lg">
      <label>No WhatsApp</label>
      <input type="text" name="no_wa" class="form-control" placeholder="No WhatsApp" value="<?php echo $pendaftar->no_wa ?>" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group form-group-lg">
      <label>E-mail</label>
      <input type="text" name="email" class="form-control" placeholder="E-mail" value="<?php echo $pendaftar->email ?>" required>
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
