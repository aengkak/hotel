<?php if($cek == 1) { ?>
<div class="form-group">
<label class="control-label col-md-3">Bed Name</label>
<div class="col-md-9">
<input name="bed" placeholder="Bed Name" class="form-control" type="text" required>
</div>
</div>
<?php } else { ?>
  <input name="id_bed" value="<?php echo $bed->id_bed;?>" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
  <label class="control-label col-md-3">Bed Name</label>
  <div class="col-md-9">
  <input name="bed" value="<?php echo $bed->bed;?>" placeholder="Bed Name" class="form-control" type="text" required>
  </div>
  </div>
<?php } ?>
