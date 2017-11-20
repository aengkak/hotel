<?php if($cek == 1) { ?>
<div class="form-group">
  <label class="control-label col-md-3">Akses</label>
  <div class="col-md-9">
    <input name="akses" placeholder="Akses" id="akses" class="form-control" type="text" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Untuk</label>
  <div class="col-md-9">
      <label>
          <input type="checkbox" name="tipe[]" class="minimal" value="0">
            Staff
      </label><br />
      <label>
          <input type="checkbox" name="tipe[]" class="minimal" value="1">
            Hotel
      </label><br />
  </div>
</div>
<?php } else { ?>
  <input name="id_akses" value="<?php echo $akses->id_akses;?>" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Akses</label>
    <div class="col-md-9">
      <input name="akses" id="akses" value="<?php echo $akses->akses;?>" placeholder="Akses" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Untuk</label>
    <div class="col-md-9">
      <?php $res = $akses->tipe;
      $res1 = explode('.',$res);
       ?>
        <label>
          <?php foreach ($res1 as $key1 => $value1) {?>
            <input type="checkbox" <?php if ($value1 == 0) echo 'checked = "checked"';}?> name="tipe[]" class="minimal" value="0">
              Staff
        </label><br />
        <label>
            <?php foreach ($res1 as $key1 => $value1) {?>
            <input type="checkbox" <?php if ($value1 == 1) echo 'checked = "checked"';}?> name="tipe[]" class="minimal" value="1">
              Hotel
        </label><br />
    </div>
  </div>
<?php } ?>
