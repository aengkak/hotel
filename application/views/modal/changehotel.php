<?php
if ($pemesanan == NULL) {
  if ($room != NULL) {
    foreach ($room as $key) { ?>
      <option value="<?php echo $key->id_produk;?>"><?php echo $key->nama_produk;?></option>
  <?php }
  }
} else {
  if ($room != NULL) {
    foreach ($room as $key) { ?>
      <option <?php if ($key->id_produk == $pemesanan->produk_id) echo 'selected = "selected"'; ?> value="<?php echo $key->id_produk;?>"><?php echo $key->nama_produk;?></option>
  <?php }
  }
} ?>
