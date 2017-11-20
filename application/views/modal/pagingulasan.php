<div class="tab-content ">
   <div role="tabpanel" class="tab-pane fade in active " id="pagecomments1">
      <?php foreach ($komentar as $keyu) { ?>

          <div class="marginsmalltop">
             <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ellipsistext flex flexleft">
                   <div class="totalulasankaruniakecil white text-center"><?php echo $keyu['rata'];?></div>
                   <div class="font16 ellipsistext marginsmallleft mt10" > <?php echo $keyu['nama_lengkap']." - ".date('d F Y', strtotime($keyu['tgl_komen']));?></div>
                </div>
             </div>
             <div class=" greybg paddingmedium rond font16"><?php echo $keyu['isi'];?></div>
          </div>

      <?php
      } ?>


   </div>
</div>
<div class="text-center col-xs-12 col-sm-12 col-md-12 col-lg-12">
   <nav aria-label="Page navigation">
     <?php echo $paging?>

   </nav>
</div>
