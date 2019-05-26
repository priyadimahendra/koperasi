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
     </tr>
    <?php $i++; } ?>

 </tbody>
</table>

<table class="table table-striped table-bordered table-hover" id="dataTables-example">
 <thead>
     <tr>
         <th width="5%">No</th>
         <th>Gambar</th>
         <th>Judul</th>
         <th>Penulis</th>
         <th>Tanggal</th>
     </tr>
 </thead>
 <tbody>

    <?php $i=1; foreach($berita as $berita) { ?>
     <tr class="odd gradeX">
         <td><?php echo $i ?></td>
         <td><img src="<?php echo base_url('assets/upload/image/thumbs/'.$berita->gambar) ?>" width="60" class="img img-thumbnail"></td>
         <td><?php echo $berita->judul_berita ?></td>
         <td class="center">Admin</td>
         <td class="center"><?php echo $berita->tanggal_post ?></td>
     </tr>
    <?php $i++; } ?>

 </tbody>
</table>
