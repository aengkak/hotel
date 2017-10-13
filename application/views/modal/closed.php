<?php if ($cek == 1) { ?>
  <div class="form-group">
    <label class="control-label col-md-3">Room</label>
    <div class="col-md-9">
      <select name="produk_id" id="select" class="form-control">
          <option value="">Select</option>
        <?php foreach ($room as $key) { ?>
          <option value="<?php echo $key->id_produk;?>"><?php echo $key->nama_produk;?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">From</label>
    <div class="col-md-9">
      <input name="dari" placeholder="From" id="datepicker" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">To</label>
    <div class="col-md-9">
      <input name="sampai" placeholder="To" id="datepicker1" class="form-control" type="text">
    </div>
  </div>
<?php } else { ?>
<input name="id_tutup" value="<?php echo $closed->id_tutup;?>" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Room</label>
  <div class="col-md-9">
    <select name="produk_id" id="state-list" class="form-control">
        <option value="">Select</option>
      <?php foreach ($room as $r) { ?>
        <option <?php if ($r->id_produk == $closed->produk_id) echo 'selected = "selected"'; ?> value="<?php echo $r->id_produk;?>"><?php echo $r->nama_produk;?></option>
      <?php } ?>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">From</label>
  <div class="col-md-9">
    <input name="dari" value="<?php echo $closed->dari;?>" placeholder="From" id="datepicker" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">To</label>
  <div class="col-md-9">
    <input name="sampai" value="<?php echo $closed->sampai;?>" placeholder="To" id="datepicker1" class="form-control" type="text">
  </div>
</div>
<?php } ?>
