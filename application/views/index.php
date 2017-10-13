<link href="<?php echo base_url();?>assets/front/css/carousel-index.css" rel="stylesheet">
<div class="whitebg" style="z-index:4; position:relative;">
         <div class="container" >
            <!-- Carousel
               ================================================== -->
            <div id="myCarousel" class="carousel slide " data-ride="carousel">
               <!-- Indicators -->
               <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                  <li data-target="#myCarousel" data-slide-to="2" class="active"></li>
               </ol>
               <div class="carousel-inner rond1 " role="listbox">
                  <div class="item">
                     <img class="first-slide " src="<?php echo base_url();?>assets/front/images/slider1.jpg" alt="First slide">
                  </div>
                  <div class="item">
                     <img class="second-slide " src="<?php echo base_url();?>assets/front/images/slider1.jpg" alt="Second slide">
                  </div>
                  <div class="item active">
                     <img class="third-slide " src="<?php echo base_url();?>assets/front/images/slider1.jpg" alt="Third slide">
                  </div>
               </div>
               <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
               <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
               <span class="sr-only">Previous</span>
               </a>
               <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
               <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
               <span class="sr-only">Next</span>
               </a>
            </div>
            <!-- /.carousel -->
            <div class="" style="z-index:6; position:relative;  margin-top:-325px;">
               <div class="pull-right overlay-primary rond1left" style="padding:5px;"><a class="noneline white font16" href="daftarhotel.html"><img src="<?php echo base_url();?>assets/front/images/daftarhotel.png">&nbsp;<span class="hidden-xs"> Daftarkan hotel anda</span>&nbsp; <img src="<?php echo base_url();?>assets/front/images/chevron-right.png"></a></div>
            </div>
            <div id="searchbox" class=" padsb" style="z-index:5; position:relative;  margin-top:275px;">
               <div class="boxshadowsmall whitebg rond2 bordergrey1">
                  <div style="padding:10px;">
                     <div class="row">
                       <form action="#" method="post">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" data-toggle="tooltip" data-placement="top" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/destinationblue.png" height="30" width="30"></span>
                              <input class="form-control2" name="tempattujuan" onchange="tempattujuan(this.value);" id="tempattujuan" placeholder="Nama hotel, destinasi atau tujuan anda menginap?" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="top" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input name="dari" id="date-start" onchange="change1(this.value);" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon2" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="top" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input name="sampai" id="date-end" onchange="change1(this.value);" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-1 col-lg-1" data-toggle="tooltip" data-placement="top" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/roomblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                 <select id="kamar" name="kamar" onchange="kamar(this.value);">
                                   <?php for ($i=1; $i <=10 ; $i++) { ?>
                                     <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                   <?php } ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-1 col-lg-1" data-toggle="tooltip" data-placement="top" title="Jumlah Tamu" style="padding-right:5px;" data-original-title="Jumlah Tamu">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/guestblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                 <select id="orang" name="orang" onchange="orang(this.value);">
                                   <?php for ($i=1; $i <=30 ; $i++) { ?>
                                     <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                   <?php } ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 "></div>
                        <div class="col-xs-12 visible-xs visible-sm tobordergrey marginsmalltop "></div>
                        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1 borisb">
                           <a id="tombolFilter" href="#collapseFilter" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter"><span class="visible-md-inline visible-lg-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img style="margin-top:7px;margin-bottom:7px;" src="<?php echo base_url();?>assets/front/images/icons/filterblue.png" height="30" width="30"></a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1 sbpos">
                           <button type="submit"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchblue.png" height="30" width="30"></button>
                        </div>

                     </div>
                  </div>
               </div>
            </div>
            <div class="whitebg collapse" id="collapseFilter">
               <div class=" padsb">
                  <br>
                  <div class="row ">
                     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="padgrid">
                           <div class="bordergrey1 rond2 boxshadowsmall">
                              <div class="bobordergrey paddingmedium blue">
                                 <h4>HARGA PER MALAM</h4>
                              </div>
                              <div class="paddingmedium ">
                                 <div style="margin-left:10px;margin-right:10px;"> <input id="ex2" name="harga" class="span2 full-width" value="0,5000000" data-slider-min="0" data-slider-max="5000000" data-slider-step="5" data-slider-value="[0,5000000]" style="display: none;" data-value="0,5000000" type="text"></div>
                                 <div class="marginsmalltop grey ">
                                    <h4>IDR 0 - IDR 5.000.000</h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="padgrid">
                           <div class="bordergrey1 rond2 boxshadowsmall">
                              <div class="bobordergrey paddingmedium blue">
                                 <h4>ULASAN TAMU</h4>
                              </div>
                              <div class="paddingmedium ">
                                 <div style="margin-left:10px;margin-right:10px;"><input id="ex6" data-slider-min="5" data-slider-max="9" data-slider-step="1" data-slider-value="5" style="display: none;" data-value="5" value="5" type="text"></div>
                                 <h4 class="grey"><span id="ex6SliderVal">5</span><span> - Keatas</span></h4>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                        <div class="padgrid">
                           <div class="bordergrey1 rond2 boxshadowsmall">
                              <div class="bobordergrey paddingmedium blue">
                                 <h4>PERINGKAT BINTANG</h4>
                              </div>
                              <div class="paddingmedium ">
                                 <div class="row">
                                    <div class="col-xs-8 col-sm-6 col-md-7 col-lg-6">
                                       <form>
                                          <fieldset class="starability-basic">
                                             <input id="rate5" name="rating" value="5" type="radio">
                                             <label for="rate5" title="Bintang 1">5 stars</label>
                                             <input id="rate4" name="rating" value="4" checked="checked" type="radio">
                                             <label for="rate4" title="Bintang 2">4 stars</label>
                                             <input id="rate3" name="rating" value="3" type="radio">
                                             <label for="rate3" title="Bintang 3">3 stars</label>
                                             <input id="rate2" name="rating" value="2" type="radio">
                                             <label for="rate2" title="Bintang 4">2 stars</label>
                                             <input id="rate1" name="rating" value="1" type="radio">
                                             <label for="rate1" title="Bintang 5">1 star</label>
                                          </fieldset>
                                       </form>
                                    </div>
                                    <div class="col-xs-4 hidden-xs col-sm-6 col-md-5 col-lg-6 ">
                                       <h4 class="grey ellipsistext marginsmallleft">&amp; Semua</h4>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div style="height:50px; z-index:4; position:relative;" class="transbg"></div>
      <div class="" style="z-index:3; position:relative;  " >
         <div class=" whitebg bottombordergrey boxshadowsmall affixed-element-top js-affixed-element-top">
            <div class="container " >
               <div class="">
                  <div >
                     <div class="row mt10 mb10">
                        <div class="col-xs-3 col-sm-1 col-md-1 col-lg-3"> <a  class="" href="beranda.html"><img style="margin-top:5px;" src="<?php echo base_url();?>assets/front/images/logo.png" class="visible-lg "><img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm visible-md "></a></div>
                        <div class="visible-md visible-sm col-md-9 col-sm-9">
                           <ul style="margin-top:-7px;" class="nav navbar-nav ellipsistext ">
                              <li>
                                 <a style="padding-bottom:5px;" class="" href="promo.html">
                                    <div class="boxshadowsmall greyborder1 rond1" style="padding:10px; margin-top:-10px;"><span class="font16 black">PROMO</span> &nbsp;<img src="<?php echo base_url();?>assets/front/images/dot.png" style="margin-top:-2px;"></div>
                                 </a>
                              </li>
                              <li><a style="padding-bottom:5px;" href="cekpesanan.html"><span class="font16 black">CEK PEMESANAN</span></a></li>
                              <li><a style="padding-bottom:5px;" href="faq.html"><span class="font16 black">BANTUAN</span></a></li>
                           </ul>
                        </div>
                        <div class="visible-lg-inline col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/destinationblue.png" height="30" width="30"></span>
                              <input id="tempattujuan1" class="form-control2" placeholder="Hotel, destinasi atau tujuan anda?" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div>
                        <div class="visible-lg-inline col-lg-3">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input id="date-startmo" onchange="change2(this.value);" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input id="date-endmo" onchange="change2(this.value);" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="visible-lg-inline col-lg-1" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/roomblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                 <select id="kamar1" onchange="kamar1(this.value);">
                                   <?php for ($i=1; $i <=10 ; $i++) { ?>
                                     <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                   <?php } ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="visible-lg-inline col-lg-1 " data-toggle="tooltip" data-placement="bottom" title="Jumlah Tamu" style="padding-right:5px;" data-original-title="Jumlah Tamu">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/guestblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                 <select id="orang1" onchange="orang1(this.value);">
                                   <?php for ($i=1; $i <=30 ; $i++) { ?>
                                     <option value="<?php echo $i;?>"><?php echo $i;?></option>
                                   <?php } ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-3 col-sm-2 visible-lg-inline col-md-2 col-lg-1 text-right">
                           <a href="carihotel.html"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchblue.png" height="30" width="30"></a>
                        </div>
                        <div class="col-sm-2 col-xs-9  col-md-2 visible-md visible-xs visible-sm text-right">
                           <a class="pull-right " href="#searchbox"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchblue.png" height="30" width="30"></a> <a href="#" style="padding-right:10px;" class="dropdown-toggle ribordergrey marginsmallright pull-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/icons/helpblue.png"  style="margin-top:7px;"  height="35" width="35"></a>
                           <div class="dropdown-menu" style="min-width:270px; margin-top:5px; ">
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
      <div class="container">
         <div class="row">
            <div class=" ellipsistext col-xs-9 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo base_url();?>assets/front/images/icons/promoblue.svg" class="iconlarge"> <span class="heading3 bold blue"> PROMO</span><span class="grey heading3 bold"> KAMAR <span class="hidden-xs">HOTEL</span></span></div>
            <div class="col-xs-3 col-sm-6 col-md-6 col-lg-6 text-right"><a class="btn borderblue blue rond" href="carihotel.html"><span class="visible-xs-inline"><img src="<?php echo base_url();?>assets/front/images/icons/moreblue.svg" class="iconsmall"></span><span class="hidden-xs">LIHAT SEMUA</span></a></div>
         </div>
      </div>
      <div class="container" >
         <!-- BxSlider -->
         <ul id="kamarslider"  class="bxslider" data-call="bxslider" data-options="{slideMargin:5, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:1, pager:false, auto:true},{screen:480, slides:2, auto:true},{screen:768, slides:3, auto:true},{screen:992, slides:4, auto:true}]" >
            <li>
               <a href="pesankamar.html">
                  <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
                     <div class="disc white"><small>DISCOUNT</small></div>
                     <div class=" disco white justbold ">40%</div>
                     <br>
                  </div>
                  <div style="padding-right:30px;">
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/doublebed.jpg" style="z-index:0;  position:relative; margin-top:-70px; " height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="paddingsmall">
                              <div class=" ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="paddingsmall ">
                                 <div class="flex flexleft">
                                    <div><img src="<?php echo base_url();?>assets/front/images/ollie_BubbleRating_4_119x20.svg" class="mt5" height="20" width="120"></div>
                                    <div class="paddingsmall grey"> (1611)</div>
                                 </div>
                              </div>
                              <div class="row margin10left padr10">
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  ">
                                    <div class="  norcol  "><small>Mulai dari</small></div>
                                    <div class=" ellipsistext black  "><del>Rp 670.897</del></div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ellipsistext">
                                    <div class="">
                                       <div class="padding ellipsistext bordergrey greybg rond"><span class="justbold norcol">IDR</span> <span class="justbold danger">240.650</span></div>
                                    </div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
            <li>
               <a href="pesankamar.html">
                  <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
                     <div class="disc white"><small>DISCOUNT</small></div>
                     <div class=" disco white justbold ">40%</div>
                     <br>
                  </div>
                  <div style="padding-right:30px;">
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/doublebed.jpg" style="z-index:0;  position:relative; margin-top:-70px; " height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="paddingsmall">
                              <div class=" ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="paddingsmall ">
                                 <div class="flex flexleft">
                                    <div><img src="<?php echo base_url();?>assets/front/images/ollie_BubbleRating_4_119x20.svg" class="mt5" height="20" width="120"></div>
                                    <div class="paddingsmall grey"> (1611)</div>
                                 </div>
                              </div>
                              <div class="row margin10left padr10">
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  ">
                                    <div class="  norcol  "><small>Mulai dari</small></div>
                                    <div class=" ellipsistext black  "><del>Rp 670.897</del></div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ellipsistext">
                                    <div class="">
                                       <div class="padding ellipsistext bordergrey greybg rond"><span class="justbold norcol">IDR</span> <span class="justbold danger">240.650</span></div>
                                    </div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
            <li>
               <a href="pesankamar.html">
                  <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
                     <div class="disc white"><small>DISCOUNT</small></div>
                     <div class=" disco white justbold ">40%</div>
                     <br>
                  </div>
                  <div style="padding-right:30px;">
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/doublebed.jpg" style="z-index:0;  position:relative; margin-top:-70px; " height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="paddingsmall">
                              <div class=" ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="paddingsmall ">
                                 <div class="flex flexleft">
                                    <div><img src="<?php echo base_url();?>assets/front/images/ollie_BubbleRating_4_119x20.svg" class="mt5" height="20" width="120"></div>
                                    <div class="paddingsmall grey"> (1611)</div>
                                 </div>
                              </div>
                              <div class="row margin10left padr10">
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  ">
                                    <div class="  norcol  "><small>Mulai dari</small></div>
                                    <div class=" ellipsistext black  "><del>Rp 670.897</del></div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ellipsistext">
                                    <div class="">
                                       <div class="padding ellipsistext bordergrey greybg rond"><span class="justbold norcol">IDR</span> <span class="justbold danger">240.650</span></div>
                                    </div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
            <li>
               <a href="pesankamar.html">
                  <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
                     <div class="disc white"><small>DISCOUNT</small></div>
                     <div class=" disco white justbold ">40%</div>
                     <br>
                  </div>
                  <div style="padding-right:30px;">
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/doublebed.jpg" style="z-index:0;  position:relative; margin-top:-70px; " height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="paddingsmall">
                              <div class=" ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="paddingsmall ">
                                 <div class="flex flexleft">
                                    <div><img src="<?php echo base_url();?>assets/front/images/ollie_BubbleRating_4_119x20.svg" class="mt5" height="20" width="120"></div>
                                    <div class="paddingsmall grey"> (1611)</div>
                                 </div>
                              </div>
                              <div class="row margin10left padr10">
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  ">
                                    <div class="  norcol  "><small>Mulai dari</small></div>
                                    <div class=" ellipsistext black  "><del>Rp 670.897</del></div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ellipsistext">
                                    <div class="">
                                       <div class="padding ellipsistext bordergrey greybg rond"><span class="justbold norcol">IDR</span> <span class="justbold danger">240.650</span></div>
                                    </div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
            <li>
               <a href="pesankamar.html">
                  <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
                     <div class="disc white"><small>DISCOUNT</small></div>
                     <div class=" disco white justbold ">40%</div>
                     <br>
                  </div>
                  <div style="padding-right:30px;">
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/doublebed.jpg" style="z-index:0;  position:relative; margin-top:-70px; " height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="paddingsmall">
                              <div class=" ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="paddingsmall ">
                                 <div class="flex flexleft">
                                    <div><img src="<?php echo base_url();?>assets/front/images/ollie_BubbleRating_4_119x20.svg" class="mt5" height="20" width="120"></div>
                                    <div class="paddingsmall grey"> (1611)</div>
                                 </div>
                              </div>
                              <div class="row margin10left padr10">
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  ">
                                    <div class="  norcol  "><small>Mulai dari</small></div>
                                    <div class=" ellipsistext black  "><del>Rp 670.897</del></div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ellipsistext">
                                    <div class="">
                                       <div class="padding ellipsistext bordergrey greybg rond"><span class="justbold norcol">IDR</span> <span class="justbold danger">240.650</span></div>
                                    </div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
         </ul>
         <!-- /BxSlider -->
      </div>
      <div class="container marginsmallbottom">
         <div class="row">
            <div class=" ellipsistext col-xs-9 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo base_url();?>assets/front/images/icons/popularblue.svg" class="iconlarge"> <span class="heading3 bold blue"> HOTEL</span><span class="grey heading3 bold"> POPULER </span></div>
            <div class="col-xs-3 col-sm-6 col-md-6 col-lg-6 text-right"><a class="btn borderblue blue rond" href="carihotel.html"><span class="visible-xs-inline"><img src="<?php echo base_url();?>assets/front/images/icons/moreblue.svg" class="iconsmall"></span><span class="hidden-xs">LIHAT SEMUA</span></a></div>
         </div>
      </div>
      <div class="container">
         <!-- BxSlider -->
         <ul id="kotaslider" class="bxslider" data-call="bxslider" data-options="{slideMargin:15, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:1, pager:false, auto:true},{screen:480, slides:3, auto:true},{screen:768, slides:4, auto:true},{screen:992, slides:5, auto:true}]" >
            <li>
               <a href="carihotel.html">
                  <div class="">
                     <div class="inline full-width" >
                        <img src="<?php echo base_url();?>assets/front/images/kota/bali.jpg" class="rond2 full-width" alt="">
                        <div class="overlay-primary position-cover rond2 full-width"></div>
                        <div class="overlay position-top-right white"><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay position-bottom ">
                           <div class="white justbold heading3 ellipsistext">Bali</div>
                           <div class="white justbold paddingsmall whiteborder rond marginsmalltop text-center ellipsistext">Mulai IDR 230.000</div>
                        </div>
                     </div>
                  </div>
               </a>
            </li>
            <li>
               <a href="carihotel.html">
                  <div class="">
                     <div class="inline full-width" >
                        <img src="<?php echo base_url();?>assets/front/images/kota/jakarta.jpg" class="rond2 full-width" alt="">
                        <div class="overlay-primary position-cover rond2 full-width"></div>
                        <div class="overlay position-top-right white"><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay position-bottom ">
                           <div class="white justbold heading3 ellipsistext">Jakarta</div>
                           <div class="white justbold paddingsmall whiteborder rond marginsmalltop text-center ellipsistext">Mulai IDR 230.000</div>
                        </div>
                     </div>
                  </div>
               </a>
            </li>
            <li>
               <a href="carihotel.html">
                  <div class="">
                     <div class="inline full-width" >
                        <img src="<?php echo base_url();?>assets/front/images/kota/surabaya.jpg" class="rond2 full-width" alt="">
                        <div class="overlay-primary position-cover rond2 full-width"></div>
                        <div class="overlay position-top-right white"><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay position-bottom ">
                           <div class="white justbold heading3 ellipsistext">Surabaya</div>
                           <div class="white justbold paddingsmall whiteborder rond marginsmalltop text-center ellipsistext">Mulai IDR 230.000</div>
                        </div>
                     </div>
                  </div>
               </a>
            </li>
            <li>
               <a href="carihotel.html">
                  <div class="">
                     <div class="inline full-width" >
                        <img src="<?php echo base_url();?>assets/front/images/kota/bandung.jpg" class="rond2 full-width" alt="">
                        <div class="overlay-primary position-cover rond2 full-width"></div>
                        <div class="overlay position-top-right white"><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay position-bottom ">
                           <div class="white justbold heading3 ellipsistext">Bandung</div>
                           <div class="white justbold paddingsmall whiteborder rond marginsmalltop text-center ellipsistext">Mulai IDR 230.000</div>
                        </div>
                     </div>
                  </div>
               </a>
            </li>
            <li>
               <a href="carihotel.html">
                  <div class="">
                     <div class="inline full-width" >
                        <img src="<?php echo base_url();?>assets/front/images/kota/yogyakarta.jpg" class="rond2 full-width" alt="">
                        <div class="overlay-primary position-cover rond2 full-width"></div>
                        <div class="overlay position-top-right white"><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay position-bottom ">
                           <div class="white justbold heading3 ellipsistext">Yogyakarta</div>
                           <div class="white justbold paddingsmall whiteborder rond marginsmalltop text-center ellipsistext">Mulai IDR 230.000</div>
                        </div>
                     </div>
                  </div>
               </a>
            </li>
            <li>
               <a href="carihotel.html">
                  <div class="">
                     <div class="inline full-width" >
                        <img src="<?php echo base_url();?>assets/front/images/kota/bogor.jpg" class="rond2 full-width" alt="">
                        <div class="overlay-primary position-cover rond2 full-width"></div>
                        <div class="overlay position-top-right white"><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay position-bottom ">
                           <div class="white justbold heading3 ellipsistext">Bogor</div>
                           <div class="white justbold paddingsmall whiteborder rond marginsmalltop text-center ellipsistext">Mulai IDR 230.000</div>
                        </div>
                     </div>
                  </div>
               </a>
            </li>
         </ul>
      </div>
      <br>
      <div class="container marginsmallbottom">
         <div class="row">
            <div class=" ellipsistext col-xs-9 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo base_url();?>assets/front/images/icons/bestblue.svg" class="iconlarge"> <span class="heading3 bold blue"> ULASAN</span><span class="grey heading3 bold"> TERBAIK </span></div>
            <div class="col-xs-3 col-sm-6 col-md-6 col-lg-6 text-right"><a class="btn borderblue blue rond" href="carihotel.html"><span class="visible-xs-inline"><img src="<?php echo base_url();?>assets/front/images/icons/moreblue.svg" class="iconsmall"></span><span class="hidden-xs">LIHAT SEMUA</span></a></div>
         </div>
      </div>
      <div class="container">
         <!-- BxSlider -->
         <ul id="ulasanslider"  class="bxslider" data-call="bxslider" data-options="{slideMargin:30, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:1, pager:false, auto:true},{screen:480, slides:2, auto:true},{screen:768, slides:3, auto:true},{screen:992, slides:4, auto:true}]" >
            <li >
               <a href="profilhotel.html">
                  <div class="boxshadowsmall boxshadowhoverlarge">
                     <div >
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg" style="z-index:0;  position:relative; " width="100%" height="100%">
                        <div class="overlay position-top-right "><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey" >
                           <div class="paddingsmall">
                              <div class=" marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="marginsmalltop ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 justbold white text-center taripiu" >89</div>
                                    <div  class="ellipsistext  justbold col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
                                       <div class="norcol ">
                                          <div class=" heading4 ellipsistext icontaimg marginsmallbotom"> 1611 Ulasan</div>
                                       </div>
                                       <div><img class="" height="30" width="90" src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" ></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row paddingsmall">
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid  " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave1_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave2_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave3_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave4_thumb.jpg"></div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
            <li >
               <a href="profilhotel.html">
                  <div class="boxshadowsmall boxshadowhoverlarge">
                     <div >
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg" style="z-index:0;  position:relative; " width="100%" height="100%">
                        <div class="overlay position-top-right "><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey" >
                           <div class="paddingsmall">
                              <div class=" marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="marginsmalltop ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 justbold white text-center taripiu" >89</div>
                                    <div  class="ellipsistext  justbold col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
                                       <div class="norcol ">
                                          <div class=" heading4 ellipsistext icontaimg marginsmallbotom"> 1611 Ulasan</div>
                                       </div>
                                       <div><img class="" height="30" width="90" src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" ></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row paddingsmall">
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid  " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave1_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave2_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave3_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave4_thumb.jpg"></div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
            <li >
               <a href="profilhotel.html">
                  <div class="boxshadowsmall boxshadowhoverlarge">
                     <div >
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg" style="z-index:0;  position:relative; " width="100%" height="100%">
                        <div class="overlay position-top-right "><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey" >
                           <div class="paddingsmall">
                              <div class=" marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="marginsmalltop ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 justbold white text-center taripiu" >89</div>
                                    <div  class="ellipsistext  justbold col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
                                       <div class="norcol ">
                                          <div class=" heading4 ellipsistext icontaimg marginsmallbotom"> 1611 Ulasan</div>
                                       </div>
                                       <div><img class="" height="30" width="90" src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" ></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row paddingsmall">
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid  " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave1_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave2_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave3_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave4_thumb.jpg"></div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
            <li >
               <a href="profilhotel.html">
                  <div class="boxshadowsmall boxshadowhoverlarge">
                     <div >
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg" style="z-index:0;  position:relative; " width="100%" height="100%">
                        <div class="overlay position-top-right "><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey" >
                           <div class="paddingsmall">
                              <div class=" marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="marginsmalltop ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 justbold white text-center taripiu" >89</div>
                                    <div  class="ellipsistext  justbold col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
                                       <div class="norcol ">
                                          <div class=" heading4 ellipsistext icontaimg marginsmallbotom"> 1611 Ulasan</div>
                                       </div>
                                       <div><img class="" height="30" width="90" src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" ></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row paddingsmall">
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid  " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave1_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave2_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave3_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave4_thumb.jpg"></div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
            <li >
               <a href="profilhotel.html">
                  <div class="boxshadowsmall boxshadowhoverlarge">
                     <div >
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg" style="z-index:0;  position:relative; " width="100%" height="100%">
                        <div class="overlay position-top-right "><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris65x65.png"  class="rondbunder iconlarge2"></div>
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey" >
                           <div class="paddingsmall">
                              <div class=" marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center">89</div>
                                    <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">Sangat Bagus</div>
                                 </div>
                              </div>
                              <div class="marginsmalltop ">
                                 <div class="row">
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 justbold white text-center taripiu" >89</div>
                                    <div  class="ellipsistext  justbold col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
                                       <div class="norcol ">
                                          <div class=" heading4 ellipsistext icontaimg marginsmallbotom"> 1611 Ulasan</div>
                                       </div>
                                       <div><img class="" height="30" width="90" src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" ></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="row paddingsmall">
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid  " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave1_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave2_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave3_thumb.jpg"></div>
                                 </div>
                                 <div class="col-xs-3 col-md-3 col-lg-3 col-sm-3">
                                    <div class="padgrid"><img class="padgrid " src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave4_thumb.jpg"></div>
                                 </div>
                              </div>
                              &nbsp;
                           </div>
                        </div>
                     </div>
                  </div>
               </a>
               <br><br>
            </li>
         </ul>
      </div>
      <div class="tobordergrey greybg">
         <div class="container mt25 ">
            <!-- BxSlider -->
            <ul id="hotelslider"  class="bxslider" data-call="bxslider" data-options="{slideMargin:15, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:3, pager:false, controls:false, auto:true},{screen:480, slides:6, auto:true, controls:false},{screen:768, slides:9, auto:true, controls:false},{screen:992, slides:11, controls:false, auto:true}]" >
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/airy.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/amaris.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/bestwestern.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/fave.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/hilton.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/ibis.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/mercure.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/novotel.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/pop.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/redplanet.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/santika.jpg" class="rond"></li>
               <li><img src="<?php echo base_url();?>assets/front/images/hotellogo/swiss.jpg" class="rond "></li>
            </ul>
            <div  class="boxshadowmedium mt25 mb25 whitebg rond2 bordergrey paddingmedium">
               <div class="row">
                  <div class="hidden-xs col-sm-2 col-md-1 col-lg-1">
                     <div class="padgrid text-center"><img src="<?php echo base_url();?>assets/front/images/newsletterblue.png" height="65" width="65"></div>
                  </div>
                  <div class="col-xs-12 col-sm-10 col-md-5 col-lg-5">
                     <div class="padgrid">
                        <div class="heading3 justbold black">BERLANGGANAN SEKARANG!</div>
                        <div class="font16">Berlangganan dan dapatkan promo terbaru dari kami.</div>
                     </div>
                  </div>
                  <div class="col-xs12 col-sm-12 col-md-6 col-lg-6">
                     <div class="padgrid">
                        <div style="margin-top:5px;" class="input-group input-group-lg">
                           <input type="text" class="form-control" placeholder="Ketik email anda...">
                           <span class="input-group-btn">
                           <button class="btn white bluebg" type="button"><span class="visible-lg visible-md">&nbsp;&nbsp;BERLANGGANAN&nbsp;&nbsp;</span><span class="visible-xs visible-sm">OK</span></button>
                           </span>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="">
               <ul id="hotelslider"  class="bxslider" data-call="bxslider" data-options="{slideMargin:15, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:3, pager:false, controls:false, auto:true},{screen:480, slides:6, auto:true, controls:false},{screen:768, slides:9, auto:true, controls:false},{screen:992, slides:11, controls:false, auto:true}]" >
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/bca.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/mandiri.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/bni.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/bri.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/atmbersama.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/mastercard.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/visa.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/alto.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/bcaklikpay.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/mandiriclickpay.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/mandiridebit.jpg" class="rond bordergrey"></li>
                  <li><img src="<?php echo base_url();?>assets/front/images/pembayaran/cimb.jpg" class="rond bordergrey"></li>
               </ul>
            </div>
            <br>
         </div>
         <div class="tobordergrey bobordergrey">
            <div class="container">
               <br>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-8"><img src="<?php echo base_url();?>assets/front/images/logofooter.png" class="marginsmallright pull-left"><img src="<?php echo base_url();?>assets/front/images/rapid.png" class="pull-left marginsmallright visible-lg visible-md"><img src="<?php echo base_url();?>assets/front/images/tripadvisor.png" class="marginsmallright visible-lg pull-left"></div>
                  <div class="text-right col-sm-6 col-md-6 col-lg-4 visible-md visible-lg visible-sm"><a class="noneline marginsmallright" href="https://www.facebook.com/karuniatravel">
                     <img src="<?php echo base_url();?>assets/front/images/icons/sosmedfb.svg" class=" iconlarge2"></a><a class="noneline marginsmallright" href="https://www.instagram.com/karuniatravel/">
                     <img src="<?php echo base_url();?>assets/front/images/icons/sosmedig.svg" class=" iconlarge2"></a><a class="noneline marginsmallright" href="https://twitter.com/karuniatrvsby">
                     <img src="<?php echo base_url();?>assets/front/images/icons/sosmedtwitter.svg" class=" iconlarge2"></a><a href="https://plus.google.com/+Karuniatravel" class="noneline "><img src="<?php echo base_url();?>assets/front/images/icons/sosmedgoogle.svg" class=" iconlarge2">
                     </a>
                  </div>
               </div>
               <br>
            </div>
         </div>
         <br>
         <div class="container">
            <div class="row">
               <div class="col-sm-4 col-md-4 col-lg-2">
                  <div style="padding-right:25px;">
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="faq.html"><img src="<?php echo base_url();?>assets/front/images/icons/aboutwblue.svg" class="iconsmall marginsmallright"> TENTANG KAMI</a>
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="faq.html"><img src="<?php echo base_url();?>assets/front/images/icons/bookingsblue.svg" class="iconsmall marginsmallright"> CEK PESANAN</a>
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="faq.html"><img src="<?php echo base_url();?>assets/front/images/icons/promowblue.svg" class="iconsmall marginsmallright"> INFO PROMO</a>
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="faq.html"><img src="<?php echo base_url();?>assets/front/images/icons/helpwblue.svg" class="iconsmall marginsmallright"> BANTUAN</a>
                  </div>
               </div>
               <!-- Mobile Footer -->
               <div class="col-xs-12 visible-xs marginsmalltop">
                  <a href="#collapseBantuan" data-toggle="collapse" data-target="#collapseBantuan" aria-expanded="false" aria-controls="collapseBantuan" class=" mt10 full-width heading3 justbold norcol">Bantuan <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                  <div class="collapse" id="collapseBantuan">
                     <ul class="bslist mt10">
                        <li>
                           <a class="norcol underline font16" href="faqcarapesan.html">Cara Pesan</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="faqcarabayar.html">Cara Bayar</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="faqkebijakanprivasi.html">Kebijakan Privasi</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="faqsyaratketentuan.html">Syarat & Ketentuan</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="promo.html">Promo Wisata</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-xs-12 visible-xs marginsmalltop">
                  <a href="#collapseProfile" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="false" aria-controls="collapseProfile" class=" mt10 full-width heading3 justbold norcol">Pesan Hotel <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                  <div class="collapse" id="collapseProfile">
                     <ul class="bslist mt10">
                        <li>
                           <a class="norcol underline font16" href="faq.html">Tentang Kami</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="karir.html">Karir</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="daftarkanhotel.html">Daftarkan Hotel Anda</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="promo.html">Info Promo</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="hubungikami.html">Hubungi Kami</a>
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
                        <a class="norcol underline font16" href="faqcarapesan.html">Cara Pesan</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="faqcarabayar.html">Cara Bayar</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="faqkebijakanprivasi.html">Kebijakan Privasi</a>
                     </li>
                     <li>
                        <a class="norcol underline font16"  href="faqsyaratketentuan.html">Syarat & Ketentuan</a>
                     </li>
                     <li>
                        <a class="norcol underline font16"  href="promo.html">Promo Wisata</a>
                     </li>
                  </ul>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                  <div class="heading3 justbold">Pesan Hotel</div>
                  <ul class="bslist mt10">
                     <li>
                        <a class="norcol underline font16" href="faq.html">Tentang Kami</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="karir.html">Karir</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="daftarkanhotel.html">Daftarkan Hotel Anda</a>
                     </li>
                     <li>
                        <a class="norcol underline font16"  href="promo.html">Info Promo</a>
                     </li>
                     <li>
                        <a class="norcol underline font16"  href="hubungikami.html">Hubungi Kami</a>
                     </li>
                  </ul>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                  <div class="heading3 justbold">Hotel Populer</div>
                  <ul class="bslist mt10">
                     <li><a class="norcol underline font16" href="#">Novotel Surabaya</a></li>
                     <li>
                        <a class="norcol underline font16" href="#">Favehotel Umalas</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="#">Holiday Inn Jakarta</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="#">Conrad Kuta</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="#">Borobudur Bandung</a>
                     </li>
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
         <div class="tobordergrey hidden-xs ">
            <div class="container">
               <div class="row marginsmalltop marginsmallbottom">
                  <div class="col-sm-4 col-md-4 col-lg-2 ">
                     <ul class="bslist mt10">
                        <li><a class="norcol underline font16" href="#">Novotel Surabaya</a></li>
                        <li>
                           <a class="norcol underline font16" href="#">Favehotel Umalas</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Holiday Inn Jakarta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Conrad Kuta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Borobudur Bandung</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2 ">
                     <ul class="bslist mt10">
                        <li><a class="norcol underline font16" href="#">Novotel Surabaya</a></li>
                        <li>
                           <a class="norcol underline font16" href="#">Favehotel Umalas</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Holiday Inn Jakarta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Conrad Kuta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Borobudur Bandung</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2 ">
                     <ul class="bslist mt10">
                        <li><a class="norcol underline font16" href="#">Novotel Surabaya</a></li>
                        <li>
                           <a class="norcol underline font16" href="#">Favehotel Umalas</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Holiday Inn Jakarta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Conrad Kuta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Borobudur Bandung</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2 ">
                     <ul class="bslist mt10">
                        <li><a class="norcol underline font16" href="#">Novotel Surabaya</a></li>
                        <li>
                           <a class="norcol underline font16" href="#">Favehotel Umalas</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Holiday Inn Jakarta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Conrad Kuta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Borobudur Bandung</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2 ">
                     <ul class="bslist mt10">
                        <li><a class="norcol underline font16" href="#">Novotel Surabaya</a></li>
                        <li>
                           <a class="norcol underline font16" href="#">Favehotel Umalas</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Holiday Inn Jakarta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Conrad Kuta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Borobudur Bandung</a>
                        </li>
                     </ul>
                  </div>
                  <div class="col-sm-4 col-md-4 col-lg-2 ">
                     <ul class="bslist mt10">
                        <li><a class="norcol underline font16" href="#">Novotel Surabaya</a></li>
                        <li>
                           <a class="norcol underline font16" href="#">Favehotel Umalas</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Holiday Inn Jakarta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Conrad Kuta</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="#">Borobudur Bandung</a>
                        </li>
                     </ul>
                  </div>
               </div>
            </div>
            <br>
         </div>
         <div class="bluebg padding text-center font16 white">
            <div class="container"><br>Hak Cipta © 2005 – 2017 PesanHotel Company Pte. Ltd. Semua Hak Dilindungi Undang-undang.<br>
               PesanHotel adalah bagian dari Karunia Travel Group, penyedia layanan online terdepan untuk perjalanan dan yang terkait lainnya di dunia. <br><br><br>
            </div>
         </div>
      </div>
