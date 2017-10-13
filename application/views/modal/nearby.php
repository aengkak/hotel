<?php if($cek == 1) { ?>
<input name="id_akses" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Name Location</label>
  <div class="col-md-9">
    <input name="tempat" placeholder="Name Location" class="form-control" type="text" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">City</label>
  <div class="col-md-9">
    <select name="kota_id" id="select" class="form-control">
        <option value="">Select</option>
      <?php foreach ($kota as $key) { ?>
        <option value="<?php echo $key->id_kota;?>"><?php echo $key->kota;?></option>
      <?php } ?>
    </select>
  </div>
</div>

<?php } else { ?>
  <input name="id_nearby" value="<?php echo $nearby->id_nearby;?>" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Nama Location</label>
    <div class="col-md-9">
      <input name="tempat" value="<?php echo $nearby->tempat;?>" placeholder="Nama Location" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">City</label>
    <div class="col-md-9">
      <select name="kota_id" id="select" class="form-control">
          <option value="">Select</option>
        <?php foreach ($kota as $key) { ?>
          <option <?php if ($key->id_kota == $nearby->kota_id) echo 'selected = "selected"'; ?> value="<?php echo $key->id_kota;?>"><?php echo $key->kota;?></option>
        <?php } ?>
      </select>
    </div>
  </div>
<?php } ?>
