<style>
    .pac-container {
        z-index: 10000 !important;
    }
</style>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Tempat Terdekat
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">tempat terdekat</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><button class="btn btn-primary fa fa-plus" onclick="adddata()"></button></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach ($nearby as $key): ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $key->tempat;?></td>
                  <td><button class="btn btn-warning fa fa-edit" onclick="editdata(<?php echo $key->id_nearby;?>)"></button>
							        <button class="btn btn-danger fa fa-close" onclick="deletedata(<?php echo $key->id_nearby;?>)"> </button>
                  </td>
                </tr>
              <?php $no++; endforeach; ?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Action</th>
              </tr>
              </tfoot>
            </table>
          </div>
          <!-- /.box-body -->
        </div>
        <!-- /.box -->
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->
  </section>
  <!-- /.content -->

  <!-- Bootstrap modal -->
<div class="modal fade" id="modal_form" role="dialog">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
      <h3 class="modal-title">Form</h3>
    </div>
    <div class="modal-body form">
      <form action="#" id="form" class="form-horizontal">
        <div class="form-body" id="modalbody">

        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSave" onclick="save1()" class="btn btn-primary">Save</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
      </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!-- End Bootstrap modal -->
</div>
<!-- /.content-wrapper -->
<script>
  var save_method1; //for save method string
    var table;


    function adddata()
    {
      save_method1 = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal({backdrop: 'static', keyboard: false},'show'); // show bootstrap modal
      $("#modalbody").load("modalnear/",function(data){
		      $("#modalbody").html(data);
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
	    });

    }

    function editdata(id)
    {
      save_method1 = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal({backdrop: 'static', keyboard: false},'show'); // show bootstrap modal
      $("#modalbody").load("nearedit/"+id,function(data){
		      $("#modalbody").html(data);
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
              }
          });
	    });

    }

    function save1()
    {
      var url;
      if(save_method1 == 'add')
      {
          url = "<?php echo base_url('nearadd')?>";
      }
      else
      {
        url = "<?php echo site_url('nearupdate')?>";
      }

       // ajax adding data to database
          $.ajax({
            url : url,
            type: "POST",
            data: $('#form').serialize(),

            success: function(data)
            {
               //if success close modal and reload ajax table
               $('#modal_form').modal('hide');
              location.reload()// for reload a page
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error adding / update data');
				elert(errorThrown);
            }
        });
    }

    function deletedata(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('neardelete')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {
               location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error deleting data');
            }
        });

      }
    }

</script>
