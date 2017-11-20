<?php if ($cek == 1) { ?>

  <?php
  if ($selesai == NULL) { ?>

    <div class="text-center">
       <img src="<?php echo base_url();?>assets/front/images/nobookings.png"><br>
       <div class="black heading3 justbold">Anda belum mempunyai pesanan yang dibatalkan</div>
       <br><a class="button bluebg white rond btn-lg" href="beranda.html">CARI SEKARANG</a>
    </div>

  <?php } else {
  foreach ($selesai as $key) { ?>

   <div class="row rowflex bordergrey boxshadowhovermedium ">
            <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
            <?php foreach ($foto as $keyf) {
   if ($keyf->supplier_id == $key['supplier_id']) { ?>
            <img src="<?php echo base_url()."files/".$keyf->foto;?>" class="full-width full-height">
            <?php break; } }?>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
               <div class="pad15">
                  <div class="blue heading4"><?php echo $key['nama_supplier'];?> <img src="<?php echo base_url();?>assets/front/images/stars-01.png"></div>
                  <div class="norcol mt10 font16"><?php echo $key['alamat'];?></div>
                  <div class="softgreen mt10 font16">  Selesai</div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 whitebg">
               <div class="pad15">
                  <div class="row font16">
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="padgridr">Check-in :</div>
                     </div>
                     <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="padgridr">
                        <?php echo date('l d F Y', strtotime($key['tgl_in']));?></div>
                     </div>
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                        <div class="padgridr">Check-out :</div>
                     </div>
                     <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                        <div class="padgridr">
                         <?php echo date('l d F Y', strtotime($key['tgl_out']));?> </div>
                     </div>
                  </div>
                  <div class="text-right marginsmalltop"><a href="#" onclick="detail(<?php echo $key['id_pemesanan'];?>)" class="blue font16 underline detail-pesanan-btn">Lihat detail</a></div>
               </div>
            </div>
         </div>
         <br>
  <?php }
echo $this->ajax_pagination->create_links();
}?>
<?php } elseif ($cek == 0) { ?>

  <?php if ($proses == NULL) { ?>

    <div class="text-center">
       <img src="<?php echo base_url();?>assets/front/images/nobookings.png"><br>
       <div class="black heading3 justbold">Anda belum mempunyai pesanan yang dibatalkan</div>
       <br><a class="button bluebg white rond btn-lg" href="beranda.html">CARI SEKARANG</a>
    </div>

  <?php } else {
  foreach ($proses as $key) {?>

<div class="row rowflex bordergrey boxshadowhovermedium ">
     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
     <?php foreach ($foto as $keyf) {
if ($keyf->supplier_id == $key['supplier_id']) { ?>
     <img src="<?php echo base_url()."files/".$keyf->foto;?>" class="full-width full-height">
     <?php break; } }?>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
        <div class="pad15">
           <div class="blue heading4"><?php echo $key['nama_supplier'];?> <img src="<?php echo base_url();?>assets/front/images/stars-01.png"></div>
           <div class="norcol mt10 font16"><?php echo $key['alamat'];?></div>
           <div class="softgreen mt10 font16">  Process</div>
        </div>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 whitebg">
        <div class="pad15">
           <div class="row font16">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="padgridr">Check-in :</div>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                 <div class="padgridr">
                 <?php echo date('l d F Y', strtotime($key['tgl_in']));?></div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="padgridr">Check-out :</div>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                 <div class="padgridr">
                  <?php echo date('l d F Y', strtotime($key['tgl_out']));?> </div>
              </div>
           </div>
           <div class="text-right marginsmalltop"><a href="#" onclick="detail(<?php echo $key['id_pemesanan'];?>);" class="blue font16 underline detail-pesanan-btn">Lihat detail</a></div>
        </div>
     </div>
  </div>
  <br>
<?php }
echo $pagingorder;
} ?>

<?php } elseif ($cek == 2) { ?>

  <?php if ($batal == NULL) { ?>

    <div class="text-center">
       <img src="<?php echo base_url();?>assets/front/images/nobookings.png"><br>
       <div class="black heading3 justbold">Anda belum mempunyai pesanan yang dibatalkan</div>
       <br><a class="button bluebg white rond btn-lg" href="beranda.html">CARI SEKARANG</a>
    </div>

  <?php } else {
  foreach ($batal as $key) {?>

  <div class="row rowflex bordergrey boxshadowhovermedium ">
     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
     <?php foreach ($foto as $keyf) {
  if ($keyf->supplier_id == $key['supplier_id']) { ?>
     <img src="<?php echo base_url()."files/".$keyf->foto;?>" class="full-width full-height">
     <?php break; } }?>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
        <div class="pad15">
           <div class="blue heading4"><?php echo $key['nama_supplier'];?> <img src="<?php echo base_url();?>assets/front/images/stars-01.png"></div>
           <div class="norcol mt10 font16"><?php echo $key['alamat'];?></div>
           <div class="softgreen mt10 font16">  Process</div>
        </div>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 whitebg">
        <div class="pad15">
           <div class="row font16">
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="padgridr">Check-in :</div>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                 <div class="padgridr">
                 <?php echo date('l d F Y', strtotime($key['tgl_in']));?></div>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                 <div class="padgridr">Check-out :</div>
              </div>
              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
                 <div class="padgridr">
                  <?php echo date('l d F Y', strtotime($key['tgl_out']));?> </div>
              </div>
           </div>
           <div class="text-right marginsmalltop"><a href="#" onclick="detail(<?php echo $key['id_pemesanan'];?>);" class="blue font16 underline detail-pesanan-btn">Lihat detail</a></div>
        </div>
     </div>
  </div>
  <br>
  <?php }
  echo $pagingbatal;
} ?>

<?php } ?>
