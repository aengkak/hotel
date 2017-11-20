<?php if($cek == 1) { ?>
  <input name="id_gallery" value="0" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Foto</label>
  <div class="col-md-9">
    <input name="foto" id="foto" class="form-control" type="file">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Keterangan</label>
  <div class="col-md-9">
    <input name="ket" id="ket" placeholder="Keterangan" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Untuk</label>
  <div class="col-md-9">
    <select name="produk_id" id="select" class="form-control">
        <option value="0">Hotel</option>
      <?php foreach ($room as $key) { ?>
        <option value="<?php echo $key->id_produk;?>"><?php echo $key->nama_produk;?></option>
      <?php } ?>
    </select>
  </div>
</div>
<?php } else { ?>
  <input name="id_gallery" value="<?php echo $gal->id_gallery;?>" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Foto</label>
  <div class="col-md-9">
    <input name="foto" id="foto" class="form-control" type="file">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Keterangan</label>
  <div class="col-md-9">
    <input name="ket" id="ket" value="<?php echo $gal->ket;?>" placeholder="Keterangan" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Untuk</label>
  <div class="col-md-9">
    <select name="produk_id" id="state-list" class="form-control">
        <option <?php if ($gal->produk_id == 0) echo 'selected = "selected"'; ?> value="0">Hotel</option>
      <?php foreach ($room as $r) { ?>
        <option <?php if ($r->id_produk == $gal->produk_id) echo 'selected = "selected"'; ?> value="<?php echo $r->id_produk;?>"><?php echo $r->nama_produk;?></option>
      <?php } ?>
    </select>
  </div>
</div>
<?php } ?>
