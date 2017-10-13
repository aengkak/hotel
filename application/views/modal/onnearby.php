<?php if ($cek == 0){ ?>
  <?php $res = $supp->nearby;
  $res1 = explode(',',$res);
  foreach ($nearby as $key) { ?>
    <label style="padding-right: 20px;">
        <?php foreach ($res1 as $key1 => $value1) { ?>
        <input type="checkbox" <?php if ($value1 == $key->id_nearby) echo 'checked = "checked"'; }?> value="<?php echo $key->id_nearby;?>" name="nearby[]" class="minimal" >
          <?php echo $key->tempat;?>
    </label>
  <?php } ?>
<?php } else { ?>
  <?php foreach ($nearby as $key) { ?>
    <label style="padding-right: 20px;">
        <input type="checkbox" value="<?php echo $key->id_nearby;?>" name="nearby[]" class="minimal" >
          <?php echo $key->tempat;?>
    </label>
  <?php } ?>
<?php } ?>
