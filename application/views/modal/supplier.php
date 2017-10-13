<?php if($cek == 1) { ?>
  <input name="id_supplier" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
<label class="control-label col-md-3">Name</label>
<div class="col-md-9">
<input name="nama_supplier" placeholder="Name" class="form-control" type="text" required>
</div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Address</label>
<div class="col-md-9">
<input name="alamat" placeholder="Address" class="form-control" type="text" required>
</div>
</div>
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
<?php } else { ?>
  <input name="id_supplier" value="<?php echo $supp->id_supplier;?>" placeholder="id" class="form-control" type="hidden">
  <div class="form-group">
  <label class="control-label col-md-3">Name</label>
  <div class="col-md-9">
  <input name="nama_supplier" value="<?php echo $supp->nama_supplier;?>" placeholder="Name" class="form-control" type="text" required>
  </div>
  </div>
  <div class="form-group">
  <label class="control-label col-md-3">Address</label>
  <div class="col-md-9">
  <input name="alamat" value="<?php echo $supp->alamat;?>" placeholder="Address" class="form-control" type="text" required>
  </div>
  </div>
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
<?php } ?>
