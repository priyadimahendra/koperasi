<button class="btn btn-primary btn-xs" data-toggle="modal" data-target="#Delete<?php echo $berita->id_berita ?>" title="Delete Berita">
  <i class="fa fa-trash-o"></i> Hapus
</button>
<div class="modal fade" id="Delete<?php echo $berita->id_berita ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">Hapus Data Berita <?php echo $berita->judul_berita ?></h4>
            </div>
            <div class="modal-body">
        			<p class="alert alert-success">Yakin ingin dihapus?</p>
            </div>
            <div class="modal-footer">
              <a href="<?php echo base_url('admin/dasbor/delete/'.$berita->id_berita) ?>" class="btn btn-danger"><i class="fa fa-trash-o"></i> Ya. Dah gak perlu</a>
              <button type="button" class="btn btn-default" data-dismiss="modal">Tidak jadi</button>
            </div>
        </div>
    </div>
</div>
