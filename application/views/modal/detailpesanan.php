
                     <div class="whitebg padbig boxshadowsmall">
                        <div class="heading3 black marginsmallbottom">Detail Pesanan</div>
                        <div class="row font16 ">
                           <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Nama Tamu :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt"><?php echo $detail->nama_pemesan;?></div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Tanggal Pemesanan :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt"><?php echo date('l d F Y', strtotime($detail->tgl_pemesanan));?></div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">No Pemesanan :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt"><?php echo $detail->id_pemesanan;?></div>
                              </div>
                           </div>
                           <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Check In :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt"><?php echo date('l d F Y', strtotime($detail->tgl_in));?></div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Check Out :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt"><?php echo date('l d F Y', strtotime($detail->tgl_out));?></div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Jumlah Kamar :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt"><?php echo $detail->kamar;?> Kamar</div>
                              </div>
                           </div>
                        </div>
                        <br>
                        <hr>
                        <div class="heading3 marginsmalltop black marginsmallbottom">Detail Pembayaran</div>
                        <div class="row font16 ">
                           <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Jenis Pembayaran :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt">Bank Transfer</div>
                              </div>
                           </div>
                           <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Status Pembayaran :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt text-success">
                                 <?php if ($detail->status_pemesanan == 1) {
                                    echo "Selesai";
                                 } elseif ($detail->status_pemesanan == 0) {
                                   if ($detail->bukti == NULL) {
                                     echo "Menunggu Pembayaran";
                                   } else {
                                     echo "Menunggu Konfirmasi";
                                   }
                                 } ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                        <hr>
                        <div class="heading3 marginsmalltop black marginsmallbottom">Detail Hotel</div>
                        <div class="row font16 ">
                           <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Nama Hotel :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt"><?php echo $detail->nama_supplier;?></div>
                              </div>
                           </div>
                           <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Alamat & No. Telepon :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt"><?php echo $detail->alamat.", ".$detail->no_telp;?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                        <hr>
                        <div class="heading3 marginsmalltop black marginsmallbottom">Detail Kamar</div>
                        <div class="row font16 ">
                           <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Nama Kamar :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt"><?php echo $detail->nama_produk;?></div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Fasilitas Kamar :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt">Termasuk Sarapan</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Kapasitas :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt">2 Orang</div>
                              </div>
                           </div>
                           <div class="row col-xs-12 col-sm-6 col-md-6 col-lg-6 ">
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                 <div class="padgridt">Permintaan Khusus :</div>
                              </div>
                              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6">
                                 <div class="padgridt">
                                    <?php $permintaan = explode(",", $detail->ket);
                     foreach ($permintaan as $key => $value) { ?>
                        <?php echo $value."<br>";?>
                     <?php }
                        ?>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <br>
                        <hr>
                        <div class="heading3 marginsmalltop black marginsmallbottom">Refund Policy</div>
                        <div class="font16">Pembatalan Dapat Dikenakan Biaya</div>
                        <br>
                        <hr>
                        <?php if ($detail->status_pemesanan == 0) {
                          if ($detail->bukti == NULL) { ?>
                            <div class="heading3 marginsmalltop black marginsmallbottom">Unggah Bukti Pembayaran</div>
                            <div class="font16">
                               Mohon selesaikan pembayaran terlebih dahulu untuk mendapatkan e-voucher
                            </div><br>
                            <form id="formunggah" action="" method="post" enctype="multipart/form-data">
                            <input type="hidden" name="id_pemesanan" value="<?php echo $detail->id_pemesanan;?>">
                            <div class="form-group">
                               <input type="file" name="foto" id="foto">
                            </div>
                            <div class="row marginsmalltop">
                               <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                  <div class="padgrids">
                                     <button type="submit" class="btn btn-lg norcol col-xs-12 bluebg white rond"> SELESAIKAN PEMBAYARAN</button>
                                  </div>
                               </div>
                            </div>
                          </form>
                          <?php } else { ?>
                            <div class="heading3 marginsmalltop black marginsmallbottom">Silahkan Menunggu Konfirmasi</div>
                          <?php } ?>



                        <?php } else { ?>

                          <div class="heading3 marginsmalltop black marginsmallbottom">E-voucher</div>
                          <div class="font16">
                             Anda telah menyelesaikan pembayaran
                          </div>
                          <div class="row marginsmalltop">
                             <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 ellipsistext">
                                <div class="padgrids">
                                   <a href="#" onclick="confirm1(<?php echo $detail->id_pemesanan;?>)" class="btn btn-lg norcol col-xs-12 bluebg white rond"> Unduh Evoucher</a>
                                </div>
                             </div>
                          </div>

                        <?php } ?>

                     </div>
