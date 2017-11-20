<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Gallery
      <small>Image</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">gallery</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"><button class="btn btn-primary fa fa-plus" onclick="addgal()"></h3>

        <div class="box-tools pull-right">
          <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
          </button>
          <div class="btn-group">
            <button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-wrench"></i></button>
            <ul class="dropdown-menu" role="menu">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li><a href="#">Separated link</a></li>
            </ul>
          </div>
          <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
        <div class="row">
          <?php foreach ($variable as $key ) { ?>
            <div class="responsive">
                <div class="gallery">
                  <a target="_blank" href="<?php echo base_url('files/'.$key->foto);?>">
                    <img src="<?php echo base_url('files/'.$key->foto);?>" alt="<?php echo base_url('files/'.$key->supplier_id);?>" width="300" height="200">
                  </a>
                  <div class="desc"> <?php $c = $key->produk_id;
                  foreach ($room as $r) {
                    $c1 = $r->id_produk;
                    if ($c == $c1) {
                      echo "Room"." ".$r->nama_produk;
                    }
                  }
                  ?> <br />
                    <?php echo $key->ket;?></div>
                  <div class="desc">
                  <div align="center">
                  <button class="btn btn-warning fa fa-edit" onclick="editgal(<?php echo $key->id_gallery;?>)"></button>
							        <button class="btn btn-danger fa fa-close" onclick="deletegal(<?php echo $key->id_gallery;?>)"> </button>
                    </div>
                  </div>
                </div>
              </div>
          <?php } ?>

        </div>
        <!-- /.row -->
      </div>
      <!-- ./box-body -->
    </div>
    <!-- /.box -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7 connectedSortable">

      </section>
      <!-- /.Left col -->

    </div>
    <!-- /.row (main row) -->

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

            </div>
            <div class="modal-footer">
              <div id="loading">
              <input type="submit" value="submit" class="btn btn-primary" />
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
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


    function addgal()
    {
      save_method1 = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $("#modalbody").load("modalgal/",function(data){
		      $("#modalbody").html(data);
	    });
    $("#form").on('submit',(function(e) {
      e.preventDefault();
      if ($('#foto').val() == '') {
        alert('lengkapi data');
      } else if ($('#ket').val() == '') {
        alert('lengkapi data');
      } else {
        $.ajax({
          url: "galadd",
          type: "POST",
          data:  new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
          beforeSend: function(){
               $('#loading').html("<img src='<?php echo base_url();?>assets/front/images/bx_loader.gif' /> Processing!");
          },
          success: function(data)
            {
              location.reload();
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Error load image');
            }
         });
      }

    }));
    }

    function editgal(id)
    {
      save_method1 = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $("#modalbody").load("galedit/"+id,function(data){
		      $("#modalbody").html(data);
	    });
    $("#form").on('submit',(function(e) {
      e.preventDefault();
      if ($('#foto').val() == '') {
        alert('lengkapi data');
      } else if ($('#ket').val() == '') {
        alert('lengkapi data');
      } else {
        $.ajax({
              url: "galupdate",
          type: "POST",
          data:  new FormData(this),
          contentType: false,
          cache: false,
          processData:false,
          beforeSend: function(){
               $('#loading').html("<img src='<?php echo base_url();?>assets/front/images/bx_loader.gif' /> Processing!");
          },
          success: function(data)
            {
              $('#modal_form').modal('hide');
              location.reload();
            },
            error: function()
            {
            }
         });
      }

    }));
    }

    function deletegal(id)
    {
      if(confirm('Hapus data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('galdelete')?>/"+id,
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
