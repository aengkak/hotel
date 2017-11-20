<div class="form-group">
      <label class="control-label col-md-3">Nama: </label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo $pertanyaan->nama;?></label>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-md-3">Email: </label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo $pertanyaan->email;?></label>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-md-3">Judul: </label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo $pertanyaan->judul;?></label>
      </div>
    </div>
	<div class="form-group">
      <label class="control-label col-md-3">Isi: </label>
      <div class="col-md-9">
        <label class="control-label" style="font-weight:400;"><?php echo $pertanyaan->isi;?></label>
      </div>
    </div>
	
    <?php if ($pertanyaan->lampiran != NULL) { ?>
        <a href="<?php echo base_url()."files/".$pertanyaan->lampiran;?>" target="_blank">
        <img class="box-v2-cover img-responsive" src="<?php echo base_url()."files/".$pertanyaan->lampiran;?>"></a>
    <?php } ?>