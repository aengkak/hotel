<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Staff
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">staff</li>
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
                  <th>User</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach ($staff as $key): ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $key->username;?></td>
                  <td><button class="btn btn-warning fa fa-edit" onclick="editdata(<?php echo $key->id_user;?>)"></button>
							        <button class="btn btn-danger fa fa-close" onclick="deletedata(<?php echo $key->id_user;?>)"> </button>
                  </td>
                </tr>
              <?php $no++; endforeach; ?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>User</th>
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

          <div id="modalbody">
          </div>

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
      $('#modal_form').modal('show'); // show bootstrap modal
      $("#modalbody").load("modalstaff/",function(data){
		      $("#modalbody").html(data);
          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
          })
	    });
    }

    function editdata(id)
    {
      save_method1 = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $("#modalbody").load("staffedit/"+id,function(data){
		      $("#modalbody").html(data);
          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
          })
	    });
    }

    function save1()
    {
      var url;
      if(save_method1 == 'add')
      {
          url = "<?php echo base_url('staffadd')?>";
      }
      else
      {
        url = "<?php echo site_url('staffupdate')?>";
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
               location.reload();
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
            url : "<?php echo site_url('staffdelete')?>/"+id,
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
