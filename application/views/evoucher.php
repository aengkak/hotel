
      <div class="container">
         <div class="row font16">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <div class="paddingmedium text-center noribordergrey greybg ellipsistext text-success">1. <span class="hidden-xs">Pilih Kamar Anda</span></div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <div class="paddingmedium text-center noribordergrey greybg ellipsistext text-success">2. <span class="hidden-xs">Isi detail pesanan</span></div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <div class="paddingmedium text-center noribordergrey greybg ellipsistext text-success">3. <span class="hidden-xs">Unggah Bukti<span class="visible-md-inline visible-lg-inline"> Pembayaran</span></span></div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 bluebg">
               <div class="  text-center nolebordergrey  ellipsistext white">
                  <div class="arrowbook">
                     <div class="">
                        <div class="paddingmedium">4. <span class="hidden-xs">Pesanan Berhasil!</span></div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center"><img class="align-center" src="<?php echo base_url();?>assets/front/images/arrownote.png"></div>
         </div>
         <div class="paddingmedium greybg text-success font16 bordergreen text-center" style="margin-top:-3px;">Terima kasih telah memesan hotel bersama pesanhotel.com</div>
         <div class=" heading2 justbold marginsmalltop marginsmallbottom">E-voucher Anda Telah Diterbitkan!</div>
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
                     <div class="heading3 black">E-voucher Anda Telah Diterbitkan!</div>
                     <br>
                     Mohon cek inbox / spam alamat email: <span class="blue"> <?php echo $pemesanan->email_pemesan;?> </span> untuk mendapatkan e-voucher<br><br>
                     <hr>
                     <div class="heading3 black">Tidak Perlu Dicetak!</div>
                     <br>
                     Tunjukkan e-voucher di smartphone saat check-in. Log in ke akun PesanHotel Anda di App atau mobile web dengan email <span class="blue"> <?php echo $pemesanan->email_pemesan;?> </span> untuk melihat e-voucher.<br><br>
                     <hr>
                     <br>
                     <div class="text-right font16">
                       <form action="" method="post">
                         <input type="hidden" name="id_pemesanan" value="<?php echo $pemesanan->id_pemesanan;?>">
                        <button type="submit" class="btn  bluebg white rond btn-lg marginsmallbottom">UNDUH E-VOUCHER</button><br>
                        <span class="grey">Kami menunggu ulasan Anda!</span>
                      </form>
                     </div>
                  </div>
                  <div class="paddingmedium greybg tobordergrey font16"><img src="<?php echo base_url();?>assets/front/images/icons/mail-verify.svg" class="marginsmallright" height="20" width="40">Kami akan mengirim e-voucher hotel Anda ke <span class="blue"><?php echo $pemesanan->email_pemesan;?></span></div>
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
                           <div class="padl30">
                              <div class="row ">
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Check-in</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center ">
                                    <div class="padgridr hidden-xs">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr"><?php $in=$this->session->userdata('dari');
                                    echo date('d F Y', strtotime($in));?></div>
                                 </div>
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Check-out</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                    <div class="padgridr hidden-xs">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr"><?php $out=$this->session->userdata('sampai');
                                    echo date('d F Y', strtotime($out));?></div>
                                 </div>
                              </div>
                           </div>
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
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Night(s) <?php echo $no;?></div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s">IDR
                              <?php
        if ($allotment != NULL) {
          foreach ($allotment as $key) {
            if ($key->dari <=$value && $key->sampai >=$value) {
              $g = $key->harga * $kamar;
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
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s black">
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
