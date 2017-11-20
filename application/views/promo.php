<div class="whitebg" style="z-index:4; position:relative;">
   <div class="container" >
      <div id="searchbox" class="mt5 mb5 " style="z-index:4; position:relative; ">
         <div class=" bluebg rond2 boxshadowmedium dbluebord  ">
            <div style="padding:10px;">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" data-toggle="tooltip" data-placement="bottom" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                     <div class="input-group full-width">
                       
                        <input class="form-control2w destinationimgw" placeholder="Nama hotel, destinasi atau tujuan anda menginap?" aria-describedby="basic-addon1" type="text">
                     </div>
                  </div>
                  <div class="col-xs-12 col-sm-11 col-md-6 col-lg-6">
                     <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                           <div class="input-group">
                              <input  id="date-start" data-date-format="yyyy-mm-dd" data-date="2012-02-20" class="form-control2w calendarimgw" placeholder="Check In?" aria-describedby="basic-addon2" type="text">
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                           <div class="input-group">
                              <input id="date-end" data-date-format="yyyy-mm-dd" data-date="2012-02-25" class="form-control2w calendarimgw" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div>
						<div class="col-xs-6 col-sm-2 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                     <div class="input-group">
                        
                        <div class="select-style2 roomimgw">
                           <select>
                              <option value="1" selected="selected">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="col-xs-6 col-sm-2 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Jumlah Tamu" style="padding-right:5px;" data-original-title="Jumlah Tamu">
                     <div class="input-group">
                        
                        <div class="select-style2 guestimgw">
                           <select>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7" selected="selected">7</option>
                           </select>
                        </div>
                     </div>
                  </div>
						
						
                     </div>
                  </div>
                  
                  
                  <div class="col-xs-12 visible-xs tobordergrey marginsmalltop "></div>
                 <div class="col-xs-6 visible-xs"></div>
                  <div class="col-xs-6 col-sm-1 col-md-1 col-lg-1 sbpos">
                     <a href="carihotel.html"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchbluew.png" height="30" width="30"></a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="whitebg collapse" id="collapseFilter">
         <div class="">
            <br>
            <div class="row ">
               <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ">
                  <div class="padgrid">
                     <div class="bordergrey1 rond2 boxshadowsmall">
                        <div class="bobordergrey paddingmedium blue">
                           <h4>HARGA PER MALAM</h4>
                        </div>
                        <div class="paddingmedium ">
                           <div style="margin-left:10px;margin-right:10px;"> <input id="ex2" class="span2 full-width" value="0,5000000" data-slider-min="0" data-slider-max="5000000" data-slider-step="5" data-slider-value="[0,5000000]" style="display: none;" data-value="0,5000000" type="text"></div>
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
            </div>
         </div>
         <br>
      </div>
   </div>
</div>
<div class="whitebg" style=" z-index:4; position:relative;">
   <div class="container" >
      <div class="beachbg rond2">
         <div class="overprimary rond2 padbig2">
            <div class="row flex flexleft">
               <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/pagepromo.svg" class="iconmedium visible-xs"><img src="<?php echo base_url();?>assets/front/images/icons/pagepromo.svg" class="iconlarge3 marginsmallright  hidden-xs"></div>
               <div class=" white">
                  <span class="justbold heading2">PROMO HARI INI</span><br>
                  <div class="font16">Dapatkan diskon cuma-cuma untuk hotel dimana saja. Hanya di pesanhotel.com.</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div style="height:30px; z-index:4; position:relative;" class="transbgbot"></div>
