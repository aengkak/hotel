<script type="text/javascript" src='http://maps.google.com/maps/api/js?key=AIzaSyC7_M6TBAAaDdAgHvmlYJqMhZIeSLRyeSo&libraries=places'></script>
<script>
       $( function() {
         var projects = <?php echo $res;?>;

		 var focusNext = function (e, ui) {
        var self = $(this),
            tabIndex = parseInt(self.attr('tabindex'), 20),
            nextIndex = tabIndex + 1,
            nextInput = $('[tabindex="' + nextIndex + '"]');
        nextInput.get(0).focus();
    };

         $( "#tempattujuan" ).autocomplete({
           minLength: 0,
           source: projects,
           focus: function( event, ui ) {
             $( "#tempattujuan" ).val( ui.item.label );
             return false;
           },
           select: function( event, ui ) {
             $( "#tempattujuan" ).val( ui.item.value );
             $( "#project-id" ).val( ui.item.label );
             $( "#project-description" ).html( ui.item.desc );
             $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );

           },

		   "select": focusNext, // either of these will work. the only difference is when you want the next input focused.
        //"close": focusNext // select will fire before close.

         })
         .autocomplete( "instance" )._renderItem = function( ul, item ) {
           return $( "<li>" )
             .append( "<div class=\"bobordergrey pad15\"><span class=\"font16\">" + item.label + "</span>&nbsp;&nbsp;<sup><font class=\"floatright marginsmalltop\"><small class=\"bluebg white labels\">&nbsp;" + item.desc + "&nbsp;</small></font></sup><br><div class=\"mt5 mb5\">" + item.addr +  "</div></div>" )
             .appendTo( ul );
         };
		 $("input#tempattujuan").focus(function(e) {
			if(!e.isTrigger) {
			$(this).autocomplete("search", "");
			}
			return false;
		});
       } );
    </script>
    <script>
           $( function() {
             var projects = <?php echo $res;?>;

			 var focusNext = function (e, ui) {
        var self = $(this),
            tabIndex = parseInt(self.attr('tabindex'), 20),
            nextIndex = tabIndex + 1,
            nextInput = $('[tabindex="' + nextIndex + '"]');
        nextInput.get(0).focus();
    };

             $( "#tempattujuan1" ).autocomplete({
               minLength: 0,
               source: projects,
               focus: function( event, ui ) {
                 $( "#tempattujuan1" ).val( ui.item.label );
                 return false;
               },
               select: function( event, ui ) {
                 $( "#tempattujuan1" ).val( ui.item.value );
                 $( "#project-id" ).val( ui.item.label );
                 $( "#project-description" ).html( ui.item.desc );
                 $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );


               },
			   "select": focusNext, // either of these will work. the only difference is when you want the next input focused.
        //"close": focusNext // select will fire before close.
             })
             .autocomplete( "instance" )._renderItem = function( ul, item ) {
               return $( "<li>" )
                .append( "<div class=\"bobordergrey pad15\"><span class=\"font16\">" + item.label + "</span>&nbsp;&nbsp;<sup><font class=\"floatright marginsmalltop\"><small class=\"bluebg white labels\">&nbsp;" + item.desc + "&nbsp;</small></font></sup><br><div class=\"mt5 mb5\">" + item.addr +  "</div></div>" )
                 .appendTo( ul );
             };
			 $("input#tempattujuan1").focus(function(e) {
			if(!e.isTrigger) {
			$(this).autocomplete("search", "");
			}
			return false;
		});
           } );
        </script>
<link href="<?php echo base_url();?>assets/front/css/carousel-home.css" rel="stylesheet">

