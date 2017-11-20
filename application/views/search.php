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

<div class="whitebg  visible-xs" style="z-index:5; position:relative;">
         <div class="container">
					 <button data-toggle="collapse" data-target="#filterbar" aria-expanded="false" aria-controls="filterbar" class="btn font16 whitebg  blueborder blue">
						 <img src="<?php echo base_url();?>assets/front/images/icons/filterblue.svg" height="20" width="20">
					 </button>
					 <button data-toggle="collapse" data-target="#searchbar" aria-expanded="false" aria-controls="searchbar" class="btn font16 whitebg pull-right blueborder blue">
					 <img src="<?php echo base_url();?>assets/front/images/icons/searchblue.svg" height="20" width="20"> CARI ULANG</button></div>
      </div>
      <div  class="whitebg" style="z-index:4; position:relative;">
         <div class="container" >
		 <form action="#" method="post">
            <div class="marginsmallbottom visible-xs"></div>
            <div  id="searchbar" class="searchbar-collapse collapse" class=" " style="z-index:4; position:relative; ">
               <div class="boxshadowmedium bluebg dblubord rond2 ">
                  <div style="padding:10px;">
                     <div class="row">
                       <form>
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" data-toggle="tooltip" data-placement="bottom" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                          <div class="padgrid2"> <div class="input-group full-width">

                              <input required name="tempattujuan" tabindex="1" onclick="this.select();" onblur="changet(this.value);" id="tempattujuan" class="form-control2w destinationimgw" placeholder="Nama hotel, destinasi atau tujuan anda menginap?" value="<?php echo $this->session->userdata('tempattujuan');?>" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div></div>
                        <div class="col-xs-12 col-sm-11 col-md-6 col-lg-6">
                           <div class="row">
                              <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input required name="dari" tabindex="2" o="change1(this.value);" value="<?php echo $this->session->userdata('dari');?>" id="date-start" class="form-control2w calendarimgw" placeholder="Check In?" aria-describedby="basic-addon2" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input required name="sampai" tabindex="3" onchange="change1(this.value);" value="<?php echo $this->session->userdata('sampai');?>" id="date-end" class="form-control2w calendarimgw" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-6 col-sm-2 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                                 <div class="input-group">

                                    <div class="select-style2 roomimgw">
                                       <select required id="kamar" name="kamar" tabindex="4" onchange="changek(this.value);">
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
                                       <select required id="orang" name="orang" tabindex="5" onchange="changeo(this.value);">
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
			</form>
         </div>
      </div>
      <div style="height:50px; z-index:3; position:relative;" class="transbg hidden-xs"></div>
      <div style="height:20px; z-index:3; position:relative;" class="transbgbot visible-xs"></div>
      <div class="" style="z-index:2; position:relative;  " >
         <div class=" whitebg bottombordergrey boxshadowsmall affixed-element-top js-affixed-element-top">
            <div class="container " >
               <div class="">
                  <div >
                     <div class="row mt10 mb10">
                        <div class="col-xs-3 col-sm-1 col-md-1 col-lg-3">
													<a class="" href="<?php echo base_url();?>"><img style="margin-top:5px;" src="<?php echo base_url();?>assets/front/images/logo.png" class="visible-lg ">
														<img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm visible-md ">
													</a>
											</div>
                        <div class="visible-md visible-sm col-md-9 col-sm-9">
                           <ul style="margin-top:-7px;" class="nav navbar-nav ellipsistext ">
                              <li>
                                 <a style="padding-bottom:5px;" class="" href="promo.html">
                                    <div class="boxshadowsmall greyborder1 rond1" style="padding:10px; margin-top:-10px;"><span class="font16 bluehover black">PROMO</span> &nbsp;<img src="<?php echo base_url();?>assets/front/images/dot.png" style="margin-top:-2px;"></div>
                                 </a>
                              </li>
                              <li><a style="padding-bottom:5px;" href="cekpesanan.html"><span class="font16 bluehover black">CEK PEMESANAN</span></a></li>
                              <li><a style="padding-bottom:5px;" href="faq.html"><span class="font16 bluehover black">BANTUAN</span></a></li>
                           </ul>
                        </div>
                        <form action="#" method="post">
                        <div class="visible-lg-inline col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                           <div class="padgrid2"><div class="input-group full-width">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/destinationblue.png" height="30" width="30"></span>
                              <input class="form-control2" tabindex="6" onclick="this.select();" onblur="changet1(this.value);" id="tempattujuan1" required name="tempattujuan" value="<?php echo $this->session->userdata('tempattujuan');?>" placeholder="Hotel, destinasi atau tujuan anda?" aria-describedby="basic-addon1" type="text">
                           </div>
                        </div></div>
                        <div class="visible-lg-inline col-lg-3">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input id="date-startmo" tabindex="7" name="dari" id="dari" required onchange="change2(this.value);" value="<?php echo $this->session->userdata('dari');?>" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input id="date-endmo" tabindex="8" name="sampai" required onchange="change2(this.value);" value="<?php echo $this->session->userdata('sampai');?>" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="visible-lg-inline col-lg-1" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/roomblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                <select id="kamar1" name="kamar" tabindex="9" required onchange="changek1(this.value);">
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
                                <select id="orang1" name="orang" required tabindex="10" onchange="changeo1(this.value);">
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
                    <form id="saring">
					  <div class="row">
                        <div class="col-xs-8 col-sm-8">
                          <div class="heading4 black ">Cari Nama Hotel</div>
                        </div>
                        <div class="col-xs-4 col-sm-4 text-right">
                          <a data-toggle="tooltip" class="tip-top" title="Reset" href="#" onclick="reset()">
                            <img src="<?php echo base_url();?>assets/front/images/icons/reset.svg" class="iconsmall">
                          </a>
                        </div>
                      </div>
                     <input id="nama" onclick="this.select();" onblur="filtering()" name="nama" class="form-control mt10 input-lg searchimg" type="text" placeholder="Nama Hotel"><br>
                     <hr>
					
                      <div class="row">
                        <div class="col-xs-8 col-sm-8">
                          <div class="heading4 black ">Tempat Terdekat</div>
                        </div>
                      </div>
                     <input id="nearby" onclick="this.select();" onblur="filtering()" name="nearby" class="form-control mt10 input-lg searchimg" type="text" placeholder="Tempat terdekat"><br>
                     <hr>
                     <div class="heading4 black ">Urutkan Hasil Pencarian</div>
                        <div class="grey mt5 mb10 font16">
                        Mengurutkan hasil berdasarkan pilihan Anda
						</div>
                        <div class="row marginsmallbottom font16"><div class="col-xs-12 mb10"><div class="bordergrey rond padding font16 norcol ">
                         <div class="radio2">
                            <input id="radio-1" name="sorting" onchange="filtering()" value="high" type="radio">
                            <label for="radio-1" class="radio-label"> Harga Tertinggi</label>
                          </div>
                        </div>
                        </div><div class="col-xs-12 mb10"><div class="bordergrey rond padding font16 norcol ">

                         <div class="radio2">
                            <input id="radio-2" name="sorting" onchange="filtering()" value="low" type="radio">
                            <label  for="radio-2" class="radio-label"> Harga Terendah</label>
                          </div>
                        </div></div>
                        <div class="col-xs-12 mb10"><div class="bordergrey rond padding font16 norcol ">
                         <div class="radio2">
                            <input id="radio-3" name="sorting" onchange="filtering()" value="rate" type="radio">
                            <label  for="radio-3" class="radio-label"> Nilai Tertinggi</label>
                          </div>

                        </div></div>
                        <div class="col-xs-12 mb10"><div class="bordergrey rond padding font16 norcol ">
                         <div class="radio2">
                            <input id="radio-4" name="sorting" onchange="filtering()" value="popular" type="radio">
                            <label  for="radio-4" class="radio-label"> Popularitas</label>
                          </div>
                        </div>
                        </div>
                        </div>
                        <hr>
                     <div class="heading4 black ">Per Kamar Per Malam</div>
                     <div class="marginsmalltop marginsmallbottom">
                        <div style="margin-left:10px;margin-right:10px;"> <input id="ex2sb" onchange="filtering()" name="harga" class="span2 full-width" value="0,5000000" data-slider-min="0" data-slider-max="5000000" data-slider-step="5" data-slider-value="[0,5000000]" style="display: none;" data-value="0,5000000" type="text"></div>
                        <div class="marginsmalltop grey ">
                           <h4>IDR 0 - IDR 5.000.000</h4>
                        </div>
                     </div>
                     <hr>

                     <div class="heading4 black ">Bintang</div>
                     <div class="bordergrey mt10 rond padding font16 norcol">
                     <?php for ($y=7; $y >= 0 ; $y--) { ?>

                         <label>
                           <input onchange="filtering()" name="bintang[]" value="<?php echo $y;?>" class="marginsmallright" type="checkbox">
                         </label>
                         <?php if($y==0){ ?>
                         <img src="<?php echo base_url();?>assets/front/images/stars-zero.png">
                       <?php } else {
                         for($a1=1;$a1<=$y;$a1++){ ?>
                         <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
                       <?php } } ?>
                         <br>
                     <?php } ?>
                      </div>

              <br>

                     <hr>
                     <div class="heading4 black marginsmallbottom">Fasilitas Hotel <br>
					 <a href="#block-id"
                           class="morelink underline"
                           data-toggle="collapse"
                           aria-expanded="false"
                           aria-controls="block-id">
                        <span class="collapsed">
                        Tampilkan <img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-down-bl.svg">
                        </span>
                        <span class="expanded">
                        Sembunyikan<img class="iconsmall " src="<?php echo base_url();?>assets/front/images/icons/triangle-up-bl.svg">
                        </span>
                        </a>
					 </div>
					 <div class="bordergrey mt10 rond padding font16 norcol collapse" id="block-id">
                     <?php foreach ($fitur as $keyf) { ?>
					   <label>
					   <input value="<?php echo $keyf->id_fitur;?>" onchange="filtering()" name="fitur_id[]" class="marginsmallright" type="checkbox"> <?php echo $keyf->nama;?>
					   </label>
					   <br>
                     <?php } ?>
					</div>
                   </form>
                  </div>
               </div>
            </div>
            <!-- End Sidebar -->
            <!-- Content -->
            <div class="col-sm-8 col-md-9 col-lg-9 col-xs-12">
               <!-- Start Info & Price Sort -->
               <div class="row">
                  <div class="col-xs-7 col-sm-9 col-md-9 col-lg-9">
                     <div class="heading4 norcol"><span class="hidden-xs">Hasil pencarian hotel di : </span><span class="blue"><?php echo $this->session->userdata('tempattujuan');?> </span></div>
                  </div>
                  <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 text-right "  data-toggle="tooltip" data-placement="top" title="Tampilkan jumlah harga dalam :">
										<img src="<?php echo base_url();?>assets/front/images/icons/pricetagblue.svg" class="iconmedium marginsmallright">
									</div>
                  <div class="col-xs-3 col-sm-2 col-md-2 col-lg-2 text-right">
                     <select class="form-control" onchange="getHasil(this.value);" id="dataharga" name="dataharga">
                        <option value="0">Per Malam</option>
                        <option value="1" selected>Per Kamar</option>
                     </select>
                  </div>
               </div>
               <!-- End Info & Price Sort -->
               <br>

               <!-- Start Hotel List -->


              <div id="postList">
               <!-- Start Hotel List 1 -->
							 <?php foreach ($fee as $keyfee) {
                 $pajak1 = $keyfee->fee;
                 $pajak = $pajak1/100;
               }
               $kamar = $this->session->userdata('kamar');
               $tempattujuan = $this->session->userdata('tempattujuan');
               $hit = 1;
               if ($search != NULL) {
               foreach ($search as $key):

                if ($key['kota'] == $tempattujuan) {
                ?>
               <div class=" bordergrey boxshadowhovermedium whitebg boxshadowsmall marginsmallbottom">

                  <div class=" row rowflex">
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ellipsistext">
                        <div class="inline full-width full-height" >
                          <?php
                          foreach ($foto as $key2) {
                           if ($key['id_supplier'] == $key2->supplier_id) { ?>
                             <a href="<?php echo base_url()."check/".$key['slug'];?>" target="_blank">
                             <div class=" slider-div " style="background-image: url(<?php echo base_url()."files/".$key2->foto;?>);" ></div>
                           </a>
                          <?php break; }
                         }
                          ?>
                          <div class="overlay overlay-primary white font16 ellipsistext position-bottom "><?php echo $key['alamat'];?></div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 greybg" >
                        <div  class=" paddingmedium">
                           <div  class="heading3 norcol">
                             <a href="<?php echo base_url()."check/".$key['slug'];?>" target="_blank">
                               <span class="bluehover black"><?php echo $key['nama_supplier'];?></span>
                             </a>
                             </div>
                           <div class="ellipsistext marginsmalltop">
                             <?php $bintang = $key['bintang']; for ($i=0; $i < $bintang; $i++) { ?>
                               <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
                             <?php } ?>
                             <img src="<?php echo base_url();?>assets/front/images/icons/locationblue.svg" class="iconmedium marginsmallleft"><span class="blue font16"> <?php echo $key['kota'];?></span></div>
                           <div class="text-pink font16 mt10">
                             <?php if ($allotment != NULL) {
                             foreach ($allotment as $keyall) {
                              if ($keyall->supplier_id == $key['id_supplier']) {
                                $j = $keyall->jumlah;
                              } else {
                                foreach ($room as $keyr) {
                                  if ($keyr->supplier_id == $key['id_supplier']) {
                                    $j = $keyr->stok;
                                  }
                                }
                              }
                            } echo $j;
                          } else {
                            foreach ($room as $keyr) {
                              if ($keyr->supplier_id == $key['id_supplier']) {
                                $j = $keyr->stok;
                              }
                            } echo $j;
                          }
                            ?> Kamar Tersedia</div>
                           <div class="marginsmalltop boxshadowhovermedium" data-toggle="tooltip" data-placement="top" title="Detail Layanan">
                              <a onclick="layanan(<?php echo $key['id_supplier'];?>)" class=" marginsmalltop ellipsistext ">
                                 <div class="row rowflexs">
                                    <div class=" softgreenbg col-xs-2 col-sm-2 col-md-3 col-lg-2 rond-left  ellipsistext">
                                       <div class="paddingsmall trimmersize  white">Gratis</div>
                                    </div>
                                    <div class=" ellipsistext col-xs-1 col-sm-1 col-md-1 softgreenbg text-right col-lg-1" >
                                      <img src="<?php echo base_url();?>assets/front/images/trimmerwhite.png" class="trimmersize">
                                    </div>
                                    <?php $fitur_id = $key['fitur_id'];
                                    $b = array();
                                    $res = explode(",",$fitur_id);
                                     $n = 1; foreach ($fitur as $keyfitur) {
                                       foreach ($res as $keyres => $value) {
                                         if ($keyfitur->id_fitur == $value) {

                                           $a = $keyfitur->icon;
                                           $b[] = $key['id_supplier'];?>
                                             <div class="pull-left paddingsmall col-xs-4 col-sm-4 whitebg col-md-4 col-lg-4 ellipsistext softgreen ribordergrey">
                                               <span class="<?php echo "gs".$a;?>"></span>
                                               <span class=" ellipsistext"><?php echo $keyfitur->nama;?></span>
                                             </div>
                                          <?php
                                        }

                                      } if (count($b) >= 2) {
                                        break;
                                      }
                                      $n++; } ?>
									  <div class="  col-xs-1 col-sm-1 col-md-1 whitebg rond-right col-lg-1" >

                                    </div>

                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 whitebg">
                        <div  class=" paddingmedium">
                           <div data-toggle="tooltip" data-placement="top" title="Rincian Ulasan">
                              <a href="#" onclick="detailulasan(<?php echo $key['id_supplier'];?>)" class=" ">
                                 <div class="row">
                                    <div class="pull-left bold white ripiu text-left">
                                      <?php
                                      if ($ulasan == NULL) {
                                        $rate = 0;
                                        echo $rate;
                                      } else {
                                        $rata = array();
                                        foreach ($ulasan as $keyu) {
                                          if ($keyu->supplier_id == $key['id_supplier']) {
                                            $rata[] = $keyu->rata;
                                          }
                                        }
                                        if ($rata == NULL) {
                                          $rate = 0;
                                          echo $rate;
                                        } else {
                                          $countula = count($rata);
                                          $rataula = array_sum($rata);
                                          $rate = $rataula / $countula;
                                          echo $rate;
                                        }

                                      }
                                      ?>
                                    </div>
                                    <div class="pull-left ml10 ellipsistext hoverline karuniareview bold ">
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
                              </a>
                           </div>
                           <div class="ellipsistext marginsmalltop font16 " data-toggle="tooltip" data-placement="top" title="Detail Harga"> Per malam mulai dari
                             <button onclick="detailharga(<?php
                           if ($allotment != NULL) {
                             foreach ($allotment as $keyall) {
                              if ($keyall->supplier_id == $key['id_supplier']) {
                                $g = $keyall->produk_id;
                              } else {
                                foreach ($room as $keyr) {
                                  if ($keyr->supplier_id == $key['id_supplier']) {
                                    $g = $keyr->id_produk;
                                  }
                                }
                              }
                            } echo $g;
                          } else {
                            foreach ($room as $keyr) {
                              if ($keyr->supplier_id == $key['id_supplier']) {
                                $h = $keyr->id_produk;
                              }
                            } echo $h;
                          }?>)" >
                               <img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall">
                             </button>
                           </div>
                           <div class="" >
                              <div class="row">
                                 <div class="col-xs-8 col-md-8 col-sm-8 ellipsistext col-lg-8 font20 justbold flex flexleft">
                                   <span class="norcol">IDR&nbsp;</span><span class="text-pink">
                                   <span id="hasil<?php echo $hit;?>">
                                     <?php
                                   if ($allotment != NULL) {
                                     foreach ($allotment as $keyall) {
                                      if ($keyall->supplier_id == $key['id_supplier']) {
                                        $g = $keyall->harga;
                                      } else {
                                        foreach ($room as $keyr) {
                                          if ($keyr->supplier_id == $key['id_supplier']) {
                                            $g = $keyr->harga_produk;
                                          }
                                        }
                                      }
                                    } $tambahan = $g*$pajak; echo number_format($g+$tambahan);
                                  } else {
                                    foreach ($room as $keyr) {
                                      if ($keyr->supplier_id == $key['id_supplier']) {
                                        $h = $keyr->harga_produk;
                                      }
                                    } $tambahan = $h*$pajak; echo number_format($h+$tambahan);
                                  }?>
                               </span>
                              <input type="hidden" value="<?php
                            if ($allotment != NULL) {
                              foreach ($allotment as $keyall) {
                               if ($keyall->supplier_id == $key['id_supplier']) {
                                 $g = $keyall->harga;
                               } else {
                                 foreach ($room as $keyr) {
                                   if ($keyr->supplier_id == $key['id_supplier']) {
                                     $g = $keyr->harga_produk;
                                   }
                                 }
                               }
                             } $tambahan = $g*$pajak; echo $g+$tambahan;
                           } else {
                             foreach ($room as $keyr) {
                               if ($keyr->supplier_id == $key['id_supplier']) {
                                 $h = $keyr->harga_produk;
                               }
                             } $tambahan = $h*$pajak; echo $h+$tambahan;
                           }?>" name="hitung" id="hitung<?php echo $hit;?>">
                         </span></div>
                                 <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 text-right">
                                   <a href="<?php echo base_url()."check/".$key['slug'];?>" class="btn full-width softgreenbg white rond" target="_blank"> PILIH </a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
             <?php } $hit++; endforeach; ?>
               <!-- Start Pagination -->  <br><br><br><br>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center text-center@s text-left@m font16 norcol marginsmalltop marginsmallbottom"></div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 font16 text-center text-center@s text-right@m">
                     <?php echo $this->ajax_pagination->create_links(); ?>
                  </div>
               </div>
               <!-- End Pagination -->
             <?php } else { ?>
               <div class='text-center'>
               <img src="<?php echo base_url()."assets/front/images/search-bar.gif";?>" >
             </div>
             <?php } ?>
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
                              <div id="layanan"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div id="modalReviewHotel1" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="modalReviewHotel1">
                  <div class="modal-dialog">
                     <div class="modal-content rond">
                        <div class="modal-body ">
                           <div id="detailulasan"></div>
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
            Hotel
             <img src="<?php echo base_url();?>assets/front/images/icons/chevron-rightgrey.svg" class="iconsmall">
             <a class="norcol underline" href=""><?php echo $this->session->userdata('tempattujuan');?></a>
              <img src="<?php echo base_url();?>assets/front/images/icons/chevron-rightgrey.svg" class="iconsmall"> Result
         </div>
         <br>
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


    <script>
    function filtering() {
      $.ajax({
        url : "<?php echo base_url();?>filtering",
        type: "POST",
        data: $('#saring').serialize(),
        beforeSend: function(){
             $('#postList').html("<img src='<?php echo base_url();?>assets/front/images/loading.gif' /> Processing!");
        },
        success: function(data)
        {
             $("#postList").html(data);
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
        }
    });
    }
    </script>

	  <script>
	  $( function() {
           var projects1 = <?php echo $res1;?>;

           $( "#nearby" ).autocomplete({
             minLength: 0,
             source: projects1,
             focus: function( event, ui ) {
               $( "#nearby" ).val( ui.item.label );
               return false;
             },
             select: function( event, ui ) {
               $( "#nearby" ).val( ui.item.value );
               $( "#project-id" ).val( ui.item.label );
               $( "#project-description" ).html( ui.item.desc );
               $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );

             }
           })
           .autocomplete( "instance" )._renderItem = function( ul, item ) {
             return $( "<li>" )
               .append( "<div class=\"bobordergrey pad15\"><span class=\"font16\">" + item.label + "</span>&nbsp;&nbsp;<sup><font class=\"floatright marginsmalltop\"><small class=\"bluebg white labels\">&nbsp;" + item.desc + "&nbsp;</small></font></sup><br><div class=\"mt5 mb5\">" + item.addr +  "</div></div>" )
               .appendTo( ul );
           };
		   $("input#nearby").focus(function(e) {
			if(!e.isTrigger) {
			$(this).autocomplete("search", "");
			}
			return false;
		});
         } );
	  </script>

	  <script>
	  $( function() {
           var projects1 = <?php echo $res2;?>;

           $( "#nama" ).autocomplete({
             minLength: 0,
             source: projects1,
             focus: function( event, ui ) {
               $( "#nama" ).val( ui.item.label );
               return false;
             },
             select: function( event, ui ) {
               $( "#nama" ).val( ui.item.value );
               $( "#project-id" ).val( ui.item.label );
               $( "#project-description" ).html( ui.item.desc );
               $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );

             }
           })
           .autocomplete( "instance" )._renderItem = function( ul, item ) {
             return $( "<li>" )
               .append( "<div class=\"bobordergrey pad15\"><span class=\"font16\">" + item.label + "</span>&nbsp;&nbsp;<sup><font class=\"floatright marginsmalltop\"><small class=\"bluebg white labels\">&nbsp;" + item.desc + "&nbsp;</small></font></sup><br><div class=\"mt5 mb5\">" + item.addr +  "</div></div>" )
               .appendTo( ul );
           };
		   $("input#nama").focus(function(e) {
			if(!e.isTrigger) {
			$(this).autocomplete("search", "");
			}
			return false;
		});
         } );
	  </script>
	  
       <script>
       function getHasil() {
         var e = document.getElementById("dataharga");
         var stre = e.options[e.selectedIndex].value;
         if ( stre == 0 ) {
           <?php $num = 1;
            foreach ($search as $key) { ?>
           var a<?php echo $num;?> = document.getElementById("hitung<?php echo $num;?>").value;
           var aparse<?php echo $num;?> = parseInt(a<?php echo $num;?>);
           var b<?php echo $num;?> = "<?php echo $kamar;?>";
           var c<?php echo $num;?> = aparse<?php echo $num;?> * b<?php echo $num;?>;
           var d<?php echo $num;?> = new Intl.NumberFormat('de-DE').format(c<?php echo $num;?>)
           document.getElementById("hasil<?php echo $num;?>").innerHTML = d<?php echo $num;?>;

           <?php $num++; } ?>

         } else {
           <?php $num = 1;
            foreach ($search as $key) { ?>
           var a<?php echo $num;?> = document.getElementById("hitung<?php echo $num;?>").value;
           var aparse<?php echo $num;?> = parseInt(a<?php echo $num;?>);
           var b<?php echo $num;?> = 1;
           var c<?php echo $num;?> = aparse<?php echo $num;?> * b<?php echo $num;?>;
           var d<?php echo $num;?> = new Intl.NumberFormat('de-DE').format(c<?php echo $num;?>)
           document.getElementById("hasil<?php echo $num;?>").innerHTML = d<?php echo $num;?>;

           <?php $num++; } ?>
         }
       }
       </script>

       <script>
       function reset() {
           document.getElementById("saring").reset();
           $.ajax({
             url : "<?php echo base_url();?>filtering",
             type: "POST",
             data: $('#saring').serialize(),
             beforeSend: function(){
                  $('#postList').html("<img src='<?php echo base_url();?>assets/front/images/loading.gif' /> Processing!");
             },
             success: function(data)
             {
                  $("#postList").html(data);
             },
             error: function (jqXHR, textStatus, errorThrown)
             {
             }
         });
       }
       </script>
       <script type="text/javascript">
       $(document).ready(function(){
           $(".tip-top").tooltip({
               placement : 'top'
           });
         });
        </script>

        <script type="text/javascript">
          function change1() {
            document.getElementById("date-startmo").value = $('#date-start').val();
            document.getElementById("date-endmo").value = $('#date-end').val();
          }
        </script>
        <script type="text/javascript">
          function change2() {
            document.getElementById("date-start").value = $('#date-startmo').val();
            document.getElementById("date-end").value = $('#date-endmo').val();
          }
        </script>
        <script>
          function changek() {
            var a = $( "#kamar" ).val();
            $( "#kamar1" ).val(a);
          }
          function changek1() {
            var b = $( "#kamar1" ).val();
            $( "#kamar" ).val(b);
          }
        </script>
        <script>
          function changeo() {
            var a = $( "#orang" ).val();
            $( "#orang1" ).val(a);
          }
          function changeo1() {
            var b = $( "#orang1" ).val();
            $( "#orang" ).val(b);
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
        function detailulasan(id) {
          $('#modalReviewHotel1').modal('show'); // show bootstrap modal
          $("#detailulasan").load("<?php echo base_url();?>detailulasan/"+id,function(data){
    		      $("#detailulasan").html(data);
    	    });
        }
        </script>
        <script>
        function layanan(id) {
          $('#modalLayananHotel1').modal('show'); // show bootstrap modal
          $("#layanan").load("<?php echo base_url();?>detaillayanan/"+id,function(data){
    		      $("#layanan").html(data);
    	    });
        }
        </script>
