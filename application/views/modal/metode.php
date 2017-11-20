<?php if($cek == 1) { ?>

  <div class="form-group">
    <label class="control-label col-md-3">Bank</label>
    <div class="col-md-9">
      <input name="bank" id="bank" placeholder="Bank" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Atas Nama</label>
    <div class="col-md-9">
      <input name="nama" id="nama" placeholder="Nama" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">No Rekening</label>
    <div class="col-md-9">
      <input name="rek" id="rek" placeholder="No Rekening" class="form-control" type="text" required>
    </div>
  </div>

<?php } else { ?>
  <input name="id_metode" value="<?php echo $metode->id_metode;?>" class="form-control" type="hidden">

  <div class="form-group">
    <label class="control-label col-md-3">Bank</label>
    <div class="col-md-9">
      <input name="bank" id="bank" value="<?php echo $metode->bank;?>" placeholder="Bank" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Atas Nama</label>
    <div class="col-md-9">
      <input name="nama" id="nama" value="<?php echo $metode->nama;?>" placeholder="Nama" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">No Rekening</label>
    <div class="col-md-9">
      <input name="rek" id="rek" value="<?php echo $metode->rek;?>" placeholder="No Rekening" class="form-control" type="text" required>
    </div>
  </div>

<?php } ?>
