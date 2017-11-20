<style>
.card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    border-radius: 5px;
}

.card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
}

img {
    border-radius: 5px 5px 0 0;
}

.isi {
    padding: 2px 16px;
}
</style>

<script>
// Set the date we're counting down to
<?php date_default_timezone_set('Asia/Jakarta');
		$pesan = $pemesanan->tgl_pemesanan;
		$waktu = date('M d, Y G:i:s', strtotime($pesan ));;
		$a = date ("M d, Y G:i:s", strtotime("+1 hours", strtotime($waktu)));?>
var countDownDate = new Date("<?php echo $a;?>").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML =  days + hours + " jam "
    + minutes  + " menit " + seconds + " detik ";

    // If the count down is over, write some text
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "0 jam 0 menit 0 detik";
				window.location.href="<?php echo base_url();?>";
    }
}, 1000);
</script>

<?php
$dari = $this->session->userdata('dari');
$sampai = $this->session->userdata('sampai');
$k = $this->session->userdata('kamar');
if ($k!=NULL) {
  $kamar = $k;
} else {
  $kamar = 1;
}
$date1 = date('Y-m-d', strtotime($dari));
$end_date1 = date('Y-m-d', strtotime($sampai));
while (strtotime($date1) < strtotime($end_date1)) {
$d2[] = $date1;
$date1 = date ("Y-m-d", strtotime("+1 day", strtotime($date1)));
}
$gg = array();
$n = 1;
foreach ($d2 as $key => $value) {
        if ($allotment != NULL) {
          foreach ($allotment as $key) {
            if ($key->dari <=$value && $key->sampai >=$value) {
              $h = $key->harga * $kamar;
              break;
            } else {
              $h = $room->harga_produk * $kamar;
            }
          } $hh[] = $h;
        } else {
          $hh[] = $room->harga_produk * $kamar;
        }
        $n++; }?>

      <div class="container">
         <div class="row font16">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <div class="paddingmedium text-center noribordergrey greybg ellipsistext text-success">1. <span class="hidden-xs">Pilih Kamar Anda</span></div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <div class="paddingmedium text-center noribordergrey greybg ellipsistext text-success">2. <span class="hidden-xs">Isi detail pesanan</span></div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 bluebg">
               <div class="  text-center noleribordergrey  ellipsistext white">
                  <div class="arrowbook">
                     <div class="arrowbookend">
                        <div class="paddingmedium">3. <span class="hidden-xs">Unggah Bukti<span class="visible-md-inline visible-lg-inline"> Pembayaran</span> </span></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <div class="paddingmedium text-center nolebordergrey greybg ellipsistext text-success">4. <span class="hidden-xs">Pesanan Berhasil!</span></div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center"><img class="align-center" src="<?php echo base_url();?>assets/front/images/arrownote.png"></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
         </div>
         <div class="paddingmedium greybg text-success font16 bordergreen text-center" style="margin-top:-3px;">Semua informasi pribadi anda aman dengan memesan di pesanhotel.com</div>
         <div class=" heading2 justbold marginsmalltop marginsmallbottom">Unggah Bukti Pembayaran</div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="bordergrey ">
                  <div class="paddingmedium whitebg">
                     <div class="row font16">
                     <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">Id Pemesanan</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr"><?php echo $pemesanan->id_pemesanan;?></div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">Nama</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr"><?php echo $pemesanan->nama_pemesan;?></div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">Email</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr"><?php echo $pemesanan->email_pemesan;?></div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">No. Telp</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr"><?php echo $pemesanan->no_pemesan;?></div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">Jam Kedatangan</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr"><?php echo $pemesanan->datang;?></div>
                        </div>
                     </div>
                  </div>
                  <div class="paddingmedium tobordergrey greybg">
                     <div class=" marginsmallbottom font16">Permintaan khusus</div>
                     <?php $permintaan = explode(",", $pemesanan->ket);
                     foreach ($permintaan as $key => $value) { ?>
                        <div class="black marginsmallbottom font16"><?php echo $value;?></div>
                     <?php }
                        ?>
                  </div>
               </div>
               <br>
               <div class="bordergrey">
                  <div class="greybg paddingmedium font16"><img src="<?php echo base_url();?>assets/front/images/icons/lock-grey.svg" class="iconsmall"> Semua data yang anda masukkan aman, terenskripsi oleh sistem kami</div>
                  <div class="whitebg padding medium font16">
                     <br>
                     <div class="heading3 marginsmallbottom black">Unggah Bukti Pembayaran</div>
                     <div class="marginsmallbottom">
                        Pemesanan Anda sedang dalam tahap: <span class="blue">Menunggu Bukti Pembayaran</span>
                     </div>
                     <hr>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           Mohon unggah bukti transfer Anda untuk mempercepat proses konfirmasi dari sistem bank, Jika Anda belum menyelesaikan pembayaran, Anda dapat mengulangi pesanan.
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <div class="padl30">
                              <div class="font16 marginsmallbottom">Sisa waktu pembayaran :</div>
                              <div id="demo" ></div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <hr>
                     <form id="formunggah" action="" method="post" enctype="multipart/form-data">
                     <input type="hidden" name="id_pemesanan" value="<?php echo $pemesanan->id_pemesanan;?>">
                     <div class="form-group">
                        <input type="file" name="foto" id="foto" required>
                     </div>
                     <div class="marginsmallbottom">
                        Anda hanya dapat mengunggah file dalam format PNG, JPG, atau JPEG. Ukuran file maksimum : 3 Mb
                     </div>
                     <br>

                     <div class="text-right font16">
                        <button type="submit" class="btn  bluebg white rond btn-lg marginsmallbottom">UPLOAD BUKTI TRANSFER</button><br><span class="grey">Menginap di kamar ini dan berikan ulasan!</span>
                     </div>
                     </form>
                  </div>
                  <div class="paddingmedium greybg tobordergrey font16"><img src="<?php echo base_url();?>assets/front/images/icons/mail-verify.svg" class="marginsmallright" height="20" width="40">Kami akan mengirim e-voucher hotel ke email anda</div>
               </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="padl30">
                  <div class="bordergrey paddingmedium">
                     <div class="row font16">
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                 <div class="marginsmallbottom">Check In</div>
                              </div>
                              <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 fsph justbold ">
                                 <?php $in1=$this->session->userdata('dari');
                                    echo date('d', strtotime($in1)); ?>
                              </div>
                              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
                                 <div class="padl30">
                                    <?php echo date('F', strtotime($in1)); ?><br><?php echo date('Y', strtotime($in1)); ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center"><img src="<?php echo base_url();?>assets/front/images/icons/chevron-rightgrey.svg" class="iconlarge2 marginsmalltop"></div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                 <div class="marginsmallbottom">Check Out</div>
                              </div>
                              <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 fsph justbold ">
                                 <?php $out1=$this->session->userdata('sampai');
                                    echo date('d', strtotime($out1)); ?>
                              </div>
                              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
                                 <div class="padl30">
                                    <?php echo date('F', strtotime($out1)); ?><br><?php echo date('Y', strtotime($out1)); ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <hr>
                     <br>
                     <div class="black marginsmallbottom font16"><?php echo $this->session->userdata('kamar');?> x <?php echo $room->nama_produk;?></div>
                     <div class="row font16">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
                          <?php foreach ($gallery as $key2) {
                             if ($key2->produk_id == $room->id_produk) { ?>
                          <img src="<?php echo base_url()."files/".$key2->foto;?>" class="full-width">
                          <?php break; } } ?>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                           <ul class=" ">
                              <li>Ukuran Kamar : <?php echo $room->luas;?>m<sup>2</sup></li>

                              <li>
                                 Kasur : <?php echo $room->bed;?></span>
                              </li>
							  <li>
                                 Kapasitas : Maks 2 Dewasa</span>
                              </li>
							  <li>
								 Stay <?php echo count($d2);?> Malam
							  </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="bordergrey">
                     <div class="paddingmedium">

                     <?php
										 foreach ($fee as $keyfee) {
                       $pajak = $keyfee->fee;
                     }
