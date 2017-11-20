<div class="row">

<?php $no = 1; foreach ($supplier as $key) {
if ($key->id_supplier != $id) {	?>
<div class="col-xs-12 col-sm-<?php $c=count($key->id_supplier); 
if($c<=2) { echo"6";
} elseif($c<=3) { echo "4";	
} else { echo "2";}?>"><div class="padgrid">
<a href="<?php echo base_url()."check/".$key->slug;?>">
            <div >
               <div class="boxshadowsmall boxshadowhoverlarge">
                  <?php foreach ($foto as $keyf) {
                     if ($keyf->supplier_id == $key->id_supplier) { ?>
                  <div style="background-image: url(<?php echo base_url()."files/".$keyf->foto;?>);" class="hotelimg " ></div>
                  <?php break; }
                     } ?>
                  <div class="overlay-primary paddingsmall" style="z-index:1;  position:relative; margin-top:-43px; ">
                     <div class="row paddingsmall">
                        <div class="col-xs-8 col-sm-7 col-md-7 col-lg-7 font16 ellipsistext white"><?php echo $key->nama_supplier;?></div>
                        <div class="col-xs-4 col-sm-5 col-md-5 col-lg-5 ellipsistext text-right "><img src="<?php echo base_url();?>assets/front/images/stars-05.png"></div>
                     </div>
                  </div>
                  <div class="notobordergrey whitebg">
                     <div class="greybg padding ellipsistext norcol font16 full-width"><?php echo $key->alamat;?></div>
                     <div class="">
					 <div class="row">
                       <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 bold white ripiu text-center"><?php echo $key->rate;?></div>
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ellipsistext  karuniareview bold ">
                                        <?php $a = $key->rate;
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
                        &nbsp;
                     </div>
					 </div>
                  </div>
               </div>
            </div>
         </a>
</div></div>
<?php if($no == 4){break;} $no++;} } ?>

</div>
