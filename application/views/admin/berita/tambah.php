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
echo form_open(base_url('admin/berita/tambah'));
 ?>

<div class="col-md-8">
  <div class="form-group form-group-lg">
      <label>Judul Berita</label>
      <input type="text" name="judul_berita" class="form-control" placeholder="Judul berita" value="<?php echo set_value('judul
      ') ?>" required>
  </div>
</div>

<div class="col-md-4">
  <div class="form-group form-group-lg">
      <label>Upload Gambar</label>
      <input type="file" name="gambar" class="form-control" required>
  </div>
</div>

<div class="col-md-12">
  <div class="form-group">
      <label>Isi Berita</label>
      <textarea name="isi_berita" class="form-control tinymce" placeholder="isi berita"><?php echo set_value('isi_berita') ?></textarea>
  </div>

  <div class="form-group">
      <label>Keyword Berita (untuk SEO Google)</label>
      <textarea name="keyword" class="form-control" placeholder="Keyword berita"><?php echo set_value('keyword') ?></textarea>
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
