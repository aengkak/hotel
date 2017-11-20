<div class="form-group">
  <label class="control-label col-md-3">Nama</label>
  <div class="col-md-9">
    <input name="nama_lengkap" value="<?php echo $user->nama_lengkap;?>" id="nama_lengkap" class="form-control" type="text" required>
  </div>
</div><div class="form-group">
  <label class="control-label col-md-3">Alamat</label>
  <div class="col-md-9">
    <input name="alamat" id="alamat" value="<?php echo $user->alamat;?>" class="form-control" type="text" required>
  </div>
</div><div class="form-group">
  <label class="control-label col-md-3">No Telp</label>
  <div class="col-md-9">
    <input name="no_telp" id="no_telp" value="<?php echo $user->no_telp;?>" class="form-control" type="text" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Email</label>
  <div class="col-md-9">
    <input name="email" id="email" value="<?php echo $user->email;?>" class="form-control" type="email" required>
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Sandi</label>
  <div class="col-md-9">
    <input name="lama" id="lama" class="form-control" type="password" required>
  </div>
</div>
