<?php if($cek == 1) { ?>
  <input name="id_allotment" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Room</label>
    <div class="col-md-9">
      <select name="produk_id" id="select" onChange="getRoom(this.value);" class="form-control">
          <option value="">Select</option>
        <?php foreach ($room as $key) { ?>
          <option value="<?php echo $key->id_produk;?>"><?php echo $key->nama_produk;?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Price</label>
    <div class="col-md-9">
      <input name="harga" id="harga" onkeypress="return hanyaAngka(event)" placeholder="Price" class="form-control" type="text">
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
  <div class="form-group">
    <label class="control-label col-md-3">Stock</label>
    <div class="col-md-9">
      <input name="jumlah" onkeypress="return hanyaAngka(event)" placeholder="Stock" class="form-control" type="text">
    </div>
  </div>

<?php } elseif ($cek == 2) { ?>
  <input name="id_allotment" value="<?php echo $select->id_produk;?>" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Room</label>
    <div class="col-md-9">
      <select name="produk_id" id="select" onChange="getRoom(this.value);" class="form-control">
          <option value="">Select</option>
        <?php foreach ($room as $key) { ?>
          <option <?php if ($select->id_produk == $key->id_produk) echo 'selected = "selected"'; ?> value="<?php echo $key->id_produk;?>"><?php echo $key->nama_produk;?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Price</label>
    <div class="col-md-9">
      <input name="harga" id="harga" value="<?php echo $select->harga_produk;?>" id="state-list" onkeypress="return hanyaAngka(event)" placeholder="Price" class="form-control" type="text">
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
  <div class="form-group">
    <label class="control-label col-md-3">Stock</label>
    <div class="col-md-9">
      <input name="jumlah" value="<?php echo $select->stok;?>" onkeypress="return hanyaAngka(event)" placeholder="Stock" class="form-control" type="text">
    </div>
  </div>

<?php } else { ?>
  <input name="id_allotment" value="<?php echo $allot->id_allotment;?>" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
    <label class="control-label col-md-3">Room</label>
    <div class="col-md-9">
      <select name="produk_id" id="state-list" class="form-control">
          <option value="">Select</option>
        <?php foreach ($room as $r) { ?>
          <option <?php if ($r->id_produk == $allot->produk_id) echo 'selected = "selected"'; ?> value="<?php echo $r->id_produk;?>"><?php echo $r->nama_produk;?></option>
        <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Price</label>
    <div class="col-md-9">
      <input name="harga" id="harga" value="<?php echo $allot->harga;?>" onkeypress="return hanyaAngka(event)" placeholder="Price" class="form-control" type="text">
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3">From</label>
    <div class="col-md-9">
      <input name="dari" value="<?php echo $allot->dari;?>" placeholder="From" id="datepicker" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">To</label>
    <div class="col-md-9">
      <input name="sampai" value="<?php echo $allot->sampai;?>" placeholder="To" id="datepicker1" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Stock</label>
    <div class="col-md-9">
      <input name="jumlah" value="<?php echo $allot->jumlah;?>" onkeypress="return hanyaAngka(event)" placeholder="Stock" class="form-control" type="text">
    </div>
  </div>
<?php } ?>
