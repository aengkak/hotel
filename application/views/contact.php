<div class="whitebg visible-xs" style="z-index:5; position:relative;" >
        <div class="boxshadowsmall   bgshadowsmall ">
           <div class="container ">
              <div class="row ">
                 <div class=" col-xs-4 col-md-6 " style="margin-top:20px;">
                    <a href="#" class="dropdown-toggle font16 marginsmalltop marginsmallright black" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/indo.png">&nbsp;<span class="black"> IDR </span><span class="caret"></span></a>
                    <div class="dropdown-menu" style="z-index:9999;  min-width:170px; margin-top:15px; ">
                       <div>
                          <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="#"><img src="<?php echo base_url();?>assets/front/images/indo.png">&nbsp; IDR (Indonesia)</a></div>
                          <div class="paddingsmall  ">
                            <a class="black font16 btn noneline" href="#">
                              <img src="<?php echo base_url();?>assets/front/images/english.png">&nbsp; USD (English) </a></div>
                       </div>
                    </div>
                 </div>
                 <div class=" col-xs-8 col-md-6   text-right">
                    <div class="pull-right">
                       <div class="btn-group pull-right marginsmallbottom" style="margin-top:10px;" role="group" aria-label="...">
                          <button type="button" href="#" data-toggle="modal" data-target="#SignUpModal" class="btn font16 whitebg  blueborder blue">DAFTAR</button>
                          <button type="button" href="#" data-toggle="modal" data-target="#LoginModal" class="btn font16 bluebg  blueborder white">MASUK</button>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <div style="height:20px; z-index:4; position:relative;" class="transbgbot"></div>
     <div class="whitebg" >
        <div class="container" >
           <div class="beachbg rond2">
              <div class="overprimary rond2 padbig2">
                 <div class="row flex flexleft">
                    <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/pagecontact.svg" class="iconmedium visible-xs"><img src="<?php echo base_url();?>assets/front/images/icons/pagehelp.svg" class="iconlarge3 marginsmallright  hidden-xs"></div>
                    <div class=" white">
                       <span class="justbold heading2">HUBUNGI KAMI</span><br>
                       <div class="font16">Kami 24 jam siap melayani Anda. Hubungi melalui kontak dibawah ini.</div>
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
                       <div class="col-xs-3 col-sm-8 col-md-8 col-lg-10">
                          <div class="flex flexleft">
                             <a  class="" href="beranda.html"><img style="margin-top:5px;" src="<?php echo base_url();?>assets/front/images/logo.png" class="visible-lg "><img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm visible-md "></a>
                             <ul style="margin-top:-7px;" class="nav navbar-nav hidden-sm hidden-xs marginsmallleft ellipsistext ">
                                <li>
                                   <a style="padding-bottom:5px;" class="" href="promo.html">
                                      <div class="boxshadowsmall greyborder1 rond1" style="padding:10px; margin-top:-10px;"><span class="font16 black">PROMO</span> &nbsp;<img src="<?php echo base_url();?>assets/front/images/dot.png" style="margin-top:-2px;"></div>
                                   </a>
                                </li>
                                <li><a style="padding-bottom:5px;" href="cekpesanan.html"><span class="font16 black">CEK PEMESANAN</span></a></li>
                                <li><a style="padding-bottom:5px;" href="faq.html"><span class="font16 black">BANTUAN</span></a></li>
                             </ul>
                          </div>
                       </div>
                       <div class="col-xs-9 col-sm-4  col-md-4 col-lg-2 text-right">
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
     <div class="container font16">
        <br><br>
        <div class="heading4">
           Untuk respon yang lebih cepat, sampaikan pertanyaan Anda melalui <a class="blue underline" href="formulirkeluhan.html">formulir</a> ini. Kami akan segera menghubungi Anda dengan informasi yang Anda butuhkan.
        </div>
        &nbsp;
        <div class="row">
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="padgridx">
                 <div class="pad15 greybg rond2-top nobobordergrey">
                    <div class="heading3 justbold black">
                       Butuh Bantuan?
                    </div>
                    <div class="marginsmalltop marginsmallbottom">Kami akan dengan senang hati membantu Anda. Customer service kami 24 jam melayani Anda.</div>
                 </div>
                 <div class="pad15 whitebg rond2-bottom bordergrey">
                    <div class=" heading3 black"><img src="<?php echo base_url();?>assets/front/images/icons/phoneblue.svg" width="40px" height="40px"> 031-5313253</div>
                    <div class="black">customer@pesanhotel.com</div>
                    &nbsp;
                 </div>
              </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="padgridx">
                 <div class="pad15 greybg rond2-top nobobordergrey">
                    <div class="heading3 justbold black">
                       Kantor Pusat
                    </div>
                 </div>
                 <div class="pad15 whitebg rond2-bottom bordergrey">
                    <div class=" marginsmallbottom">
                       Pertokoan Kalibutuh Indah<br>
                       Jl. Kalibutuh 134-Q - Surabaya
                    </div>
                    <hr>
                    <div class="marginsmalltop">WA :  +62 31 848 1333</div>
                    <div class="marginsmalltop">Line : +62 31 842 1239</div>
                    <div class="marginsmalltop">YM : @pesanhotelsby</div>
                    &nbsp
                 </div>
              </div>
           </div>
           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
              <div class="padgridx">
                 <div class="pad15 greybg rond2-top nobobordergrey">
                    <div class="heading3 justbold black">
                       Sosial Media
                    </div>
                 </div>
                 <div class="pad15 whitebg rond2-bottom bordergrey">
                    <div >
                       <div class="ellipsistext "> <a class="black noneline underline ellipsistext norco" href="https://www.facebook.com/pesanhotel"><img src="<?php echo base_url();?>assets/front/images/icons/sosmedfb.svg" class="iconmedium marginsmallright"><span>www.facebook.com/pesanhotel</span></a></div>
                       <div class="ellipsistext marginsmalltop"> <a class="black underline noneline ellipsistext norco" href="https://www.instagram.com/pesanhotel/"><img src="<?php echo base_url();?>assets/front/images/icons/sosmedig.svg" class="iconmedium marginsmallright"><span>www.instagram.com/pesanhotel</span></a></div>
                       <div class="ellipsistext marginsmalltop"> <a class="black noneline underline ellipsistext norco" href="https://twitter.com/karuniatrvsby"><img src="<?php echo base_url();?>assets/front/images/icons/sosmedtwitter.svg" class="iconmedium marginsmallright"><span>www.twitter.com/karuniatrvsby</span></a></div>
                       <div class="ellipsistext marginsmalltop"> <a class="black underline noneline ellipsistext norco" href="https://plus.google.com/+pesanhotel"><img src="<?php echo base_url();?>assets/front/images/icons/sosmedgoogle.svg" class="iconmedium marginsmallright"><span>www.plus.google.com/+pesanhotel</span></a></div>
                       &nbsp;
                    </div>
                 </div>
              </div>
           </div>
        </div>
        <br><br><br>
     </div>
     <br><br>
     <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.8783814613885!2d112.71874931447287!3d-7.254679994763294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f94c265b70d5%3A0xd087ef1166b19450!2sKarunia+Travel!5e0!3m2!1sen!2sid!4v1493954525913" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
     <div class=" greybg">
        <div class="tobordergrey">
           <br>
           <div class="container">
            <div class="row">
               <div class="col-sm-4 col-md-4 col-lg-2">
                  <div class="padr20">
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>faq"><img src="<?php echo base_url();?>assets/front/images/icons/aboutwblue.svg" class="iconsmall marginsmallright"> TENTANG KAMI</a>
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>checkbooking"><img src="<?php echo base_url();?>assets/front/images/icons/bookingsblue.svg" class="iconsmall marginsmallright"> CEK PESANAN</a>
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>promo"><img src="<?php echo base_url();?>assets/front/images/icons/promowblue.svg" class="iconsmall marginsmallright"> INFO PROMO</a>
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>contact"><img src="<?php echo base_url();?>assets/front/images/icons/helpwblue.svg" class="iconsmall marginsmallright"> BANTUAN</a>
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
