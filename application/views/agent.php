<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Agent
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Agent</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><button class="btn btn-primary fa fa-plus" onclick="addag()"></button></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>No Identitas</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Telephone</th>
                  <th>Email</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach ($agent as $a): ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $a->no_identitas;?></td>
                  <td><?php echo $a->nama_agent;?></td>
                  <td><?php echo $a->alamat;?></td>
                  <td><?php echo $a->no_telp;?></td>
                  <td><?php echo $a->email;?></td>
                  <td><button class="btn btn-warning fa fa-edit" onclick="editag(<?php echo $a->id_agent;?>)"></button>
							        <button class="btn btn-danger fa fa-close" onclick="deleteag(<?php echo $a->id_agent;?>)"> </button>
                  </td>
                </tr>
              <?php $no++; endforeach; ?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>No Identitas</th>
                <th>Name</th>
                <th>Address</th>
                <th>Telephone</th>
                <th>Email</th>
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
      <form action="#" enctype="multipart/form-data" id="form" class="form-horizontal">
        <div class="form-body">
              <input name="id_agent" placeholder="id" class="form-control" type="hidden">
          <div class="form-group">
            <label class="control-label col-md-3">Username</label>
              <div class="col-md-9">
                <input name="username" placeholder="Username" class="form-control" type="text">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Password</label>
              <div class="col-md-9">
                <input name="password" placeholder="Password" class="form-control" type="password">
              </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Identity Number</label>
            <div class="col-md-9">
              <input name="no_identitas" placeholder="identity number" class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Name</label>
            <div class="col-md-9">
              <input name="nama_agent" placeholder="Name" class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Address</label>
            <div class="col-md-9">
              <input name="alamat" placeholder="Address" class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Telephone</label>
            <div class="col-md-9">
              <input name="no_telp" onkeypress="return hanyaAngka(event)" placeholder="Telephone" class="form-control" type="text">
            </div>
          </div>
          <div class="form-group">
            <label class="control-label col-md-3">Email</label>
            <div class="col-md-9">
              <input name="email" placeholder="Email" class="form-control" type="text">
            </div>
          </div>
        </div>

        </div>
        <div class="modal-footer">
          <button type="button" id="btnSave" onclick="save1()" class="btn btn-primary">Save</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
        </div>
        </form>
      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->
<!-- End Bootstrap modal -->
</div>
<!-- /.content-wrapper -->
<script>
  var save_method1; //for save method string
    var table;

    function addag()
    {
      save_method1 = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
    //$('.modal-title').text('Add Person'); // Set Title to Bootstrap modal title
    }

    function editag(id)
    {
      save_method1 = 'update';
      $('#form')[0].reset(); // reset form on modals

      //Ajax Load data from ajax
      $.ajax({
        url : "<?php echo site_url('agedit/')?>/" + id,
        type: "GET",
        dataType: "JSON",
        success: function(data)
        {
            $('[name="username"]').val(data.username);
            $('[name="id_agent"]').val(data.id_agent);
            $('[name="no_identitas"]').val(data.no_identitas);
            $('[name="nama_agent"]').val(data.nama_agent);
            $('[name="alamat"]').val(data.alamat);
			      $('[name="no_telp"]').val(data.no_telp);
            $('[name="email"]').val(data.email);

            $('#modal_form').modal('show'); // show bootstrap modal when complete loaded
            $('.modal-title').text('Edit'); // Set title to Bootstrap modal title

        },
        error: function (jqXHR, textStatus, errorThrown)
        {
            alert('Error get data from ajax');
        }
    });
    }

    function save1()
    {
      var url;
      if(save_method1 == 'add')
      {
          url = "<?php echo base_url('agadd')?>";
      }
      else
      {
        url = "<?php echo site_url('agupdate')?>";
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

    function deleteag(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('agdelete')?>/"+id,
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
