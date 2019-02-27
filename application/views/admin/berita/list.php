<?php
//Notifikasi
if($this->session->flashdata('sukses'))
{
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
 ?>

<p>
  <a href="<?php echo base_url('admin/berita/tambah') ?>" title="Tambah Berita Baru" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
</p>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <thead>
     <tr>
         <th width="5%">No</th>
         <th>Gambar</th>
         <th>Judul</th>
         <th>Penulis</th>
         <th>Tanggal</th>
         <th>Aksi</th>
     </tr>
 </thead>
 <tbody>

    <?php $i=1; foreach($berita as $berita) { ?>
     <tr class="odd gradeX">
         <td><?php echo $i ?></td>
         <td><img src="<?php echo base_url('assets/koperasi/images/'.$berita->gambar) ?>" width="60" class="img img-thumbnail"></td>
         <td><?php echo $berita->judul_berita ?></td>
         <td class="center"><?php echo $berita->nama ?></td>
         <td class="center"><?php echo $berita->tanggal_post ?></td>
         <td class="center">X</td>
     </tr>
    <?php $i++; } ?>

 </tbody>
</table>
