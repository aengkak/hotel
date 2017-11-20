<?php
                        if ($ulasan == NULL) {
                          $rate = 0;
						  $kebersihan = 0;
						  $pelayanan = 0;
						  $makanan = 0;
						  $lokasi = 0;
						  $harga = 0;
                        } else {
                          $rata = array();
						  $k = array();
						  $p = array();
						  $m = array();
						  $l = array();
						  $hrg = array();
                          foreach ($ulasan as $keyu) {
                              $rata[] = $keyu->rata;
							  $k[] = $keyu->kebersihan;
							  $p[] = $keyu->pelayanan;
							  $m[] = $keyu->makanan;
							  $l[] = $keyu->lokasi;
							  $hrg[] = $keyu->harga;
                          }
                          if ($rata == NULL) {
							  $kebersihan = 0;
						  $pelayanan = 0;
						  $makanan = 0;
						  $lokasi = 0;
						  $harga = 0;
                            $rate = 0;
                            echo $rate;
                          } else {
                            $countula = count($rata);
                            $rataula = array_sum($rata);
                            $rate = $rataula / $countula;
							$kebersihan = array_sum($k) / count($k);
							$pelayanan = array_sum($p) / count($p);
							$makanan = array_sum($m) / count($m);
							$lokasi = array_sum($l) / count($l);
							$harga = array_sum($hrg) / count($hrg);
                          }
                        }
                        ?>
<div class="row">
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Kebersihan</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $kebersihan;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $kebersihan;?>%">
                                          <span class="sr-only"><?php echo $kebersihan;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> <?php echo $kebersihan;?></div>
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Pelayanan</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $pelayanan;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $pelayanan;?>%">
                                          <span class="sr-only"><?php echo $pelayanan;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> <?php echo $pelayanan;?></div>
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Makanan</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $makanan;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $makanan;?>%">
                                          <span class="sr-only"><?php echo $makanan;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> <?php echo $kebersihan;?></div>
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Lokasi</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $lokasi;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $lokasi;?>%">
                                          <span class="sr-only"><?php echo $lokasi;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> <?php echo $lokasi;?></div>
                              <div class="col-xs-5 col-sm-3 col-md-3 col-lg-3 ellipsistext font16">Harga</div>
                              <div class="col-xs-5 col-sm-8 col-md-8 col-lg-8">
                                 <div class="mt10">
                                    <div class="progress">
                                       <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $harga;?>"  aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $harga;?>%">
                                          <span class="sr-only"><?php echo $harga;?>% Complete</span>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 text-right"> <?php echo $harga;?></div>
                           </div>