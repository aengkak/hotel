<?php $f = $supplier->fitur_id;
$res = explode(",",$f);
foreach ($res as $key => $value) {
  foreach ($fitur as $keyf) {
    if ($keyf->id_fitur == $value) { ?>
      <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 heading4 justbold norcol">
        <span class="<?php echo "g".$keyf->icon;?> iconlarge marginsmallright"></span><?php echo $keyf->nama;?> 
      </div>
    <?php }
  }
}?>
