
      <div class="" style="z-index:3; position:relative;  " >
         <div class=" whitebg  full-width bottombordergrey boxshadowsmall affixed-element-top js-affixed-element-top">
            <div class="container " >
               <div class="">
                  <div >
                     <div class="row mt10 mb10">
                        <div class="col-xs-3 col-sm-10 col-md-10 col-lg-10">
                           <div class="flex flexleft">
                              <a  class="" href="<?php echo base_url();?>"><img style="margin-top:5px;" src="<?php echo base_url();?>assets/front/images/logo.png" class="visible-lg "><img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm visible-md "></a>
                              <ul style="margin-top:-7px;" class="nav navbar-nav hidden-sm hidden-xs marginsmallleft ellipsistext ">
                                 <li>
                                    <a style="padding-bottom:5px;" class="" href="<?php echo base_url();?>promo">
                                       <div class="boxshadowsmall greyborder1 rond1" style="padding:10px; margin-top:-10px;"><span class="font16 black">PROMO</span> &nbsp;<img src="<?php echo base_url();?>assets/front/images/dot.png" style="margin-top:-2px;"></div>
                                    </a>
                                 </li>
                                 <li><a style="padding-bottom:5px;" href="<?php echo base_url();?>checkbooking"><span class="font16 black">CEK PEMESANAN</span></a></li>
                                 <li><a style="padding-bottom:5px;" href="<?php echo base_url();?>faq"><span class="font16 black">BANTUAN</span></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-xs-9 col-sm-2  col-md-2 col-lg-2 text-right">
                          <?php $c = $this->session->userdata('level');
                           if ($c == "person") { ?>
                            <div class="pull-right mt10">
                               <a class="noneline norcol  font16" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">
                                 <img src="<?php echo base_url();?>assets/front/images/avataruser.png" class="iconmedium "> <img src="<?php echo base_url();?>assets/front/images/icons/triangle-down.svg" class="iconsmall"></a>
                               <div class="dropdown-menu font16" style="min-width:175px; margin-top:10px; ">
                                  <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>myorder"> Pesanan Saya</a></div>
                                  <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="#"> Newsletter</a></div>
                                  <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>profile"> Profil Saya</a></div>
                                  <div class=" paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>logout"> Keluar</a></div>
                               </div>
                            </div>
                         <?php } else { ?>
                           <div class="pull-right ">
                              <div class="btn-group btn-group-lg " style="" role="group" aria-label="...">
                                 <button type="button" href="#" data-toggle="modal" data-target="#SignUpModal" class="btn font16 whitebg  blueborder blue"><img class="iconsmall" src="<?php echo base_url();?>assets/front/images/icons/signupblue.svg"></button>
                                 <button type="button" href="#" data-toggle="modal" data-target="#LoginModal" class="btn font16 bluebg  blueborder white"><img class="iconsmall" src="<?php echo base_url();?>assets/front/images/icons/loginwhite.svg"></button>
                              </div>
                           </div>
                         <?php } ?>
                           <a href="#" style="padding-right:10px;" class="dropdown-toggle ribordergrey marginsmallright pull-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/icons/helpblue.png"  style="margin-top:7px;"  height="35" width="35"></a>
                           <div class="dropdown-menu pull-right" style="min-width:270px; margin-top:5px; ">
                              <div class=" paddingsmall bottombordergrey font16">
                                 <div style="padding:6px 12px;" class="row ">
                                    <div class="col-xs-4 col-md-4"> &nbsp;Telepon </div>
                                    <div class="col-xs-8 col-md-8 ">
                                       <div>+62 31-5313253</div>
                                    </div>
                                 </div>
                              </div>
                              <div class=" paddingsmall  font16">
                                 <div style="padding:6px 12px;" class="row ">
                                    <div class="col-xs-4 col-md-4"> &nbsp;Email </div>
                                    <div class="col-xs-8 col-md-8 ">
                                       <div>cs@karuniatravel.com</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>



      <div class="greybg1" >
         <div class="container">
            <br><br>
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 ">
               <div class="whitebg rond boxshadowsmall hidden-xs">
                  <a class="riblubobg greybg pad10 marginsmalltop heading4 norcol button full-width text-left" href="#"><img src="<?php echo base_url();?>assets/front/images/icons/bookingsgrey.svg" class="iconmedium marginsmallright">Pesanan</a>
                  <a class=" hovergrey pad10 heading4 norcol button full-width text-left" href="#"><img src="<?php echo base_url();?>assets/front/images/icons/newslettergrey.svg" class="iconmedium marginsmallright">Newsletter</a>
                  <a class="marginsmallbottom hovergrey pad10 heading4 norcol button full-width text-left" href="<?php echo base_url();?>profile"><img src="<?php echo base_url();?>assets/front/images/icons/profilegrey.svg" class="iconmedium marginsmallright">Profile</a>
               </div>
               <div class="hidden-xs"><br></div>
               <div class="whitebg marginsmalltop norcol boxshadowsmall rond paddingmedium hidden-xs ellipsistext font16">
                  <div class="marginsmallbottom heading4">24/7 Customer service</div>
                  <hr>
                  <span class="justbold">+62 31-5313253</span><br>
                  <span class=" ellipsistext">customer@karuniatravel.com</span>
               </div>
               
            </div>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
               <div class="padl30s">
                  <div class="daftarpesanan">
                     <div class="row marginsmallbottom">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5">
                           <!-- Nav tabs -->
                           <ul class="nav blue-tabs bobordergrey font18" role="tablist">
                              <li role="presentation" class="active col-xs-4 text-center"><a href="#berjalan" aria-controls="home" role="tab" data-toggle="tab"><span class="visible-xs">Jalan</span><span class="hidden-xs">Berjalan</span></a></li>
                              <li role="presentation" class="col-xs-4 text-center"><a href="#sukses" aria-controls="profile" role="tab" data-toggle="tab"><span class="visible-xs">Selesai</span><span class="hidden-xs">Selesai</span></a></li>
                              <li role="presentation" class="col-xs-4 text-center"><a href="#batal" aria-controls="messages" role="tab" data-toggle="tab"><span class="visible-xs">Batal</span><span class="hidden-xs">Dibatalkan</span></a></li>
                           </ul>
                        </div>
                        <!--<div class="col-xs-12 col-sm-12 col-md-7 col-lg-7">
                           <div class="padl30">
                              <div class=" hidden-xs hidden-sm">
                                 <div class="row rowflexs full-width  font16">
                                    <div class="col-xs-3 col-sm-4  text-right"><img src="<?php echo base_url();?>assets/front/images/icons/sortb.svg" class="iconmedium marginsmallright"> </div>
                                    <div class="col-sm-8 col-xs-9">
                                       <select class="form-control">
                                          <option value="">Urut berdasarkan...</option>
                                          <option value="">Tanggal pemesanan</option>
                                          <option value="">Tanggal Check In</option>
                                       </select>
                                    </div>
								</div>
                              </div>
                              <div class="visible-xs visible-sm padding greybg3 rond  " >
                                 <div class="row">
                                    <div class="col-xs-3 col-sm-3 text-center"><img src="<?php echo base_url();?>assets/front/images/icons/sortwblue.svg" class="iconmedium"></div>
                                    <div class="col-sm-9 col-xs-9">
                                       <select class="form-control">
                                          <option value="">Urut berdasarkan...</option>
                                          <option value="">Tanggal pemesanan</option>
                                          <option value="">Tanggal Check In</option>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>-->
                     </div>
                     <!-- Tab panes -->
                     <div class="tab-content">
                        <div role="tabpanel" class="tab-pane active" id="berjalan">
                           <div class="tab-content ">
                              <div role="tabpanel" class="tab-pane fade in active " id="pagebookings1">
                                <div id="proses">

                                  <?php
                                  if ($proses == NULL) { ?>

                                    <div class="text-center">
                                       <img src="<?php echo base_url();?>assets/front/images/nobookings.png"><br>
                                       <div class="black heading3 justbold">Tidak ada pesananan yang di proses</div>
                                       <br><a class="button bluebg white rond btn-lg" href="<?php echo base_url();?>">Beranda</a>
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
                                           <div class="blue heading4"><?php echo $key['nama_supplier'];?>
                                             <?php $bintang = $key['bintang']; for ($i=0; $i < $bintang; $i++) { ?>
                                               <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
                                             <?php } ?>
                                            </div>
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


                                </div>
                              </div>
                           </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="sukses">
                          <div id="selesai">
                          <?php
                          if ($selesai == NULL) { ?>

                            <div class="text-center">
                               <img src="<?php echo base_url();?>assets/front/images/nobookings.png"><br>
                               <div class="black heading3 justbold">Tidak ada pesananan yang selesai</div>
                               <br><a class="button bluebg white rond btn-lg" href="<?php echo base_url();?>">Beranda</a>
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
                                          <div class="blue heading4"><?php echo $key['nama_supplier'];?>
                                            <?php $bintang = $key['bintang']; for ($i=0; $i < $bintang; $i++) { ?>
                                              <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
                                            <?php } ?>
                                          </div>
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
                                          <div class="row">
                                            <div class="col-xs-8 ellipsistext">
                                              <?php $a = 0; foreach ($ulasan as $keyu) {
                                                if ($key['id_pemesanan'] == $keyu->pemesanan_id) {
                                                  $a = $a + 1;
                                                  ?>
                                                <?php } else {
                                                  $a = $a + 0; ?>

                                              <?php }
                                            } if ($a > 0) { ?>
                                              <span class="blue font16 underline">Telah Memberi ulasan</span>
                                            <?php } else { ?>
                                              <a href="#" onclick="komentar(<?php echo $key['id_pemesanan'];?>)" class="blue font16 underline">Tambahkan Ulasan</a>
                                            <?php } ?>

                                            </div>
                                            <div class="col-xs-4 text-right">
                                              <a href="#" onclick="detail(<?php echo $key['id_pemesanan'];?>)" class="blue font16 underline detail-pesanan-btn">Lihat detail</a>
                                            </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <br>
                        <?php } echo $pagingselesai;
                      }?>

                          </div>
                        </div>
                        <div role="tabpanel" class="tab-pane" id="batal">
                          <div id="cancel">

                            <?php if ($batal == NULL) { ?>

                              <div class="text-center">
                                 <img src="<?php echo base_url();?>assets/front/images/nobookings.png"><br>
                                 <div class="black heading3 justbold">Tidak ada pesanan yang dibatalkan</div>
                                 <br><a class="button bluebg white rond btn-lg" href="<?php echo base_url();?>">Beranda</a>
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
                                     <div class="blue heading4"><?php echo $key['nama_supplier'];?>
                                       <?php $bintang = $key['bintang']; for ($i=0; $i < $bintang; $i++) { ?>
                                         <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
                                       <?php } ?>
                                     </div>
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


                          </div>
                        </div>
                     </div>
                  </div>
                  <!-- Daftar Pesanan -->
                  <div id="pesanansaya" class="daftarpesanan2" style="display:none;">
                  <a href="#pesanansaya" data-toggle="tab" class="norcol underline font16" ><img src="<?php echo base_url();?>assets/front/images/icons/chevron-leftroundgrey.svg" class="iconsmall  "> Kembali ke daftar pesanan</a><br><br>
                     <div id="detailorder"></div>
                  </div>
                  <div class="whitebg marginsmalltop norcol boxshadowsmall rond paddingmedium visible-xs ellipsistext font16">
                     <div class="marginsmallbottom heading4">24/7 Customer service</div>
                     <hr>
                     <span class="justbold">+62 31-5313253</span><br>
                     <span class=" ellipsistext">customer@karuniatravel.com</span>
                  </div>
               </div>
            </div>
         </div>
         <br><br>
      </div>
      <div class=" greybg">
         <div class="tobordergrey">
            <br>
            <div class="container">
               <div class="row">
                  <div class="col-sm-4 col-md-4 col-lg-2">
                     <div style="padding-right:25px;">
                        <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>faq"><img src="<?php echo base_url();?>assets/front/images/icons/aboutwblue.svg" class="iconsmall marginsmallright"> TENTANG KAMI</a>
                        <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>faq"><img src="<?php echo base_url();?>assets/front/images/icons/bookingsblue.svg" class="iconsmall marginsmallright"> CEK PESANAN</a>
                        <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>faq"><img src="<?php echo base_url();?>assets/front/images/icons/promowblue.svg" class="iconsmall marginsmallright"> INFO PROMO</a>
                        <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>faq"><img src="<?php echo base_url();?>assets/front/images/icons/helpwblue.svg" class="iconsmall marginsmallright"> BANTUAN</a>
                     </div>
                  </div>
                  <!-- Mobile Footer -->
                  <div class="col-xs-12 visible-xs marginsmalltop">
                     <a href="#collapseBantuan" data-toggle="collapse" data-target="#collapseBantuan" aria-expanded="false" aria-controls="collapseBantuan" class=" mt10 full-width heading3 justbold norcol">Bantuan <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                     <div class="collapse" id="collapseBantuan">
                        <ul class="bslist mt10">
                           <li>
                              <a class="norcol underline font16" href="<?php echo base_url();?>faq">Cara Pesan</a>
                           </li>
                           <li>
                              <a class="norcol underline font16" href="<?php echo base_url();?>faq">Cara Bayar</a>
                           </li>
                           <li>
                              <a class="norcol underline font16" href="<?php echo base_url();?>faq">Kebijakan Privasi</a>
                           </li>
                           <li>
                              <a class="norcol underline font16"  href="<?php echo base_url();?>faq">Syarat & Ketentuan</a>
                           </li>
                           <li>
                              <a class="norcol underline font16"  href="<?php echo base_url();?>promo">Promo Wisata</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xs-12 visible-xs marginsmalltop">
                     <a href="#collapseProfile" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="false" aria-controls="collapseProfile" class=" mt10 full-width heading3 justbold norcol">Pesan Hotel <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                     <div class="collapse" id="collapseProfile">
                        <ul class="bslist mt10">
                           <li>
                              <a class="norcol underline font16" href="<?php echo base_url();?>faq">Tentang Kami</a>
                           </li>
                           <li>
                              <a class="norcol underline font16" href="http://career.karuniatravel.com/">Karir</a>
                           </li>
                           <li>
                              <a class="norcol underline font16" href="daftarkanhotel.html">Daftarkan Hotel Anda</a>
                           </li>
                           <li>
                              <a class="norcol underline font16"  href="<?php echo base_url();?>promo">Info Promo</a>
                           </li>
                           <li>
                              <a class="norcol underline font16"  href="<?php echo base_url();?>contact">Hubungi Kami</a>
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xs-12 visible-xs marginsmalltop">
                     <a href="#collapseKontak" data-toggle="collapse" data-target="#collapseKontak" aria-expanded="false" aria-controls="collapseKontak" class=" mt10 full-width heading3 justbold norcol">Hubungi Kami <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                     <div class="collapse" id="collapseKontak">
                        <ul class="bslist mt10 font16 norcol">
                           <li>+62 31 848 1333</li>
                           <li>+62 31 842 1239</li>
                           <li>+62 88804801175</li>
                           <li>cs@pesanhotel.com</li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xs-12 visible-xs marginsmalltop">
                     <a href="#collapseKantor" data-toggle="collapse" data-target="#collapseKantor" aria-expanded="false" aria-controls="collapseKantor" class=" mt10 full-width heading3 justbold norcol">Kantor Pusat <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                     <div class="collapse" id="collapseKantor">
                        <ul class="bslist mt10 font16 norcol">
                           <li>PT. Cipta Karunia Pratama</li>
                           <li>Pertokoan Kalibutuh Indah</li>
                           <li>Jl. Kalibutuh 134-Q</li>
                           <li>Surabaya</li>
                        </ul>
                     </div>
                  </div>
                  <!-- End Mobile Footer -->
                  <!-- Footer Large -->
                  <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                     <div class="heading3 justbold">Bantuan</div>
                     <ul class="bslist mt10">
                        <li>
                           <a class="norcol underline font16" href="<?php echo base_url();?>faq">Cara Pesan</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="<?php echo base_url();?>faq">Cara Bayar</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="<?php echo base_url();?>faq">Kebijakan Privasi</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="<?php echo base_url();?>faq">Syarat & Ketentuan</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="<?php echo base_url();?>promo">Promo Wisata</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                     <div class="heading3 justbold">Pesan Hotel</div>
                     <ul class="bslist mt10">
                        <li>
                           <a class="norcol underline font16" href="<?php echo base_url();?>faq">Tentang Kami</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="http://career.karuniatravel.com/">Karir</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="daftarkanhotel.html">Daftarkan Hotel Anda</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="<?php echo base_url();?>promo">Info Promo</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="<?php echo base_url();?>contact">Hubungi Kami</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                     <div class="heading3 justbold">Hotel Populer</div>
                     <ul class="bslist mt10">
                        <?php  $nl = 1;
                     foreach ($popular as $keyp) { ?>
                      <li><a class="norcol underline font16" href="<?php echo base_url()."check/".$keyp->slug;?>"><?php echo $keyp->nama_supplier;?></a></li>
                    <?php if ($nl == 5) {
                      break;
                    }
                     $nl++;} ?>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                     <div class="heading3 justbold">Hubungi Kami</div>
                     <ul class="bslist mt10 font16 norcol">
                        <li>+62 31 848 1333</li>
                        <li>+62 31 842 1239</li>
                        <li>+62 88804801175</li>
                        <li>cs@pesanhotel.com</li>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                     <div class="heading3 justbold">Kantor Pusat</div>
                     <ul class="bslist mt10 font16 norcol">
                        <li>PT. Cipta Karunia Pratama</li>
                        <li>Pertokoan Kalibutuh Indah</li>
                        <li>Jl. Kalibutuh 134-Q</li>
                        <li>Surabaya</li>
                     </ul>
                  </div>
                  <!-- End Footer Large -->
               </div>
               &nbsp;
            </div>
         </div>
         <div class="bluebg padding text-center font16 white">
            <div class="container"><br>Hak Cipta © 2005 – 2017 PesanHotel Company Pte. Ltd. Semua Hak Dilindungi Undang-undang.<br>
               PesanHotel adalah bagian dari Karunia Travel Group, penyedia layanan online terdepan untuk perjalanan dan yang terkait lainnya di dunia. <br><br><br>
            </div>
         </div>
      </div>


      <!-- modal ulasan --->
 <div id="UlasModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="UlasModal">
    <div class="modal-dialog">
      <div class="modal-content rond2">

        <div class="modal-header noborder bluesoftbg modalreviewbg white rond2-top">
          <button type="button" class="close white" data-dismiss="modal" aria-hidden="true">×</button>
          <h2 class="modal-title justbold" id="UlasModal">Tulis Ulasan Anda!</h2>
        </div>
        <div class="modal-body ">
        <div class="heading3 jusbold black">Ulasan Anda</div><br>
        <form id="ulasan">
        <div id="bodyulasan"></div>
      </form>
<br><button onclick="save1()" class="full-width pad15 btn bluebg rond white">TULISKAN</button>
        </div>

      </div>
    </div>
  </div>

  <script src="<?php echo base_url();?>assets/front/js/bootstrap-slider.js"></script>

    <script>var slider = new Slider("#ex6a");
  slider.on("slide", function(sliderValue) {
    document.getElementById("ex6aSliderVal").textContent = sliderValue;
  });</script>
  <script>var slider = new Slider("#ex6b");
  slider.on("slide", function(sliderValue) {
    document.getElementById("ex6bSliderVal").textContent = sliderValue;
  });</script>
  <script>var slider = new Slider("#ex6c");
  slider.on("slide", function(sliderValue) {
    document.getElementById("ex6cSliderVal").textContent = sliderValue;
  });</script>
  <script>var slider = new Slider("#ex6d");
  slider.on("slide", function(sliderValue) {
    document.getElementById("ex6dSliderVal").textContent = sliderValue;
  });</script>
  <script>var slider = new Slider("#ex6e");
  slider.on("slide", function(sliderValue) {
    document.getElementById("ex6eSliderVal").textContent = sliderValue;
  });</script>

<script type="text/javascript">
   $(document).ready(function() {

         $('a[href="#pesanansaya"]').click(function(e) {
         $(".daftarpesanan").show();
         $(".daftarpesanan2").hide();
         });
   });
   function detail(id) {
         $(".daftarpesanan").fadeOut();
         $(".daftarpesanan2").fadeIn();
         $("#detailorder").load("detailpesanan/"+id,function(data){
            $("#detailorder").html(data);
         });
      }

</script>
<script>
function komentar(id) {
  $('#UlasModal').modal('show'); // show bootstrap modal
  $("#bodyulasan").load("<?php echo base_url();?>modalulasan/"+id,function(data){
      $("#bodyulasan").html(data);
      var slidera = new Slider("#ex6a");
      var sliderb = new Slider("#ex6b");
      var sliderc = new Slider("#ex6c");
      var sliderd = new Slider("#ex6d");
      var slidere = new Slider("#ex6e");
    slidera.on("slide", function(sliderValue) {
      document.getElementById("ex6aSliderVal").textContent = sliderValue;
    });
    sliderb.on("slide", function(sliderValue) {
      document.getElementById("ex6bSliderVal").textContent = sliderValue;
    });
    sliderc.on("slide", function(sliderValue) {
      document.getElementById("ex6cSliderVal").textContent = sliderValue;
    });
    sliderd.on("slide", function(sliderValue) {
      document.getElementById("ex6dSliderVal").textContent = sliderValue;
    });
    slidere.on("slide", function(sliderValue) {
      document.getElementById("ex6eSliderVal").textContent = sliderValue;
    });

  });
}
function save1() {
  $.ajax({
    url : "<?php echo base_url();?>addulasan",
    type: "POST",
    data: $('#ulasan').serialize(),
    success: function(data)
    {
      $('#UlasModal').modal('hide');
      location.reload();
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
    }
});
}
</script>
<script>
function confirm1(id)
{
  if(confirm('Are you sure print this data?'))
  {
    // ajax delete data from database
      $.ajax({
        url : "<?php echo base_url();?>cetakpdf",
        type: "POST",
        data: { id: id },
        success: function(data)
        {
          //alert(data);
          window.location = '<?php echo base_url();?>cetakpdf';
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error');
        }
    });

  }
}
</script>
