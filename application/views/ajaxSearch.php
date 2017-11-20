<?php
foreach ($fee as $keyfee) {
  $pajak1 = $keyfee->fee;
  $pajak = $pajak1/100;
}
if ($code == 0) { ?>
  <!-- Start Hotel List 1 -->
							 <?php
               $kamar = $this->session->userdata('kamar');
               $tempattujuan = $this->session->userdata('tempattujuan');
               $hit = 1;
               if ($search != NULL) {
               foreach ($search as $key):

                if ($key['kota'] == $tempattujuan) {
                ?>
               <div class=" bordergrey boxshadowhovermedium whitebg boxshadowsmall marginsmallbottom">

                  <div class=" row rowflex">
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ellipsistext">
                        <div class="inline full-width full-height" >
                          <?php
                          foreach ($foto as $key2) {
                           if ($key['id_supplier'] == $key2->supplier_id) { ?>
                             <a href="<?php echo base_url()."check/".$key['slug'];?>" target="_blank">
                             <div class=" slider-div " style="background-image: url(<?php echo base_url()."files/".$key2->foto;?>);" ></div>
                           </a>
                          <?php break; }
                         }
                          ?>
                          <div class="overlay overlay-primary white font16 ellipsistext position-bottom "><?php echo $key['alamat'];?></div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 greybg" >
                        <div  class=" paddingmedium">
                           <div  class="heading3 norcol">
                             <a href="<?php echo base_url()."check/".$key['slug'];?>" target="_blank">
                               <span class="bluehover black"><?php echo $key['nama_supplier'];?></span>
                             </a>
                             </div>
                           <div class="ellipsistext marginsmalltop">
                             <?php $bintang = $key['bintang']; for ($i=0; $i < $bintang; $i++) { ?>
                               <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
                             <?php } ?>
                             <img src="<?php echo base_url();?>assets/front/images/icons/locationblue.svg" class="iconmedium marginsmallleft"><span class="blue font16"> <?php echo $key['kota'];?></span></div>
                           <div class="text-pink font16 mt10">
                             <?php if ($allotment != NULL) {
                             foreach ($allotment as $keyall) {
                              if ($keyall->supplier_id == $key['id_supplier']) {
                                $j = $keyall->jumlah;
                              } else {
                                foreach ($room as $keyr) {
                                  if ($keyr->supplier_id == $key['id_supplier']) {
                                    $j = $keyr->stok;
                                  }
                                }
                              }
                            } echo $j;
                          } else {
                            foreach ($room as $keyr) {
                              if ($keyr->supplier_id == $key['id_supplier']) {
                                $j = $keyr->stok;
                              }
                            } echo $j;
                          }
                            ?> Kamar Tersedia</div>
                           <div class="marginsmalltop boxshadowhovermedium" data-toggle="tooltip" data-placement="top" title="Detail Layanan">
                              <a onclick="layanan(<?php echo $key['id_supplier'];?>)" class=" marginsmalltop ellipsistext ">
                                 <div class="row rowflexs">
                                    <div class=" softgreenbg col-xs-2 col-sm-2 col-md-3 col-lg-2 rond-left  ellipsistext">
                                       <div class="paddingsmall trimmersize  white">Gratis</div>
                                    </div>
                                    <div class=" ellipsistext col-xs-1 col-sm-1 col-md-1 softgreenbg text-right col-lg-1" >
                                      <img src="<?php echo base_url();?>assets/front/images/trimmerwhite.png" class="trimmersize">
                                    </div>
                                    <?php $fitur_id = $key['fitur_id'];
                                    $b = array();
                                    $res = explode(",",$fitur_id);
                                     $n = 1; foreach ($fitur as $keyfitur) {
                                       foreach ($res as $keyres => $value) {
                                         if ($keyfitur->id_fitur == $value) {

                                           $a = $keyfitur->icon;
                                           $b[] = $key['id_supplier'];?>
                                             <div class="pull-left paddingsmall col-xs-4 col-sm-4 whitebg col-md-4 col-lg-4 ellipsistext softgreen ribordergrey">
                                               <span class="<?php echo "gs".$a;?>"></span>
                                               <span class=" ellipsistext"><?php echo $keyfitur->nama;?></span>
                                             </div>
                                          <?php
                                        }

                                      } if (count($b) >= 2) {
                                        break;
                                      }
                                      $n++; } ?>
									  <div class="  col-xs-1 col-sm-1 col-md-1 whitebg rond-right col-lg-1" >

                                    </div>

                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 whitebg">
                        <div  class=" paddingmedium">
                           <div data-toggle="tooltip" data-placement="top" title="Rincian Ulasan">
                              <a href="#" onclick="detailulasan(<?php echo $key['id_supplier'];?>)" class=" ">
                                 <div class="row">
                                    <div class="pull-left bold white ripiu text-left">
                                      <?php
                                      if ($ulasan == NULL) {
                                        $rate = 0;
                                        echo $rate;
                                      } else {
                                        $rata = array();
                                        foreach ($ulasan as $keyu) {
                                          if ($keyu->supplier_id == $key['id_supplier']) {
                                            $rata[] = $keyu->rata;
                                          }
                                        }
                                        if ($rata == NULL) {
                                          $rate = 0;
                                          echo $rate;
                                        } else {
                                          $countula = count($rata);
                                          $rataula = array_sum($rata);
                                          $rate = $rataula / $countula;
                                          echo $rate;
                                        }

                                      }
                                      ?>
                                    </div>
                                    <div class="pull-left ml10 ellipsistext hoverline karuniareview bold ">
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
                                 </div>
                              </a>
                           </div>
                           <div class="ellipsistext marginsmalltop font16 " data-toggle="tooltip" data-placement="top" title="Detail Harga"> Per malam mulai dari
                             <button onclick="detailharga(<?php
                           if ($allotment != NULL) {
                             foreach ($allotment as $keyall) {
                              if ($keyall->supplier_id == $key['id_supplier']) {
                                $g = $keyall->produk_id;
                              } else {
                                foreach ($room as $keyr) {
                                  if ($keyr->supplier_id == $key['id_supplier']) {
                                    $g = $keyr->id_produk;
                                  }
                                }
                              }
                            } echo $g;
                          } else {
                            foreach ($room as $keyr) {
                              if ($keyr->supplier_id == $key['id_supplier']) {
                                $h = $keyr->id_produk;
                              }
                            } echo $h;
                          }?>)" >
                               <img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall">
                             </button>
                           </div>
                           <div class="" >
                              <div class="row">
                                 <div class="col-xs-8 col-md-8 col-sm-8 ellipsistext col-lg-8 font20 justbold flex flexleft">
                                   <span class="norcol">IDR&nbsp;</span><span class="text-pink">
                                   <span id="hasil<?php echo $hit;?>">
                                     <?php
                                   if ($allotment != NULL) {
                                     foreach ($allotment as $keyall) {
                                      if ($keyall->supplier_id == $key['id_supplier']) {
                                        $g = $keyall->harga;
                                      } else {
                                        foreach ($room as $keyr) {
                                          if ($keyr->supplier_id == $key['id_supplier']) {
                                            $g = $keyr->harga_produk;
                                          }
                                        }
                                      }
                                    } $tambahan = $g*$pajak; echo number_format($g+$tambahan);
                                  } else {
                                    foreach ($room as $keyr) {
                                      if ($keyr->supplier_id == $key['id_supplier']) {
                                        $h = $keyr->harga_produk;
                                      }
                                    } $tambahan = $h*$pajak; echo number_format($h+$tambahan);
                                  }?>
                               </span>
                              <input type="hidden" value="<?php
                            if ($allotment != NULL) {
                              foreach ($allotment as $keyall) {
                               if ($keyall->supplier_id == $key['id_supplier']) {
                                 $g = $keyall->harga;
                               } else {
                                 foreach ($room as $keyr) {
                                   if ($keyr->supplier_id == $key['id_supplier']) {
                                     $g = $keyr->harga_produk;
                                   }
                                 }
                               }
                             } $tambahan = $g*$pajak; echo $g+$tambahan;
                           } else {
                             foreach ($room as $keyr) {
                               if ($keyr->supplier_id == $key['id_supplier']) {
                                 $h = $keyr->harga_produk;
                               }
                             } $tambahan = $h*$pajak; echo $h+$tambahan;
                           }?>" name="hitung" id="hitung<?php echo $hit;?>">
                         </span></div>
                                 <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 text-right">
                                   <a href="<?php echo base_url()."check/".$key['slug'];?>" class="btn full-width softgreenbg white rond" target="_blank"> PILIH </a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
             <?php } $hit++; endforeach; ?>
               <!-- Start Pagination -->  <br><br><br><br>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center text-center@s text-left@m font16 norcol marginsmalltop marginsmallbottom"></div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 font16 text-center text-center@s text-right@m">
                     <?php echo $this->ajax_pagination->create_links(); ?>
                  </div>
               </div>
               <!-- End Pagination -->
             <?php } else { ?>
               <div class='text-center'>
               <img src="<?php echo base_url()."assets/front/images/search-bar.gif";?>" >
             </div>
             <?php } ?>

