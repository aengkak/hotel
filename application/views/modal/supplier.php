<?php if($cek == 1) { ?>
  <input name="id_supplier" placeholder="id" class="form-control" type="hidden">
  <input type="hidden" name="cek" value="1">
<div class="form-group">
<label class="control-label col-md-3">Name</label>
<div class="col-md-9">
<input name="nama_supplier" placeholder="Name" class="form-control" type="text" required>
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
    <input name="longi" id="us3-lon" placeholder="Nama tempat" class="form-control" type="text" required>
  </div>
</div>
  <div id="us3" style="width: 100%; height: 100%; display: none;"></div>
<div class="form-group">
<label class="control-label col-md-3">Telephone</label>
<div class="col-md-9">
<input name="no_telp" onkeypress="return hanyaAngka(event)" placeholder="Telephone" class="form-control" type="text" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Email</label>
<div class="col-md-9">
<input name="email" placeholder="Email" class="form-control" type="text" required>
</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Fasilitas Hotel</label><br>
  <div class="col-md-9">
  <?php foreach ($fitur as $key) {?>
    <label style="padding-right: 20px;">
        <input type="checkbox" name="fitur_id[]" class="minimal" value="<?php echo $key->id_fitur;?>">
          <?php echo ucfirst($key->nama);?>
    </label>

        <?php } ?>
      </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Fasilitas Kamar</label><br>
  <div class="col-md-9">
  <?php foreach ($fiturkamar as $key) {?>
    <label style="padding-right: 20px;">
        <input type="checkbox" name="fiturkamar[]" class="minimal" value="<?php echo $key->id_fitur;?>">
          <?php echo ucfirst($key->nama);?>
    </label>

        <?php } ?>
      </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Bintang</label>
<div class="col-md-9">
  <?php for ($i=0; $i <= 7 ; $i++) { ?>
    <input type="radio" name="bintang" class="minimal" value="<?php echo $i;?>"><?php echo $i;?><br>
  <?php } ?>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Terdekat</label>
<div class="col-md-9">
  <select name="kota_id" class="form-control" onChange="getNear(this.value);">
      <option value="" style="display:none">Select</option>
    <?php foreach ($kota as $key) { ?>
      <option value="<?php echo $key->id_kota;?>"><?php echo $key->kota;?></option>
    <?php } ?>
  </select><br />
  <div id="nearby">
</div>
</div>



<?php } else { ?>
  <input name="id_supplier" value="<?php echo $supp->id_supplier;?>" class="form-control" type="hidden">
  <div class="form-group">
  <label class="control-label col-md-3">Name</label>
  <div class="col-md-9">
  <input name="nama_supplier" value="<?php echo $supp->nama_supplier;?>" placeholder="Name" class="form-control" type="text" required>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Alamat</label>
    <div class="col-md-9">
      <input name="alamat" value="<?php echo $supp->alamat;?>" id="us3-address" placeholder="Nama tempat" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Lat</label>
    <div class="col-md-9">
      <input name="lat" id="us3-lat" value="<?php echo $supp->lat;?>" placeholder="Nama tempat" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Long</label>
    <div class="col-md-9">
      <input name="longi" id="us3-lon" value="<?php echo $supp->longi;?>" placeholder="Nama tempat" class="form-control" type="text" required>
    </div>
  </div>
    <div id="us3" style="width: 100%; height: 100%; display: none;"></div>
  <div class="form-group">
  <label class="control-label col-md-3">Telephone</label>
  <div class="col-md-9">
  <input name="no_telp" value="<?php echo $supp->no_telp;?>" onkeypress="return hanyaAngka(event)" placeholder="Telephone" class="form-control" type="text" required>
  </div>
  </div>
  <div class="form-group">
  <label class="control-label col-md-3">Email</label>
  <div class="col-md-9">
  <input name="email" value="<?php echo $supp->email;?>" placeholder="Email" class="form-control" type="text" required>
  </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Fasilitas Hotel</label><br>
    <div class="col-md-9">
    <?php $res = $supp->fitur_id;
     $res1 = explode(',',$res);
    foreach ($fitur as $key) {?>
      <label style="padding-right: 20px;">
        <?php foreach ($res1 as $key1 => $value1) { ?>
      <input type="checkbox" <?php if ($value1 == $key->id_fitur) echo 'checked = "checked"'; }?> name="fitur_id[]" class="minimal" value="<?php echo $key->id_fitur;?>">
        <?php echo $key->nama;?>
      </label>

          <?php } ?>
        </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Fasilitas Kamar</label><br>
    <div class="col-md-9">
    <?php $res = $supp->fiturkamar;
     $res1 = explode(',',$res);
    foreach ($fiturkamar as $key) {?>
      <label style="padding-right: 20px;">
        <?php foreach ($res1 as $key1 => $value1) { ?>
      <input type="checkbox" <?php if ($value1 == $key->id_fitur) echo 'checked = "checked"'; }?> name="fiturkamar[]" class="minimal" value="<?php echo $key->id_fitur;?>">
        <?php echo ucfirst($key->nama);?>
      </label>

          <?php } ?>
        </div>
  </div>
  <div class="form-group">
  <label class="control-label col-md-3">Bintang</label>
  <div class="col-md-9">
    <?php for ($i=0; $i <= 7 ; $i++) { ?>
      <input type="radio" <?php if ($supp->bintang == $i) echo 'checked = "checked"'; ?> name="bintang" class="minimal" value="<?php echo $i;?>"><?php echo $i;?><br>
    <?php } ?>
  </div>
  </div>
  <div class="form-group">
  <label class="control-label col-md-3">Terdekat</label>
  <div class="col-md-9">
    <select name="kota_id" class="form-control" onChange="getNear(this.value);">
        <option value="" style="display:none">Select</option>
        <?php foreach ($kota as $key) { ?>
          <option <?php if ($key->id_kota == $supp->kota_id) echo 'selected = "selected"'; ?> value="<?php echo $key->id_kota;?>"><?php echo $key->kota;?></option>
        <?php } ?>
    </select><br />
    <div id="nearby">
  </div>
  </div>
<?php } ?>
