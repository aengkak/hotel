<!DOCTYPE html>
<html lang="en">
   <head>
      <meta http-equiv="content-type" content="text/html; charset=UTF-8">
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
      <title>PESANHOTEL - Booking hotel tercepat &amp; termurah se-indonesia</title>
      <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
      <!-- Bootstrap -->
      <link href="<?php echo base_url();?>assets/front/css/bootstrap.css" rel="stylesheet">

      <link href="<?php echo base_url();?>assets/front/css/jquery.bxsliderhome.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/front/css/datepicker.css" rel="stylesheet">
      <link href="<?php echo base_url();?>assets/front/css/bootstrap-slider.css" rel="stylesheet">
      <link rel="stylesheet" href="<?php echo base_url();?>assets/front/css/starability-basic.css">
      <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/front/css/bootstrap-material-datetimepicker.css');?>"/>
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
      <![endif]-->
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
         $( function() {
           var projects = <?php echo $res;?>;

           $( "#tempattujuan" ).autocomplete({
             minLength: 1,
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


             }
           })
           .autocomplete( "instance" )._renderItem = function( ul, item ) {
             return $( "<li>" )
               .append( "<div>" + item.label + "&nbsp;&nbsp;<sup><font class=\"uk-float-right uk-label\"><small>&nbsp;" + item.desc + "&nbsp;</small></font></sup><br><small>" + item.addr + "</small></div>" )
               .appendTo( ul );
           };
         } );
      </script>
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
