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
  <a href="<?php echo base_url('admin/pendaftar/tambah') ?>" title="Tambah Pendaftar Baru" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
</p>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <thead>
     <tr>
         <th width="5%">No</th>
         <th>Nama</th>
         <th>TTL</th>
         <th>No KTP</th>
         <th>Alamat</th>
         <th>Pekerjaan</th>
         <th>Pendidikan Terakhir</th>
         <th>No HP & No WA</th>
         <th>E-mail</th>
         <th>Aksi</th>
     </tr>
 </thead>
 <tbody>

    <?php $i=1; foreach($pendaftar as $pendaftar) { ?>
     <tr class="odd gradeX">
         <td><?php echo $i ?></td>
         <td class="center"><?php echo $pendaftar->nama ?></td>
         <td class="center"><?php echo $pendaftar->tempat_lahir ?> <?php echo $pendaftar->tanggal_lahir ?>/<?php echo $pendaftar->bulan_lahir ?>/<?php echo $pendaftar->tahun_lahir ?></td>
         <td class="center"><?php echo $pendaftar->no_ktp ?></td>
         <td class="center"><?php echo $pendaftar->alamat ?>, <?php echo $pendaftar->kelurahan_desa ?>, <?php echo $pendaftar->kecamatan ?>, <?php echo $pendaftar->kabupaten_kota ?></td>
         <td class="center"><?php echo $pendaftar->pekerjaan ?></td>
         <td class="center"><?php echo $pendaftar->pendidikan_terakhir ?></td>
         <td class="center"><?php echo $pendaftar->no_hp ?>/<?php echo $pendaftar->no_wa ?></td>
         <td class="center"><?php echo $pendaftar->email ?></td>
         <td class="center">
           <a href="<?php echo base_url('admin/pendaftar/edit/'.$pendaftar->id_pendaftar) ?>" class="btn btn-warning btn-xs">
                                    <i class="fa fa-edit"></i>Edit</a>

           <?php include('delete.php') ?>
         </td>
     </tr>
    <?php $i++; } ?>

 </tbody>
</table>