<div class="" style="z-index:3; position:relative;  " >
   <div class=" whitebg bottombordergrey boxshadowsmall affixed-element-top js-affixed-element-top">
      <div class="container " >
         <div class="">
            <div >
               <div class="row mt10 mb10">
                  <div class="col-xs-3 col-sm-1 col-md-1 col-lg-3"> <a  class="" href="<?php echo base_url();?>"><img style="margin-top:5px;" src="<?php echo base_url();?>assets/front/images/logo.png" class="visible-lg "><img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm visible-md "></a></div>
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
                        <input class="form-control2" placeholder="Hotel, destinasi atau tujuan anda?" aria-describedby="basic-addon1" type="text">
                     </div>
                  </div>
                  <div class="visible-lg-inline col-lg-3">
                     <div class="row">
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                           <div class="input-group">
                              <input id="date-startmo" data-date-format="yyyy-mm-dd" data-date="2012-02-20" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                           <div class="input-group">
                              <input id="date-endmo" data-date-format="yyyy-mm-dd" data-date="2012-02-20" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="visible-lg-inline col-lg-1" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                     <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/roomblue.png" height="30" width="30"></span>
                        <div class="select-style">
                           <select>
                              <option value="1" selected="selected">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7">7</option>
                           </select>
                        </div>
                     </div>
                  </div>
                  <div class="visible-lg-inline col-lg-1 " data-toggle="tooltip" data-placement="bottom" title="Jumlah Tamu" style="padding-right:5px;" data-original-title="Jumlah Tamu">
                     <div class="input-group">
                        <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/guestblue.png" height="30" width="30"></span>
                        <div class="select-style">
                           <select>
                              <option value="1">1</option>
                              <option value="2">2</option>
                              <option value="3">3</option>
                              <option value="4">4</option>
                              <option value="5">5</option>
                              <option value="6">6</option>
                              <option value="7" selected="selected">7</option>
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
   <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/promoblue.svg"  class="iconlarge"> <span class="heading3 justbold blue"> PROMO</span><span class="grey heading3 justbold"> WISATA </span></div>
   <div class="row">
      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
         <div class="padgridx">
            <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
			<div class=" disco white justbold ">40%</div>
               <div class="disc white"><small>DISCOUNT</small></div>
               
               <br>
            </div>
            <div style="padding-right:30px;">
               <div class="boxshadowsmall infokupon boxshadowhoverlarge">
                  <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg" style="z-index:0;  position:relative; margin-top:-70px; " height="100%" width="100%">
                  <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                     <div class="row paddingsmall">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 font16 ellipsistext white">Berakhir 4 hari lagi</div>
                     </div>
                  </div>
                  <div class="notobordergrey pad15 grey font16">
                     Jelajahi pulau bali dan dapatkan diskon sebesar 40% untuk penginapan anda<br><br>
                     <hr>
                     <a href="" class="blue detail-kupon-btn underline">Lihat Kupon</a>
                  </div>
               </div>
               <div class="boxshadowsmall detailkupon boxshadowhoverlarge" style="display:none; z-index:0;  position:relative; margin-top:-70px;"  >
                  <div class="bordergrey pad15 font16">
                     <span class="text-pink">Berakhir 20 hari lagi</span><br>
                     <div class="marginsmalltop marginsmallbottom ">Kode Kupon :</div>
                     <div class="pad15 borderblue blue justbold rond breakable kerningkupon"> BACKHOME 70K</div>
                     <hr>
                     <div class="marginsmallbottom">Promo berlaku untuk periode booking 11 - 14 juli 2017, dan periode penginapan kapanpun yang anda mau.</div>
                     <div class="marginsmallbottom"><a href="carihotel.html" class="marginsmalltop bluebg full-width btn white rond btn-lg">CARI PROPERTI</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
         <div class="padgridx">
            <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
              <div class=" disco white justbold ">40%</div> <div class="disc white"><small>DISCOUNT</small></div>
               
               <br>
            </div>
            <div style="padding-right:30px;">
               <div class="boxshadowsmall infokupon2 boxshadowhoverlarge">
                  <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg" style="z-index:0;  position:relative; margin-top:-70px; " height="100%" width="100%">
                  <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                     <div class="row paddingsmall">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 font16 ellipsistext white">Berakhir 4 hari lagi</div>
                     </div>
                  </div>
                  <div class="notobordergrey pad15 grey font16">
                     Jelajahi pulau bali dan dapatkan diskon sebesar 40% untuk penginapan anda<br><br>
                     <hr>
                     <a href="" class="blue detail-kupon-btn2 underline">Lihat Kupon</a>
                  </div>
               </div>
               <div class="boxshadowsmall detailkupon2 boxshadowhoverlarge" style="display:none; z-index:0;  position:relative; margin-top:-70px;"  >
                  <div class="bordergrey pad15 font16">
                     <span class="text-pink">Berakhir 20 hari lagi</span><br>
                     <div class="marginsmalltop marginsmallbottom ">Kode Kupon :</div>
                     <div class="pad15 borderblue blue justbold rond breakable kerningkupon"> BACKHOME 70K</div>
                     <hr>
                     <div class="marginsmallbottom">Promo berlaku untuk periode booking 11 - 14 juli 2017, dan perirode penginapan kapanpun yang anda mau.</div>
                     <div class="marginsmallbottom"><a href="carihotel.html" class="marginsmalltop bluebg full-width btn white rond btn-lg">CARI PROPERTI</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
         <div class="padgridx">
            <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
               <div class=" disco white justbold ">40%</div> <div class="disc white"><small>DISCOUNT</small></div>
              
               <br>
            </div>
            <div style="padding-right:30px;">
               <div class="boxshadowsmall infokupon3 boxshadowhoverlarge">
                  <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg" style="z-index:0;  position:relative; margin-top:-70px; " height="100%" width="100%">
                  <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                     <div class="row paddingsmall">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 font16 ellipsistext white">Berakhir 4 hari lagi</div>
                     </div>
                  </div>
                  <div class="notobordergrey pad15 grey font16">
                     Jelajahi pulau bali dan dapatkan diskon sebesar 40% untuk penginapan anda<br><br>
                     <hr>
                     <a href="" class="blue detail-kupon-btn3 underline">Lihat Kupon</a>
                  </div>
               </div>
               <div class="boxshadowsmall detailkupon3 boxshadowhoverlarge" style="display:none; z-index:0;  position:relative; margin-top:-70px;"  >
                  <div class="bordergrey pad15 font16">
                     <span class="text-pink">Berakhir 20 hari lagi</span><br>
                     <div class="marginsmalltop marginsmallbottom ">Kode Kupon :</div>
                     <div class="pad15 borderblue blue justbold rond breakable kerningkupon"> BACKHOME 70K</div>
                     <hr>
                     <div class="marginsmallbottom">Promo berlaku untuk periode booking 11 - 14 juli 2017, dan perirode penginapan kapanpun yang anda mau.</div>
                     <div class="marginsmallbottom"><a href="carihotel.html" class="marginsmalltop bluebg full-width btn white rond btn-lg">CARI PROPERTI</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3">
         <div class="padgridx">
            <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
               <div class=" disco white justbold ">40%</div> <div class="disc white"><small>DISCOUNT</small></div>
              
               <br>
            </div>
            <div style="padding-right:30px;">
               <div class="boxshadowsmall infokupon4 boxshadowhoverlarge">
                  <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg" style="z-index:0;  position:relative; margin-top:-70px; " height="100%" width="100%">
                  <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                     <div class="row paddingsmall">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 font16 ellipsistext white">Berakhir 4 hari lagi</div>
                     </div>
                  </div>
                  <div class="notobordergrey pad15 grey font16">
                     Jelajahi pulau bali dan dapatkan diskon sebesar 40% untuk penginapan anda<br><br>
                     <hr>
                     <a href="" class="blue detail-kupon-btn4 underline">Lihat Kupon</a>
                  </div>
               </div>
               <div class="boxshadowsmall detailkupon4 boxshadowhoverlarge" style="display:none; z-index:0;  position:relative; margin-top:-70px;"  >
                  <div class="bordergrey pad15 font16">
                     <span class="text-pink">Berakhir 20 hari lagi</span><br>
                     <div class="marginsmalltop marginsmallbottom ">Kode Kupon :</div>
                     <div class="pad15 borderblue blue justbold rond breakable kerningkupon"> BACKHOME 70K</div>
                     <hr>
                     <div class="marginsmallbottom">Promo berlaku untuk periode booking 11 - 14 juli 2017, dan perirode penginapan kapanpun yang anda mau.</div>
                     <div class="marginsmallbottom"><a href="carihotel.html" class="marginsmalltop bluebg full-width btn white rond btn-lg">CARI PROPERTI</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div class="marginsmalltop marginsmallbottom"><img src="<?php echo base_url();?>assets/front/images/icons/promoblue.svg"  class="iconlarge"> <span class="heading3 justbold blue"> PROMO</span><span class="grey heading3 justbold"> HARIAN </span></div>
   <ul id="kotaslider" class="bxslider" data-call="bxslider" data-options="{slideMargin:20, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:1, pager:false, auto:true},{screen:480, slides:3, auto:true},{screen:768, slides:4, auto:true},{screen:992, slides:4, auto:true}]" >
      <li>
         <a href="carihotel.html">
            <div class="">
               <div class="inline full-width" >
                  <img src="<?php echo base_url();?>assets/front/images/kota/jakarta.jpg" class="rond2 full-width" alt="">
                  <div class="overlay-primary position-cover rond2 full-width"></div>
                  <div class="overlay position-top white text-center">
                     <div class="white justbold heading3 ellipsistext">Diskon 20%</div>
                     <div class="white justbold heading3 ellipsistext">Airy Rooms</div>
                     <div class="white font16 ellipsistext">Bali</div>
                  </div>
                  <div class="overlay position-bottom ">
                     <div  class="white  paddingsmall whiteborder rond marginsmalltop text-center ellipsistext marginsmallbottom">
         <a class="white font16" href="">Lihat kamar</a></div>
         </div>
         </div></div></a>
      </li>
      <li>
         <a href="carihotel.html">
            <div class="">
               <div class="inline full-width" >
                  <img src="<?php echo base_url();?>assets/front/images/kota/jakarta.jpg" class="rond2 full-width" alt="">
                  <div class="overlay-primary position-cover rond2 full-width"></div>
                  <div class="overlay position-top white text-center">
                     <div class="white justbold heading3 ellipsistext">Diskon 20%</div>
                     <div class="white justbold heading3 ellipsistext">Airy Rooms</div>
                     <div class="white font16 ellipsistext">Jakarta</div>
                  </div>
                  <div class="overlay position-bottom ">
                     <div  class="white  paddingsmall whiteborder rond marginsmalltop text-center ellipsistext marginsmallbottom">
         <a class="white font16" href="">Lihat kamar</a></div>
         </div>
         </div></div></a>
      </li>
      <li>
         <a href="carihotel.html">
            <div class="">
               <div class="inline full-width" >
                  <img src="<?php echo base_url();?>assets/front/images/kota/jakarta.jpg" class="rond2 full-width" alt="">
                  <div class="overlay-primary position-cover rond2 full-width"></div>
                  <div class="overlay position-top white text-center">
                     <div class="white justbold heading3 ellipsistext">Diskon 20%</div>
                     <div class="white justbold heading3 ellipsistext">Airy Rooms</div>
                     <div class="white font16 ellipsistext">Jakarta</div>
                  </div>
                  <div class="overlay position-bottom ">
                     <div  class="white  paddingsmall whiteborder rond marginsmalltop text-center ellipsistext marginsmallbottom">
         <a class="white font16" href="">Lihat kamar</a></div>
         </div>
         </div></div></a>
      </li>
      <li>
         <a href="carihotel.html">
            <div class="">
               <div class="inline full-width" >
                  <img src="<?php echo base_url();?>assets/front/images/kota/jakarta.jpg" class="rond2 full-width" alt="">
                  <div class="overlay-primary position-cover rond2 full-width"></div>
                  <div class="overlay position-top white text-center">
                     <div class="white justbold heading3 ellipsistext">Diskon 20%</div>
                     <div class="white justbold heading3 ellipsistext">Airy Rooms</div>
                     <div class="white font16 ellipsistext">Jakarta</div>
                  </div>
                  <div class="overlay position-bottom ">
                     <div  class="white  paddingsmall whiteborder rond marginsmalltop text-center ellipsistext marginsmallbottom">
         <a class="white font16" href="">Lihat kamar</a></div>
         </div>
         </div></div></a>
      </li>
      <li>
         <a href="carihotel.html">
            <div class="">
               <div class="inline full-width" >
                  <img src="<?php echo base_url();?>assets/front/images/kota/jakarta.jpg" class="rond2 full-width" alt="">
                  <div class="overlay-primary position-cover rond2 full-width"></div>
                  <div class="overlay position-top white text-center">
                     <div class="white justbold heading3 ellipsistext">Diskon 20%</div>
                     <div class="white justbold heading3 ellipsistext">Airy Rooms</div>
                     <div class="white font16 ellipsistext">Jakarta</div>
                  </div>
                  <div class="overlay position-bottom ">
                     <div  class="white  paddingsmall whiteborder rond marginsmalltop text-center ellipsistext marginsmallbottom">
         <a class="white font16" href="">Lihat kamar</a></div>
         </div>
         </div></div></a>
      </li>
      <li>
         <a href="carihotel.html">
            <div class="">
               <div class="inline full-width" >
                  <img src="<?php echo base_url();?>assets/front/images/kota/jakarta.jpg" class="rond2 full-width" alt="">
                  <div class="overlay-primary position-cover rond2 full-width"></div>
                  <div class="overlay position-top white text-center">
                     <div class="white justbold heading3 ellipsistext">Diskon 20%</div>
                     <div class="white justbold heading3 ellipsistext">Airy Rooms</div>
                     <div class="white font16 ellipsistext">Jakarta</div>
                  </div>
                  <div class="overlay position-bottom ">
                     <div  class="white  paddingsmall whiteborder rond marginsmalltop text-center ellipsistext marginsmallbottom">
         <a class="white font16" href="">Lihat kamar</a></div>
         </div>
         </div></div></a>
      </li>
   </ul>
   <br><Br>
</div>
<div class=" greybg">
   <div class="tobordergrey">
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
   </div>
   <div class="bluebg padding text-center font16 white">
      <div class="container"><br>Hak Cipta © 2005 – 2017 PesanHotel Company Pte. Ltd. Semua Hak Dilindungi Undang-undang.<br>
         PesanHotel adalah bagian dari Karunia Travel Group, penyedia layanan online terdepan untuk perjalanan dan yang terkait lainnya di dunia. <br><br><br>
      </div>
   </div>
</div>
