<?php if ($cek == 0) { ?>
  <input name="id_produk" value="<?php echo $room->id_produk;?>" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Kamar</label>
  <div class="col-md-9">
    <input name="nama_produk" id="nama_produk" value="<?php echo $room->nama_produk;?>" placeholder="Name" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Harga Default (Rp.)</label>
  <div class="col-md-9">
    <input name="harga_produk" id="harga_produk" value="<?php echo $room->harga_produk;?>" onkeypress="return hanyaAngka(event)" placeholder="Default Price" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Fasilitas Kamar</label>
  <div class="col-md-9">
  <?php $res = $room->fitur_id;
   $res1 = explode(',',$res);
   $resf = $supplier->fiturkamar;
   $resf1 = explode(',',$resf);
   foreach ($fitur as $key) {
  foreach ($resf1 as $keyfit => $value) {
    if ($key->id_fitur == $value) { ?>
    <label>
          <?php foreach ($res1 as $key1 => $value1) { ?>
        <input type="checkbox" <?php if ($value1 == $key->id_fitur) echo 'checked = "checked"'; }?> name="fitur_id[]" class="minimal" value="<?php echo $key->id_fitur;?>">
          <?php echo $key->nama;?>
    </label>
        <br />

      <?php } } } ?>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Ukuran Kamar(m<sup>2</sup>)</label>
  <div class="col-md-9">
    <input name="luas" id="luas" value="<?php echo $room->luas;?>" placeholder="m&sup2" class="form-control" type="text"><p></p>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Stock Default</label>
  <div class="col-md-9">
    <input name="stok" id="stok" value="<?php echo $room->stok;?>" placeholder="Stock" class="form-control" type="text"><p></p>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Warna Penanda</label>
  <div class="col-md-9">
    <input name="warna" id="color" value="<?php echo $room->warna;?>" placeholder="Color" class="form-control" type="text"><p></p>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Tempat Tidur</label>
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
    <label class="control-label col-md-3">Kamar</label>
    <div class="col-md-9">
      <input name="nama_produk" id="nama_produk" placeholder="Name" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Harga Default(Rp.)</label>
    <div class="col-md-9">
      <input id="harga_produk" id="harga_produk" name="harga_produk" onkeypress="return hanyaAngka(event)" placeholder="Default Price" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Fasilitas Kamar</label>
    <div class="col-md-9">
    <?php $res = $supplier->fiturkamar;
     $res1 = explode(',',$res);
     foreach ($fitur as $key) {
     foreach ($res1 as $keyf => $value) {
       if ($value == $key->id_fitur) {?>
      <label>
          <input type="checkbox" name="fitur_id[]" class="minimal" value="<?php echo $key->id_fitur;?>">
            <?php echo $key->nama;?>
      </label><br />
    <?php } } } ?>

    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Ukuran Kamar(m<sup>2</sup>)</label>
    <div class="col-md-9">
      <input name="luas" id="luas" placeholder="m&sup2" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Stock Default</label>
    <div class="col-md-9">
      <input name="stok" id="stok" placeholder="Stock" class="form-control" type="text"><p></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Warna Penanda</label>
    <div class="col-md-9">
      <input name="warna" value="#3f51b5" id="color" placeholder="Color" class="form-control" type="text"><p></p>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Tempat Tidur</label>
    <div class="col-md-9">
      <?php foreach ($bed as $key) {?>
      <label>
        <input type="radio" value="<?php echo $key->id_bed;?>" name="bed_id" class="minimal"><?php echo $key->bed;?>
      </label><br />
      <?php } ?>
    </div>
  </div>


  <?php }?>
