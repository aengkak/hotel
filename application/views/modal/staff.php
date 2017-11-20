<?php if($cek == 1) { ?>
  <input name="id_us" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Username</label>
  <div class="col-md-9">
    <input name="username" id="username" placeholder="username" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Password</label>
  <div class="col-md-9">
    <input name="password" id="password" placeholder="password" class="form-control" type="password">
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
  <label class="control-label col-md-3">Nama</label>
  <div class="col-md-9">
    <input name="nama_lengkap" id="nama" placeholder="Nama" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Alamat</label>
  <div class="col-md-9">
    <input name="alamat" id="alamat" placeholder="Alamat" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">No Telp</label>
  <div class="col-md-9">
    <input name="no_telp" id="no_telp" placeholder="No Telp" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Email</label>
  <div class="col-md-9">
    <input name="email" id="email" placeholder="Email" class="form-control" type="text">
  </div>
</div>
<?php } else { ?>
  <input name="id_user" value="<?php echo $staff->id_user;?>" placeholder="id" class="form-control" type="hidden">
<div class="form-group">
  <label class="control-label col-md-3">Username</label>
  <div class="col-md-9">
    <input name="username" id="username" value="<?php echo $staff->username;?>" placeholder="username" class="form-control" type="text">
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
  <label class="control-label col-md-3">Nama</label>
  <div class="col-md-9">
    <input name="nama_lengkap" id="nama" value="<?php echo $staff->nama_lengkap;?>" placeholder="Nama" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Alamat</label>
  <div class="col-md-9">
    <input name="alamat" value="<?php echo $staff->alamat;?>" placeholder="Alamat" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">No Telp</label>
  <div class="col-md-9">
    <input name="no_telp" id="no_telp" value="<?php echo $staff->no_telp;?>" placeholder="No Telp" class="form-control" type="text">
  </div>
</div>
<div class="form-group">
  <label class="control-label col-md-3">Email</label>
  <div class="col-md-9">
    <input name="email" id="email" value="<?php echo $staff->email;?>" placeholder="Email" class="form-control" type="text">
  </div>
</div>
<?php } ?>
