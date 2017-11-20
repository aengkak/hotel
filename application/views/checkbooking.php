
<div style="height:20px; z-index:4; position:relative;" class="transbgbot"></div>
<div class="whitebg" >
   <div class="container" >
      <div class="beachbg rond2">
         <div class="overprimary rond2 padbig2">
            <div class="row flex flexleft">
               <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/pagebookings.svg" class="iconmedium visible-xs"><img src="<?php echo base_url();?>assets/front/images/icons/pagebookings.svg" class="iconlarge3 marginsmallright  hidden-xs"></div>
               <div class=" white">
                  <span class="justbold heading2">CEK PEMESANAN</span><br>
                  <div class="font16">Ketahui pesanan anda saat ini dalam proses pembayaran atau selesai.</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="" style="z-index:3; position:relative;  " >
   <div class=" whitebg bottombordergrey boxshadowsmall affixed-element-top js-affixed-element-top">
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
                           <li><a style="padding-bottom:5px;" href="faq.html"><span class="font16 black">BANTUAN</span></a></li>
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
                    
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <br>
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <div class="bordergrey ">
            <div class="paddingmedium whitebg">
               <div class="row font16">
                 <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                    <div class="padgridr">Id Booking</div>
                 </div>
                 <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                    <div class="padgridr"><?php echo $booking->id_pemesanan;?></div>
                 </div>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                     <div class="padgridr">Name</div>
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                     <div class="padgridr"><?php echo $booking->nama_pemesan;?></div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                     <div class="padgridr">Email</div>
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                     <div class="padgridr"><?php echo $booking->email_pemesan;?></div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                     <div class="padgridr">No.telp</div>
                  </div>
                  <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                     <div class="padgridr"><?php echo $booking->no_pemesan;?></div>
                  </div>
                  <?php $a = $booking->datang;
                  if ($a != NULL) { ?>
                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                       <div class="padgridr">Jam Kedatangan</div>
                    </div>
                    <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                       <div class="padgridr"><?php echo $a;?></div>
                    </div>
                  <?php } ?>

               </div>
            </div>
            <div class="paddingmedium tobordergrey greybg">
               <div class=" marginsmallbottom font16">Permintaan khusus</div>
               <?php $permintaan = explode(",", $booking->ket);
               foreach ($permintaan as $key => $value) { ?>
                  <div class="black marginsmallbottom font16"><?php echo $value;?></div>
               <?php }
                  ?>
            </div>
         </div>
         <br>
         <div class="bordergrey">
            <div class="tobordergrey greybg paddingmedium font16">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Total Price
                    <img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall" data-toggle="tooltip" data-placement="top" title="Pajak dan biaya layanan pada umuumnya mencakup biaya yang PesanHotel bayarkan kepada vendor atau yang ditagih oleh vendor. Untuk informasi lebih lanjut silahkan simak ketentuan Penggunaan PesanHotel. Pajak dan biaya layanan juga mencakup biaya yang PesanHotel tetapkan sebagai kompensasi untuk memroses reservasi."></div>

                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s black">IDR <?php echo number_format($booking->bayar);?></div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginsmalltop"> Termasuk dalam harga : Imbalan layanan  10%, pajak 10%</div>
               </div>
            </div>
         </div>
         <br>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
         <div class="padl30">
            <div class="bordergrey ">
               <div class="paddingmedium whitebg">
                  <div class="heading3 black justbold"><?php echo $booking->nama_supplier;?></div>
                  <br>
                  <hr>
                  <div class="row font16">
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                       <?php foreach ($foto as $keyf) {
                         if ($keyf->produk_id == $booking->produk_id) { ?>
                          <img src="<?php echo base_url();?>files/<?php echo $keyf->foto ;?>" class="full-width">
                         <?php } ?>

                       <?php } ?>
                       </div>

                     <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                        <div class="padl30">
                           <div class="row ">
                              <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                 <div class="padgridr">Status</div>
                              </div>
                              <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                 <div class="padgridr hidden-xs">:</div>
                              </div>
                              <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 text-success breakable">
                                 <div class="padgridr">
                                   <?php if ($booking->status_pemesanan == 0) {
                                     echo "Dalam Proses";
                                   } elseif($booking->status_pemesanan == 1) {
                                     echo "Berhasil";
                                   } elseif ($booking->status_pemesanan == 2) {
                                     echo "Ditolak";
                                   } elseif ($booking->status_pemesanan == 3) {
                                     echo "Batal";
                                   }?>
                                 </div>
                              </div>

                              <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                 <div class="padgridr">Rooms</div>
                              </div>
                              <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                 <div class="padgridr hidden-xs">:</div>
                              </div>
                              <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                 <div class="padgridr"><?php echo $booking->kamar;?> x <?php echo $booking->nama_produk;?></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <?php if ($booking->status_pemesanan == 0) { ?>

                    <div class="text-center bordergrey greybg1 font16 pad15">Pesanan Anda belum dibayar silahkan teruskan pembayaran Anda.</div>
                    <br>
                    <form action="" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                      <input type="hidden" value="up" name="up">
                      <input type="hidden" value="<?php echo $booking->id_pemesanan;?>" name="id_pemesanan" id="exampleInputFile">
                       <input type="file" name="foto" id="exampleInputFile">
                    </div>
                    <br>
                    <div class="font16">
                       <button type="submit" class="btn  bluebg white rond btn-lg marginsmallbottom">UPLOAD BUKTI TRANSFER</button><br>
                    </div>
                  </form>
                  <?php } elseif ($booking->status_pemesanan == 1) { ?>
                    <div class="font16">
                      <form action="<?php echo base_url();?>cetakpdf" method="post">
                        <input type="hidden" value="<?php echo $booking->id_pemesanan;?>" name="id">
                       <button type="submit" class="btn  bluebg white rond btn-lg marginsmallbottom">Download Evoucher</button><br>
                     </form>
                    </div>
                  <?php } ?>

               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="bluebg padding text-center font16 white">
   <div class="container"><br>Hak Cipta © 2005 – 2017 PesanHotel Company Pte. Ltd. Semua Hak Dilindungi Undang-undang.<br>
      PesanHotel adalah bagian dari Karunia Travel Group, penyedia layanan online terdepan untuk perjalanan dan yang terkait lainnya di dunia. <br><br><br>
   </div>
</div>
