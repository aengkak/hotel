<?php if ($cek == 0) { ?>
  <input name="id_produk" value="<?php echo $room->id_produk;?>" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Name Room</label>
  <div class="col-md-9">
    <input name="nama_produk" value="<?php echo $room->nama_produk;?>" placeholder="Name" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Default Price(Rp.)</label>
  <div class="col-md-9">
    <input name="harga_produk" id="harga_produk" value="<?php echo $room->harga_produk;?>" onkeypress="return hanyaAngka(event)" placeholder="Default Price" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Feature Room</label>
  <div class="col-md-9">
  <?php $res = $room->fitur_id;
   $res1 = explode(',',$res);
  foreach ($fitur as $key) {?>
    <label>
          <?php foreach ($res1 as $key1 => $value1) { ?>
        <input type="checkbox" <?php if ($value1 == $key->id_fitur) echo 'checked = "checked"'; }?> name="fitur_id[]" class="minimal" value="<?php echo $key->id_fitur;?>">
          <?php echo $key->nama;?>
    </label>
        <br />

        <?php } ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Room Size(m<sup>2</sup>)</label>
  <div class="col-md-9">
    <input name="luas" value="<?php echo $room->luas;?>" placeholder="m&sup2" class="form-control" type="text"><p></p>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Stock Default</label>
  <div class="col-md-9">
    <input name="stok" value="<?php echo $room->stok;?>" placeholder="Stock" class="form-control" type="text"><p></p>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Tag Color</label>
  <div class="col-md-9">
    <input name="warna" id="color" value="<?php echo $room->warna;?>" placeholder="Color" class="form-control" type="text"><p></p>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Bed</label>
  <div class="col-md-9">
    <?php foreach ($bed as $key) {?>
    <label>
      <input type="radio" <?php if ($room->bed_id == $key->id_bed) echo 'checked = "checked"';?> value="<?php echo $key->id_bed;?>" name="bed_id" class="minimal"><?php echo $key->bed;?>
    </label><br />
    <?php } ?>
  </div>
</div>

<?php } else { ?>
  <input name="id_produk" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Name Room</label>
    <div class="col-md-9">
      <input name="nama_produk" placeholder="Name" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Default Price(Rp.)</label>
    <div class="col-md-9">
      <input id="harga_produk" name="harga_produk" onkeypress="return hanyaAngka(event)" placeholder="Default Price" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Features Room</label>
    <div class="col-md-9">
    <?php foreach ($fitur as $key) {?>
      <label>
          <input type="checkbox" name="fitur_id[]" class="minimal" value="<?php echo $key->id_fitur;?>">
            <?php echo $key->nama;?>
      </label><br />
    <?php } ?>

    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Room Size(m<sup>2</sup>)</label>
    <div class="col-md-9">
      <input name="luas" placeholder="m&sup2" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Stock Default</label>
    <div class="col-md-9">
      <input name="stok" placeholder="Stock" class="form-control" type="text"><p></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Tag Color</label>
    <div class="col-md-9">
      <input name="warna" value="#3f51b5" id="color" placeholder="Color" class="form-control" type="text"><p></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Bed</label>
    <div class="col-md-9">
      <?php foreach ($bed as $key) {?>
      <label>
        <input type="radio" value="<?php echo $key->id_bed;?>" name="bed_id" class="minimal"><?php echo $key->bed;?>
      </label><br />
      <?php } ?>
    </div>
  </div>
  <?php }?>
