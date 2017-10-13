<?php if($cek == 1) { ?>
  <input type="hidden" id="cek" name="cek" value="<?php echo $cek;?>" />
<div class="form-group">
  <label class="control-label col-md-3">Stock</label>
  <div class="col-md-9">
    <input name="jumlah" value="<?php echo $select->stok;?>" id="jumlah" onkeypress="return hanyaAngka(event)" placeholder="Stock" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Room</label>
  <div class="col-md-9">
    <select name="produk_id" id="produk_id" class="form-control">
        <option value="">Select</option>
        <option id="produk_id" selected value="<?php echo $select->id_produk;?>"><?php echo $select->nama_produk;?></option>
    </select>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Price</label>
  <div class="col-md-9">
    <input name="harga" value="<?php echo $select->harga_produk;?>" id="harga" onkeypress="return hanyaAngka(event)" placeholder="Price" class="form-control" type="text">
  </div>
</div>
    <div class="form-group">
        <label class="col-md-3 control-label" for="color">Color</label>
        <div class="col-md-9">
            <input id="color" value="<?php echo $select->warna;?>" name="color" type="text" class="form-control input-md" />
            <span class="help-block">Click to pick a color</span>
        </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3">Status</label>
      <div class="col-md-9">
        <select name="st" id="st" class="form-control">
            <option value="">Select</option>
            <option id="st" selected value="1">Open</option>
            <option id="st" value="0">Close</option>
        </select>
      </div>
    </div>

  <?php } else if($cek == 2) { ?>
    <input type="hidden" id="cek" name="cek" value="<?php echo $cek;?>" />
    <div class="form-group">
      <label class="control-label col-md-3">Stock</label>
      <div class="col-md-9">
        <input name="jumlah" id="jumlah" onkeypress="return hanyaAngka(event)" placeholder="Stock" class="form-control" type="text">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3">Room</label>
      <div class="col-md-9">
        <select name="produk_id" id="produk_id" class="form-control">
            <option value="">Select</option>
            <option id="produk_id" selected value="<?php echo $select->id_produk;?>"><?php echo $select->nama_produk;?></option>
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
            <label class="col-md-3 control-label" for="color">Color</label>
            <div class="col-md-9">
                <input id="color" value="<?php echo $select->warna;?>" name="color" type="text" class="form-control input-md" />
                <span class="help-block">Click to pick a color</span>
            </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Status</label>
        <div class="col-md-9">
          <select name="st" id="st" class="form-control">
              <option value="">Select</option>
              <option id="st" value="1">Open</option>
              <option id="st" selected value="0">Close</option>
          </select>
        </div>
      </div>

<?php } else { ?>
  <input type="hidden" id="cek" name="cek" value="<?php echo $cek;?>" />
  <div class="form-group">
    <label class="control-label col-md-3">Stock</label>
    <div class="col-md-9">
      <input name="jumlah" id="jumlah" value="<?php echo $allotment->jumlah;?>" onkeypress="return hanyaAngka(event)" placeholder="Stock" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Room</label>
    <div class="col-md-9">
      <select name="produk_id" id="produk_id" class="form-control">
          <option value="">Select</option>
          <option id="produk_id" selected value="<?php echo $allotment->produk_id;?>"><?php echo $allotment->nama_produk;?></option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Price</label>
    <div class="col-md-9">
      <input name="harga" value="<?php echo $allotment->harga;?>" id="harga" onkeypress="return hanyaAngka(event)" placeholder="Price" class="form-control" type="text">
    </div>
  </div>
      <div class="form-group">
          <label class="col-md-3 control-label" for="color">Color</label>
          <div class="col-md-9">
              <input id="color" value="<?php echo $allotment->warna;?>" name="color" type="text" class="form-control input-md" />
              <span class="help-block">Click to pick a color</span>
          </div>
      </div>
      <div class="form-group">
        <label class="control-label col-md-3">Status</label>
        <div class="col-md-9">
          <select name="st" id="st" class="form-control">
              <option value="">Select</option>
              <option id="st" selected value="1">Open</option>
              <option id="st" value="0">Close</option>
          </select>
        </div>
      </div>
<?php } ?>
