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
$hh = array();
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
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 bluebg">
               <div class="  text-center noleribordergrey  ellipsistext white">
                  <div class="arrowbook">
                     <div class="arrowbookend">
                        <div class="paddingmedium">2. <span class="hidden-xs">Isi detail </span><span class="visible-md-inline visible-lg-inline">pemesanan</span></div>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <div class="paddingmedium text-center noleribordergrey greybg ellipsistext text-success">3. <span class="hidden-xs">Pilih Metode Pembayaran</span></div>
            </div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
               <div class="paddingmedium text-center bordergrey greybg ellipsistext text-success">4. <span class="hidden-xs">Pesanan Berhasil!</span></div>
            </div>
         </div>
         <div class="row">
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center"><img class="align-center" src="<?php echo base_url();?>assets/front/images/arrownote.png"></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
            <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3"></div>
         </div>
         <div class="paddingmedium greybg text-success font16 bordergreen text-center" style="margin-top:-3px;">Semua informasi pribadi anda aman dengan memesan di pesanhotel.com</div>
         <div class=" heading2 justbold marginsmalltop marginsmallbottom">Isi Detail Pemesanan</div>
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
               <div class="bordergrey ">
                  <div class="paddingmedium whitebg">
                     <div class="row">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                           <div class="paddingmedium">
                             <?php foreach ($gallery as $keyg) {
                               if ($this->session->userdata('id_supplier') == $keyg->supplier_id) { ?>
                                 <img src="<?php echo base_url()."files/".$keyg->foto;?>" class="full-width " >
                              <?php break; }
                             } ?>

                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 font16">
                           <div class="paddingsmall">
                           <?php foreach ($supplier as $keys) {
                              if($this->session->userdata('id_supplier') == $keys->id_supplier) { ?>

                              <div class="heading4 blue"><?php echo $keys->nama_supplier;?>  &nbsp;
                                <?php $bintang = $keys->bintang; for ($i=0; $i < $bintang; $i++) { ?>
                                <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
                                <?php } ?>
                              </div>
                              <div class="mt10"><?php echo $keys->alamat;?></div>
                              <div class="row ">
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Check-in</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center ">
                                    <div class="padgridr">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr"><?php $in=$this->session->userdata('dari');
                                    echo date('d F Y', strtotime($in));?></div>
                                 </div>
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Check-out</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                    <div class="padgridr">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr"><?php $out=$this->session->userdata('sampai');
                                    echo date('d F Y', strtotime($out));?></div>
                                 </div>
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Tamu</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                    <div class="padgridr">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr"><?php echo $this->session->userdata('orang');?></div>
                                 </div>
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable">
                                    <div class="padgridr">Kamar</div>
                                 </div>
                                 <div class="col-xs-4 col-sm-1 col-md-1 col-lg-1 text-center">
                                    <div class="padgridr">:</div>
                                 </div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable">
                                    <div class="padgridr"><?php echo $this->session->userdata('kamar');?> x
                                    <?php echo $room->nama_produk; ?>
                                    </div>
                                 </div>
                                 <div class="col-xs-8 col-sm-4 col-md-4 col-lg-4 breakable"></div>
                                 <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 breakable"><a href="<?php echo base_url()."check/".$keys->slug;?>#ganti" class="blue">(Ganti Kamar)</a></div>
                              </div>
                              <?php } } ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="paddingmedium greybg">
                     <div class="row font16">
                        <div class="col-xs-12 col-sm-3 col-md-2 col-lg-2">
                           <div class="totalulasankaruniakecil text-center " >
                             <?php
                             if ($ulasan == NULL) {
                               $rate = 0;
                               $komentar = NULL;
                               echo $rate;
                             } else {
                               $rata = array();
                               foreach ($ulasan as $keyu) {
                                 if ($keyu->supplier_id == $this->session->userdata('id_supplier')) {
                                   $rata[] = $keyu->rata;
                                   $komen = $keyu->isi;
                                 }
                               }
                               if ($rata == NULL) {
                                 $rate = 0;
                                 $komentar = NULL;
                                 echo $rate;
                               } else {
                                 $countula = count($rata);
                                 $rataula = array_sum($rata);
                                 $rate = $rataula / $countula;
                                 $komentar = $komen;
                                 echo $rate;
                               }
                             }
                             ?>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-9 col-md-10 col-lg-10  black">
                           <div class="mt10 marginsmallbottom blue">
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
                           <?php if ($komentar != NULL) {
                             echo $komentar;
                           } ?>
                        </div>
                     </div>
                     <br>
                     <hr>
                     <div class="heading4 justbold black">Fasilitas Utama</div>
                     <br>
                     <div class="row font16">
                        <?php $supplier_id = $this->session->userdata('id_supplier');
                        foreach ($supplier as $keys) {
                          if ($keys->id_supplier == $supplier_id) {
                            $fitur = $keys->fitur_id;
                          }
                        } $no = 1;
                        $fiturex = explode(",",$fitur);
                        foreach ($fiturex as $keyex => $valueex) {
                          foreach ($fiturhotel as $keyf) {
                            if ($valueex == $keyf->id_fitur) { ?>
                              <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4 black">
                                 <div class="padgridr">
                                   <span class="iconmedium <?php echo "gs".$keyf->icon;?>"></span> <?php echo $keyf->nama;?>
                                 </div>
                              </div>
                          <?php }
                          }
                          if ($no == 3) {
                            break;
                          }
                        $no++;
                        } ?>

                     </div>
                  </div>
               </div>
               <!-- End info box -->
               <br>
               <div class="orange paddingmedium creambg borderorange font16">Membatalkan Pemesanan Dapat Dikenakan Biaya</div>
               <br>
               <div class="blue font16 blueborder flex flexleft">
                  <div class="bluebg padding">
                    <img src="<?php echo base_url();?>assets/front/images/icons/userwhite.svg" class="iconmedium marginsmalltop"></div>
                  <div class="marginsmalltop marginsmallbottom marginsmallleft">
                    <?php $c = $this->session->userdata('level');
     							 if ($c == "person") { ?>
                     <span class=""><?php echo $this->session->userdata('nama_lengkap');?></span><br>
                     <label class="font16" ><input class="" value="guest" id="guest" type="checkbox"> Saya Adalah Tamu</label>
                   <?php } else { ?>
                     <span class="">Ingin proses pemesanan lebih cepat dan hemat lebih banyak? </span><br>
                     <a href="#" data-toggle="modal" data-target="#LoginModal" class="blue">
                       <u>Masuk</u>
                     </a> / <a href="#" data-toggle="modal" data-target="#SignUpModal" class="blue">
                       <u>Daftar</u>
                     </a>
                   <?php } ?>
                  </div>
               </div>
               <br>
               <div class="bordergrey">
                  <div class="paddingmedium whitebg">
                     <div class="heading3 black">Informasi Anda</div>
                     <br>
                     <div class="row">
                     <form id="pemesan" action="" method="post">
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                        <input type="hidden" name="supplier_id" value="<?php echo $this->session->userdata('id_supplier');?>">
                        <input type="hidden" name="produk_id" value="<?php echo $room->id_produk;?>">
                        <input type="hidden" name="dari" value="<?php echo $this->session->userdata('dari');?>">
                        <input type="hidden" name="sampai" value="<?php echo $this->session->userdata('sampai');?>">
                        <input type="hidden" name="orang" value="<?php echo $this->session->userdata('orang');?>">
                        <input type="hidden" name="kamar" value="<?php echo $this->session->userdata('kamar');?>">
                        <input type="hidden" name="bayar" value="<?php echo array_sum($hh);?>">
                           <div class="padgridsmall form-group">
                              <label >Nama Awal</label>
                              <input type="text" name="nama" id="nama" class="form-control greybg input-lg" id="" placeholder="" required>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                           <div class="padgridsmall form-group">
                              <label >Email</label>
                              <input type="text" name="email" id="email" class="form-control greybg input-lg" id="" placeholder="" required>
                           </div>
                        </div>
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
                           <div class="padgridsmall form-group">
                              <label >No Handphone</label>
                              <input type="text" name="no_telp" id="no_telp" class="form-control creambg input-lg" id="" placeholder="" required>
                           </div>
                        </div>
                     </div>
                     
                     <div class="paddingmedium greybg font16 marginsmalltop rond">
                        <div class="flex  flexleft">
                           <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/checkgreen.svg" class="iconsmall marginsmallright"></div>
                           <div class="">Akses pemesanan anda secara online <span class="softgreen">KAPANPUN!</span><br>
                           </div>
                        </div>
                        <div class=" flex marginsmalltop flexleft">
                           <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/checkgreen.svg" class="iconsmall marginsmallright"></div>
                           <div class="">
                              Bayar pemesanan ini dan nikmati liburan anda
                           </div>
                        </div>
                     </div>
                     <br>
                     <div class="heading3 black">Ada permintaan lain?</div>
                     <div class="marginsmalltop font16">Kami akan menginformasikan pemesanan Anda setelah anda memesan!</div>
                     <br>
                     <a class="font16 blue" role="button" data-toggle="collapse" href="#collapsePerKhus" aria-expanded="false" aria-controls="collapsePerKhus" ><img src="<?php echo base_url();?>assets/front/images/icons/plus-circleblue.svg" class="iconsmall marginsmallright ">Tambahkan permintaan <span class="hidden-xs">khusus</span></a>
                     <br>
                     <div class="collapse font16" id="collapsePerKhus">
                        <br>
                        <div class=" paddingmedium whitebg  bordergrey rond2">
                           Perlu diketahui bahwa seluruh permintaan tergantung pada persediaan.<br><br>
                           <div class="row">
						   <?php foreach ($permintaan as $keyp) { ?>
							   
                              <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
                                 <div class="padgrids"> <label><input name="permintaan[]" value="<?php echo $keyp->nama;?>" type="checkbox"> <?php echo $keyp->nama;?></label></div>
                              </div>
							  <?php } ?>
                              <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 marginsmalltop">
                                 <hr>
                              </div>
                           </div>
                           <div class=" marginsmallbottom ">
                              Permintaan khusus <span class="justbold">bahasa Inggris</span> atau <span class="justbold">Bahasa Indonesia.</span>
                           </div>
                           <textarea class="form-control" rows="5" name="khusus"></textarea>
                        </div>
                     </div>
                     <br>
                     <div class="heading3 black">Tahu jam kedatangan Anda?</div>
                     <div class="marginsmalltop font16 marginsmallbottom"></div>
                     <div class="form-group">
                        <select class="form-control input-lg creambg" name="datang">
                           <option value="Saya tidak tahu">Saya tidak tahu</option>
                           <?php for ($i=0; $i <=24 ; $i++) { ?>
                             <option value="<?php if($i < 10){echo "0";}?><?php echo $i;?>.00 - <?php if($i+1 < 10){echo "0";}?><?php echo $i+1;?>.00">
                             <?php if($i < 10){echo "0";}?><?php echo $i;?>.00 - <?php if($i+1 < 10){echo "0";}?><?php echo $i+1;?>.00</option>
                           <?php } ?>
                        </select>
                     </div>
                     <div class="marginsmalltop marginsmallbottom font16">Dengan menekan tombol lanjut saya setuju dengan, <a class="blue underline" href="<?php echo base_url();?>faq">Syarat & Ketentuan</a> dan <a class="blue underline" href="<?php echo base_url();?>faq">Kebijakan Privasi</a> pesanhotel.com</div>
                     <div class="text-right font16">
                        <button type="submit" class="btn  bluebg white rond btn-lg marginsmallbottom">LANJUT</button><br><span class="grey">Menginap di kamar ini dan berikan ulasan!</span>
                     </div>
                     </form>
                  </div>
               </div>
               <br>
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
                                 <div class="padl30"><?php echo date('F', strtotime($in1)); ?><br><?php echo date('Y', strtotime($in1)); ?></div>
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
                                    echo date('d', strtotime($out1)); ?></div>
                              <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
                                 <div class="padl30"><?php echo date('F', strtotime($out1)); ?><br><?php echo date('Y', strtotime($out1)); ?></div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <br>
                     <hr>
                     
                              <div class="black marginsmallbottom font16"><?php echo $this->session->userdata('kamar');?> x <?php echo $room->nama_produk;?></div>
                     <div class="row font16">
                        <div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
                          <?php foreach ($gallery as $key) {
                            if ($key->produk_id == $room->id_produk) { ?>
                              <img src="<?php echo base_url()."files/".$key->foto;?>" class="full-width">
                            <?php break; }
                          } ?>

                        </div>
                        <div class="col-xs-12 col-sm-8 col-md-8 col-lg-8 ">
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
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6"> Malam Ke <?php echo $no;?></div>
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
                     </div>
                     <div class="tobordergrey greybg paddingmedium font16">
                        <div class="row">
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">Total <img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall" data-toggle="tooltip" data-placement="top" title="
                              Pajak dan biaya layanan pada umuumnya mencakup biaya yang PesanHotel bayarkan kepada vendor atau yang ditagih oleh vendor. Untuk informasi lebih lanjut silahkan simak ketentuan Penggunaan PesanHotel. Pajak dan biaya layanan juga mencakup biaya yang PesanHotel tetapkan sebagai kompensasi untuk memroses reservasi.
                              "></div>
                           <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-right@s black">IDR
                             <?php $tambahan = $pajak/100*array_sum($gg);
                              echo number_format(array_sum($gg)+$tambahan);?>
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
      </div>
      <br>

      <script type="text/javascript">
         $(document).ready(function(){
          $('input[id="guest"]').click(function(){
            if($(this).is(":checked")){
                  document.getElementById("nama").value = "<?php echo $person->nama_lengkap?>";
                  document.getElementById("no_telp").value = "<?php echo $person->no_telp?>";
                  document.getElementById("email").value = "<?php echo $person->email?>";
            }
            else if($(this).is(":not(:checked)")){
                document.getElementById("pemesan").reset();
            }
        });
    });
      </script>
