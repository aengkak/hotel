<body class="fixbug">
	 <!-- Static navbar -->
	 <nav  style="z-index:7; width:100%; position:relative;" class="whitebg noborder navbar navbar-default navbar-static-top">
			<div class="container">
				 <div class="navbar-header">
						<a style="margin-top:15px;" class="navbar-toggle pull-right collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</a>
						<a class="navbar-brand" href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/front/images/logo.png" style="margin-top:10px;" class="visible-md visible-lg visible-sm"><img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs "></a>
				 </div>
				 <div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav visible-xs visible-lg ellipsistext marginsmalltop">
							 <li>
									<a class="" href="<?php echo base_url();?>promo">
										 <div class="boxshadowsmall greyborder1 rond1" style="padding:10px; margin-top:-10px;"><span class="font16 bluehover black ">PROMO</span> &nbsp;<img src="<?php echo base_url();?>assets/front/images/dot.png" style="margin-top:-2px;"></div>
									</a>
							 </li>
							 <li><a href="<?php echo base_url();?>checkbooking"><span class="font16 bluehover black">CEK PEMESANAN</span></a></li>
							 <li><a class="bluehover" href="<?php echo base_url();?>faq"><span class="font16 bluehover black ">BANTUAN</span></a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right hidden-xs" style="margin-right: 0px;">
							 <li class="dropdown">

							 </li>
							 <li class="dropdown">
									<a href="#" class="dropdown-toggle bluehover font16 marginsmalltop marginsmallright black" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/indo.png">&nbsp;<span class="black bluehover"> IDR </span><span class="caret"></span></a>
									<div class="dropdown-menu" style="margin-top:7px!important; min-width:170px; margin-top:-3px; ">
										 <div>
												<div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="#"><img src="<?php echo base_url();?>assets/front/images/indo.png">&nbsp; IDR (Indonesia)</a></div>
												<div class="paddingsmall  "><a class="black font16 btn noneline" href="#"><img src="<?php echo base_url();?>assets/front/images/english.png">&nbsp; USD (English) </a></div>
										 </div>
									</div>
							 </li>
							 <?php $c = $this->session->userdata('level');
							 if ($c == "person") { ?>
								 <li>
                      <a class="noneline norcol  font16" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href=""><img src="<?php echo base_url();?>assets/front/images/avataruser.png" class="iconlarge2 "><span class="hidden-xs hidden-sm hidden-md ml10 mt5 hidden-sm"><?php $n=$this->session->userdata('nama_lengkap'); echo $n;?> </span>  <img src="<?php echo base_url();?>assets/front/images/icons/triangle-down.svg" class="iconsmall"></a>
                      <div class="dropdown-menu font16" style="min-width:175px; margin-top:-5px; ">
                         <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>myorder"> Pesanan Saya <span class="text-pink"><?php echo $proses;?></span></a></div>
                         <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="newsletter.html"> Newsletter</a></div>
                         <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>profile"> Profil Saya</a></div>
                         <div class=" paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>logout"> Logout</a></div>
                      </div>
                   </li>
							<?php } else { ?>
								<li>
 									<div class="btn-group btn-group-lg marginsmalltop" style="margin-top:10px;" role="group" aria-label="...">
 										 <button type="button" href="#" data-toggle="modal" data-target="#SignUpModal" class="btn font16 whitebg whitebghover blueborder blue">DAFTAR</button>
 										 <button type="button" href="#" data-toggle="modal" data-target="#LoginModal" class="btn font16 bluebg bluebghover blueborder white">MASUK</button>
 									</div>
 							 </li>
							<?php } ?>

						</ul>
				 </div>
				 <!--/.nav-collapse -->
			</div>
	 </nav>
	 <div class="whitebg visible-xs" style="z-index:5; position:relative;" >
			<div class="boxshadowsmall bgshadowsmall ">
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
							 <?php $c = $this->session->userdata('level');
							 if ($c == "person") { ?>
								 <div class=" col-xs-8 col-md-8 marginsmalltop marginsmallbottom text-right">
                     <div class="pull-right">
                        <a class="noneline norcol  font16" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href=""><img src="<?php echo base_url();?>assets/front/images/avataruser.png" class="iconmedium "> <img src="<?php echo base_url();?>assets/front/images/icons/triangle-down.svg" class="iconsmall"></a>
                        <div class="dropdown-menu font16" style="min-width:175px; margin-top:10px; ">
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>myorder"> Pesanan Saya <span class="text-pink"><?php echo $proses;?></span></a></div>
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="newsletter.html"> Newsletter</a></div>
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>profile"> Profil Saya</a></div>
                           <div class=" paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>logout"> Logout</a></div>
                        </div>
                     </div>
                  </div>
							<?php } else { ?>
								<div class=" col-xs-8 col-md-8">
 									<div class="btn-group pull-right marginsmallbottom" style="margin-top:10px;" role="group" aria-label="...">
 										 <button type="button" href="#" data-toggle="modal" data-target="#SignUpModal" class="btn font16 whitebg  blueborder blue">DAFTAR</button>
 										 <button type="button" href="#" data-toggle="modal" data-target="#LoginModal" class="btn font16 bluebg  blueborder white">MASUK</button>
 									</div>
 							 </div>
							<?php } ?>
						</div>
				 </div>
			</div>

	 </div>
