<link href="<?php echo base_url();?>assets/front/css/carousel-home.css" rel="stylesheet">
<div class="whitebg visible-xs" style="z-index:5; position:relative;" >
         <div class="boxshadowsmall   bgshadowsmall ">
            <div class="container ">
               <div class="row">
                  <div class=" col-xs-4 col-md-4 " style="margin-top:20px;">
                     <a href="#" class="dropdown-toggle font16 marginsmalltop marginsmallright black" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/indo.png">&nbsp;<span class="black"> IDR </span><span class="caret"></span></a>
                     <div class="dropdown-menu" style="z-index:9999;  min-width:170px; margin-top:15px; ">
                        <div>
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="#"><img src="<?php echo base_url();?>assets/front/images/indo.png">&nbsp; IDR (Indonesia)</a></div>
                           <div class="paddingsmall  "><a class="black font16 btn noneline" href="#"><img src="<?php echo base_url();?>assets/front/images/english.png">&nbsp; USD (English) </a></div>
                        </div>
                     </div>
                  </div>
                  <div class=" col-xs-8 col-md-8">
                     <div class="btn-group pull-right marginsmallbottom" style="margin-top:10px;" role="group" aria-label="...">
                        <button type="button" href="#" data-toggle="modal" data-target="#SignUpModal" class="btn font16 whitebg  blueborder blue">DAFTAR</button>
                        <button type="button" href="#" data-toggle="modal" data-target="#LoginModal" class="btn font16 bluebg  blueborder white">MASUK</button>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         &nbsp;
      </div>
      <div class="whitebg" style="z-index:7; position:relative;">
         <div class="container" >
            <div id="searchbox" class=" " style="z-index:4; position:relative; ">
               <div class="boxshadowsmall whitebg rond2 bordergrey1">
                  <div style="padding:10px;">
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" data-toggle="tooltip" data-placement="bottom" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/destinationblue.png" height="30" width="30"></span>
                              <input class="form-control2" value="<?php echo $this->session->userdata('tempattujuan');?>" placeholder="Nama hotel, destinasi atau tujuan anda menginap?" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input id="date-start" value="<?php echo $this->session->userdata('dari');?>" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon2" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input id="date-end" value="<?php echo $this->session->userdata('sampai');?>" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-6 col-sm-3 col-md-1 col-lg-1" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/roomblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                <select>
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
                                <select>
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
                           <a id="tombolFilter" href="#collapseFilter" data-toggle="collapse" data-target="#collapseFilter" aria-expanded="false" aria-controls="collapseFilter"><span class="visible-md-inline visible-lg-inline">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><img style="margin-top:7px;margin-bottom:7px;" src="<?php echo base_url();?>assets/front/images/icons/filterblue.png" height="30" width="30"></a>
                        </div>
                        <div class="col-xs-6 col-sm-6 col-md-1 col-lg-1 sbpos">
                           <a href="carihotel.html"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchblue.png" height="30" width="30"></a>
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
                              <input value="<?php echo $this->session->userdata('tempattujuan');?>" class="form-control2" placeholder="Hotel, destinasi atau tujuan anda?" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div>
                        <div class="visible-lg-inline col-lg-3">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input id="date-startmo" value="<?php $this->session->userdata('dari'); ?>" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input id="date-endmo" value="<?php $this->session->userdata('sampai'); ?>" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="visible-lg-inline col-lg-1" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/roomblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                <select>
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
                                <select>
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
            <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8">
               <div class="heading2 justbold black"><?php echo $slug->nama_supplier;?><img src="<?php echo base_url();?>assets/front/images/stars-03.png"></div>
               <div class="blue mt10 font16" ><?php echo $slug->alamat;?> -  <a class="blue" href="#map" ><u>Lihat di peta</u></a></div>
               <a class="noneline" href="hubungikami.html"><span class="grey"><small><u>Punya pertanyaan untuk <?php echo $slug->nama_supplier;?></u></small></span></a>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ellipsistext">
               <div>
                  <div class="ripiu2 pull-right@s ellipsistext"><span class="white marginsmallright justbold">89</span><span class="marginsmallleft justbold grey ellipsistext">Sangat Bagus</span></div>
               </div>
               <div class=" text-right@s full-width pull-right@s"><span class="blue">Berdasarkan 1522 Ulasan</span><br><span class="grey">89% merekomendasikan hotel ini</span><br><br></div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
               <div class="inline full-width" >
                  <!-- Start Slideshow Hotel -->
                  <div id="thumbCarousel" class="carousel slide">
                     <div class="carousel-inner thumb-inner rond">
                        <div class="active item">
                           <div class="col-xs-12 slide1 slider-div"><img src="<?php echo base_url();?>assets/front/images/favehotel/thumb/fave1_thumb.jpg" class="visible-xs full-width rond"><img  src="<?php echo base_url();?>assets/front/images/favehotel/fave1.jpg" class="hidden-xs full-width  rond"></div>
                        </div>
                        <?php foreach ($gallery as $keyg): ?>
                          <div class=" item">
                             <div class="col-xs-12 slide1 slider-div"><img src="<?php echo base_url()."files/".$keyg->foto;?>" class="visible-xs full-width rond"><img src="<?php echo base_url()."files/".$keyg->foto;?>" class="hidden-xs full-width rond"></div>
                          </div>
                        <?php endforeach; ?>
                     </div>
                     <a class="right carousel-control" data-href="#thumbCarousel" data-target="#thumbCarousel" data-toggle="carousel" data-slide="next">
                     <span class="glyphicon glyphicon-chevron-right"></span></a>
                     <a class="left carousel-control" data-href="#thumbCarousel" data-target="#thumbCarousel" data-toggle="carousel" data-slide="prev">
                     <span class="glyphicon glyphicon-chevron-left"></span></a>
                  </div>
                  <!-- End Slideshow Hotel -->
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
               <!-- Start Thumb Slideshow Hotel -->
               <div class="padgrid">
                  <div class="nav nav-justified nav-carousel row">
                     <a data-target="#thumbCarousel" data-slide-to="0" data-href="#" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 active">
                        <div class="padgrids"><img class=" rond full-width" src="<?php echo base_url();?>assets/front/images/favehotel/thumbs/fave1_thumb.jpg" /></div>
                     </a>
                     <?php foreach ($gallery as $keyg): ?>
                       <a data-target="#thumbCarousel" data-slide-to="7" data-href="#" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
                          <div class="padgrids"><img class=" rond full-width" src="<?php echo base_url()."files/".$keyg->foto;?>" /></div>
                       </a>
                     <?php endforeach; ?>
                  </div>
               </div>
               <!-- End Thumb Slideshow Hotel -->
            </div>
         </div>
         <br>
         <hr>
         <!-- Start Fasilitas Hotel -->
         <div class="row">
            <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3 heading2 justbold">Fasilitas Hotel</div>
            <div class="col-xs-12 col-sm-8 col-md-9 col-lg-9">
               <div class="row text-center grey font16">
                  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                     <div class="padgrids"><img src="<?php echo base_url();?>assets/front/images/facbeach.png"><br>Pemandangan Pantai</div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                     <div class="padgrids"><img src="<?php echo base_url();?>assets/front/images/facwifi.png"><br>Wifi di semua ruangan</div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                     <div class="padgrids"><img src="<?php echo base_url();?>assets/front/images/fachot.png"><br>Mandi Air Panas</div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                     <div class="padgrids"><img src="<?php echo base_url();?>assets/front/images/facpark.png"><br>Taman Bunga</div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "></div>
                  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                     <div class="padgrids"><img src="<?php echo base_url();?>assets/front/images/facbeach.png"><br>Pemandangan Pantai</div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                     <div class="padgrids"><img src="<?php echo base_url();?>assets/front/images/facwifi.png"><br>Wifi di semua ruangan</div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                     <div class="padgrids"><img src="<?php echo base_url();?>assets/front/images/fachot.png"><br>Mandi Air Panas</div>
                  </div>
                  <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
                     <div class="padgrids"><img src="<?php echo base_url();?>assets/front/images/facpark.png"><br>Taman Bunga</div>
                  </div>
               </div>
            </div>
         </div>
         <!-- End Fasilitas Hotel --><br>
         <hr>
         <!-- Start PilihanKamar1 -->
         <div class=" heading2 justbold">Pilihan Kamar</div>
         <div class="grey font16 mt10">Harga kamar tidak termasuk: Pajak 10%, Biaya layanan 10%</div>
         <div class="greybg padding mt10">
            <div class="row font16 ">
               <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 ellipsistext">
                  <div class="padgrid">Pilihan Layanan :</div>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2 ellipsistext">
                  <div class="padgrid"><label><input class="marginsmallright" type="checkbox"> Gratis Sarapan</label></div>
               </div>
               <div class="col-xs-12 col-sm-5 col-md-6 col-lg-6">
                  <div class="padgrid"><label><input class="marginsmallright" type="checkbox"> Refundable</label></div>
               </div>
               <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 text-right">
                  <div class="padgrid"><a class="blue" href="#">BATAL</a></div>
               </div>
            </div>
         </div>
         <br>
         <?php $kk= $this->session->userdata('kamar'); foreach ($room as $key):
           if ($key->supplier_id == $slug->id_supplier) {
             foreach ($foto as $key2) {
               if ($key2->produk_id == $key->id_produk) {?>
         <div class="bordergrey boxshadowsmall boxshadowhovermedium">
            <div class="whitebg paddingmedium">
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-8 col-lg-8 font16"><span class="pull-left"><?php echo $key->nama_produk;?></span><a href="hubungikami.html" data-toggle="tooltip" data-placement="top" title="Tanyakan kamar ini?"  class="visible-xs ">&nbsp;&nbsp;<img src="<?php echo base_url();?>assets/front/images/icons/questionblue.svg" class="iconsmall"></a></div>
                  <div class="hidden-xs col-sm-6 col-md-4 col-lg-4 text-right"><a href="hubungikami.html" class="blue underline font16"><img src="<?php echo base_url();?>assets/front/images/icons/questionblue.svg" class="iconsmall"> Tanyakan kamar ini</a></div>
               </div>
            </div>
            <div class="greybg paddingmedium">
               <div class="row">
                  <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                     <div class="padgridx"><img src="<?php echo base_url()."files/".$key2->foto;?>" class="full-width marginsmallbottom rond"><br> <a data-toggle="modal" data-target="#modalZoomKamar1"  href="" class="blue underline font16">Lihat lebih detail</a></div>
                  </div>
                  <div class="col-xs-12 col-sm-12 col-md-10 col-lg-10">
                     <div class="padgridx">
                        <div class="row bobordergrey">
                           <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                              <div class="padgridx">
                                 <div class="row softgreen font16">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class=" padgridt ellipsistext"><img class="iconmedium" src="<?php echo base_url();?>assets/front/images/icons/wifigreenbor.svg" > Wifi Gratis</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class=" padgridt ellipsistext"><img class="iconmedium" src="<?php echo base_url();?>assets/front/images/icons/breakfastgreenbor.svg" > Sarapan Gratis</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class="padgridt ellipsistext"><img class="iconmedium" src="<?php echo base_url();?>assets/front/images/icons/refundablegreenbor.svg" > Refundable</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                              <div class="padgridx">
                                 <div class="row">
                                    <div class="font16 col-xs-12 col-sm-12 col-md-12 col-lg-12 marginsmallbottom">Kasur tambahan :</div>
                                    <div class="col-xs-4 col-sm-4 col-md-4 col-lg-3" style="padding-right:10px;">
                                       <select class="form-control">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-8 col-md-8 col-sm-8 col-lg-9 softpurple justbold heading4">+ IDR 0</div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">
                              <div class=" text-right@m text-left@s text-left font16">
                                 <span class="text-pink"><?php echo $key->stok;?></span><br>
                                 <div class="mt10"> <img src="<?php echo base_url();?>assets/front/images/icons/guestblue.svg" class="iconsmall"><img src="<?php echo base_url();?>assets/front/images/icons/guestblue.svg" class="iconsmall"> Maks. 2 orang</div>
                              </div>
                           </div>
                           <div class="col-xs-12"><br></div>
                        </div>
                        <div class="row mt10">
                           <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                              <div class="padgridx">
                                 <div class="row grey font16">
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class="padgridt ellipsistext"><img class="iconmedium" src="<?php echo base_url();?>assets/front/images/facswindow.png" > Pemandangan</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class="padgridt ellipsistext"><img class="iconmedium" src="<?php echo base_url();?>assets/front/images/facsbigsize.png" > 35 m</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class="padgridt ellipsistext"><img class="iconmedium" src="<?php echo base_url();?>assets/front/images/facssmokes.png" > Non Smoking</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class="padgridt ellipsistext"><img class="iconmedium" src="<?php echo base_url();?>assets/front/images/facsshower.png" > Shower & Bathtub</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class="padgridt ellipsistext"><img class="iconmedium" src="<?php echo base_url();?>assets/front/images/facsbalcon.png" > Balkon & Teras</div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                       <div class="padgridt ellipsistext"><img class="iconmedium" src="<?php echo base_url();?>assets/front/images/facsbed.png" > Double Bed</div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-6 col-md-5 col-lg-5">
                              <div class="padgridx">
                                 <div class="row">
                                    <div class="font16 col-xs-12 col-sm-12 col-md-12 col-lg-12 marginsmallbottom">Jumlah Kamar :</div>
                                    <div class="col-xs-12 col-sm-4 col-md-4 col-lg-3" style="padding-right:10px;">
                                       <select class="form-control">
                                          <option>1</option>
                                          <option>2</option>
                                          <option>3</option>
                                          <option>4</option>
                                          <option>5</option>
                                       </select>
                                    </div>
                                    <div class="col-xs-8 col-md-8 col-sm-8 col-lg-9 hidden-xs"></div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 text-right@m text-left@s text-left ">
                              <div class="justbold marginsmallbottom"><span class="font16  grey">IDR &nbsp;</span><span class="text-pink heading3"><?php foreach ($allotment as $keyall): ?>
                                <?php if ($keyall->produk_id == $key->id_produk){
                                  echo number_format($keyall->harga*$kk);?>
                                <?php } else {
                                  echo number_format($key->harga_produk*$kk);
                                } ?>
                              <?php endforeach; ?></span></div>
                              <a href="pesankamar.html" class="btn full-width bluebg rond white">PESAN SEKARANG </a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
       <?php } } } endforeach; ?>
         <div id="modalZoomKamar1" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="modalHotel1">
            <div class="modal-dialog modal-lg">
               <div class="modal-content rond">
                  <img src="<?php echo base_url();?>assets/front/images/doublebed.jpg" class="full-width ">
               </div>
            </div>
         </div>
         <!-- End PilihanKamar1 --><br>
         <div class="greybg bordergrey paddingmedium">
            <div class="row">
               <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9 font16 grey text-center text-left@s ">
                  <div class="mt5">Punya pertanyaan untuk <?php echo $slug->nama_supplier;?>?</div>
               </div>
               <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center text-right@s">
                  <div class="padgridx"><a class="  btn whitebg borderblue blue" href="hubungikami.html"><img src="<?php echo base_url();?>assets/front/images/icons/askblue.svg" class="iconsmall marginsmallright">Tanyakan Hotel</a></div>
               </div>
            </div>
         </div>
         <br>
         <div class=" heading2 justbold marginsmallbottom">Bandingkan dengan hotel serupa</div>
         <br>
         <ul id="ulasanslider"  class="bxslider" data-call="bxslider" data-options="{slideMargin:30, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:1, pager:false, auto:true},{screen:480, slides:2, auto:true},{screen:768, slides:3, auto:true},{screen:992, slides:4, auto:true}]" >
            <li>
               <a href="profilhotel.html">
                  <div >
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg"  height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="">
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/wifigreen.svg">
                                    <div class="pull-left marginsmallleft"> Wifi Gratis</div>
                                 </div>
                              </div>
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/breakfastgreen.svg">
                                    <div class="pull-left marginsmallleft"> Sarapan Gratis</div>
                                 </div>
                              </div>
                              <div class="row margin10left mt10 padr10">
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
               <a href="profilhotel.html">
                  <div >
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg"  height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="">
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/wifigreen.svg">
                                    <div class="pull-left marginsmallleft"> Wifi Gratis</div>
                                 </div>
                              </div>
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/breakfastgreen.svg">
                                    <div class="pull-left marginsmallleft"> Sarapan Gratis</div>
                                 </div>
                              </div>
                              <div class="row margin10left mt10 padr10">
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
               <a href="profilhotel.html">
                  <div >
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg"  height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="">
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/wifigreen.svg">
                                    <div class="pull-left marginsmallleft"> Wifi Gratis</div>
                                 </div>
                              </div>
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/breakfastgreen.svg">
                                    <div class="pull-left marginsmallleft"> Sarapan Gratis</div>
                                 </div>
                              </div>
                              <div class="row margin10left mt10 padr10">
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
               <a href="profilhotel.html">
                  <div >
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg"  height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="">
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/wifigreen.svg">
                                    <div class="pull-left marginsmallleft"> Wifi Gratis</div>
                                 </div>
                              </div>
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/breakfastgreen.svg">
                                    <div class="pull-left marginsmallleft"> Sarapan Gratis</div>
                                 </div>
                              </div>
                              <div class="row margin10left mt10 padr10">
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
               <a href="profilhotel.html">
                  <div >
                     <div class="boxshadowsmall boxshadowhoverlarge">
                        <img src="<?php echo base_url();?>assets/front/images/favehotelbig.jpg"  height="100%" width="100%">
                        <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                           <div class="row paddingsmall">
                              <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white">Amaris Hotel Serpong Tangerang</div>
                              <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-01.png" class="full-width"></div>
                           </div>
                        </div>
                        <div class="notobordergrey">
                           <div class="greybg padding ellipsistext norcol font16 full-width">Jl. Jendral Sudirman No.01 Tangerang - Jakarta Selatan</div>
                           <div class="">
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/wifigreen.svg">
                                    <div class="pull-left marginsmallleft"> Wifi Gratis</div>
                                 </div>
                              </div>
                              <div class="ellipsistext padding bobordergrey softgreen font16">
                                 <div>
                                    <img class="iconmedium pull-left" src="<?php echo base_url();?>assets/front/images/icons/breakfastgreen.svg">
                                    <div class="pull-left marginsmallleft"> Sarapan Gratis</div>
                                 </div>
                              </div>
                              <div class="row margin10left mt10 padr10">
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  ">
                                    <div class="  norcol  "><small>Mulai dari</small></div>
                                    <div class=" ellipsistext black  "><del>Rp 670.897</del></div>
                                 </div>
                                 <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ellipsistext">
                                    <div class="">
                                       <div class="padding ellipsistext bordergrey greybg rond"><span class="justbold norcol">IDR</span> <span class="justbold danger ">240.650</span></div>
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
         <hr>
         <br>
         <div class=" heading2 justbold marginsmallbottom">Tempat terdekat</div>
         <div class="row font16">
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
               <div class="padgridx">
                  <div class="heading4 black "><img src="<?php echo base_url();?>assets/front/images/nearplaceairport.png" class="marginsmallright iconmedium">Airports</div>
                  <ul class="bslist marginsmalltop">
                     <li>11 kilometer<br>
                        Ngurah Rai International
                        Airport (DPS)
                     </li>
                     <li>110 kilometer<br>
                        Lombok International Airport
                        (LOP)
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
               <div class="padgridx">
                  <div class="heading4 black "><img src="<?php echo base_url();?>assets/front/images/nearplacebus.png" class="marginsmallright iconmedium">Transportasi Publik</div>
                  <ul class="bslist marginsmalltop">
                     <li>11 kilometer<br>
                        Bemo Kreneng Bus Terminal
                     </li>
                     <li>110 kilometer<br>
                        Bemo Kreneng Bus Terminal
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
               <div class="padgridx">
                  <div class="heading4 black "><img src="<?php echo base_url();?>assets/front/images/nearplacehosp.png" class="marginsmallright iconmedium">Rumah Sakit / Klinik</div>
                  <ul class="bslist marginsmalltop">
                     <li>11 kilometer<br>
                        Praktik Dr I Made Haryoga
                     </li>
                     <li>110 kilometer<br>
                        Praktik Dr I Made Ciputra
                     </li>
                  </ul>
                  <div class="heading4 black marginsmalltop"><img src="<?php echo base_url();?>assets/front/images/nearplaceapot.png" class="marginsmallright iconmedium">Apotik</div>
                  <ul class="bslist marginsmalltop">
                     <li>11 kilometer<br>
                        Guardian
                     </li>
                     <li>110 kilometer<br>
                        Nur Jaya
                     </li>
                  </ul>
               </div>
            </div>
            <div class="col-xs-12 col-sm-6 col-md-3 col-lg-3">
               <div class="padgridx">
                  <div class="heading4 black "><img src="<?php echo base_url();?>assets/front/images/nearplaceshop.png" class="marginsmallright iconmedium">Supermarket</div>
                  <ul class="bslist marginsmalltop">
                     <li>11 kilometer<br>
                        Circle K
                     </li>
                     <li>110 kilometer<br>
                        Circle K
                     </li>
                  </ul>
                  <div class="heading4 black marginsmalltop"><img src="<?php echo base_url();?>assets/front/images/nearplaceatm.png" class="marginsmallright iconmedium">ATM</div>
                  <ul class="bslist marginsmalltop">
                     <li>11 kilometer<br>
                        ATM Mandiri
                     </li>
                     <li>110 kilometer<br>
                        ATM BCA
                     </li>
                  </ul>
               </div>
            </div>
         </div>
         <br>
         <hr>
         <br>
         <div class=" heading2 justbold marginsmallbottom">Tentang <?php echo $slug->nama_supplier;?></div>
         <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tobordergrey">
               <div class=" heading2 justbold marginsmalltop marginsmallbottom">Tentang</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
               <div class="padl30 ">
                  <div class=" tobordergrey  " >
                     <div class="marginsmalltop  font16 ">
                        <p><?php echo $slug->tentang;?></p>
                        <p class="collapse" id="block-id">
                           Manjakan diri Anda dengan menikmati fasilitas spa yang memberikan harga dan
                           kualitas pelayanan terbaik. Resepsionis siap 24 jam untuk melayani proses check-in, check-out dan kebutuhan Anda yang lain. Jangan ragu untuk menghubungi resepsionis, kami siap melayani Anda..
                           Terdapat restoran yang menyajikan menu lezat ala favehotel Umalas khusus untuk Anda. WiFi tersedia di seluruh area publik properti untuk membantu Anda tetap terhubung dengan keluarga dan teman.
                           Favehotel Umalas adalah akomodasi dengan fasilitas baik dan kualitas pelayanan memuaskan menurut sebagian besar tamu. Pelayanan yang baik dengan harga terjangkau akan membuat Anda merasa nyaman menginap di favehotel Umalas.
                        </p>
                        <!-- aria-expanded attribute is mandatory -->
                        <!-- bootstrap changes it to true/false on toggle -->
                        <a href="#block-id"
                           class="morelink underline"
                           data-toggle="collapse"
                           aria-expanded="false"
                           aria-controls="block-id">
                        <span class="collapsed">
                        Selengkapnya <img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-down-bl.svg">
                        </span>
                        <span class="expanded">
                        Perkecil <img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-up-bl.svg">
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tobordergrey">
               <div class=" heading2 justbold marginsmalltop marginsmallbottom">Layanan Hotel</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
               <div class="padl30 ">
                  <div class=" tobordergrey  " >
                     <div class="marginsmalltop  ">
                        <div class="row norcol">
                           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ">
                              <div class="padgridz">
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="">
                                       <div class="" role="tab" id="heading1">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse1" aria-expanded="true" aria-controls="collapse1">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonpublik.svg" class="iconsmall marginsmallright"> Fasilitas Publik <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading1">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Area parkir</li>
                                                <li>Lift</li>
                                                <li>Restoran</li>
                                                <li>Restoran untuk sarapan</li>
                                                <li>Restoran untuk makan malam</li>
                                                <li>Restoran untuk makan siang</li>
                                                <li>Layanan kamar</li>
                                                <li>Brankas</li>
                                                <li>WiFi di area umum</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="" role="tab" id="heading2">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse2" aria-expanded="true" aria-controls="collapse2">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonservis.svg" class="iconsmall marginsmallright"> Servis Hotel <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Resepsionis 24 jam</li>
                                                <li>Keamanan 24 jam</li>
                                                <li>Laundry</li>
                                                <li>Penitipan bagasi</li>
                                                <li>Surat kabar di lobby</li>
                                                <li>Jasa tur</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="" role="tab" id="heading3">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonkegiatan.svg" class="iconsmall marginsmallright"> Kegiatan Lainnya <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading3">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Kolam renang anak</li>
                                                <li>Taman</li>
                                                <li>Layanan pijat</li>
                                                <li>Kolam renang outdoor</li>
                                                <li>Spa</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="" role="tab" id="heading4">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse4" aria-expanded="true" aria-controls="collapse4">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonfkamar.svg" class="iconsmall marginsmallright"> Fasilitas Kamar <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading4">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>TV kabel</li>
                                                <li>Meja</li>
                                                <li>Pancuran</li>
                                                <li>TV</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div class="padgridz">
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="">
                                       <div class="" role="tab" id="heading5">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse5" aria-expanded="true" aria-controls="collapse5">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonfumum.svg" class="iconsmall marginsmallright"> Umum <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading5">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>AC</li>
                                                <li>Area bebas asap rokok</li>
                                                <li>Area merokok</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="" role="tab" id="heading6">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse6" aria-expanded="true" aria-controls="collapse6">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonkonektivitas.svg" class="iconsmall marginsmallright"> Konektivitas <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading6">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Fasilitas komputer/Internet</li>
                                                <li>Internet Kamar</li>
                                                <li>WiFi gratis</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="" role="tab" id="heading7">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse7" aria-expanded="true" aria-controls="collapse7">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikontransportasi.svg" class="iconsmall marginsmallright"> Transportasi <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading7">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Penitipan sepeda</li>
                                                <li>Sewa mobil</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="" role="tab" id="heading8">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse8" aria-expanded="true" aria-controls="collapse8">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonanak.svg" class="iconsmall marginsmallright"> Anak & Peliharaan <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse8" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading8">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Penitipan anak</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                              <div class="padgridz">
                                 <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                    <div class="">
                                       <div class="" role="tab" id="heading9">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse9" aria-expanded="true" aria-controls="collapse9">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonolahraga.svg" class="iconsmall marginsmallright"> Olahraga & Rekreasi <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse9" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading9">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Bilyar</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="" role="tab" id="heading10">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse10" aria-expanded="true" aria-controls="collapse10">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonmakanminum.svg" class="iconsmall marginsmallright"> Makanan & Minuman <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse10" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading10">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Bar di kolam renang</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="" role="tab" id="heading11">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse11" aria-expanded="true" aria-controls="collapse11">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonantarjemput.svg" class="iconsmall marginsmallright"> Jasa Antar Jemput <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse11" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading11">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Antar-jemput bandara berbiaya</li>
                                             </ul>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="">
                                       <div class="" role="tab" id="heading12">
                                          <h4 class=" full-width " >
                                             <a role="button" class="collapsed norcol" data-toggle="collapse" data-parent="#accordion" href="#collapse12" aria-expanded="true" aria-controls="collapse12">
                                             <img src="<?php echo base_url();?>assets/front/images/icons/ikonbisnis.svg" class="iconsmall marginsmallright"> Fasilitas Bisnis <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right iconsmall">
                                             </a>
                                          </h4>
                                       </div>
                                       <div id="collapse12" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading12">
                                          <div class="panel-body">
                                             <ul class="bslist bslistbullet font16">
                                                <li>Fasilitas rapat</li>
                                             </ul>
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
         </div>
         <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tobordergrey">
               <div class=" heading2 justbold marginsmalltop marginsmallbottom">Kebijakan Tamu</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
               <div class="padl30 ">
                  <div class=" tobordergrey  " >
                     <div class="marginsmalltop  font16 ">
                        <ul class="bslist bslistbullet marginsmallleft ">
                           <li> Minimum umur tamu adalah: 1 tahun.</li>
                           <li>Tamu berusia 6 tahun dan ke atas dianggap sebagai dewasa</li>
                           <li> Ranjang tambahan tergantung pada kamar yang Anda pilih, silakan periksa kebijakan setiap kamar untuk informasi lebih lanjut.</li>
                        </ul>
                        <div class="collapse" id="block-id2">
                           <ul class="bslist marginsmallleft bslistbullet">
                              <li>
                                 Ketika memesan lebih dari 5 kamar, kebijakan yang berbeda-beda dan tambahan lainnya akan berlaku.
                              </li>
                           </ul>
                        </div>
                        <br>
                        <!-- aria-expanded attribute is mandatory -->
                        <!-- bootstrap changes it to true/false on toggle -->
                        <a href="#block-id2"
                           class="morelink underline"
                           data-toggle="collapse"
                           aria-expanded="false"
                           aria-controls="block-id">
                        <span class="collapsed">
                        Selengkapnya <img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-down-bl.svg">
                        </span>
                        <span class="expanded">
                        Perkecil <img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-up-bl.svg">
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tobordergrey">
               <div class=" heading2 justbold marginsmalltop marginsmallbottom">Informasi Hotel</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
               <div class="padl30 ">
                  <div class=" tobordergrey  " >
                     <div class="marginsmalltop   font16 ">
                        <div class="black heading4 marginsmallbottom removepadding" >Check-in/Check-out</div>
                        <ul class="bslist bslistbullet marginsmallleft">
                           <li> Check-in Mulai: 14:00</li>
                           <li>Check-in Hingga: 23:30</li>
                           <li> Check-out Mulai: 12:00</li>
                           <li>Check-out Hingga: 13:00</li>
                        </ul>
                        <div class="collapse" id="block-id3">
                           <div class="black heading4 marginsmallbottom removepadding" >Properti Hotel</div>
                           <ul class="bslist bslistbullet marginsmallleft">
                              <li>Jumlah bar/lounge: 1</li>
                              <li>Jumlah lantai : 2</li>
                              <li>Jumlah restoran: 1</li>
                              <li>Jumlah kamar : 70</li>
                              <li>Voltase Kamar : 220</li>
                              <li>Dibangun pada tahun: 2002</li>
                              <li>Renovasi terakhir hotel: 2013</li>
                           </ul>
                        </div>
                        <br>
                        <!-- aria-expanded attribute is mandatory -->
                        <!-- bootstrap changes it to true/false on toggle -->
                        <a href="#block-id3"
                           class="morelink underline"
                           data-toggle="collapse"
                           aria-expanded="false"
                           aria-controls="block-id">
                        <span class="collapsed">
                        Selengkapnya <img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-down-bl.svg">
                        </span>
                        <span class="expanded">
                        Perkecil <img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-up-bl.svg">
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tobordergrey">
               <div class=" heading2 justbold marginsmalltop marginsmallbottom">Pengumuman</div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
               <div class="padl30 ">
                  <div class=" tobordergrey  " >
                     <div class="marginsmalltop  font16 ">
                        <div>
                           <h4 class="justbold">Hari Raya Nyepi</h4>
                           Perlu diketahui bahwa pulau Bali merayakan Hari Raya Nyepi pada tanggal berikut ini: 9 Maret 2016 dan 28 Maret 2017. Selama Hari Raya Nyepi, seluruh penjuru pulau akan sepenuhnya hening.
                        </div>
                        <div class="collapse" id="block-id4"> Tidak boleh ada kegiatan apapun di luar ruangan, termasuk check-in dan check-out di hotel. </div>
                        <br>
                        <!-- aria-expanded attribute is mandatory -->
                        <!-- bootstrap changes it to true/false on toggle -->
                        <a href="#block-id4"
                           class="morelink underline"
                           data-toggle="collapse"
                           aria-expanded="false"
                           aria-controls="block-id">
                        <span class="collapsed">
                        Selengkapnya <img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-down-bl.svg">
                        </span>
                        <span class="expanded">
                        Perkecil <img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-up-bl.svg">
                        </span>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <br><br>
         <hr>
         <br>
         <div>
            <div class=" heading2 justbold  marginsmallbottom">Ulasan Tamu <img data-toggle="tooltip" data-placement="top" title="Semua ulasan di PesanHotel berasal dari tamu yang telah selesai menginap sehingga komentar dan peringkat yang Anda lihat merupakan penilaian yang sebenarnya. " src="<?php echo base_url();?>assets/front/images/icons/infogrey.svg" class="iconmedium"></div>
            <br>
            <!-- Nav tabs -->
            <ul class="nav review-tabs" role="tablist">
               <li role="presentation" class="active ">
                  <a  href="#phreview" aria-controls="phreview" role="tab" data-toggle="tab">
                     <h3 class="padbignavr visible-md visible-lg">Ulasan PesanHotel (29)</h3>
                     <img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm padbignavr">
                  </a>
               </li>
               <li role="presentation">
                  <a href="#tareview"   aria-controls="tareview" role="tab" data-toggle="tab">
                     <h3 class="padbignavr visible-md visible-lg">Ulasan Trip Advisor (1611)</h3>
                     <img src="<?php echo base_url();?>assets/front/images/logotamobile.png" class="visible-xs visible-sm padbignavr">
                  </a>
               </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content ">
               <div role="tabpanel" class="tab-pane fade in active " id="phreview">
                  <div class="bordergrey greybg padbig">
                     <div class="row rowflex">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ribore">
                           <div class="padgridx">
                              <div class="totalulasankarunia text-center text-center@s marginsmalltop " >89</div>
                              <div class=" blue heading2 justbold text-center" >Sangat Bagus</div>
                              <div class="text-center font16">Berdasarkan <span class="blue">29</span> Ulasan </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ribore">
                           <div class="padgridx">
                              <div class=" row font16">
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Bisnis</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 blue">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Perjalanan Sendiri</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 blue">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Pasangan</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 blue">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Keluarga</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 blue">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Bersama Teman</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 blue">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <div class="padgridx">
                              <div class="row">
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Kebersihan</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class="mt5">
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Pelayanan</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class="mt5">
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Makanan</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class="mt5">
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Lokasi</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class="mt5">
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Harga</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class="mt5">
                                          <div class="progress">
                                             <div class="progress-bar" role="progressbar" aria-valuenow="70"  aria-valuemin="0" aria-valuemax="100" style="width:70%">
                                                <span class="sr-only">70% Complete</span>
                                             </div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br><br>
                  <div class="row ">
                     <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="row ">
                           <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 font16">Tipe liburan :</div>
                           <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                              <select class="form-control  full-width">
                                 <option>Semua ulasan</option>
                                 <option>Liburan Romantis</option>
                                 <option>Berpetualang</option>
                                 <option>Wisata Budaya</option>
                                 <option>Liburan Santai</option>
                                 <option>Perjalanan Bisnis</option>
                                 <option>Wisata Keluarga</option>
                              </select>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"></div>
                        </div>
                        <br>
                        <hr>
                        <div class="tab-content ">
                           <div role="tabpanel" class="tab-pane fade in active " id="pagecomments1">
                              <div class="marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ellipsistext flex flexleft">
                                       <div class="totalulasankaruniakecil white text-center">89</div>
                                       <div class="font16 ellipsistext marginsmallleft mt10" > Febrian N. A - 11 Apr 2017</div>
                                    </div>
                                 </div>
                                 <div class=" greybg paddingmedium rond font16">Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                              </div>
                              <div class="marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ellipsistext flex flexleft">
                                       <div class="totalulasankaruniakecil white text-center">89</div>
                                       <div class="font16 ellipsistext marginsmallleft mt10" > Febrian N. A - 11 Apr 2017</div>
                                    </div>
                                 </div>
                                 <div class=" greybg paddingmedium rond font16">Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                              </div>
                              <div class="marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ellipsistext flex flexleft">
                                       <div class="totalulasankaruniakecil white text-center">89</div>
                                       <div class="font16 ellipsistext marginsmallleft mt10" > Febrian N. A - 11 Apr 2017</div>
                                    </div>
                                 </div>
                                 <div class=" greybg paddingmedium rond font16">Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                              </div>
                           </div>
                           <div role="tabpanel" class="tab-pane fade " id="pagecomments2">
                              <div class="marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ellipsistext flex flexleft">
                                       <div class="totalulasankaruniakecil white text-center">89</div>
                                       <div class="font16 ellipsistext marginsmallleft mt10" > Febrian N. A - 11 Apr 2017</div>
                                    </div>
                                 </div>
                                 <div class=" greybg paddingmedium rond font16">Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                              </div>
                              <div class="marginsmalltop">
                                 <div class="row">
                                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ellipsistext flex flexleft">
                                       <div class="totalulasankaruniakecil white text-center">89</div>
                                       <div class="font16 ellipsistext marginsmallleft mt10" > Febrian N. A - 11 Apr 2017</div>
                                    </div>
                                 </div>
                                 <div class=" greybg paddingmedium rond font16">Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                              </div>
                           </div>
                        </div>
                        <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           <nav aria-label="Page navigation">
                              <ul class="pagination " role="tablist">
                                 <li role="presentation"  class="active "><a href="#pagecomments1"   aria-controls="pagecomments1" role="tab" data-toggle="tab">1</a></li>
                                 <li  role="presentation"><a href="#pagecomments2"   aria-controls="pagecomments2" role="tab" data-toggle="tab">2</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="padl30">
                           <div class="paddingmedium greybg rond bordergrey">
                              <img src="<?php echo base_url();?>assets/front/images/doublebed.jpg" class="full-width rond">
                              <div class="black marginsmalltop font16">Sudah pernah menginap di hotel ini? Ceritakan pengalaman Anda dan dapatkan Kupon Diskon Hotel hingga Rp 50.000</div>
                              <br><span class="grey">Link untuk mengisi ulasan akan kami  kirimkan ke email anda </span> <input type="email" class="form-control input-lg marginsmalltop font16" id="exampleInputEmail1" placeholder="Email Anda"><a class="btn btn-lg blue borderblue full-width rond mt10 whitebg" href="">KIRIM SEKARANG</a><br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div role="tabpanel" class="tab-pane fade " id="tareview">
                  <div class="bordergrey greybg padbig">
                     <div class="row rowflex">
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ribore">
                           <div class="padgridx">
                              <div class="totalulasanta text-center text-center@s marginsmalltop " >89</div>
                              <div class="text-center marginsmalltop marginsmallbottom" ><img src="<?php echo base_url();?>assets/front/images/ollie_BubbleRating_4_119x20.svg" height="25" width="160"></div>
                              <div class="text-center font16">Berdasarkan <span class="greenta">29</span> Ulasan </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ribore">
                           <div class="padgridx">
                              <div class=" row font16">
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Bisnis</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 greenta">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Perjalanan Sendiri</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 greenta">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Pasangan</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 greenta">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Keluarga</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 greenta">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                                 <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
                                    <div class="padgridlarge">Bersama Teman</div>
                                 </div>
                                 <div class="text-right text-right@s col-xs-4 col-sm-4 col-md-4 col-lg-4 greenta">
                                    <div class="padgridlarge">89</div>
                                 </div>
                                 <div class="col-xs-12"></div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4">
                           <div class="padgridx">
                              <div class="row">
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Kebersihan</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="100%"> </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Pelayanan</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="100%"> </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Makanan</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="100%"> </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Lokasi</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="100%"> </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                                    <div class="padgridlarge">Harga</div>
                                 </div>
                                 <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                                    <div class="padgridlarge">
                                       <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="100%"> </div>
                                    </div>
                                 </div>
                                 <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                                    <div class="padgridlarge"> 70</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br><br>
                  <div class="row ">
                     <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
                        <div class="row ">
                           <div class="col-xs-6 col-sm-6 col-md-2 col-lg-2 font16">Tipe liburan :</div>
                           <div class="col-xs-6 col-sm-6 col-md-4 col-lg-4">
                              <select class="form-control  full-width">
                                 <option>Semua ulasan</option>
                                 <option>Liburan Romantis</option>
                                 <option>Berpetualang</option>
                                 <option>Wisata Budaya</option>
                                 <option>Liburan Santai</option>
                                 <option>Perjalanan Bisnis</option>
                                 <option>Wisata Keluarga</option>
                              </select>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6"></div>
                        </div>
                        <br>
                        <hr>
                        <div class="tab-content ">
                           <div role="tabpanel" class="tab-pane fade in active " id="pagecommentsta1">
                              <div class="row marginsmalltop">
                                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center"><img class="mt10" src="<?php echo base_url();?>assets/front/images/icons/ta-icon.svg" height="20" width="50"><br>
                                    <img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="140" class="marginsmalltop">
                                 </div>
                                 <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="font16 ellipsistext marginsmallbottom " ><span class="black"> Febrian N. A </span><span class="grey marginsmallleft">Wisata Sendiri - 11 Apr 2017</span></div>
                                    <div class=" greybg paddingmedium rond font16">
                                       <div class="row">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtaplus.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                       <div class="row marginsmalltop">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtamin.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="row marginsmalltop">
                                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center"><img class="mt10" src="<?php echo base_url();?>assets/front/images/icons/ta-icon.svg" height="20" width="50"><br>
                                    <img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="140" class="marginsmalltop">
                                 </div>
                                 <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="font16 ellipsistext marginsmallbottom " ><span class="black"> Febrian N. A </span><span class="grey marginsmallleft">Wisata Sendiri - 11 Apr 2017</span></div>
                                    <div class=" greybg paddingmedium rond font16">
                                       <div class="row">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtaplus.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                       <div class="row marginsmalltop">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtamin.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="row marginsmalltop">
                                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center"><img class="mt10" src="<?php echo base_url();?>assets/front/images/icons/ta-icon.svg" height="20" width="50"><br>
                                    <img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="140" class="marginsmalltop">
                                 </div>
                                 <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="font16 ellipsistext marginsmallbottom " ><span class="black"> Febrian N. A </span><span class="grey marginsmallleft">Wisata Sendiri - 11 Apr 2017</span></div>
                                    <div class=" greybg paddingmedium rond font16">
                                       <div class="row">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtaplus.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                       <div class="row marginsmalltop">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtamin.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <br>
                           </div>
                           <div role="tabpanel" class="tab-pane fade " id="pagecommentsta2">
                              <div class="row marginsmalltop">
                                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center"><img class="mt10" src="<?php echo base_url();?>assets/front/images/icons/ta-icon.svg" height="20" width="50"><br>
                                    <img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="140" class="marginsmalltop">
                                 </div>
                                 <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="font16 ellipsistext marginsmallbottom " ><span class="black"> Febrian N. A </span><span class="grey marginsmallleft">Wisata Sendiri - 11 Apr 2017</span></div>
                                    <div class=" greybg paddingmedium rond font16">
                                       <div class="row">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtaplus.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                       <div class="row marginsmalltop">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtamin.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <br>
                              <div class="row marginsmalltop">
                                 <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 text-center"><img class="mt10" src="<?php echo base_url();?>assets/front/images/icons/ta-icon.svg" height="20" width="50"><br>
                                    <img src="<?php echo base_url();?>assets/front/images/icons/ta-rating.svg" height="20" width="140" class="marginsmalltop">
                                 </div>
                                 <div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">
                                    <div class="font16 ellipsistext marginsmallbottom " ><span class="black"> Febrian N. A </span><span class="grey marginsmallleft">Wisata Sendiri - 11 Apr 2017</span></div>
                                    <div class=" greybg paddingmedium rond font16">
                                       <div class="row">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtaplus.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                       <div class="row marginsmalltop">
                                          <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12  flex flexleft">
                                             <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/reviewtamin.svg" class="iconsmall marginsmallright"></div>
                                             <div class="" > Tempat & pelayanan ok... Tapi mix & match menu breakfast kurang sip... Harus ditata lagi menunya..</div>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <br>
                           </div>
                        </div>
                        <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                           <nav aria-label="Page navigation">
                              <ul class="paginationta " role="tablist">
                                 <li role="presentation"  class="active "><a href="#pagecommentsta1"   aria-controls="pagecomments1" role="tab" data-toggle="tab">1</a></li>
                                 <li  role="presentation"><a href="#pagecommentsta2"   aria-controls="pagecomments2" role="tab" data-toggle="tab">2</a></li>
                              </ul>
                           </nav>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                        <div class="padl30">
                           <div class="paddingmedium greybg rond bordergrey">
                              <img src="<?php echo base_url();?>assets/front/images/doublebed.jpg" class="full-width rond">
                              <div class="black marginsmalltop font16">Sudah pernah menginap di hotel ini? Ceritakan pengalaman Anda di Tripadvisor</div>
                              <br><a class="btn btn-lg greenta bordergreenta full-width rond mt10 whitebg" href="">TAMBAH ULASAN</a><br><br>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div class=" heading2 justbold  marginsmallbottom">Perkiraan Cuaca</div>
            <ul id="kamarslider"  class="bxslider" data-call="bxslider" data-options="{slideMargin:5, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:2, pager:false, auto:true},{screen:480, slides:4, auto:true},{screen:768, slides:5, auto:true},{screen:992, slides:6, auto:true}]" >
               <li class=" ribordergrey">
                  <div class="full-width  text-center">
                     <div class="">&nbsp;</div>
                     <div class="font16">15 Agu</div>
                     <img src="<?php echo base_url();?>assets/front/images/weathersunny.png" class=" marginsmalltop align-center marginsmallbottom" height="70" width="70">
                     <div class="heading1 justbold black">26&#176;C</div>
                  </div>
               </li>
               <li class=" ribordergrey">
                  <div class="full-width  text-center">
                     <div class="blue font16">Check In</div>
                     <div class="font16">15 Agu</div>
                     <img src="<?php echo base_url();?>assets/front/images/weathersunny.png" class=" marginsmalltop align-center marginsmallbottom" height="70" width="70">
                     <div class="heading1 justbold black">26&#176;C</div>
                  </div>
               </li>
               <li class=" ribordergrey">
                  <div class="full-width  text-center">
                     <div class="">&nbsp;</div>
                     <div class="font16">15 Agu</div>
                     <img src="<?php echo base_url();?>assets/front/images/weathersunny.png" class=" marginsmalltop align-center marginsmallbottom" height="70" width="70">
                     <div class="heading1 justbold black">26&#176;C</div>
                  </div>
               </li>
               <li class=" ribordergrey">
                  <div class="full-width  text-center">
                     <div class="blue font16">Check Out</div>
                     <div class="font16">15 Agu</div>
                     <img src="<?php echo base_url();?>assets/front/images/weathersunny.png" class=" marginsmalltop align-center marginsmallbottom" height="70" width="70">
                     <div class="heading1 justbold black">26&#176;C</div>
                  </div>
               </li>
               <li class=" ribordergrey">
                  <div class="full-width  text-center">
                     <div class="">&nbsp;</div>
                     <div class="font16">15 Agu</div>
                     <img src="<?php echo base_url();?>assets/front/images/weathersunny.png" class=" marginsmalltop align-center marginsmallbottom" height="70" width="70">
                     <div class="heading1 justbold black">26&#176;C</div>
                  </div>
               </li>
               <li class=" ribordergrey">
                  <div class="full-width  text-center">
                     <div class="">&nbsp;</div>
                     <div class="font16">15 Agu</div>
                     <img src="<?php echo base_url();?>assets/front/images/weathersunny.png" class=" marginsmalltop align-center marginsmallbottom" height="70" width="70">
                     <div class="heading1 justbold black">26&#176;C</div>
                  </div>
               </li>
               <li class=" ribordergrey">
                  <div class="full-width  text-center">
                     <div class="">&nbsp;</div>
                     <div class="font16">15 Agu</div>
                     <img src="<?php echo base_url();?>assets/front/images/weathersunny.png" class=" marginsmalltop align-center marginsmallbottom" height="70" width="70">
                     <div class="heading1 justbold black">26&#176;C</div>
                  </div>
               </li>
            </ul>
            <br><br>
         </div>
      </div>
      <div id="map"><iframe src="https://www.google.com/maps/embed/v1/place?q=<?php echo $slug->lat;?>,<?php echo $slug->longi;?>&amp;key=AIzaSyDL33j5jmzt0syEFQOoT74YC8-NfM5WqCI" width="100%" height="350" frameborder="0" style="border:0" ></iframe></div>
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
