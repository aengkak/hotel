<div align="center"> <h2><b><?php echo $booking->id_pemesanan;?></b></h2> </div><br>
<div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label class="control-label col-md-3">Name : </label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo $booking->nama_pemesan;?></label>
      </div>
    </div>
    <?php $a =  $booking->email_pemesan;
    if ($a != NULL) { ?>
      <div class="form-group">
        <label class="control-label col-md-3">Email : </label>
        <div class="col-md-9">
          <label class="control-label" style="font-weight:400;"><?php echo $booking->email_pemesan;?></label>
        </div>
      </div>
    <?php } ?>
    <?php $b =  $booking->no_pemesan;
    if ($b != NULL) { ?>
      <div class="form-group">
        <label class="control-label col-md-3">Telp : </label>
        <div class="col-md-9">
          <label class="control-label" style="font-weight:400;"><?php echo $booking->no_pemesan;?></label>
        </div>
      </div>
    <?php } ?>
    <div class="form-group">
      <label class="control-label col-md-3">Room(s):</label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo $booking->kamar;?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3">Guest(s):</label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo $booking->orang;?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3">Booking:</label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo date('l d F Y', strtotime($booking->tgl_pemesanan));?></label>
      </div>
    </div>


  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label class="control-label col-md-3">Hotel : </label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo $booking->nama_supplier;?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3">Type : </label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo $booking->nama_produk;?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3">Checkin: </label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo date('l d F Y', strtotime($booking->tgl_in));?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3">Checkout: </label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo date('l d F Y', strtotime($booking->tgl_out));?></label>
      </div>
    </div>
    <?php if ($booking->bukti != NULL) { ?>
        <a href="<?php echo base_url()."files/".$booking->bukti;?>" target="_blank">
        <img class="box-v2-cover img-responsive" src="<?php echo base_url()."files/".$booking->bukti;?>"></a>
    <?php } ?>

  </div>
</div>
