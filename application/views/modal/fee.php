<?php if($cek == 0) { ?>
<div class="form-group">
  <label class="control-label col-md-3">Fee %</label>
  <div class="col-md-9">
    <input name="fee" placeholder="Fee" id="fee" class="form-control" type="text" required>
  </div>
</div>
<?php } else { ?>
  <input name="id_fee" value="<?php echo $fee->id_fee;?>" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Fee %</label>
    <div class="col-md-9">
      <input name="fee" id="fee" value="<?php echo $fee->fee;?>" placeholder="Fee" class="form-control" type="text" required>
    </div>
  </div>

<?php } ?>
