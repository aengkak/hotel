<?php if($cek == 1) { ?>
<input name="id_akses" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Nama tempat</label>
  <div class="col-md-9">
    <input name="tempat" placeholder="Nama tempat" class="form-control" type="text" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Kota</label>
  <div class="col-md-9">
    <select name="kota_id" id="select" class="form-control">
        <option value="">Select</option>
      <?php foreach ($kota as $key) { ?>
        <option value="<?php echo $key->id_kota;?>"><?php echo $key->kota;?></option>
      <?php } ?>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Alamat</label>
  <div class="col-md-9">
    <input name="alamat" id="us3-address" placeholder="Nama tempat" class="form-control" type="text" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Lat</label>
  <div class="col-md-9">
    <input name="lat" id="us3-lat" placeholder="Nama tempat" class="form-control" type="text" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Long</label>
  <div class="col-md-9">
    <input name="lon" id="us3-lon" placeholder="Nama tempat" class="form-control" type="text" required>
  </div>
</div>
  <div id="us3" style="width: 100%; height: 100%; display: none;"></div>

<?php } else { ?>
  <input name="id_nearby" value="<?php echo $nearby->id_nearby;?>" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Nama Location</label>
    <div class="col-md-9">
      <input name="tempat" value="<?php echo $nearby->tempat;?>" placeholder="Nama Location" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Kota</label>
    <div class="col-md-9">
      <select name="kota_id" id="select" class="form-control">
          <option value="">Select</option>
        <?php foreach ($kota as $key) { ?>
          <option <?php if ($key->id_kota == $nearby->kota_id) echo 'selected = "selected"'; ?> value="<?php echo $key->id_kota;?>"><?php echo $key->kota;?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Alamat</label>
    <div class="col-md-9">
      <input name="alamat" value="<?php echo $nearby->alamatnear;?>" id="us3-address" placeholder="Nama tempat" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Lat</label>
    <div class="col-md-9">
      <input name="lat" value="<?php echo $nearby->latnear;?>" id="us3-lat" placeholder="Nama tempat" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Long</label>
    <div class="col-md-9">
      <input name="lon" value="<?php echo $nearby->longinear;?>" id="us3-lon" placeholder="Nama tempat" class="form-control" type="text" required>
    </div>
  </div>
    <div id="us3" style="width: 100%; height: 100%; display: none;"></div>
<?php } ?>
