<!-- Start Hotel List 1 -->
<?php $kamar = $this->input->post('kamar');
foreach ($search as $key):
  foreach ($foto as $key2) {
   if ($key->id_supplier == $key2->supplier_id) {
     $cover = $key2->foto;
   }
 }
 ?>
<div class=" bordergrey boxshadowhovermedium whitebg boxshadowsmall marginsmallbottom">
   <div class=" row rowflex">
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ellipsistext">
         <div class="inline full-width" >
            <img src="<?php echo base_url()."files/".$cover;?>" width="100%" height="250" class="full-width hidden-xs">
            <img src="<?php echo base_url()."files/".$cover;?>" class="visible-xs full-width"  width="100%" height="200">
            <div class="overlay overlay-primary white font16 ellipsistext position-bottom "><?php echo $key->alamat;?></div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 greybg" >
         <div  class=" paddingmedium">
            <div  class="heading3 norcol"><?php echo $key->nama_supplier;?></div>
            <div class="ellipsistext marginsmalltop"><img src="<?php echo base_url();?>assets/front/images/stars-03.png"><img src="<?php echo base_url();?>assets/front/images/icons/locationblue.svg" class="iconmedium marginsmallleft"><span class="blue font16"> <?php echo $key->kota;?></span></div>
            <div class="text-pink font16 mt10"><?php foreach ($allotment as $keyall) {
              if ($keyall->supplier_id == $key->id_supplier) {
                echo "$keyall->jumlah";
              } else {
                foreach ($room as $keyr) {
                  if ($keyr->supplier_id == $key->id_supplier) {
                    $r = $keyr->stok;
                  }
                } echo $r;
              }
            }?> Room Available</div>
            <div class="marginsmalltop" data-toggle="tooltip" data-placement="top" title="Detail Layanan">
               <a href=""  data-toggle="modal" data-target="#modalLayananHotel1" class=" marginsmalltop ellipsistext ">
                  <div class="row">
                     <div class=" softgreenbg col-xs-2 col-sm-2 col-md-3 col-lg-2 rond-left  ellipsistext">
                        <div class="paddingsmall trimmersize  white">Gratis</div>
                     </div>
                     <div class=" ellipsistext col-xs-1 col-sm-1 col-md-1 softgreenbg text-right col-lg-1" ><img src="<?php echo base_url();?>assets/front/images/trimmerwhite.png" class="trimmersize"></div>
                     <div class="pull-left paddingsmall col-xs-4 col-sm-3 whitebg col-md-4 col-lg-3 ellipsistext softgreen ribordergrey"><img src="<?php echo base_url();?>assets/front/images/icons/wifigreen.svg" class="iconsmall "><span class="marginsmallright ellipsistext"> Wifi</span></div>
                     <div class="col-xs-5 col-sm-6 col-md-4 col-lg-6 whitebg ellipsistext rond-right ellipsistext">
                        <div class="marginsmallright ellipsistext paddingsmall softgreen "><img src="<?php echo base_url();?>assets/front/images/icons/breakfastgreen.svg" class="iconsmall"> <span class="ellipsistext">Sarapan</span></div>
                     </div>
                  </div>
               </a>
            </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 whitebg">
         <div  class=" paddingmedium">
            <div data-toggle="tooltip" data-placement="top" title="Detail Ulasan">
               <a href=""  data-toggle="modal" data-target="#modalReviewHotel1" class=" ">
                  <div class="row">
                     <div class="pull-left bold white ripiu text-left">89</div>
                     <div class="pull-left ml10 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                  </div>
               </a>
            </div>
            <div class="paddingsmall ">
               <div class="flex flexleft">
                  <div><img src="<?php echo base_url();?>assets/front/images/ollie_BubbleRating_4_119x20.svg" class="mt5" height="20" width="120"></div>
                  <div class="paddingsmall grey"> (1611)</div>
               </div>
            </div>
            <div class="ellipsistext marginsmalltop font16 "  data-toggle="tooltip" data-placement="top" title="Detail Harga"> Per malam mulai dari <a href="#" data-toggle="modal" data-target="#modalHotel1" ><img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall"></a></div>
            <div class="" >
               <div class="row">
                  <div class="col-xs-8 col-md-8 col-sm-8 ellipsistext col-lg-8 font20 justbold"><span class="norcol">IDR&nbsp;</span><span class="text-pink"><?php
                  if ($allotment != NULL) {
                    foreach ($allotment as $keyall) {
                     if ($keyall->supplier_id == $key->id_supplier) {
                       echo number_format($keyall->harga*$kamar);
                     } else {
                       foreach ($room as $keyr) {
                         if ($keyr->supplier_id == $key->id_supplier) {
                           $h = $keyr->harga_produk;
                         }
                       } echo number_format($h*$kamar);
                     }
                   }
                 } else {
                   foreach ($room as $keyr) {
                     if ($keyr->supplier_id == $key->id_supplier) {
                       $h = $keyr->harga_produk;
                     }
                   } echo number_format($h*$kamar);
                 }
                   ?></span></div>
                  <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 text-right"><a href="<?php echo base_url()."check/".$key->slug;?>" class="btn full-width softgreenbg white rond"> PILIH </a></div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<?php endforeach; ?>
<!-- Start Pagination -->  <br><br><br><br>
<div class="row">
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center text-center@s text-left@m font16 norcol marginsmalltop marginsmallbottom">Halaman 1 dari 5</div>
   <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 font16 text-center text-center@s text-right@m">
      <nav aria-label="Page navigation">
         <ul class="pagination">
            <li>
               <a href="#" aria-label="Previous">
               <span aria-hidden="true">&laquo;</span>
               </a>
            </li>
            <li><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#">4</a></li>
            <li><a href="#">5</a></li>
            <li>
               <a href="#" aria-label="Next">
               <span aria-hidden="true">&raquo;</span>
               </a>
            </li>
         </ul>
      </nav>
   </div>
</div>
<!-- End Pagination -->