<?php } else { ?>


  <!-- Start Hotel List 1 -->
							 <?php
               $kamar = $this->session->userdata('kamar');
               $tempattujuan = $this->session->userdata('tempattujuan');
               $hit = 1;
               if ($search != NULL) {
               foreach ($search as $key):

                if ($key['kota'] == $tempattujuan) {
                ?>
               <div class=" bordergrey boxshadowhovermedium whitebg boxshadowsmall marginsmallbottom">

                  <div class=" row rowflex">
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 ellipsistext">
                        <div class="inline full-width full-height" >
                          <?php
                          foreach ($foto as $key2) {
                           if ($key['id_supplier'] == $key2->supplier_id) { ?>
                             <a href="<?php echo base_url()."check/".$key['slug'];?>" target="_blank">
                             <div class=" slider-div " style="background-image: url(<?php echo base_url()."files/".$key2->foto;?>);" ></div>
                           </a>
                          <?php break; }
                         }
                          ?>
                          <div class="overlay overlay-primary white font16 ellipsistext position-bottom "><?php echo $key['alamat'];?></div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 greybg" >
                        <div  class=" paddingmedium">
                           <div  class="heading3 norcol">
                             <a href="<?php echo base_url()."check/".$key['slug'];?>" target="_blank">
                               <span class="bluehover black"><?php echo $key['nama_supplier'];?></span>
                             </a>
                             </div>
                           <div class="ellipsistext marginsmalltop">
                             <?php $bintang = $key['bintang']; for ($i=0; $i < $bintang; $i++) { ?>
                               <img src="<?php echo base_url();?>assets/front/images/stars-05.png">
                             <?php } ?>
                             <img src="<?php echo base_url();?>assets/front/images/icons/locationblue.svg" class="iconmedium marginsmallleft"><span class="blue font16"> <?php echo $key['kota'];?></span></div>
                           <div class="text-pink font16 mt10">
                             <?php if ($allotment != NULL) {
                             foreach ($allotment as $keyall) {
                              if ($keyall->supplier_id == $key['id_supplier']) {
                                $j = $keyall->jumlah;
                              } else {
                                foreach ($room as $keyr) {
                                  if ($keyr->supplier_id == $key['id_supplier']) {
                                    $j = $keyr->stok;
                                  }
                                }
                              }
                            } echo $j;
                          } else {
                            foreach ($room as $keyr) {
                              if ($keyr->supplier_id == $key['id_supplier']) {
                                $j = $keyr->stok;
                              }
                            } echo $j;
                          }
                            ?> Kamar Tersedia</div>
                           <div class="marginsmalltop boxshadowhovermedium" data-toggle="tooltip" data-placement="top" title="Detail Layanan">
                              <a onclick="layanan(<?php echo $key['id_supplier'];?>)" class=" marginsmalltop ellipsistext ">
                                 <div class="row rowflexs">
                                    <div class=" softgreenbg col-xs-2 col-sm-2 col-md-3 col-lg-2 rond-left  ellipsistext">
                                       <div class="paddingsmall trimmersize  white">Gratis</div>
                                    </div>
                                    <div class=" ellipsistext col-xs-1 col-sm-1 col-md-1 softgreenbg text-right col-lg-1" >
                                      <img src="<?php echo base_url();?>assets/front/images/trimmerwhite.png" class="trimmersize">
                                    </div>
                                    <?php $fitur_id = $key['fitur_id'];
                                    $b = array();
                                    $res = explode(",",$fitur_id);
                                     $n = 1; foreach ($fitur as $keyfitur) {
                                       foreach ($res as $keyres => $value) {
                                         if ($keyfitur->id_fitur == $value) {

                                           $a = $keyfitur->icon;
                                           $b[] = $key['id_supplier'];?>
                                             <div class="pull-left paddingsmall col-xs-4 col-sm-4 whitebg col-md-4 col-lg-4 ellipsistext softgreen ribordergrey">
                                               <span class="<?php echo "gs".$a;?>"></span>
                                               <span class=" ellipsistext"><?php echo $keyfitur->nama;?></span>
                                             </div>
                                          <?php
                                        }

                                      } if (count($b) >= 2) {
                                        break;
                                      }
                                      $n++; } ?>
									  <div class="  col-xs-1 col-sm-1 col-md-1 whitebg rond-right col-lg-1" >

                                    </div>

                                 </div>
                              </a>
                           </div>
                        </div>
                     </div>
                     <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 whitebg">
                        <div  class=" paddingmedium">
                           <div data-toggle="tooltip" data-placement="top" title="Rincian Ulasan">
                              <a href="#" onclick="detailulasan(<?php echo $key['id_supplier'];?>)" class=" ">
                                 <div class="row">
                                    <div class="pull-left bold white ripiu text-left">
                                      <?php
                                      if ($ulasan == NULL) {
                                        $rate = 0;
                                        echo $rate;
                                      } else {
                                        $rata = array();
                                        foreach ($ulasan as $keyu) {
                                          if ($keyu->supplier_id == $key['id_supplier']) {
                                            $rata[] = $keyu->rata;
                                          }
                                        }
                                        if ($rata == NULL) {
                                          $rate = 0;
                                          echo $rate;
                                        } else {
                                          $countula = count($rata);
                                          $rataula = array_sum($rata);
                                          $rate = $rataula / $countula;
                                          echo $rate;
                                        }

                                      }
                                      ?>
                                    </div>
                                    <div class="pull-left ml10 ellipsistext hoverline karuniareview bold ">
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
                                 </div>
                              </a>
                           </div>
                           <div class="ellipsistext marginsmalltop font16 " data-toggle="tooltip" data-placement="top" title="Detail Harga"> Per malam mulai dari
                             <button onclick="detailharga(<?php
                           if ($allotment != NULL) {
                             foreach ($allotment as $keyall) {
                              if ($keyall->supplier_id == $key['id_supplier']) {
                                $g = $keyall->produk_id;
                              } else {
                                foreach ($room as $keyr) {
                                  if ($keyr->supplier_id == $key['id_supplier']) {
                                    $g = $keyr->id_produk;
                                  }
                                }
                              }
                            } echo $g;
                          } else {
                            foreach ($room as $keyr) {
                              if ($keyr->supplier_id == $key['id_supplier']) {
                                $h = $keyr->id_produk;
                              }
                            } echo $h;
                          }?>)" >
                               <img src="<?php echo base_url();?>assets/front/images/icons/infoblue.svg" class="iconsmall">
                             </button>
                           </div>
                           <div class="" >
                              <div class="row">
                                 <div class="col-xs-8 col-md-8 col-sm-8 ellipsistext col-lg-8 font20 justbold flex flexleft">
                                   <span class="norcol">IDR&nbsp;</span><span class="text-pink">
                                   <span id="hasil<?php echo $hit;?>">
                                     <?php
                                   if ($allotment != NULL) {
                                     foreach ($allotment as $keyall) {
                                      if ($keyall->supplier_id == $key['id_supplier']) {
                                        $g = $keyall->harga;
                                      } else {
                                        foreach ($room as $keyr) {
                                          if ($keyr->supplier_id == $key['id_supplier']) {
                                            $g = $keyr->harga_produk;
                                          }
                                        }
                                      }
                                    } $tambahan = $g*$pajak; echo number_format($g+$tambahan);
                                  } else {
                                    foreach ($room as $keyr) {
                                      if ($keyr->supplier_id == $key['id_supplier']) {
                                        $h = $keyr->harga_produk;
                                      }
                                    } $tambahan = $h*$pajak; echo number_format($h+$tambahan);
                                  }?>
                               </span>
                              <input type="hidden" value="<?php
                            if ($allotment != NULL) {
                              foreach ($allotment as $keyall) {
                               if ($keyall->supplier_id == $key['id_supplier']) {
                                 $g = $keyall->harga;
                               } else {
                                 foreach ($room as $keyr) {
                                   if ($keyr->supplier_id == $key['id_supplier']) {
                                     $g = $keyr->harga_produk;
                                   }
                                 }
                               }
                             } $tambahan = $g*$pajak; echo $g+$tambahan;
                           } else {
                             foreach ($room as $keyr) {
                               if ($keyr->supplier_id == $key['id_supplier']) {
                                 $h = $keyr->harga_produk;
                               }
                             } $tambahan = $h*$pajak; echo $h+$tambahan;
                           }?>" name="hitung" id="hitung<?php echo $hit;?>">
                         </span></div>
                                 <div class="col-xs-4 col-md-4 col-sm-4 col-lg-4 text-right">
                                   <a href="<?php echo base_url()."check/".$key['slug'];?>" class="btn full-width softgreenbg white rond" target="_blank"> PILIH </a></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

               </div>
             <?php } $hit++; endforeach; ?>
               <!-- Start Pagination -->  <br><br><br><br>
               <div class="row">
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 text-center text-center@s text-left@m font16 norcol marginsmalltop marginsmallbottom"></div>
                  <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 font16 text-center text-center@s text-right@m">
                     <?php echo $this->ajax_pagination->create_links(); ?>
                  </div>
               </div>
               <!-- End Pagination -->
             <?php } else { ?>
               <div class='text-center'>
               <img src="<?php echo base_url()."assets/front/images/search-bar.gif";?>" >
             </div>
             <?php } ?>

<?php }
?>
