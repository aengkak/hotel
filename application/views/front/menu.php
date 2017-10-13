<body class="fixbug">
	 <!-- Static navbar -->
	 <nav  style="z-index:5; width:100%; position:relative;" class="whitebg noborder navbar navbar-default navbar-static-top">
			<div class="container">
				 <div class="navbar-header">
						<a style="margin-top:15px;" class="navbar-toggle pull-right collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</a><a href="#" class="dropdown-toggle visible-xs pull-right " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/icons/helpblue.png" style="margin-right:10px; margin-top:15px;" height="35" width="35"></a>
						<div class="dropdown-menu" style="min-width:270px; ">
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
						<a class="navbar-brand" href="beranda.html"><img src="<?php echo base_url();?>assets/front/images/logo.png" style="margin-top:10px;" class="visible-md visible-lg visible-sm"><img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs "></a>
				 </div>
				 <div id="navbar" class="navbar-collapse collapse">
						<ul class="nav navbar-nav visible-xs visible-lg ellipsistext marginsmalltop">
							 <li>
									<a class="" href="promo.html">
										 <div class="boxshadowsmall greyborder1 rond1" style="padding:10px; margin-top:-10px;"><span class="font16 black">PROMO</span> &nbsp;<img src="<?php echo base_url();?>assets/front/images/dot.png" style="margin-top:-2px;"></div>
									</a>
							 </li>
							 <li><a href="cekpesanan.html"><span class="font16 black">CEK PEMESANAN</span></a></li>
							 <li><a href="faq.html"><span class="font16 black">BANTUAN</span></a></li>
						</ul>
						<ul class="nav navbar-nav navbar-right hidden-xs" style="margin-right: 0px;">
							 <li class="dropdown">
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/icons/helpblue.png"></a>
									<div class="dropdown-menu" style="min-width:270px; margin-top:-5px; ">
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
							 </li>
							 <li class="dropdown">
									<a href="#" class="dropdown-toggle font16 marginsmalltop marginsmallright black" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/indo.png">&nbsp;<span class="black"> IDR </span><span class="caret"></span></a>
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
                      <a class="noneline norcol  font16" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href=""><img src="<?php echo base_url();?>assets/front/images/avataruser.png" class="iconlarge2 "><span class="hidden-xs hidden-sm hidden-md ml10 mt5 hidden-sm"><?php $n=$this->session->userdata('nama'); echo $n;?> </span>  <img src="<?php echo base_url();?>assets/front/images/icons/triangle-down.svg" class="iconsmall"></a>
                      <div class="dropdown-menu font16" style="min-width:175px; margin-top:-5px; ">
                         <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="pesanansaya.html"> Pesanan Saya</a></div>
                         <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="newsletter.html"> Newsletter</a></div>
                         <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="ubahprofil.html"> Profil Saya</a></div>
                         <div class=" paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>logout"> Logout</a></div>
                      </div>
                   </li>
							<?php } else { ?>
								<li>
 									<div class="btn-group btn-group-lg marginsmalltop" style="margin-top:10px;" role="group" aria-label="...">
 										 <button type="button" href="#" data-toggle="modal" data-target="#SignUpModal" class="btn font16 whitebg  blueborder blue">DAFTAR</button>
 										 <button type="button" href="#" data-toggle="modal" data-target="#LoginModal" class="btn font16 bluebg  blueborder white">MASUK</button>
 									</div>
 							 </li>
							<?php } ?>

						</ul>
				 </div>
				 <!--/.nav-collapse -->
			</div>
	 </nav>
	 <div class="whitebg visible-xs" style="z-index:3; position:relative;" >
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
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="pesanansaya.html"> Pesanan Saya</a></div>
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="newsletter.html"> Newsletter</a></div>
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="ubahprofil.html"> Profil Saya</a></div>
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
			&nbsp;
	 </div>
