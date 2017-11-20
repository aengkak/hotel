<?php if($cek == 0) { ?>
<div class="form-group">
  <label class="control-label col-md-3">Permintaan</label>
  <div class="col-md-9">
    <input name="nama" placeholder="Nama" id="nama" class="form-control" type="text" required>
  </div>
</div>
<?php } else { ?>
  <input name="id_permintaan" value="<?php echo $permintaan->id_permintaan;?>" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Permintaan</label>
    <div class="col-md-9">
      <input name="nama" id="nama" value="<?php echo $permintaan->nama;?>" placeholder="Nama" class="form-control" type="text" required>
    </div>
  </div>

<?php } ?>
