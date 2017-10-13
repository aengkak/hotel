<?php if ($cek == 1){ ?>
  <input name="id_fitur" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Name Feature</label>
    <div class="col-md-9">
      <input name="nama" placeholder="Feature" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">For</label>
    <div class="col-md-9">
        <label>
            <input type="checkbox" name="tipe[]" class="minimal" value="0">
              Hotel
        </label><br />
        <label>
            <input type="checkbox" name="tipe[]" class="minimal" value="1">
              Room
        </label><br />
    </div>
  </div>
<?php } else { ?>
<input name="id_fitur" value="<?php echo $fitur->id_fitur;?>" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Feature</label>
  <div class="col-md-9">
    <input name="nama" value="<?php echo $fitur->nama;?>" placeholder="Feature" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">For</label>
  <div class="col-md-9">
    <?php $res = $fitur->tipe;
    $res1 = explode('.',$res);
     ?>
      <label>
        <?php foreach ($res1 as $key1 => $value1) {?>
          <input type="checkbox" <?php if ($value1 == 0) echo 'checked = "checked"';}?> name="tipe[]" class="minimal" value="0">
            Hotel
      </label><br />
      <label>
          <?php foreach ($res1 as $key2 => $value2) {?>
          <input type="checkbox" <?php if ($value2 == 1) echo 'checked = "checked"'; }?> name="tipe[]" class="minimal" value="1">
            Room
      </label><br />
  </div>
</div>
<?php } ?>