$dari = $this->session->userdata('dari');
$sampai = $this->session->userdata('sampai');
$k = $this->session->userdata('kamar');
if ($k!=NULL) {
  $kamar = $k;
} else {
  $kamar = 1;
}
$date1 = date('Y-m-d', strtotime($dari));
$end_date1 = date('Y-m-d', strtotime($sampai));
while (strtotime($date1) < strtotime($end_date1)) {
$d1[] = $date1;
$date1 = date ("Y-m-d", strtotime("+1 day", strtotime($date1)));
}
$gg = array();
$no = 1;
foreach ($d1 as $key => $value) { ?>
                        <div class="row font16 " >
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Malam Ke <?php echo $no;?></div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s">IDR
                              <?php
        if ($allotment != NULL) {
          foreach ($allotment as $key) {
            if ($key->dari <=$value && $key->sampai >=$value) {
              $g = $key->harga * $kamar;
              break;
            } else {
              $g = $room->harga_produk * $kamar;
            }
          } $gg[] = $g; echo number_format($g);
        } else {
          $gg[] = $room->harga_produk * $kamar;
          echo number_format($room->harga_produk * $kamar);
        } ?>
                           </div>
                        </div>
                        <?php $no++; } ?>
												<div class="row font16 " >
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> Pajak Properti </div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s"><?php echo $pajak;?> %
                           </div>
                         </div>
                        <div class="row font16 " >
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Unique Code</div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s">IDR - <?php
						   $tamb = $pajak/100*array_sum($gg);

                           $b = array_sum($gg)+$tamb-$pemesanan->bayar; echo $b;?></div>
                        </div>
                     </div>
                     <div class="tobordergrey greybg paddingmedium font16">
                        <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Harga <img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall" data-toggle="tooltip" data-placement="top" title="
                              Pajak dan biaya layanan pada umuumnya mencakup biaya yang PesanHotel bayarkan kepada vendor atau yang ditagih oleh vendor. Untuk informasi lebih lanjut silahkan simak ketentuan Penggunaan PesanHotel. Pajak dan biaya layanan juga mencakup biaya yang PesanHotel tetapkan sebagai kompensasi untuk memroses reservasi.
                              "></div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s black">I
                              IDR <?php $tambahan = $pajak/100*array_sum($gg);
								echo number_format(array_sum($gg)+$tambahan-$b);?>
                           </div>
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginsmalltop"> Termasuk dalam harga : Pajak <?php echo $pajak;?> %</div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="text-right blue font16"></div>
               </div>
            </div>
         </div>
         <br>
      </div>
      <br>


      <div id="modalconfirm" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="modalconfirm">
      <div class="modal-dialog text-center modal-lg">

				 <div class="sk-fading-circle">
		 	 			<div class="sk-circle1 sk-circle"></div>
						 <div class="sk-circle2 sk-circle"></div>
						 <div class="sk-circle3 sk-circle"></div>
						 <div class="sk-circle4 sk-circle"></div>
						 <div class="sk-circle5 sk-circle"></div>
						 <div class="sk-circle6 sk-circle"></div>
						 <div class="sk-circle7 sk-circle"></div>
						 <div class="sk-circle8 sk-circle"></div>
						 <div class="sk-circle9 sk-circle"></div>
						 <div class="sk-circle10 sk-circle"></div>
						 <div class="sk-circle11 sk-circle"></div>
						 <div class="sk-circle12 sk-circle"></div>
	 			</div>
				<br>
				<span class="white"><h2><strong>Menunggu Konfirmasi Pembayaran</strong></h2></span>
				<a class="btn bluebg white rond btn-lg marginsmallbottom" href="<?php echo base_url();?>">Kembali Ke Beranda</a><br>
				<span class="white"><h3><strong>Hotal yang mungkin anda suka</strong></h3></span><br>
				<div id="modalkota"> </div>
      </div>
      </div>


<?php if ($cek == 1) { ?>

   <script type="text/javascript">
	var myVar;
   $(window).on('load',function(){
	$('#modalconfirm').modal({backdrop: 'static', keyboard: false},'show');
	$.ajax({
        type: "POST",
        url: "<?php echo base_url('landingmodal')?>",
		data: {id : <?php echo $pemesanan->id_supplier;?>},
        success: function(data){
           $("#modalkota").html(data);
        }
        });
    myVar = setInterval(alertFunc, 1 * 60 * 1000);
    });

   function alertFunc() {
         $.ajax({
        type: "POST",
        url: "<?php echo base_url('checkconfirm')?>",
        success: function(data){
           if (data == 1) {
               window.location.href="<?php echo base_url();?>evoucher";
           } else {

           }
        }
        });
      }
</script>

<?php } ?>