<div class="whitebg" style="z-index:4; position:relative;">
   <div class="container" >
      <div id="searchbox" class=" " style="z-index:4; position:relative; ">
         <div class="boxshadowmedium bluebg rond2 dbluebg ">
            <div style="padding:10px;">
               <div class="row">
                  <form action="#" method="post">
                     <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" data-toggle="tooltip" data-placement="bottom" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                        <div class="input-group full-width">
                           <input class="form-control2w destinationimgw" onclick="this.select();" tabindex="1" name="tempattujuan" required onblur="changet(this.value);" id="tempattujuan" value="<?php echo $this->session->userdata('tempattujuan');?>" placeholder="Nama hotel, destinasi atau tujuan anda menginap?" aria-describedby="basic-addon1" type="text">
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-11 col-md-6 col-lg-6">
                        <div class="row">
                           <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                              <div class="input-group">
                                 <input id="date-start" name="dari" tabindex="2" onchange="change1(this.value);" value="<?php echo $this->session->userdata('dari');?>" class="form-control2w calendarimgw" placeholder="Check In?" aria-describedby="basic-addon2" type="text">
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                              <div class="input-group">
                                 <input id="date-end" name="sampai" tabindex="3" onchange="change1(this.value);" value="<?php echo $this->session->userdata('sampai');?>" class="form-control2w calendarimgw" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                              </div>
                           </div>
                           <div class="col-xs-6 col-sm-2 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                              <div class="input-group">

                                 <div class="select-style2 roomimgw">
                                    <select id="kamar" name="kamar" tabindex="4" onchange="changek(this.value);">
                                       <?php for ($i=1; $i <=10 ; $i++) { ?>
                                       <option <?php if ($this->session->userdata('kamar') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-6 col-sm-2 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Jumlah Tamu" style="padding-right:5px;" data-original-title="Jumlah Tamu">
                              <div class="input-group">
                                 <div class="select-style2 guestimgw">
                                    <select id="orang" name="orang" tabindex="5" onchange="changeo(this.value);">
                                       <?php for ($i=2; $i <=30 ; $i++) { ?>
                                       <option <?php if ($this->session->userdata('orang') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                       <?php } ?>
                                    </select>
                                 </div>
                              </div>
                           </div>

                        </div>
                     </div>

                     <div class="col-xs-12 visible-xs  tobordergrey marginsmalltop "></div>
<div class="col-xs-6 col-sm-6 col-md-1 col-lg-1 visible-xs borisb">
                        </div>
                     <div class="col-xs-6 col-sm-1 col-md-1 col-lg-1 sbpos">
                        <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Cari"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchbluew.png" height="30" width="30"></button>
                     </div>
                  </form>
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
<div style="height:50px; z-index:3; position:relative;" class="transbg"></div>
<div class="" style="z-index:3; position:relative;  " >
   <div class=" whitebg bottombordergrey boxshadowsmall affixed-element-top js-affixed-element-top">
      <div class="container " >
         <div class="">
            <div >
               <div class="row mt10 mb10">
                  <div class="col-xs-3 col-sm-1 col-md-1 col-lg-3">
                     <a  class="" href="<?php echo base_url();?>">
                     <img style="margin-top:5px;" src="<?php echo base_url();?>assets/front/images/logo.png" class="visible-lg ">
                     <img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm visible-md ">
                     </a>
                  </div>
                  <div class="visible-md visible-sm col-md-9 col-sm-9">
                     <ul style="margin-top:-7px;" class="nav navbar-nav ellipsistext ">
                        <li>
                           <a style="padding-bottom:5px;" class="" href="<?php echo base_url();?>promo">
                              <div class="boxshadowsmall greyborder1 rond1" style="padding:10px; margin-top:-10px;"><span class="font16 black">PROMO</span> &nbsp;<img src="<?php echo base_url();?>assets/front/images/dot.png" style="margin-top:-2px;"></div>
                           </a>
                        </li>
                        <li><a style="padding-bottom:5px;" href="<?php echo base_url();?>checkbooking"><span class="font16 black">CEK PEMESANAN</span></a></li>
                        <li><a style="padding-bottom:5px;" href="<?php echo base_url();?>faq"><span class="font16 black">BANTUAN</span></a></li>
                     </ul>
                  </div>
                  <form action="#" method="post">
                     <div class="visible-lg-inline col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                        <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/destinationblue.png" height="30" width="30"></span>
                           <input onblur="changet1(this.value);" tabindex="6" onclick="this.select();" id="tempattujuan1" required name="tempattujuan" value="<?php echo $this->session->userdata('tempattujuan');?>" class="form-control2" placeholder="Hotel, destinasi atau tujuan anda?" aria-describedby="basic-addon1" type="text">
                        </div>
                     </div>
                     <div class="visible-lg-inline col-lg-3">
                        <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                              <div class="input-group">
                                 <input id="date-startmo" name="dari" tabindex="7" onchange="change2(this.value);" value="<?php echo $this->session->userdata('dari'); ?>" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon1" type="text">
                              </div>
                           </div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                              <div class="input-group">
                                 <input id="date-endmo" name="sampai" tabindex="8" onchange="change2(this.value);" value="<?php echo $this->session->userdata('sampai'); ?>" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="visible-lg-inline col-lg-1" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                        <div class="input-group">
                           <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/roomblue.png" height="30" width="30"></span>
                           <div class="select-style">
                              <select id="kamar1" name="kamar" tabindex="9" onchange="changek1(this.value);">
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
                              <select id="orang1" name="orang" tabindex="10" onchange="changeo1(this.value);">
                                 <?php for ($i=2; $i <=30 ; $i++) { ?>
                                 <option <?php if ($this->session->userdata('orang') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                 <?php } ?>
                              </select>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-3 col-sm-2 visible-lg-inline col-md-2 col-lg-1 text-right">
                        <button type="submit" data-toggle="tooltip" data-placement="bottom" title="Cari"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchblue.png" height="30" width="30"></button>
                     </div>
                  </form>
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
         <div class="heading2 justbold black"><?php echo $slug->nama_supplier;?>
            <?php $bintang = $slug->bintang; for ($i=0; $i < $bintang; $i++) { ?>
            <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
            <?php } ?>
         </div>
         <div class="blue mt10 font16" ><?php echo $slug->alamat;?> -  <a class="blue" href="#map" ><u>Lihat di peta</u></a></div>
         <a class="noneline" href="<?php echo base_url();?>contact"><span class="grey"><small><u>Punya pertanyaan untuk <?php echo $slug->nama_supplier;?></u></small></span></a>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 ellipsistext">
         <div>
            <div class="ripiu2 pull-right@s ellipsistext"><span class="white marginsmallright justbold"><?php echo $slug->rate;?></span><span class="marginsmallleft justbold grey ellipsistext">
              <?php $a = $slug->rate;
                if ($a >= 85 && $a <= 100) {
                  echo "Sangat bagus";
                } elseif ($a >= 65 && $a <= 84) {
                  echo "Bagus";
                } elseif ($a >= 50 && $a <= 64) {
                  echo "Lumayan";
                } elseif ($a >= 1 && $a <= 49) {
                  echo "Kurang Memuaskan";
                } elseif ($a == 0) {
                  echo "Belum Ada Ulasan";
                }?>
            </span></div>
         </div>
      </div>
   </div>
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
         <div class="inline full-width" >
            <!-- Start Slideshow Hotel -->
            <div id="thumbCarousel" class="carousel slide">
               <div class="carousel-inner thumb-inner rond">
                  <?php $gal = 0; foreach ($gallery as $keyg) {
                     if ($keyg->supplier_id == $slug->id_supplier) {?>
                  <div class="<?php if($gal == 0){ echo "active"; }?> item">
                     <div class=" slider-div" style="background-image: url(<?php echo base_url()."files/".$keyg->foto;?>);" ></div>
                  </div>
                  <?php $gal++; } } ?>
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
               <?php $gal = 0; foreach ($gallery as $keyg) {
                  if ($keyg->supplier_id == $slug->id_supplier) {?>
               <a data-target="#thumbCarousel" data-slide-to="<?php echo $gal;?>" data-href="#" class="col-xs-4 col-sm-4 col-md-4 col-lg-4 pointer">
                  <div class="padgrids">
                     <div class=" item">
                        <div class=" slider-div2 rond" style="background-image: url(<?php echo base_url()."files/".$keyg->foto;?>);" >
                        </div>
                     </div>
                  </div>
               </a>
               <?php $gal++; } } ?>
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
           <?php $f = $slug->fitur_id;
           $res = explode(",",$f);
           $no = 1;
           foreach ($res as $key => $value) {
             foreach ($fiturhotel as $keyf) {
               if ($keyf->id_fitur == $value) { ?>
            <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 ">
               <div class="padgrids">
                 <span class="<?php echo "g".$keyf->icon;?> iconlarge marginsmallright"></span><?php echo $keyf->nama;?>
               </div>
            </div>
          <?php }
        } if ($no == 4) {
          break;
        }
      $no++; }?>
         </div>
      </div>
   </div>
   <!-- End Fasilitas Hotel --><br>
   <hr>
   <!-- Start PilihanKamar1 -->
   <div class=" heading2 justbold">Pilihan Kamar</div>
   <?php foreach($fee as $keyfee) {$pajak1 = $keyfee->fee; $pajak = $pajak1/100;}?>
   <div class="grey font16 mt10">Harga kamar sudah termasuk: Pajak <?php echo $pajak1;?> %</div>
   <div><div >
      <form id="cekkamar" class="greybg rond pad15 mt10">
        <input  type="hidden" name="id_supplier" value="<?php echo $slug->id_supplier;?>" >
         <div class="row font16 ">
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ellipsistext">
               <div class="padgrid">
                  <div class="input-group full-width">
                     <input id="date-awal" name="dari" value="<?php echo $this->session->userdata('dari');?>" onchange="cekroom()" class="form-control2 rond bordergrey  calendarimgr" placeholder="Check In?" aria-describedby="basic-addon2" type="text">
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 ellipsistext">
               <div class="padgrid">
                  <div class="input-group full-width">
                     <input id="date-akhir" name="sampai" value="<?php echo $this->session->userdata('sampai');?>" onchange="cekroom()" class="form-control2 rond bordergrey  calendarimgr" placeholder="Check In?" aria-describedby="basic-addon2" type="text">
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
               <div class="padgrid">
                  <div class="select-style bordergrey rond2 pad2 roomimgr">
                     <select id="kamar2" name="kamar" onchange="cekroom()">
                        <?php for ($i=1; $i <=10 ; $i++) { ?>
                        <option <?php if ($this->session->userdata('kamar') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php } ?>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
               <div class="padgrid">
                  <div class="select-style  bordergrey pad2 guestimgr">
                     <select id="orang2" name="orang" onchange="cekroom()">
                        <?php for ($i=2; $i <=30 ; $i++) { ?>
                        <option <?php if ($this->session->userdata('orang') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                        <?php } ?>
                     </select>
                  </div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2 ellipsistext">
               <div class="padgrid">
                  <div class="select-style  bordergrey pad2 tagimgr">
                    <select class="form-control" onchange="getHasil(this.value);" id="dataharga" name="dataharga">
                        <option value="0">Per Malam</option>
                        <option value="1" selected>Per Kamar</option>
                     </select>
                  </div>
               </div>
            </div>
         </div>
      </form></div>

   <br>
   <div id="ganti">
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
								  <img src="<?php echo base_url();?>assets/front/images/icons/roomblue.svg" class="iconsmall">
									1 Kamar<br>
                              <div class="mt10"> 
							  <img src="<?php echo base_url();?>assets/front/images/icons/guestblue.svg" class="iconsmall">
							  <img src="<?php echo base_url();?>assets/front/images/icons/guestblue.svg" class="iconsmall"> Maks. 2 orang
							  </div>
                           </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-right@m text-left@s text-left ">
						
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
                                 }?> Kamar Tersedia</span><br> </div>
						
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
                           <button class="btn  bluebg rond white" data-toggle="tooltip" data-placement="bottom" title="Pesan" type="submit">PESAN <span class="hidden-xs hidden-sm hidden-md">SEKARANG</span></button>
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
   </div>
   <div id="modalZoomKamar1" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="modalHotel1">
      <div class="modal-dialog modal-lg">
         <div class="modal-content rond">
            <img id="zoomgambarkamar" src="" class="full-width ">
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
            <div class="padgridx"><a class="  btn whitebg borderblue blue" href="<?php echo base_url();?>contact"><img src="<?php echo base_url();?>assets/front/images/icons/askblue.svg" class="iconsmall marginsmallright">Tanyakan Hotel</a></div>
         </div>
      </div>
   </div>
   <br>
   <div class=" heading2 justbold marginsmallbottom">Bandingkan dengan hotel serupa</div>
   <br>
   <ul id="ulasanslider"  class="bxslider" data-call="bxslider" data-options="{slideMargin:30, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:1, pager:false, auto:true},{screen:480, slides:2, auto:true},{screen:768, slides:3, auto:true},{screen:992, slides:4, auto:true}]" >
      <?php foreach ($supplier as $key) { ?>
      <li>
         <a href="<?php echo base_url()."check/".$key->slug;?>">
            <div >
               <div class="boxshadowsmall boxshadowhoverlarge">
                  <?php foreach ($foto as $keyf) {
                     if ($keyf->supplier_id == $key->id_supplier) { ?>
                  <div style="background-image: url(<?php echo base_url()."files/".$keyf->foto;?>);" class="hotelimg " ></div>
                  <?php break; }
                     } ?>
                  <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                     <div class="row paddingsmall">
                        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white"><?php echo $key->nama_supplier;?></div>
                        <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right flex flexright ">
                                  <?php $bintang = $key->bintang; for ($i=0; $i < $bintang; $i++) { ?>
                                    <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
                                  <?php } ?>
                                </div>
                     </div>
                  </div>
                  <div class="notobordergrey">
                     <div class="greybg padding ellipsistext norcol font16 full-width"><?php echo $key->alamat;?></div>
                     <div class="">
                       <?php $f = $key->fitur_id;
                       $res = explode(",",$f);
                       $b = array();
                       foreach ($res as $keyres => $value) {
                         foreach ($fiturhotel as $keyf) {
                           if ($value == $keyf->id_fitur) {
                             $b[] = $key->id_supplier; ?>
                             <div class="ellipsistext padding bobordergrey softgreen font16">
                                <div>
                                   <span class="iconmedium <?php echo "gs".$keyf->icon;?>"></span>
                                   <?php echo $keyf->nama;?>
                                </div>
                             </div>
                      <?php }
                    }
                    if (count($b) >= 2) {
                      break;
                    }
                  }?>

                        <div class="row margin10left mt10 padr10">
                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  ">
                              <div class="  norcol  "><small>Mulai dari</small></div>
                              <div class=" ellipsistext black  "><del>Rp
                                <?php
                              if ($allotment != NULL) {
                                foreach ($allotment as $keyall) {
                                 if ($keyall->supplier_id == $key->id_supplier) {
                                   $g = $keyall->harga;
                                 } else {
                                   foreach ($room as $keyr) {
                                     if ($keyr->supplier_id == $key->id_supplier) {
                                       $g = $keyr->harga_produk;
                                     }
                                   }
                                 }
                               } $tambahan = $g * $pajak; $ggg = $tambahan + $g + 200000; echo number_format($ggg);
                             } else {
                               foreach ($room as $keyr) {
                                 if ($keyr->supplier_id == $key->id_supplier) {
                                   $h = $keyr->harga_produk;
                                 }
                               } $tambahan = $h * $pajak; $hhh = $tambahan + $h+ 200000; echo number_format($hhh);
                             }?>
                              </del></div>
                           </div>
                           <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 ellipsistext">
                              <div class="">
                                 <div class="padding ellipsistext bordergrey greybg rond">
                                   <span class="justbold norcol">IDR</span>
                                   <span class="justbold danger ">
                                     <?php
                                   if ($allotment != NULL) {
                                     foreach ($allotment as $keyall) {
                                      if ($keyall->supplier_id == $key->id_supplier) {
                                        $g = $keyall->harga;
                                      } else {
                                        foreach ($room as $keyr) {
                                          if ($keyr->supplier_id == $key->id_supplier) {
                                            $g = $keyr->harga_produk;
                                          }
                                        }
                                      }
                                    } $tambahan = $g * $pajak; echo number_format($g + $tambahan);
                                  } else {
                                    foreach ($room as $keyr) {
                                      if ($keyr->supplier_id == $key->id_supplier) {
                                        $h = $keyr->harga_produk;
                                      }
                                    } $tambahan = $h * $pajak; echo number_format($h + $tambahan);
                                  }?>
                                   </span>
                                 </div>
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
      <?php } ?>
   </ul>
   <hr>
   <br>
   <div class=" heading2 justbold marginsmallbottom">Tentang <?php echo $slug->nama_supplier;?></div>
   <br>
   <?php if($slug->tentang!= NULL) { ?>
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tobordergrey">
         <div class=" heading2 justbold marginsmalltop marginsmallbottom">Tentang</div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
         <div class="padl30 ">
            <div class=" tobordergrey  " >
               <div class="marginsmalltop  font16 ">
                  <p><?php echo $slug->tentang;?></p>
               </div>
            </div>
         </div>
      </div>
   </div>
   <br>
   <?php } ?>

   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tobordergrey">
         <div class=" heading2 justbold marginsmalltop marginsmallbottom">Layanan Hotel</div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
         <div class="padl30 ">
            <div class=" tobordergrey  " >
               <div class="marginsmalltop  ">
                  <div class="row norcol">
                     <div>
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
                                         <?php $f = $slug->fitur_id;
                                         $res = explode(",",$f);
                                         foreach ($fiturhotel as $keyfh) {
                                           foreach ($res as $key => $value) {
                                             if ($value == $keyfh->id_fitur) { ?>
                                               <label style="padding-right: 20px;">	&#9899; <?php echo $keyfh->nama;?></label>
                                       <?php }
                                           }
                                         } ?>

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
                                         <?php $f = $slug->fiturkamar;
                                         $res = explode(",",$f);
                                         foreach ($fiturroom as $keyfk) {
                                           foreach ($res as $key => $value) {
                                             if ($value == $keyfk->id_fitur) { ?>
                                               <label style="padding-right: 20px;">	&#9899; <?php echo $keyfk->nama;?></label>
                                       <?php }
                                           }
                                         } ?>
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
   <?php if($slug->pengumuman != NULL){?>
   <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 tobordergrey">
         <div class=" heading2 justbold marginsmalltop marginsmallbottom">Pengumuman</div>
      </div>
      <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9 ">
         <div class="padl30 ">
            <div class=" tobordergrey  " >
               <div class="marginsmalltop  font16 ">
                  <div>
                    <?php echo $slug->pengumuman;?>
					</div>
                  <!-- aria-expanded attribute is mandatory -->
                  <!-- bootstrap changes it to true/false on toggle -->
               </div>
            </div>
         </div>
      </div>
   </div>
   <?php } ?>
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
               <h3 class="padbignavr visible-md visible-lg">Ulasan PesanHotel (<?php if($komentar != NULL){echo count($komentar);} else{ echo "0";}?>)</h3>
               <img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm padbignavr">
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
                        <div class="totalulasankarunia text-center text-center@s marginsmalltop " >
                        <?php
                        if ($ulasan == NULL) {
                          $rate = 0;
						  $kebersihan = 0;
						  $pelayanan = 0;
						  $makanan = 0;
						  $lokasi = 0;
						  $harga = 0;
                          echo $rate;
                        } else {
                          $rata = array();
						  $k = array();
						  $p = array();
						  $m = array();
						  $l = array();
						  $hrg = array();
                          foreach ($ulasan as $keyu) {
                            if ($keyu->supplier_id == $slug->id_supplier) {
                              $rata[] = $keyu->rata;
							  $k[] = $keyu->kebersihan;
							  $p[] = $keyu->pelayanan;
							  $m[] = $keyu->makanan;
							  $l[] = $keyu->lokasi;
							  $hrg[] = $keyu->harga;
                            }
                          }
                          if ($rata == NULL) {
							  $kebersihan = 0;
						  $pelayanan = 0;
						  $makanan = 0;
						  $lokasi = 0;
						  $harga = 0;
                            $rate = 0;
                            echo $rate;
                          } else {
                            $countula = count($rata);
                            $rataula = array_sum($rata);
                            $rate = $rataula / $countula;
							$kebersihan = array_sum($k) / count($k);
							$pelayanan = array_sum($p) / count($p);
							$makanan = array_sum($m) / count($m);
							$lokasi = array_sum($l) / count($l);
							$harga = array_sum($hrg) / count($hrg);
                            echo $rate;
                          }
                        }
                        ?>
                        </div>
                        <div class=" blue heading2 justbold text-center" >
                          <?php $a = $rate;
                            if ($a >= 85 && $a <= 100) {
                              echo "Sangat bagus";
                            } elseif ($a >= 65 && $a <= 84) {
                              echo "Bagus";
                            } elseif ($a >= 50 && $a <= 64) {
                              echo "Lumayan";
                            } elseif ($a >= 1 && $a <= 49) {
                              echo "Kurang Memuaskan";
                            } elseif ($a == 0) {
                              echo "Belum Ada Ulasan";
                            }?>
                        </div>

                     </div>
                  </div>
                     <div class="padgridx">
                        <div class="row">
                           <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                              <div class="padgridlarge">Kebersihan</div>
                           </div>
                           <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                              <div class="padgridlarge">
                                 <div class="mt5">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $kebersihan;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $kebersihan;?>%">
                                          <span class="sr-only"><?php echo $kebersihan;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                              <div class="padgridlarge"> <?php echo $kebersihan;?></div>
                           </div>
                           <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                              <div class="padgridlarge">Pelayanan</div>
                           </div>
                           <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                              <div class="padgridlarge">
                                 <div class="mt5">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $pelayanan;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $pelayanan;?>%">
                                          <span class="sr-only"><?php echo $pelayanan;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                              <div class="padgridlarge"> <?php echo $pelayanan;?></div>
                           </div>
                           <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                              <div class="padgridlarge">Makanan</div>
                           </div>
                           <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                              <div class="padgridlarge">
                                 <div class="mt5">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $makanan;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $makanan;?>%">
                                          <span class="sr-only"><?php echo $makanan;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                              <div class="padgridlarge"> <?php echo $makanan;?></div>
                           </div>
                           <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                              <div class="padgridlarge">Lokasi</div>
                           </div>
                           <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                              <div class="padgridlarge">
                                 <div class="mt5">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $lokasi;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $lokasi;?>%">
                                          <span class="sr-only"><?php echo $lokasi;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                              <div class="padgridlarge"> <?php echo $lokasi;?></div>
                           </div>
                           <div class="col-xs-5 col-sm-4 col-md-4 col-lg-4 ellipsistext font16">
                              <div class="padgridlarge">Harga</div>
                           </div>
                           <div class="col-xs-5 col-sm-7 col-md-7 col-lg-7">
                              <div class="padgridlarge">
                                 <div class="mt5">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $harga;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $harga;?>%">
                                          <span class="sr-only"><?php echo $harga;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right">
                              <div class="padgridlarge"> <?php echo $harga;?></div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
            <br><br>
            <div class="row ">
               <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">

                  <br>
                  <hr>
                  <div id="komen">
                    <?php if ($komentar != NULL) { ?>
                  <div class="tab-content ">
                     <div role="tabpanel" class="tab-pane fade in active " id="pagecomments1">

                          <?php foreach ($komentar as $keyu) { ?>
                            <div class="marginsmalltop">
                               <div class="row">
                                  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ellipsistext flex flexleft">
                                     <div class="totalulasankaruniakecil white text-center"><?php echo $keyu['rata'];?></div>
                                     <div class="font16 ellipsistext marginsmallleft mt10" > <?php echo $keyu['nama_lengkap']." - ".date('d F Y', strtotime($keyu['tgl_komen']));?></div>
                                  </div>
                               </div>
                               <div class=" greybg paddingmedium rond font16"><?php echo $keyu['isi'];?></div>
                            </div>

                        <?php
                        } ?>

                     </div>
                  </div>
                  <div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
                     <nav aria-label="Page navigation">
                       <?php echo $this->ajax_pagination->create_links();?>

                     </nav>
                  </div>
                <?php } ?>
                </div>
               </div>
            </div>
         </div>

      </div>

      <br><br>
   </div>
</div>
 <div id="map" style="width:100%; height:350px;"></div>

</div>
<div class="tobordergrey greybg">
   <br>
   <div class="ellipsistext container font16 norcol">
      Hotel <img src="<?php echo base_url();?>assets/front/images/icons/chevron-rightgrey.svg" class="iconsmall"> <a class="norcol underline" href=""><?php echo $slug->kota;?></a>  <img src="<?php echo base_url();?>assets/front/images/icons/chevron-rightgrey.svg" class="iconsmall"> <?php echo $slug->nama_supplier;?>
   </div>
   <br>
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
             </ul>
               <ul class="bslist mt10 font16 norcol">
                  <li>+62 31 848 1333</li>
                  <li>+62 31 842 1239</li>
                  <li>+62 88804801175</li>
                  <li>cs@pesanhotel.com</li>
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
$(document).ready(function()
    {
		var currentTime = new Date();
	var besok = new Date();
	var lusa = new Date();
	besok.setDate(besok.getDate() + 1);
	lusa.setDate(lusa.getDate() + 2);
$("#date-akhir").datepicker({ dateFormat: 'yy-mm-dd', minDate: currentTime })<?php if($this->session->userdata('sampai') == NULL){?>
	.datepicker("setDate", lusa);
	<?php } ?>
        $("#date-awal").datepicker({ dateFormat: 'yy-mm-dd', minDate: currentTime })<?php if($this->session->userdata('dari') == NULL){?>
	.datepicker("setDate", besok)
	<?php } ?>.bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#date-akhir").datepicker( "option", "minDate", minValue );
        })

});
</script>
<script type="text/javascript">
   function change1() {
     document.getElementById("date-startmo").value = $('#date-start').val();
     document.getElementById("date-awal").value = $('#date-start').val();
     document.getElementById("date-endmo").value = $('#date-end').val();
     document.getElementById("date-akhir").value = $('#date-end').val();
   }
</script>
<script type="text/javascript">
   function change2() {
     document.getElementById("date-start").value = $('#date-startmo').val();
     document.getElementById("date-awal").value = $('#date-startmo').val();
     document.getElementById("date-end").value = $('#date-endmo').val();
     document.getElementById("date-akhir").value = $('#date-endmo').val();
   }
</script>
<script>
   function changek() {
     var a = $( "#kamar" ).val();
     $( "#kamar1" ).val(a);
     $( "#kamar2" ).val(a);
   }
   function changek1() {
     var b = $( "#kamar1" ).val();
     $( "#kamar" ).val(b);
     $( "#kamar2" ).val(b);
   }
</script>
<script>
   function changeo() {
     var a = $( "#orang" ).val();
     $( "#orang1" ).val(a);
     $( "#orang2" ).val(a);
   }
   function changeo1() {
     var b = $( "#orang1" ).val();
     $( "#orang" ).val(b);
     $( "#orang2" ).val(b);
   }
</script>
<script>
   function changet() {
     var t = $( "#tempattujuan" ).val();
     document.getElementById("tempattujuan1").value = t;
   }
   function changet1() {
     var t1 = $( "#tempattujuan1" ).val();
     $( "#tempattujuan" ).val(t1);
   }
</script>
<script>
   function detailharga(id) {
     $('#modalHotel1').modal('show'); // show bootstrap modal
     $("#bodyharga").load("<?php echo base_url();?>detailharga/"+id,function(data){
         $("#bodyharga").html(data);
     });
   }
</script>
<script>
function cekroom() {
  document.getElementById("date-startmo").value = $('#date-awal').val();
  document.getElementById("date-endmo").value = $('#date-akhir').val();
  document.getElementById("date-start").value = $('#date-awal').val();
  document.getElementById("date-end").value = $('#date-akhir').val();
  var kamar = $( "#kamar2" ).val();
  $( "#kamar" ).val(kamar);
  $( "#kamar1" ).val(kamar);
  var orang = $( "#orang2" ).val();
  $( "#orang" ).val(orang);
  $( "#orang1" ).val(orang);
  $.ajax({
    url : "<?php echo base_url();?>cekroom",
    type: "POST",
    data: $('#cekkamar').serialize(),
    beforeSend: function(){
         $('#ganti').html("<img src='<?php echo base_url();?>assets/front/images/loading.gif' /> Processing!");
    },
    success: function(data)
    {
         $("#ganti").html(data);
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
    }
});
}
</script>

<script>
   function zoomkamar(id){
     $.ajax({
       url : "<?php echo base_url();?>zoomkamar",
       type: "POST",
       data: {id : id},
       success: function(data)
       {
         var loc = "<?php echo base_url();?>files/"+data;
         $('.modal').modal('hide');
         $("#" + "modalZoomKamar1").modal('show');
         document.getElementById('zoomgambarkamar').setAttribute('src', loc)
       },
       error: function (jqXHR, textStatus, errorThrown)
       {
       }
     });
     ;
   }
</script>
<script type="text/javascript">
var locations = <?php echo $location;?>;

    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 15,
      center: new google.maps.LatLng(<?php echo $slug->lat;?>, <?php echo $slug->longi;?>),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    });

    var infowindow = new google.maps.InfoWindow();

    var marker, i;

    for (i = 0; i < locations.length; i++) {
      marker = new google.maps.Marker({
        position: new google.maps.LatLng(locations[i][1], locations[i][2]),
        map: map,
	icon : locations[i][3]
      });

      google.maps.event.addListener(marker, 'click', (function(marker, i) {
        return function() {
          infowindow.setContent(locations[i][0]);
          infowindow.open(map, marker);
        }
      })(marker, i));
    }

  </script>
  <script>
  function getHasil() {
    var e = document.getElementById("dataharga");
    var stre = e.options[e.selectedIndex].value;
    if ( stre == 0 ) {
      <?php $num = 1;
       foreach ($room as $key) {
         if ($key->supplier_id == $slug->id_supplier) { ?>
      var a<?php echo $num;?> = document.getElementById("hitung<?php echo $num;?>").value;
      var aparse<?php echo $num;?> = parseInt(a<?php echo $num;?>);
      var b<?php echo $num;?> = document.getElementById("jmlkamar").value;
      var c<?php echo $num;?> = aparse<?php echo $num;?> * b<?php echo $num;?>;
      var d<?php echo $num;?> = new Intl.NumberFormat('de-DE').format(c<?php echo $num;?>)
      document.getElementById("hasil<?php echo $num;?>").innerHTML = d<?php echo $num;?>;

      <?php $num++; } } ?>

    } else {
      <?php $num = 1;
       foreach ($room as $key) {
         if ($key->supplier_id == $slug->id_supplier) { ?>
      var a<?php echo $num;?> = document.getElementById("hitung<?php echo $num;?>").value;
      var aparse<?php echo $num;?> = parseInt(a<?php echo $num;?>);
      var b<?php echo $num;?> = 1;
      var c<?php echo $num;?> = aparse<?php echo $num;?> * b<?php echo $num;?>;
      var d<?php echo $num;?> = new Intl.NumberFormat('de-DE').format(c<?php echo $num;?>)
      document.getElementById("hasil<?php echo $num;?>").innerHTML = d<?php echo $num;?>;

      <?php $num++; } } ?>
    }
  }
  </script>
