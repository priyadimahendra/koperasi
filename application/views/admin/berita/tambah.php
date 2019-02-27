<?php
// Eror Warning
echo validation_errors('<div class="alert alert-warning">','</div>');

//eror Upload
if(isset($error_upload))
{
  echo '<div class="alert alert-warning">'.$error_upload.'</div>';
}

// Form Open
echo form_open(base_url('admin/berita/tambah'));
 ?>

<div class="col-md-8">
  <div class="form-group form-group-lg">
      <label></label>
  </div>
</div>

<?php
echo form_close();
 ?>
