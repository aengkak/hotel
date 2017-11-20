<?php
foreach ($fee as $keyfee) {
  $pajak = $keyfee->fee;
}
date_default_timezone_set('Asia/Jakarta');
$d = $this->session->userdata('dari');
if ($d != NULL) {
  $dari = $d;
} else {
  $dari = date("Y-m-d");
}
$s = $this->session->userdata('sampai');
if ($s != NULL) {
  $sampai = $s;
} else {
  $sampai = date ("Y-m-d", strtotime("+1 days", strtotime($dari)));
}
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
  <div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 font16 ">Malam Ke <?php echo $no;?></div>
    <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 blue">IDR</div>
      <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 font16 text-right">
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
  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "></div>
<?php $no++; } ?>

<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 font16 ">Pajak Properti</div>
  <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 blue"></div>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 font16 text-right"> <?php echo $pajak;?> %</div>

<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 font16 ">Karunia Travel fee</div>
  <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 blue">IDR</div>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 font16 text-right"> Free </div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 "></div>

<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
   <hr class="marginsmalltop">
</div>
<div class="col-xs-12 col-sm-7 col-md-7 col-lg-7 font16 ">Total</div>
  <div class="col-xs-2 col-sm-1 col-md-1 col-lg-1 font16 blue ">IDR</div>
    <div class="col-xs-10 col-sm-4 col-md-4 col-lg-4 font16 blue text-right">
      <?php $tambahan = $pajak/100*array_sum($gg);
       echo number_format(array_sum($gg)+$tambahan);?>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
   <hr class="marginsmalltop">
</div>
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 font16 ">Silahkan melanjutkan pemesanan Anda untuk melihat rincian pajak dan biaya</div>
