
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
   <br><br>
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
        <form action="" method="post">
         <input name="id_pemesanan" placeholder="Booking ID" type="text" class="full-width form-control input-lg" >
         <br><br>
         <input name="email" placeholder="Email" type="text" class="full-width form-control input-lg" >
         <br><br>
         <button type="submit" class="btn btn-lg bluebg white rond full-width">CEK PESANAN</button>
       </form>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 font16">
         <div class="padl30">
            <div class="visible-xs "><br><br></div>
            <div class="bordergrey greybg rond2 padbig">
               <div class="">Lengkapi isian di samping untuk melakukan pengecekan pemesanan PesanHotel Anda.</div>
               <div class="marginsmalltop"><span class=" black ">
                  Booking ID atau ID Pemesanan</span> adalah 9 digit angka yang terdapat di email pemesanan atau voucher menginap PesanHotel yang dikirim ke alamat email Anda.
               </div>
               <div class="uk-margin-top"><br>
                  <span class=" black ">No. Handphone</span> adalah nomor telepon / handphone yang digunakan ketika melakukan pemesanan PesanHotel.
               </div>
            </div>
         </div>
      </div>
   </div>
   <br><br><br><br>
</div>
<div class="bluebg padding text-center font16 white">
   <div class="container"><br>Hak Cipta © 2005 – 2017 PesanHotel Company Pte. Ltd. Semua Hak Dilindungi Undang-undang.<br>
      PesanHotel adalah bagian dari Karunia Travel Group, penyedia layanan online terdepan untuk perjalanan dan yang terkait lainnya di dunia. <br><br><br>
   </div>
</div>
