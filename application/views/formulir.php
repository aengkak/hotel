<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>Formulir</title>
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="<?php echo base_url();?>assets/front/css/bootstrap.css" rel="stylesheet">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
   </head>
   <body class="greybg">
      <div class=" whitebg boxshadowsmall">
         <div class="container ">
            <div class="row rowflexs">
               <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9  visible-xs">
                  <div class="marginsmalltop marginsmallbottom"><a href="<?php echo base_url();?>"><img  src="<?php echo base_url();?>assets/front/images/logomobile.png"></a></div>
               </div>
               <div class="col-xs-3 col-sm-9 col-md-9 col-lg-9 hidden-xs">
                  <div class="marginsmalltop marginsmallbottom"><a href="<?php echo base_url();?>"><img  src="<?php echo base_url();?>assets/front/images/logo.png"></a></div>
               </div>
               <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 notobobordergrey text-center">
                  <div class="paddingmedium"><a class="blue ellipsistext" href="<?php echo base_url();?>contact"><img src="<?php echo base_url();?>assets/front/images/icons/csgrey.svg"class="iconmedium"><span class="font16 marginsmallleft hidden-sm hidden-xs">Customer Support 24/7</span></a></div>
               </div>
            </div>
         </div>
      </div>
      <div class="greybg">
         <div class="containersmall">
            <div>
               <div>
                  <div class="marginsmalltop"></div>
                  <h2 class="black justbold" > Kirim Pertanyaan</h2>
                  <br>
                  <div class="rond whitebg padbig boxshadowsmall">
				  <form action="" method="post" enctype="multipart/form-data">
				  <div class="marginsmalltop  font16">
                        Nama <span class="text-pink">*</span>
                        <div class=" marginsmalltop">
                           <input class="form-control input-lg" name="nama" type="text" placeholder="" required>
                        </div>
                     </div>
                     <div class="marginsmalltop  font16">
                        Email <span class="text-pink">*</span>
                        <div class=" marginsmalltop">
                           <input class="form-control input-lg" name="email" type="text" placeholder="" required>
                        </div>
                     </div>
                     <div class="marginsmalltop  font16">
                        Subjek <span class="text-pink">*</span>
                        <div class=" marginsmalltop">
                           <input class="form-control input-lg" name="judul" type="text" placeholder="" required>
                        </div>
                     </div>
                     <div class="marginsmalltop  font16">
                        Silahkan sampaikan detail permasalahan Anda <span class="text-pink">*</span>
                        <div class=" marginsmalltop">
                           <textarea class="form-control" rows="5" name="isi" required></textarea>
                        </div>
                        <small>Semakin banyak informasi yang Anda berikan, semakin mudah bagi kami untuk membantu Anda.</small>
                     </div>
                     
                     <div class="font16 marginsmalltop">
                        Lampiran 
                        <div class="greybg marginsmalltop full-width padbig bordergrey text-center" uk-form-custom>
                           <input type="file" name="foto">
                        </div>
                     </div>
                     <div class="text-right marginsmalltop">
					 <button type="submit" class="bluebg white  justbold btn btn-lg rond ">KIRIM</button>
					 </div>
                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
               </div>
            </div>
            <br>
         </div>
      </div>
      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="<?php echo base_url();?>assets/front/js/jquery.min.js"></script>
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="<?php echo base_url();?>assets/front/js/bootstrap.js"></script>
      <script src="<?php echo base_url();?>assets/front/js/vendor/jquery.min.js"></script>
      <script src="<?php echo base_url();?>assets/front/js/src/transition.js"></script>
      <script src="<?php echo base_url();?>assets/front/js/src/tooltip.js"></script>
      <script src="<?php echo base_url();?>assets/front/js/src/modal.js"></script>
      <script src="<?php echo base_url();?>assets/front/js/src/affix.js"></script>
      <script>
         $(function () {
           $('[data-toggle="tooltip"]').tooltip()
         })
      </script>
   </body>
</html>