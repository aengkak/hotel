<?php if($cek == 1) { ?>
<div class="form-group">
<label class="control-label col-md-3">Kota</label>
<div class="col-md-9">
<input name="kota" id="kota" placeholder="City" class="form-control" type="text" required>
</div>
</div>
<?php } else { ?>
  <input name="id_kota" value="<?php echo $kota->id_kota;?>" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
  <label class="control-label col-md-3">Kota</label>
  <div class="col-md-9">
  <input name="kota" id="kota" value="<?php echo $kota->kota;?>" placeholder="City" class="form-control" type="text" required>
  </div>
  </div>
<?php } ?>
