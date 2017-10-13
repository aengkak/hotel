<?php if($cek == 1) { ?>
  <input name="id_us" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Username</label>
  <div class="col-md-9">
    <input name="username" placeholder="username" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Password</label>
  <div class="col-md-9">
    <input name="password" placeholder="password" class="form-control" type="password">
  </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Akses</label>
<div class="col-md-9">
  <?php foreach ($akses as $key) {?>
    <label>
        <input type="checkbox" name="akses_id[]" class="minimal" value="<?php echo $key->id_akses;?>">
          <?php echo $key->akses;?>
    </label><br />
  <?php } ?>

</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Full Name</label>
  <div class="col-md-9">
    <input name="nama_lengkap" placeholder="Full Name" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Address</label>
  <div class="col-md-9">
    <input name="alamat" placeholder="Address" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Phone Number</label>
  <div class="col-md-9">
    <input name="no_telp" placeholder="Phone Number" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Email</label>
  <div class="col-md-9">
    <input name="email" placeholder="Email" class="form-control" type="text">
  </div>
</div>
<?php } else { ?>
  <input name="id_user" value="<?php echo $staff->id_user;?>" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Username</label>
  <div class="col-md-9">
    <input name="username" value="<?php echo $staff->username;?>" placeholder="username" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Password</label>
  <div class="col-md-9">
    <input name="password" placeholder="password" class="form-control" type="password">
  </div>
</div>
<div class="form-group">
<label class="control-label col-md-3">Akses</label>
<div class="col-md-9">
  <?php $res = $staff->akses_id;
  $res1 = explode(',',$res);
  foreach ($akses as $key) {?>
    <label>
          <?php foreach ($res1 as $key1 => $value1) { ?>
        <input type="checkbox" <?php if ($value1 == $key->id_akses) echo 'checked = "checked"'; }?> name="akses_id[]" class="minimal" value="<?php echo $key->id_akses;?>">
          <?php echo $key->akses;?>
    </label><br />
  <?php } ?>

</div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Full Name</label>
  <div class="col-md-9">
    <input name="nama_lengkap" value="<?php echo $staff->nama_lengkap;?>" placeholder="Full Name" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Address</label>
  <div class="col-md-9">
    <input name="alamat" value="<?php echo $staff->alamat;?>" placeholder="Address" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Phone Number</label>
  <div class="col-md-9">
    <input name="no_telp" value="<?php echo $staff->no_telp;?>" placeholder="Phone Number" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Email</label>
  <div class="col-md-9">
    <input name="email" value="<?php echo $staff->email;?>" placeholder="Email" class="form-control" type="text">
  </div>
</div>
<?php } ?>
