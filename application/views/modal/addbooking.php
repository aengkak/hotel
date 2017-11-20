<?php if($cek == 1) { ?>
  <input type="hidden" value="1" name="manual">
  <div class="form-group">
    <label class="control-label col-md-3">Nama Tamu</label>
    <div class="col-md-9">
      <input name="nama" placeholder="Name" id="nama" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">No Telp</label>
    <div class="col-md-9">
      <input name="no_telp" id="no_telp" placeholder="08xx" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Hotel</label>
    <div class="col-md-9">
      <input name="hotel" id="tempattujuan" onblur="changehotel(this.value);" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Kamar</label>
    <div class="col-md-9">
      <select name="produk_id" id="room" onchange="changeroom(this.value);" class="form-control">
          <option value="" style="display:none">Select</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Check in</label>
    <div class="col-md-9">
      <input name="dari" placeholder="From" onchange="changeroom(this.value);" id="from" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Check out</label>
    <div class="col-md-9">
      <input name="sampai" placeholder="To" onchange="changeroom(this.value);" id="to" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Jumlah kamar</label>
    <div class="col-md-9">
      <select name="kamar" id="select" onchange="changeroom(this.value);" class="form-control">
          <option value="" style="display:none">Select</option>
          <?php for ($i=1; $i <=10 ; $i++) { ?>
            <option value="<?php echo $i;?>"><?php echo $i;?></option>
          <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Jumlah tamu</label>
    <div class="col-md-9">
      <select name="orang" id="select" class="form-control">
          <option value="" style="display:none">Select</option>
          <?php for ($j=1; $j <=30 ; $j++) { ?>
            <option value="<?php echo $j;?>"><?php echo $j;?></option>
          <?php } ?>
      </select>
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-md-3">Pembayaran</label>
    <div class="col-md-9">
      <select name="pembayaran" id="select" class="form-control">
          <option value="" style="display:none">Select</option>
          <option value="0">Pay At Karunia</option>
          <?php foreach ($metode as $keym) { ?>
            <option value="<?php echo $keym->id_metode;?>"><?php echo $keym->bank;?></option>
          <?php } ?>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3">Jumlah Pembayaran</label>
    <div class="col-md-9">
      <input name="bayar" id="hasil" class="form-control" type="text">
    </div>
  </div>

<?php } else { ?>
  <input type="hidden" name="id_pemesanan" value="<?php echo $booking->id_pemesanan;?>">
  <div class="form-group">
    <label class="control-label col-md-3">Nama Tamu</label>
    <div class="col-md-9">
      <input name="nama" id="nama" placeholder="Name" value="<?php echo $booking->nama_pemesan;?>" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">No Telp</label>
    <div class="col-md-9">
      <input name="no_telp" id="no_telp" placeholder="08xx" value="<?php echo $booking->no_telp;?>" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Hotel</label>
    <div class="col-md-9">
      <input name="hotel" id="tempattujuan" value="<?php echo $booking->nama_supplier;?>" onblur="changehotel(this.value);" class="form-control" type="text" required>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Kamar</label>
    <div class="col-md-9">
      <select name="produk_id" id="room" onchange="changeroom(this.value);" class="form-control">
          <option value="" style="display:none">Select</option>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Check in</label>
    <div class="col-md-9">
      <input name="dari" placeholder="From" value="<?php echo $booking->tgl_in;?>" onchange="changeroom(this.value);" id="from" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Check out</label>
    <div class="col-md-9">
      <input name="sampai" placeholder="To" value="<?php echo $booking->tgl_out;?>" onchange="changeroom(this.value);" id="to" class="form-control" type="text">
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Jumlah kamar</label>
    <div class="col-md-9">
      <select name="kamar" id="select" onchange="changeroom(this.value);" class="form-control">
          <option value="" style="display:none">Select</option>
          <?php for ($i=1; $i <=10 ; $i++) { ?>
            <option <?php if ($booking->kamar == $i) echo 'selected = "selected"'; ?> value="<?php echo $i;?>"><?php echo $i;?></option>
          <?php } ?>
      </select>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-md-3">Jumlah tamu</label>
    <div class="col-md-9">
      <select name="orang" id="select" class="form-control">
          <option value="" style="display:none">Select</option>
          <?php for ($j=1; $j <=30 ; $j++) { ?>
            <option <?php if ($booking->orang == $j) echo 'selected = "selected"'; ?> value="<?php echo $j;?>"><?php echo $j;?></option>
          <?php } ?>
      </select>
    </div>
  </div>

<div class="form-group">
    <label class="control-label col-md-3">Pembayaran</label>
    <div class="col-md-9">
      <select name="metode" id="select" class="form-control">
          <option value="" style="display:none">Select</option>
          <option <?php if ($booking->metode_id == 0) echo 'selected = "selected"'; ?> value="0">Pay At Karunia</option>
          <?php foreach ($metode as $keym) { ?>
            <option <?php if ($booking->metode_id == $keym->id_metode) echo 'selected = "selected"'; ?> value="<?php echo $keym->id_metode;?>"><?php echo $keym->bank;?></option>
          <?php } ?>
      </select>
    </div>
  </div>

  <div class="form-group">
    <label class="control-label col-md-3">Jumlah Pembayaran</label>
    <div class="col-md-9">
      <input name="bayar" id="hasil" class="form-control" type="text">
    </div>
  </div>

<?php } ?>
