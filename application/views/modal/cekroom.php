<?php foreach($fee as $keyfee) {$pajak1 = $keyfee->fee; $pajak = $pajak1/100;}?>
<?php $jmlkamar= $this->session->userdata('kamar');
      if ($jmlkamar == NULL) {
        $kk = 1;
      } else {
        $kk = $jmlkamar;
      }
      $hit = 1;
      foreach ($room as $key):
         if ($key->supplier_id == $slug->id_supplier) {
           ?>
           <input type="hidden" name="jmlkamar" value="<?php echo $kk;?>" id="jmlkamar">
      <div class="bordergrey boxshadowsmall boxshadowhovermedium">
         <div class="whitebg paddingmedium">
            <div class="row">
               <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 font16">
                  <span class="pull-left"><?php echo $key->nama_produk;?></span>
                  <button onclick="detailharga(<?php echo $key->id_produk;?>)" data-toggle="tooltip" data-placement="top" title="Rincian Harga?"  class="visible-xs ">&nbsp;&nbsp;
                  <img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall">
                  </button>
               </div>
               <div class="hidden-xs col-sm-6 col-md-4 col-lg-4 text-right">
                  <a href="#ganti" onclick="detailharga(<?php echo $key->id_produk;?>)" class="blue underline font16">
                  <img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall"> Rincian Harga
                  </a>
               </div>
            </div>
         </div>
         <div class="greybg paddingmedium ">
            <div class="row">
               <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                  <?php foreach ($foto as $key2) {
                     if ($key2->produk_id == $key->id_produk) { ?>
                  <div class="padgridx">
                    <img src="<?php echo base_url()."files/".$key2->foto;?>" class="full-width marginsmallbottom rond">
                    <br>
                    <a href="#ganti" onclick="zoomkamar(<?php echo $key2->id_gallery;?>)" class="blue underline pointer font16">Lihat lebih detail</a></div>
                  <?php break; } } ?>
               </div>
               <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                  <div class="padgridx">
                     <div class="row ">
                        <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                           <div class="padgridx">
                              <div class="row grey font16">

                               <?php $r = $key->fitur_id;
                                $resroom = explode(",",$r);
                                $no2 = 1;
                                foreach ($resroom as $keyroom => $valueroom) {
                                  foreach ($fiturroom as $keyf) {
                                    if ($keyf->id_fitur == $valueroom) { ?>
                                 <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                    <div class="padgridt ellipsistext">
                                      <img class="<?php echo $keyf->icon;?> iconmedium" > <?php echo $keyf->nama;?>
                                    </div>
                                 </div>
                               <?php }
                             }
                           $no2++; }?>

                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                           <div class="padgridx">
                              <div class="">
                                  <div class=" text-right@m text-left@s text-left font16">
                              <span class="text-pink"><?php
                                 if ($tutup != NULL) {
                                   foreach ($tutup as $keyt) {
                                     if ($keyt->produk_id == $key->id_produk) {
                                       $g = "Tidak ada";
                                       break;
                                     }
                                     else {
                                       if ($allotment != NULL) {
                                         foreach ($allotment as $keyall) {
                                           if ($keyall->produk_id == $key->id_produk) {
                                             $g = $keyall->jumlah;
                                           } else {
                                             $g = $key->stok;
                                           }
                                         }
                                       } else {
                                         $g = $key->stok;
                                       }
                                     }
                                   } if ($g > 0) {
                                     echo $g;
                                   } else {
                                    echo "Tidak ada";
                                   }
                                 } else {
                                   if ($allotment != NULL) {
                                     foreach ($allotment as $keyall) {
                                       if ($keyall->produk_id == $key->id_produk) {
                                         $g = $keyall->jumlah;
                                         break;
                                       } else {
                                         $g = $key->stok;
                                       }
                                     }
                                   } else {
                                     $g = $key->stok;
                                   } if ($g > 0) {
                                     echo $g;
                                   } else {
                                    echo "Tidak ada";
                                   }
                                 }?> Kamar Tersedia</span><br>
                              <div class="mt10"> <img src="<?php echo base_url();?>assets/front/images/icons/guestblue.svg" class="iconsmall"><img src="<?php echo base_url();?>assets/front/images/icons/guestblue.svg" class="iconsmall"> Maks. 2 orang</div>
                           </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-right@m text-left@s text-left ">
                           <div class="justbold marginsmallbottom"><span class="font16  grey">IDR &nbsp;</span>
                             <span class="text-pink heading3" >
                               <span id="hasil<?php echo $hit;?>">
                              <?php if ($allotment != NULL) {
                                 foreach ($allotment as $keyall):
                                   if ($keyall->produk_id == $key->id_produk){
                                  $g = $keyall->harga;
                                  break;
                                 } else {
                                  $g = $key->harga_produk;
                                 }
                               endforeach; $tambahan = $pajak*$g; echo number_format($g+$tambahan);
                                 } else {
                                 $tambahan = $pajak*$key->harga_produk; echo number_format($key->harga_produk+$tambahan);
                                 }?>
                                 </span>
                                 <input type="hidden" value="<?php
                                 if ($allotment != NULL) {
                                    foreach ($allotment as $keyall):
                                      if ($keyall->produk_id == $key->id_produk){
                                     $g = $keyall->harga;
                                     break;
                                    } else {
                                     $g = $key->harga_produk;
                                    }
                                  endforeach; $tambahan = $pajak*$g; echo $g+$tambahan;
                                    } else {
                                    $tambahan = $pajak*$key->harga_produk; echo $key->harga_produk +$tambahan;
                                    }
                               ?>" name="hitung" id="hitung<?php echo $hit;?>">

                              </span>
                           </div>
                           <form action="" method="post">
                           <input type="hidden" value="<?php echo $key->id_produk;?>" name="id_produk">
                           <input type="hidden" name="id_supplier" value="<?php echo $slug->id_supplier;?>">
                           <input type="hidden" name="pesan" value="1">
                           <button class="btn  bluebg rond white" type="submit">PESAN <span class="hidden-xs hidden-sm hidden-md">SEKARANG</span></button>
                           </form>
                        </div>
                        <div class="col-xs-12"><br></div>
                     </div>

                  </div>
               </div>
            </div>
         </div>
      </div><br>
      <?php $hit++; } endforeach; ?>