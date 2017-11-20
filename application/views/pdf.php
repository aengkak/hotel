<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
  <title>Sun Holiday Style - E Voucher Hotel</title>
<link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600,700" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/evoucher.css" media="all" />
		<style type="text/css">
			.garis {
				display: inline-block;
			}

		</style>
    </head>
    <body class="whitebg">
	<div >
	<div id="wrapper">
	<div class="row row1"> <div class="col-8 orangebg "><h1 class="justbold margintop marginleft padbot marginbottom white">Hotel Voucher</h1></div><div class="col-4 righttext garis whitebg"><img class="margintop logo" src="assets/images/logo.png"></div>
	</div>
	<div class="contentpad row marginsmalltop "><div class="bordergrey garis full"></div></div>
	<div class="row content2nd contentpad ">
	<div class="col-4">
    <div class="margintopdes">Evoucher Id</div>
    <br>
    <div class="justbold heading1 marginsmallbottom marginsmalltop orange">
      <?php echo $evoucher->id_pemesanan;?>
    </div>
    <small class="marginsmalltop">Di Pesan & Dibayar Di Karunia Travel</small></div>
	<div class="col-8 garis"><div class="heading3 black marginsmallbottom"><?php echo $evoucher->nama_supplier;?> <img src="assets/images/stars-01.png"></div>
	<div class="marginsmalltop marginsmallbottom black"><?php echo $evoucher->alamat;?></div><br><br>

	<div class="row garis marginsmalltop">
	<div class="col-4  garis">
    <div class="marginsmallbottom">Check-in :</div>
    <br>
    <div class="black marginsmalltop heading4 justbold">
      <?php echo date('d F Y', strtotime($evoucher->tgl_in));?>
    </div>
    <br>
    <div class="marginsmalltop orange justbold heading4">
      <img src="assets/images/clock.png"> 12:00
    </div>
  </div>
  <div class="col-8   garis">
    <div class="marginsmallbottom">Check-out :</div><br>
    <div class="black marginsmalltop heading4 justbold"><?php echo date('d F Y', strtotime($evoucher->tgl_out));?></div><br>
    <div class="marginsmalltop orange justbold heading4">
      <img src="assets/images/clock.png"> 12:00
    </div>
  </div>

	</div>
	</div></div>

	<div class="row contentpad ">
	<div class="col-4"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3943.7419662111065!2d115.17281231478427!3d-8.716034993738356!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd246b84d1f2529%3A0xccac7231476463cd!2sWhite+Rose!5e0!3m2!1sen!2sid!4v1500260574934" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe></div>
	<div class="col-8 padlos  garis"><div class="garis row">
	<div class="col-4 black garis">Nama</div><div class="garis col-8 black "><?php echo $evoucher->nama_pemesan;?></div>

	<div class=" col-4 black ">Jumlah Tamu</div><div class="garis col-8 black "><?php echo $evoucher->orang;?></div>

	<div class=" col-4 black ">Kamar</div><div class="garis col-8 black "><?php echo $evoucher->nama_produk;?></div>

	<div class=" col-4 black ">Jumlah kamar</div><div class="garis col-8 black "><?php echo $evoucher->kamar;?></div>

  <?php $a = $evoucher->ket;
    if ($a != NULL) { ?>
      <div class="col-4 black ">Permintaan Khusus</div><div class="garis col-8 black ">
		<?php $permintaan = explode(",", $evoucher->ket);
		foreach($permintaan as $key => $value) {
			echo $value."<br>";
		} ?>
	  </div>
    <?php } ?>

	<div class="col-4 black ">Termasuk</div><div class="garis col-8 black "><img src="assets/images/wifiblack.png"> Free wi-fi</div>
	</div>
	</div>

	<div class="full marginsmalltop marginsmallbottom"><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br></div>
	<div class="full "><div class="linehr marginbottom"></div><br><br><div class="row "><div class="col-8"><div class="iconphone">Customer Service:<div class="heading3 justbold">+6231-531-3253</div></div></div><div class="col-4 garis"><div class="">Customer Service Email:<div class="heading3 justbold">cs@karuniatravel.com</div></div></div></div>

	</div>


	</div><br><br>
	<div class=" greybg centertext paddingsmall"><a href="www.karuniatravel.com" class="noneline grey">www.karuniatravel.com</a></div>

</div>
	</div>
    </body>





</html>
