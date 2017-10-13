<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Data Hotel
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li><a href="#">hotel</a></li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Profile Hotel</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->
        <?php if ($cek == 0) { ?>
          <form action="" id="form" method="post">
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                    <label for="exampleInputEmail1">Hotel Name</label>
                    <input type="text" name="nama_supplier" class="form-control" placeholder="Hotel Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="alamat" class="form-control" id="us3-address" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telephone</label>
                    <input type="text" name="no_telp" class="form-control" onkeypress="return hanyaAngka(event)" placeholder="Telephone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Latitude</label>
                    <input type="text" name="lat" class="form-control" id="us3-lat" placeholder="latitude">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Longitude</label>
                    <input type="text" name="longi" class="form-control" id="us3-lon" placeholder="longitude">
                  </div>
                  <div class="form-group">
                    <label class="control-label col-md-3">Features</label>
                    <div class="col-md-9">
                    <?php foreach ($fitur as $key) {?>
                      <label>
                          <input type="checkbox" name="fitur_id[]" class="minimal" value="<?php echo $key->id_fitur;?>">
                            <?php echo $key->nama;?>
                      </label><br />
                    <?php } ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label>Nearby</label><br>
                    <select name="kota_id" class="form-control" onChange="getNear(this.value);">
                        <option value="">Select</option>
                      <?php foreach ($kota as $key) { ?>
                        <option value="<?php echo $key->id_kota;?>"><?php echo $key->kota;?></option>
                      <?php } ?>
                    </select><br />
                    <div id="nearby">

                    </div>
                  </div>

              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <div id="us3" style="width: 450px; height: 400px;"></div><br />
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="form-group">
                <label for="exampleInputEmail1">About</label>
                <textarea name="tentang" class="form-control"></textarea>
              </div>
          </div>
          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" name="add" class="btn btn-primary">Save</button>
          </div>
          <script>
          function getNear(val) {
          	$.ajax({
          	type: "POST",
          	url: "<?php echo site_url('onnearby')?>",
          	data:$('#form').serialize(),
          	success: function(data){
              $("#nearby").html(data);
          	}
          	});
          }

          </script>
          <script>
                      $('#us3').locationpicker({
                          location: {
                              latitude: -7.25468,
                              longitude: 112.72093799999993
                          },
                          radius: 300,
                          inputBinding: {
                              latitudeInput: $('#us3-lat'),
                              longitudeInput: $('#us3-lon'),
                              radiusInput: $('#us3-radius'),
                              locationNameInput: $('#us3-address')
                          },
                          enableAutocomplete: true,
                          onchanged: function (currentLocation, radius, isMarkerDropped) {
                              // Uncomment line below to show alert on each Location Changed event
                              //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                          }
                      });
          </script>
        </form>


        <?php } else { ?>
          <form action="" id="form" method="post">
          <div class="box-body">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input type="hidden" value="<?php echo $supp->id_supplier ;?>" name="id_supplier" />
                    <label for="exampleInputEmail1">Hotel Name</label>
                    <input type="text" name="nama_supplier" value="<?php echo $supp->nama_supplier ;?>" class="form-control" placeholder="Hotel Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="alamat" class="form-control" value="<?php echo $supp->alamat ;?>" id="us3-address" placeholder="Address">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Telephone</label>
                    <input type="text" name="no_telp" class="form-control" value="<?php echo $supp->no_telp ;?>" onkeypress="return hanyaAngka(event)" placeholder="Telephone">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="text" name="email" value="<?php echo $supp->email ;?>" class="form-control" placeholder="Email">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Latitude</label>
                    <input type="text" name="lat" class="form-control" value="<?php echo $supp->lat ;?>" id="us3-lat" placeholder="latitude">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Longitude</label>
                    <input type="text" name="longi" class="form-control" value="<?php echo $supp->longi ;?>" id="us3-lon" placeholder="longitude">
                  </div>
                  <div class="form-group">
                    <label >Feature Room</label><br>
                    <?php $res = $supp->fitur_id;
                     $res1 = explode(',',$res);
                    foreach ($fitur as $key) {?>
                      <label>
                            <?php foreach ($res1 as $key1 => $value1) { ?>
                          <input type="checkbox" <?php if ($value1 == $key->id_fitur) echo 'checked = "checked"'; }?> name="fitur_id[]" class="minimal" value="<?php echo $key->id_fitur;?>">
                            <?php echo $key->nama;?>
                      </label>
                          <br />

                          <?php } ?>
                  </div>
                  <div class="form-group">
                    <label>Nearby</label><br>
                    <select name="kota_id" id="select" class="form-control" onChange="getNear(this.value);">
                        <option value="">Select</option>
                      <?php foreach ($kota as $key) { ?>
                        <option <?php if ($key->id_kota == $supp->kota_id) echo 'selected = "selected"'; ?> value="<?php echo $key->id_kota;?>"><?php echo $key->kota;?></option>
                      <?php } ?>
                    </select><br />
                    <div id="nearby">

                    </div>
                  </div>

              </div>
              <!-- /.col -->
              <div class="col-md-6">
                  <div id="us3" style="width: 450px; height: 400px;"></div><br />
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
            <div class="form-group">
                <label for="exampleInputEmail1">About</label>
                <textarea name="tentang" class="form-control"><?php echo $supp->tentang ;?></textarea>
              </div>
          </div>

          <!-- /.box-body -->
          <div class="box-footer">
            <button type="submit" name="update" class="btn btn-primary">Save</button>
          </div>
          <script>
          function getNear(val) {
          	$.ajax({
          	type: "POST",
          	url: "<?php echo site_url('onnearbyedit')?>",
          	data:$('#form').serialize(),
          	success: function(data){
              $("#nearby").html(data);
          	}
          	});
          }

          </script>
          <script>
                      $('#us3').locationpicker({
                          location: {
                              latitude: $('#us3-lat').val(),
                              longitude: $('#us3-lon').val()
                          },
                          radius: 300,
                          inputBinding: {
                              latitudeInput: $('#us3-lat'),
                              longitudeInput: $('#us3-lon'),
                              radiusInput: $('#us3-radius'),
                              locationNameInput: $('#us3-address')
                          },
                          enableAutocomplete: true,
                          onchanged: function (currentLocation, radius, isMarkerDropped) {
                              // Uncomment line below to show alert on each Location Changed event
                              //alert("Location changed. New location (" + currentLocation.latitude + ", " + currentLocation.longitude + ")");
                          },
                      });
          </script>
        </form>
        <?php } ?>

      </div>
      <!-- /.box -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
