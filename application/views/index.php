<script>
       $(document).ready(function () {
         var projects = <?php echo $res;?>;
		 var myVar;

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
			   event.stopPropagation;
             $( "#tempattujuan" ).val( ui.item.value );
             $( "#project-id" ).val( ui.item.label );
             $( "#project-description" ).html( ui.item.desc );
             $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );
			  document.getElementById("tempattujuan").blur();
			 myVar = setInterval(alertFunc, 1);
				
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
		function alertFunc() {
			$("input#tempattujuan").blur();
			//$('#date-start').focus();
			
		}
		console.log($( "#tempattujuan" ).autocomplete());
       } );
    </script>
    <script>
           $(document).ready(function () {
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
<?php foreach ($fee as $keyfee) {
  $pajak1 = $keyfee->fee;
  $pajak = $pajak1/100;
} ?>
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

            </div>
            <div id="searchbox" class=" padsb" style="z-index:5; position:relative;  margin-top:275px;">
               <div class="boxshadowmedium bluebg dbluebord rond2 ">
                  <div style="padding:10px;">
                     <div class="row">
                       <form action="#" id="form" method="post">
                        <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5" data-toggle="tooltip" data-placement="top" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                           <div class="padgrid2"><div class="input-group full-width">

                              <input class="form-control2w destinationimgw " value="<?php echo $this->session->userdata('tempattujuan');?>" tabindex="1" onclick="this.select();" required name="tempattujuan" onblur="changet(this.value);" id="tempattujuan" placeholder="Nama hotel, destinasi atau tujuan" aria-describedby="basic-addon1" type="text">
                           </div></div>
                        </div>
                        <div class="col-xs-12 col-sm-11 col-md-6 col-lg-6">
                           <div class="row">
                              <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="top" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input name="dari" value="<?php echo $this->session->userdata('dari');?>" id="date-start" required tabindex="2" name="dari" onchange="change1(this.value);" class="form-control2w calendarimgw" placeholder="Check In?" aria-describedby="basic-addon2" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-4 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="top" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input name="sampai" id="date-end" value="<?php echo $this->session->userdata('sampai');?>" required name="sampai" tabindex="3" onchange="change1(this.value);" class="form-control2w calendarimgw" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-6 col-sm-2 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="top" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                                 <div class="input-group">

                                    <div class="select-style2 roomimgw">
                                       <select id="kamar" name="kamar" required tabindex="4" onchange="changek(this.value);">
                                         <?php for ($i=1; $i <=10 ; $i++) { ?>
                                           <option <?php if ($this->session->userdata('kamar') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                         <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-6 col-sm-2 col-md-3 col-lg-3" data-toggle="tooltip" data-placement="top" title="Jumlah Tamu" style="padding-right:5px;" data-original-title="Jumlah Tamu">
                                 <div class="input-group  full-width">

                                    <div class="select-style2  guestimgw">
                                       <select id="orang" name="orang" tabindex="5" required onchange="changeo(this.value);">
                                         <?php for ($i=2; $i <=30 ; $i++) { ?>
                                           <option <?php if ($this->session->userdata('orang') == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
                                         <?php } ?>
                                       </select>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>


                        <div class="col-xs-12 visible-xs tobordergrey marginsmalltop "></div>
                        <div class="col-xs-6 col-sm-6 col-md-1 visible-xs col-lg-1 borisb">
                        </div>
                        <div class="col-xs-6 col-sm-1 col-md-1 col-lg-1 sbpos">
                           <button data-toggle="tooltip" data-placement="top" title="Cari" type="submit"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchbluew.png" height="30" width="30"></button>
                        </div>

                     </div>
                  </div>
               </div><br>
            </div></form>
         </div>
      </div>



      <div style="height:30px; z-index:4; position:relative;" class="transbg"></div>
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
                                 <a style="padding-bottom:5px;" class="" href="<?php echo base_url();?>promo">
                                    <div class="boxshadowsmall greyborder1 rond1" style="padding:10px; margin-top:-10px;"><span class="font16 bluehover black">PROMO</span> &nbsp;<img src="<?php echo base_url();?>assets/front/images/dot.png" style="margin-top:-2px;"></div>
                                 </a>
                              </li>
                              <li><a style="padding-bottom:5px;" href="<?php echo base_url();?>checkbooking"><span class="font16 bluehover black">CEK PEMESANAN</span></a></li>
                              <li><a style="padding-bottom:5px;" href="<?php echo base_url();?>faq"><span class="font16 bluehover black">BANTUAN</span></a></li>
                           </ul>
                        </div>
                        <form action="#" method="post">
                        <div class="visible-lg-inline col-lg-3" data-toggle="tooltip" data-placement="bottom" title="Hotel atau destinasi" data-original-title="Destinasi atau hotel">
                           <div class="padgrid2"><div class="input-group full-width">

                              <input id="tempattujuan1" required value="<?php echo $this->session->userdata('tempattujuan');?>" onclick="this.select();" tabindex="6" required name="tempattujuan" onblur="changet1(this.value);" class="form-control2 destinationimg" placeholder="Hotel, destinasi atau tujuan anda?" aria-describedby="basic-addon1" type="text">
                           </div></div>
                        </div>
                        <div class="visible-lg-inline col-lg-3">
                           <div class="row">
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Check In" data-original-title="Check In">
                                 <div class="input-group">
                                    <input id="date-startmo" required value="<?php echo $this->session->userdata('dari');?>" required name="dari" tabindex="7" onchange="change2(this.value);" class="form-control2 calendarimg" placeholder="Check In?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6" data-toggle="tooltip" data-placement="bottom" title="Chek Out" data-original-title="Check Out">
                                 <div class="input-group">
                                    <input id="date-endmo" required value="<?php echo $this->session->userdata('sampai');?>" required name="sampai" tabindex="8" onchange="change2(this.value);" class="form-control2 calendarimg" placeholder="Check Out?" aria-describedby="basic-addon1" type="text">
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="visible-lg-inline col-lg-1" data-toggle="tooltip" data-placement="bottom" title="Jumlah Kamar" style="padding-right:5px;" data-original-title="Jumlah Kamar">
                           <div class="input-group">
                              <span class="input-group-addon" id="basic-addon1"><img src="<?php echo base_url();?>assets/front/images/icons/roomblue.png" height="30" width="30"></span>
                              <div class="select-style">
                                 <select id="kamar1" name="kamar" required tabindex="9" onchange="changek1(this.value);">
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
                           <a class="pull-right " href="#searchbox"><img style="margin-top:7px;" src="<?php echo base_url();?>assets/front/images/icons/searchblue.png" height="30" width="30"></a> <a href="#" style="padding-right:10px;" class="dropdown-toggle ribordergrey marginsmallright pull-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/icons/helpblue.png"  style="margin-top:7px;"  height="35" width="35"></a>
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
      <div class="container">
         <div class="row">
            <div class=" ellipsistext col-xs-9 col-sm-6 col-md-6 col-lg-6">
              <img src="<?php echo base_url();?>assets/front/images/icons/promoblue.svg" class="iconlarge">
              <span class="heading3 bold blue"> PROMO</span>
              <span class="grey heading3 bold">
                <span class="hidden-xs">HOTEL</span></span>
              </div>
            <div class="col-xs-3 col-sm-6 col-md-6 col-lg-6 text-right">

            </div>
         </div>
      </div>
      <div class="container" >
         <!-- BxSlider -->
         <ul id="kamarslider"  class="bxslider" data-call="bxslider" data-options="{slideMargin:5, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:1, pager:false, auto:true},{screen:480, slides:2, auto:true},{screen:768, slides:3, auto:true},{screen:992, slides:4, auto:true}]" >
            <?php foreach ($supplier as $key) { ?>
              <li>
                 <a href="<?php echo base_url()."check/".$key->slug;?>">
                    <div style="z-index:1; position:relative; background-image:url(<?php echo base_url();?>assets/front/images/badgesdisc.png); background-repeat:no-repeat; background-position:top right; padding-right:20px; padding-top:15px; " class="text-right">
                       <div class=" disco white justbold ">TOP</div>
                       <div class="disc white"><small>DISCOUNT</small></div>
                       <br>
                    </div>
                    <div style="padding-right:30px;">
                       <div class="boxshadowsmall boxshadowhoverlarge">
                         <?php foreach ($foto as $keyf) {
                           if ($keyf->supplier_id == $key->id_supplier) { ?>
                             <div style="background-image: url(<?php echo base_url()."files/".$keyf->foto;?>);" class="hotelimg roomimg" ></div>
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
                             <div class="paddingsmall">
                                <div class=" ">
                                   <div class="row">
                                     <?php if ($ulasan == NULL) {
                                       $rate = 0;
                                       //echo rate;
                                     } else {
                                       $rata = array();
                                       foreach ($ulasan as $keyu) {
                                         if ($keyu->supplier_id == $key->id_supplier) {
                                           $rata[] = $keyu->rata;
                                         }
                                       }
                                       if ($rata == NULL) {
                                         $rate = 0;
                                         //echo $rate;
                                       } else {
                                         $countula = count($rata);
                                         $rataula = array_sum($rata);
                                         $rate = $rataula / $countula;
                                         //echo $rate;
                                       }

                                     } ?>
                                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center"><?php echo $rate;?></div>
                                      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">
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
                                <div class="row margin10left padr10">
                                   <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6  ">
                                      <div class="  norcol  "><small>Mulai dari</small></div>
                                      <div class=" ellipsistext black  "><del>IDR
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
                                           <span class="justbold danger"><?php
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
                                        }?></span>
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
         <!-- /BxSlider -->
      </div>
      <div class="container marginsmallbottom">
         <div class="row">
            <div class=" ellipsistext col-xs-9 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo base_url();?>assets/front/images/icons/popularblue.svg" class="iconlarge"> <span class="heading3 bold blue"> Kota</span><span class="grey heading3 bold"> POPULER </span></div>
            <div class="col-xs-3 col-sm-6 col-md-6 col-lg-6 text-right">

            </div>
         </div>
      </div>
      <div class="container">
         <!-- BxSlider -->
         <ul id="kotaslider" class="bxslider" data-call="bxslider" data-options="{slideMargin:15, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:1, pager:false, auto:true},{screen:480, slides:3, auto:true},{screen:768, slides:4, auto:true},{screen:992, slides:5, auto:true}]" >
            <?php foreach ($kota as $keykota => $valuekota) { ?>
              <li>
                <form action="" method="post">
                  <input type="hidden" value="<?php echo $valuekota['kota'];?>" name="tempattujuan">
                 <button type="submit">
                    <div class="">
                       <div class="inline full-width" >
                          <img src="<?php echo base_url();?>assets/front/images/kota/yogyakarta.jpg" class="rond2 full-width" alt="">
                          <div class="overlay-primary position-cover rond2 full-width"></div>
                          <div class="overlay position-top-right white"><img src="<?php echo base_url();?>assets/front/images/icons/popularblues.svg"  class="rondbunder iconlarge2"></div>
                          <div class="overlay position-bottom ">
                             <div class="white justbold heading3 ellipsistext"><?php echo $valuekota['kota'];?></div>
                             <div class="white justbold paddingsmall whiteborder rond marginsmalltop text-center ellipsistext">Mulai IDR <?php $tambahan = $valuekota['harga']*$pajak; echo number_format($valuekota['harga']+$tambahan);?></div>
                          </div>
                       </div>
                    </div>
                 </button>
               </form>
              </li>
          <?php } ?>
         </ul>
      </div>
      <br>
      <div class="container marginsmallbottom">
         <div class="row">
            <div class=" ellipsistext col-xs-9 col-sm-6 col-md-6 col-lg-6"><img src="<?php echo base_url();?>assets/front/images/icons/bestblue.svg" class="iconlarge"> <span class="heading3 bold blue"> ULASAN</span><span class="grey heading3 bold"> TERBAIK </span></div>
            <div class="col-xs-3 col-sm-6 col-md-6 col-lg-6 text-right">

            </div>
         </div>
      </div>
      <div class="container">
         <!-- BxSlider -->
         <ul id="ulasanslider"  class="bxslider" data-call="bxslider" data-options="{slideMargin:30, autoReload:true, pager:false, controls:true}" data-breaks="[{screen:0, slides:1, pager:false, auto:true},{screen:480, slides:2, auto:true},{screen:768, slides:3, auto:true},{screen:992, slides:4, auto:true}]" >
            <?php foreach ($supplier as $key) { ?>

              <li >
                 <a href="<?php echo base_url()."check/".$key->slug ;?>">
                    <div class="boxshadowsmall boxshadowhoverlarge">
                       <div >
                         <?php
                         foreach ($foto as $key2) {
                          if ($key->id_supplier == $key2->supplier_id) { ?>
                            <div style="background-image: url(<?php echo base_url()."files/".$key2->foto;?>);" class="hotelimg " ></div>
                         <?php break; }
                        }
                         ?>

                          <div class="overlay position-top-right "><img src="<?php echo base_url();?>assets/front/images/icons/bestblues.svg"  class="rondbunder iconlarge2"></div>
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
                          <div class="notobordergrey" >
                             <div class="paddingsmall">
                                <div class=" marginsmalltop">
                                   <div class="row">
                                     <?php if ($ulasan == NULL) {
                                       $rate = 0;
                                       //echo rate;
                                     } else {
                                       $rata = array();
                                       foreach ($ulasan as $keyu) {
                                         if ($keyu->supplier_id == $key->id_supplier) {
                                           $rata[] = $keyu->rata;
                                         }
                                       }
                                       if ($rata == NULL) {
                                         $rate = 0;
                                         //echo $rate;
                                       } else {
                                         $countula = count($rata);
                                         $rataula = array_sum($rata);
                                         $rate = $rataula / $countula;
                                         //echo $rate;
                                       }

                                     } ?>
                                      <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center"><?php echo $rate;?></div>
                                      <div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">
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

            <?php } ?>
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
         <div class="bluebg padding text-center font16 white">
            <div class="container"><br>Hak Cipta © 2005 – 2017 PesanHotel Company Pte. Ltd. Semua Hak Dilindungi Undang-undang.<br>
               PesanHotel adalah bagian dari Karunia Travel Group, penyedia layanan online terdepan untuk perjalanan dan yang terkait lainnya di dunia. <br><br><br>
            </div>
         </div>
      </div>
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
		  $('#tempattujuan').focusout();
			$('#date-start').focus();
        }
        function changet1() {
          var t1 = $( "#tempattujuan1" ).val();
          $( "#tempattujuan" ).val(t1);
        }
        </script>
