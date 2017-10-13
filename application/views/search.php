<div class="whitebg  visible-xs" style="z-index:5; position:relative;">
         <div class="container">
					 <button data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" class="btn font16 whitebg  blueborder blue">
						 <img src="<?php echo base_url();?>assets/front/images/icons/filterblue.svg" height="20" width="20">
					 </button>
					 <button data-toggle="collapse" data-target="#searchbar" aria-expanded="false" aria-controls="searchbar" class="btn font16 whitebg pull-right blueborder blue">
					 <img src="<?php echo base_url();?>assets/front/images/icons/searchblue.svg" height="20" width="20"> CARI ULANG</button></div>
      </div>
      <div  class="whitebg" style="z-index:7; position:relative;">
         <div class="container" >
		 <form action="#" method="post">
            <div class="marginsmallbottom visible-xs"></div>
            <div  id="searchbar" class="searchbar-collapse collapse" class=" " style="z-index:4; position:relative; ">
               <div class="boxshadowsmall whitebg rond2 bordergrey1">
                  <div style="padding:10px;">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" data-toggle="tooltip" data-placement="bottom" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/destinationblue.png" height="30" width="30"></span>
                              <input name="tempattujuan" id="tempattujuan" class="form-control2" placeholder="Nama hotel, destinasi atau tujuan anda menginap?" value="<?php echo $this->session->userdata('tempattujuan');?>" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input name="dari" value="<?php echo $this->session->userdata('dari');?>" id="date-start" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon2" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input name="sampai" value="<?php echo $this->session->userdata('sampai');?>" id="date-end" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-1 col-lg-1" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/roomblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                 <select id="kamar" name="kamar" onchange="kamar(this.value);">
                                   <?php for ($i=1; $i <=10 ; $i++) { ?>
                                     <option <?php if ($this->session->userdata('kamar') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                   <?php } ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-1 col-lg-1" data-toggle="tooltip" data-placement="bottom" title="Jumlah Tamu" style="padding-right:5px;" data-original-title="Jumlah Tamu">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/guestblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                 <select id="orang" name="orang" onchange="orang(this.value);">
                                   <?php for ($i=1; $i <=30 ; $i++) { ?>
                                     <option <?php if ($this->session->userdata('orang') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                   <?php } ?>
                                 </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 "></div>
                        <div class="col-xs-12 visible-xs visible-sm tobordergrey marginsmalltop "></div>
                        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1 borisb">
                           <a id="tombolFilter" href="#collapseFilter" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter"><span class="visible-md-inline visible-lg-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span>
														 <img style="margin-top:7px;margin-bottom:7px;" src="<?php echo base_url();?>assets/front/images/icons/filterblue.png" height="30" width="30"></a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1 sbpos">
                           <button type="submit"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchblue.png" height="30" width="30"></button>
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
                  </div>
               </div>
            </div>
			</form>
         </div>
      </div>
      <div style="height:50px; z-index:4; position:relative;" class="transbg hidden-xs"></div>
      <div style="height:20px; z-index:4; position:relative;" class="transbgbot visible-xs"></div>
      <div class="" style="z-index:3; position:relative;  " >
         <div class=" whitebg bottombordergrey boxshadowsmall affixed-element-top js-affixed-element-top">
            <div class="container " >
               <div class="">
                  <div >
                     <div class="row mt10 mb10">
                        <div class="col-xs-3 col-sm-1 col-md-1 col-lg-3">
													<a class="" href="beranda.html"><img style="margin-top:5px;" src="<?php echo base_url();?>assets/front/images/logo.png" class="visible-lg ">
														<img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm visible-md ">
													</a>
											</div>
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
                              <input class="form-control2" value="<?php echo $this->session->userdata('tempattujuan');?>" placeholder="Hotel, destinasi atau tujuan anda?" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div>
                        <div class="visible-lg-inline col-lg-3">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input id="date-startmo" value="<?php echo $this->session->userdata('dari');?>" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input id="date-endmo" value="<?php echo $this->session->userdata('sampai');?>" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
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
                                    <option <?php if ($this->session->userdata('kamar') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
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
                                    <option <?php if ($this->session->userdata('orang') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                  <?php } ?>
                                </select>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-3 col-sm-2 visible-lg-inline col-md-2 col-lg-1 text-right">
                           <a href="carihotel.html"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchblue.png" height="30" width="30"></a>
                        </div>
                        <div class="col-sm-2 col-xs-9  col-md-2 visible-md visible-xs visible-sm text-right">
                           <a class="pull-right " href="#searchbox">
														 <img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchblue.png" height="30" width="30"></a>
														 <a href="#" style="padding-right:10px;" class="dropdown-toggle ribordergrey marginsmallright pull-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
														 	<img src="<?php echo base_url();?>assets/front/images/icons/helpblue.png"  style="margin-top:7px;"  height="35" width="35"></a>
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
            <!-- Sidebar -->
            <div class="col-sm-4 col-md-3 col-lg-3 " >
               <div class="padr20">
                  <div id="filterbar" class="filterbar-collapse collapse">
                     <div class="heading4 black ">Cari Hotel</div>
                     <input id="tempattujuan1" name="tempattujuan" class="form-control mt10 input-lg searchimg" type="text" placeholder="Ketik nama daerah atau hotel..."><br>
                     <hr>
                     <div class="heading4 black ">Kisaran Harga</div>
                     <div class="marginsmalltop marginsmallbottom">
                        <div style="margin-left:10px;margin-right:10px;"> <input id="ex2sb" class="span2 full-width" value="0,5000000" data-slider-min="0" data-slider-max="5000000" data-slider-step="5" data-slider-value="[0,5000000]" style="display: none;" data-value="0,5000000" type="text"></div>
                        <div class="marginsmalltop grey ">
                           <h4>IDR 0 - IDR 5.000.000</h4>
                        </div>
                     </div>
                     <hr>
                     <div class="heading4 black ">Bintang</div>
                     <div class="row marginsmalltop marginsmallbottom">
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="padgrids">
                              <div class="bordergrey rond padding font16 norcol "><label><input class="marginsmallright" type="checkbox"> 1</label>
                                 <img src="<?php echo base_url();?>assets/front/images/stars-05.png" class="pull-right">
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="padgrids">
                              <div class="bordergrey rond padding font16 norcol "><label><input class="marginsmallright" type="checkbox"> 2</label>
                                 <img src="<?php echo base_url();?>assets/front/images/stars-05.png" class="pull-right">
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="padgrids">
                              <div class="bordergrey rond padding font16 norcol "><label><input class="marginsmallright" type="checkbox"> 3</label>
                                 <img src="<?php echo base_url();?>assets/front/images/stars-05.png" class="pull-right">
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="padgrids">
                              <div class="bordergrey rond padding font16 norcol "><label><input class="marginsmallright" type="checkbox"> 4</label>
                                 <img src="<?php echo base_url();?>assets/front/images/stars-05.png" class="pull-right">
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="padgrids">
                              <div class="bordergrey rond padding font16 norcol"><label><input class="marginsmallright" type="checkbox"> 5</label>
                                 <img src="<?php echo base_url();?>assets/front/images/stars-05.png" class="pull-right">
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
                           <div class="padgrids">
                              <div class="bordergrey rond padding font16 norcol"><label><input class="marginsmallright" type="checkbox"> 0</label>
                                 <img src="<?php echo base_url();?>assets/front/images/stars-zero.png" class="pull-right">
                              </div>
                           </div>
                        </div>
                     </div>
                     <hr>
                     <div class="heading4 black marginsmallbottom">Fasilitas Hotel</div>
                     <div class="bordergrey rond padding font16 norcol  "><label><input class="marginsmallright" type="checkbox"> Wifi</label></div>
                     <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Kolam Renang</label></div>
                     <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Parkir</label></div>
                     <div class="collapse" id="collapseFasHotel">
                        <div class="bordergrey rond padding font16 norcol mt10 "><label><input class="marginsmallright" type="checkbox"> Restoran</label></div>
                        <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Lift</label></div>
                        <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Resepsionis 24 Jam</label></div>
                     </div>
                     <div class=" marginsmallbottom mt10 text-right">
                        <a  data-toggle="collapse" data-target="#collapseFasHotel" aria-expanded="false" aria-controls="collapseFasHotel" class="pointer  blue font16 underline">Pilihan &#10093;&#10093;</a>
                     </div>
                     <hr>
                     <div class="heading4 black marginsmallbottom">Tipe Akomodasi</div>
                     <div class="bordergrey rond padding font16 norcol  "><label><input class="marginsmallright" type="checkbox"> Hostel</label></div>
                     <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> B & B</label></div>
                     <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Camping</label></div>
                     <div class="collapse" id="collapseAkoHotel">
                        <div class="bordergrey rond padding font16 norcol mt10 "><label><input class="marginsmallright" type="checkbox"> Homestay</label></div>
                        <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Vila</label></div>
                        <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Hotel</label></div>
                        <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Resorts</label></div>
                        <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Apartemen</label></div>
                        <div class="bordergrey rond padding font16 norcol mt10"><label><input class="marginsmallright" type="checkbox"> Guest House</label></div>
                     </div>
                     <div class=" marginsmallbottom mt10 text-right">
                        <a  data-toggle="collapse" data-target="#collapseAkoHotel" aria-expanded="false" aria-controls="collapseAkoHotel" class="pointer  blue font16 underline">Pilihan &#10093;&#10093;</a>
                     </div>
                  </div>
               </div>
            </div>
            <!-- End Sidebar -->
            <!-- Content -->
            <div class="col-sm-8 col-md-9 col-lg-9 col-xs-12">
               <!-- Start Info & Price Sort -->
               <div class="row">
                  <div class="col-xs-7 col-sm-9 col-md-9 col-lg-9">
                     <div class="heading4 norcol"><?php echo $this->session->userdata('tempattujuan');?> <span class="hidden-xs">:</span> <span class="blue"> 4407</span> Hotel<span class="hidden-xs"> tersedia</span>. 1-45</div>
                  </div>
                  <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-right "  data-toggle="tooltip" data-placement="top" title="Tampilkan jumlah harga dalam :">
										<img src="<?php echo base_url();?>assets/front/images/icons/pricetagblue.svg" class="iconmedium marginsmallright">
									</div>
                  <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-right">
                     <select class="form-control">
                        <option>Total Harga</option>
                        <option>Per Malam</option>
                     </select>
                  </div>
               </div>
               <!-- End Info & Price Sort -->
               <br>
               <!-- Start Sort -->
               <div class=" visible-md visible-lg" >
                  <div class="row">
                     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2" >
                        <div style="height:44px;" class="padding softblueborder text-center  softbluebg white  ">Urutan :</div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <a href="#">
                           <div class="padding ellipsistext  text-center  greybg nolebordergrey norcol  ">Rekomendasi <img src="<?php echo base_url();?>assets/front/images/icons/triangleupdown.svg"class="iconsmall"></div>
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <a href="#">
                           <div class="padding ellipsistext text-center   greybg nolebordergrey  norcol  ">Harga <img src="<?php echo base_url();?>assets/front/images/icons/triangleupdown.svg"class="iconsmall"></div>
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <a href="#">
                           <div class="padding ellipsistext text-center   greybg nolebordergrey  norcol  ">Popularitas <img src="<?php echo base_url();?>assets/front/images/icons/triangleupdown.svg"class="iconsmall"></div>
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <a href="#">
                           <div class="padding ellipsistext text-center   greybg nolebordergrey  norcol  ">Nilai Ulasan <img src="<?php echo base_url();?>assets/front/images/icons/triangleupdown.svg"class="iconsmall "></div>
                        </a>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                        <a href="#">
                           <div class="padding ellipsistext text-center   greybg nolebordergrey  norcol  ">Abjad <img src="<?php echo base_url();?>assets/front/images/icons/triangleupdown.svg"class="iconsmall "></div>
                        </a>
                     </div>
                  </div>
               </div>
               <!-- End Sort  -->
               <!-- Start Sort Mobile -->
               <div class="visible-xs visible-sm padding softbluebg  " >
                  <div class="row">
                     <div class="col-xs-3 col-sm-3 text-center"><img src="<?php echo base_url();?>assets/front/images/icons/sortwblue.svg" class="iconmedium"></div>
                     <div class="col-sm-9 col-xs-9">
                        <select class="form-control">
                           <option value="">Urut berdasarkan...</option>
                           <option value="1">Rekomendasi : Terbaik ke Terburuk</option>
                           <option value="2">Rekomendasi : Terburuk ke Terbaik</option>
                           <option value="3">Harga : Termurah ke Termahal</option>
                           <option value="4">Harga : Termahal ke Termurah</option>
                           <option value="5">Popularitas : Terbaik ke Terburuk</option>
                           <option value="6">Popularitas : Terburuk ke Terbaik</option>
                           <option value="7">Nilai Ulasan : Terbaik ke Terburuk</option>
                           <option value="8">Nilai Ulasan : Terburuk ke Terbaik</option>
                           <option value="9">Abjad : A ke Z</option>
                           <option value="10">Abjad : Z ke A</option>
                        </select>
                     </div>
                  </div>
               </div>
               <!-- End Sort Mobile  -->
               <!-- Start Hotel List -->
               <br><br>


               <!-- Start Hotel List 1 -->
							 <?php $kamar = $this->session->userdata('kamar');
               $tempattujuan = $this->session->userdata('tempattujuan');
               foreach ($search as $key):

                 foreach ($foto as $key2) {
                  if ($key->id_supplier == $key2->supplier_id) {
                    $cover = $key2->foto;
                  }
                }
                if ($key->kota == $tempattujuan) {
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
             <?php } endforeach; ?>
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


               <div id="modalHotel1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalHotel1">
                  <div class="modal-dialog">
                     <div class="modal-content rond">
                        <div class="modal-body ">
                           <div class="row">
                              <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 font16 ">Tarif Properti</div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 blue">IDR</div>
                              <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 font16 text-right">1.704.050</div>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "></div>
                              <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 font16 ">Tarif PesanHotel</div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 blue">IDR</div>
                              <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 font16 text-right">282.600</div>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                 <hr class="marginsmalltop">
                              </div>
                              <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 font16 ">Total</div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 blue ">IDR</div>
                              <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 font16 blue text-right">282.600</div>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                 <hr class="marginsmalltop">
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 font16 ">Silahkan melanjutkan pemesanan Anda untuk melihat rincian pajak dan biaya</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="modalLayananHotel1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalHotel1">
                  <div class="modal-dialog">
                     <div class="modal-content rond">
                        <div class="modal-body ">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginsmallbottom font16">Tamu dari hotel ini dapat menikmati :</div>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                 <hr class="">
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 heading4 justbold norcol"><img src="<?php echo base_url();?>assets/front/images/icons/wifigreen.svg" class="iconlarge marginsmallright"> Wifi Gratis </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 heading4 justbold norcol"><img src="<?php echo base_url();?>assets/front/images/icons/breakfastgreen.svg" class="iconlarge marginsmallright"> Sarapan </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="modalReviewHotel1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalReviewHotel1">
                  <div class="modal-dialog">
                     <div class="modal-content rond">
                        <div class="modal-body ">
                           <div class="row">
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Kebersihan</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                          <span class="sr-only">70% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> 70</div>
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Pelayanan</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                          <span class="sr-only">70% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> 70</div>
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Makanan</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                          <span class="sr-only">70% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> 70</div>
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Lokasi</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                          <span class="sr-only">70% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> 70</div>
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Harga</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                          <span class="sr-only">70% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> 70</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- End Hotel List 1 -->

            </div>
            <!-- End Hotel List -->
            <div class="">
            </div>
         </div>
         <!-- End Content -->
      </div>
      <br><br><br><br><br><br><br><br><br><br>
      <div class="tobordergrey greybg">
         <br>
         <div class="ellipsistext container font16 norcol">
            Hotel <img src="<?php echo base_url();?>assets/front/images/icons/chevron-rightgrey.svg" class="iconsmall"> <a class="norcol underline" href="">Indonesia (26.982)</a> <img src="<?php echo base_url();?>assets/front/images/icons/chevron-rightgrey.svg" class="iconsmall"> <a class="norcol underline" href="">Bali (13.102)</a>  <img src="<?php echo base_url();?>assets/front/images/icons/chevron-rightgrey.svg" class="iconsmall"> Hasil Pencarian
         </div>
         <br>
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

	  <script>
	  $( function() {
           var projects1 = <?php echo $res1;?>;

           $( "#tempattujuan1" ).autocomplete({
             minLength: 1,
             source: projects1,
             focus: function( event, ui ) {
               $( "#tempattujuan1" ).val( ui.item.label );
               return false;
             },
             select: function( event, ui ) {
               $( "#tempattujuan1" ).val( ui.item.value );
               $( "#project-id" ).val( ui.item.label );
               $( "#project-description" ).html( ui.item.desc );
               $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );

             }
           })
           .autocomplete( "instance" )._renderItem = function( ul, item ) {
             return $( "<li>" )
               .append( "<div>" + item.label + "&nbsp;&nbsp;<sup><font class=\"uk-float-right uk-label\"><small>&nbsp;" + item.desc + "&nbsp;</small></font></sup><br><small>" + item.addr + "</small></div>" )
               .appendTo( ul );
           };
         } );
	  </script>