<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title><?php echo $title;?></title>
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="<?php echo base_url();?>assets/front/css/bootstrap.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/front/css/ico_ph.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/front/css/jquery.bxsliderhome.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/front/css/bootstrap-slider-comments.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css');?>">
      <link href="<?php echo base_url();?>assets/front/css/bootstrap-slider.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/front/css/carousel-profilehotel.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/starability-basic.css">
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
  <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/jquery-ui.css">
  <script src="<?php echo base_url();?>assets/front/js/jquery-1.12.4.js"></script>
  <script src="<?php echo base_url();?>assets/front/js/jquery-ui.js"></script>
  <style>
       .ui-autocomplete {
            max-height: 200px;
            overflow-y: auto;
            /* prevent horizontal scrollbar */
            overflow-x: hidden;
            /* add padding to account for vertical scrollbar */
            font-family: 'Titillium Web', sans-serif;
        }
		body {
    font-family: 'Titillium Web', sans-serif;
}

.ui-datepicker-week-end a {
    color: red !important;
}
</style>

      <script type="text/javascript">
         $(document).ready(function()
         {
             $('#thumbCarousel').carousel({
         		interval: 3000
         	})
         });

         /* affix the Carousel Buttons to Carousel Item on scroll */
         $('.nav-carousel').bind({
         	offset:
         	{
         		top: $('#thumbCarousel').height()-$('.nav-carousel').height()
         	}
         });

         $(document).ready( function()
         {
         	var carouselContainer = $('.carousel');
         	var slideInterval = 2500;

         	$('#carousel').carousel({
         		interval:   slideInterval
         	});

         	var clickEvent = false;
         	$('#thumbCarousel').on('click', '.nav-carousel a', function() {
         			clickEvent = true;
         			$('.nav-carousel li').removeClass('active');
         			$(this).parent().addClass('active');
         	}).on('slid.bs.carousel', function(e)
         	{
         		if(!clickEvent)
         		{
         			var count = $('.nav-carousel').children().length -1;
         			var current = $('.nav-carousel li.active');
         			current.removeClass('active').next().addClass('active');
         			var id = parseInt(current.data('slide-to'));
         			if(count == id)
         			{
         				$('.nav-carousel li').first().addClass('active');
         			}
         		}
         		clickEvent = false;
         	});
         });
      </script>
   </head>
