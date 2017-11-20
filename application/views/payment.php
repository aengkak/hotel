<script>
// Set the date we're counting down to
var countDownDate = new Date("Oct 23, 2017 12:00:00").getTime();

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
    }
}, 1000);
</script>

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
                        <div class="paddingmedium">3. <span class="hidden-xs">Pilih metode<span class="visible-md-inline visible-lg-inline"> pembayaran</span> </span></div>
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
         <div class="paddingmedium greybg text-success font16 bordergreen text-center" style="margin-top:-3px;">Sedikit lagi! silahkan pilih metode pembayaran Anda</div>
         <div class=" heading2 justbold marginsmalltop marginsmallbottom">Pilih metode pembayaran</div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="bordergrey ">
                  <div class="paddingmedium whitebg">
                     <div class="row font16">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">Nama Awal</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr">Dicky</div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">Nama Akhir</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr">Isfran Setia</div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">Email</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr">dicky@karuniatravel.com</div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">No. Handphone</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr">08123152231</div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">Asal Negara</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr">Indonesia</div>
                        </div>
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 breakable">
                           <div class="padgridr">Jam Kedatangan</div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 breakable text-right@s">
                           <div class="padgridr">Tidak Tahu</div>
                        </div>
                     </div>
                  </div>
                  <div class="paddingmedium tobordergrey greybg">
                     <div class=" marginsmallbottom font16">Permintaan khusus</div>
                     <div class="black marginsmallbottom font16">Tidak ada</div>
                  </div>
               </div>
               <br>
               <div class="bordergrey">
                  <div class="greybg paddingmedium font16"><img src="<?php echo base_url();?>assets/front/images/icons/lock-grey.svg" class="iconsmall"> Semua data yang anda masukkan aman, terenskripsi oleh sistem kami</div>
                  <div class="whitebg padding medium font16">
                     Pilihan transfer bank :<br><br>
                     <div class="flex flexleft"><img src="<?php echo base_url();?>assets/front/images/pembayaran/bca.jpg" class="rond bordergrey marginsmallright "><img src="<?php echo base_url();?>assets/front/images/pembayaran/bni.jpg" class="rond bordergrey marginsmallright "><img src="<?php echo base_url();?>assets/front/images/pembayaran/bri.jpg" class="rond bordergrey marginsmallright "><img src="<?php echo base_url();?>assets/front/images/pembayaran/mandiri.jpg" class="rond bordergrey marginsmallright "></div>
                     <br>
                     <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <div class="font16 marginsmallbottom">Pilih metode pembayaran :</div>
                           <div class="form-group">
                              <select class="form-control input-lg creambg">
                                 <option>Transfer Bank</option>
                                 <option>-----------</option>
                              </select>
                           </div>
                           <div class="font16 marginsmallbottom">Pilih Bank Tujuan :</div>
                           <div class="form-group">
                              <select class="form-control input-lg creambg">
                                 <option>BCA</option>
                                 <option>BRI</option>
                                 <option>BNI</option>
                                 <option>Mandiri</option>
                              </select>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <div class="padl30">
                              <div class="font16 marginsmallbottom">Sisa waktu pembayaran :</div>
                              <div id="demo" ></div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="marginsmalltop marginsmallbottom font16">Dengan menekan tombol lanjut saya setuju dengan, <a class="blue underline" href="faqsyaratketentuan.html">Syarat & Ketentuan</a> dan <a class="blue underline" href="faqkebijakanprivasi.html">Kebijakan Privasi</a> pesanhotel.com</div>
                     <div class="text-right font16">
                        <a href="caratransferkamar.html" class="btn  bluebg white rond btn-lg marginsmallbottom">LANJUT</a><br><span class="grey">Pesan kamar ini dan berikan ulasan!</span>
                     </div>
                  </div>
                  <div class="paddingmedium greybg tobordergrey font16"><img src="<?php echo base_url();?>assets/front/images/icons/mail-verify.svg" class="marginsmallright" height="20" width="40">Kami akan mengirim e-voucher hotel Anda ke <span class="blue">dicky@karuniatravel.com</span></div>
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
                              <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 fsph justbold ">17</div>
                              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
                                 <div class="padl30">Thursday<br>Aug 2017</div>
                              </div>
                           </div>
                        </div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center"><img src="<?php echo base_url();?>assets/front/images/icons/chevron-rightgrey.svg" class="iconlarge2 marginsmalltop"></div>
                        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                           <div class="row">
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                                 <div class="marginsmallbottom">Check Out</div>
                              </div>
                              <div class=" col-xs-12 col-sm-4 col-md-4 col-lg-4 fsph justbold ">19</div>
                              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
                                 <div class="padl30">Thursday<br>Aug 2017</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <hr>
                     <br>
                     <div class="black marginsmallbottom font16">1x Superior</div>
                     <div class="row font16">
                        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4"><img src="<?php echo base_url();?>assets/front/images/doublebed.jpg" class="full-width"></div>
                        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 ">
                           <div class="padl30">
                              <div class="row ">
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Neighborhood</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                    <div class="padgridr hidden-xs">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr">Sanur, Bali</div>
                                 </div>
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Check-in</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center ">
                                    <div class="padgridr hidden-xs">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr">Thursday, August 17, 2017</div>
                                 </div>
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Check-out</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                    <div class="padgridr hidden-xs">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr">Friday, August 18, 2017</div>
                                 </div>
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Stay</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                    <div class="padgridr hidden-xs">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr">1 night, 1 room, 2 adults </div>
                                 </div>
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Rooms</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                    <div class="padgridr hidden-xs">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr">1 x Superior</div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="bordergrey">
                     <div class="paddingmedium">
                        <div class="row font16 " >
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Harga (1 kamar x 1 malam)</div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s"><s>IDR 2.160.909</s><br>IDR 2.160.909</div>
                        </div>
                     </div>
                     <div class="tobordergrey greybg paddingmedium font16">
                        <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Harga <img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall" data-toggle="tooltip" data-placement="top" title="
                              Pajak dan biaya layanan pada umuumnya mencakup biaya yang PesanHotel bayarkan kepada vendor atau yang ditagih oleh vendor. Untuk informasi lebih lanjut silahkan simak ketentuan Penggunaan PesanHotel. Pajak dan biaya layanan juga mencakup biaya yang PesanHotel tetapkan sebagai kompensasi untuk memroses reservasi.
                              "></div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s black">IDR 2.160.909</div>
                           <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginsmalltop"> Termasuk dalam harga : Imbalan layanan  10%, pajak 10%</div>
                        </div>
                     </div>
                  </div>
                  <br>
                  <div class="text-right blue font16">Gratis biaya pembatalan</div>
               </div>
            </div>
         </div>
         <br>
      </div>
      <br>
      
