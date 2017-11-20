<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Khusus
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">khusus</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><button class="btn btn-primary fa fa-plus" onclick="addallot()"></button></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kamar</th>
                  <th>Harga</th>
                  <th>Dari</th>
                  <th>Sampai</th>
                  <th>Stock</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach ($allotment as $a): ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $a->nama_produk;?></td>
                  <td><?php echo "Rp. ".number_format($a->harga);?></td>
                  <td><?php echo $a->dari;?></td>
                  <td><?php echo $a->sampai;?></td>
                  <td><?php echo $a->jumlah;?></td>
                  <td><button class="btn btn-warning fa fa-edit" onclick="editallot(<?php echo $a->id_allotment;?>)"></button>
							        <button class="btn btn-danger fa fa-close" onclick="deleteallot(<?php echo $a->id_allotment;?>)"> </button>
                  </td>
                </tr>
              <?php $no++; endforeach; ?>
              </tbody>
              <tfoot>
                <tr>
                  <th>No</th>
                  <th>Kamar</th>
                  <th>Harga</th>
                  <th>Dari</th>
                  <th>Sampai</th>
                  <th>Stock</th>
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
        <div class="form-body" id="modalbody">

        </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" id="btnSave" onclick="save1()" class="btn btn-primary">Simpan</button>
        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
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


    function addallot()
    {
      save_method1 = 'add';
      $('#modal_form').modal({backdrop: 'static', keyboard: false},'show'); // show bootstrap modal
      $("#modalbody").load("modalallot/",function(data){
		      $("#modalbody").html(data);
          $('#datepicker').datepicker({
            format: "yyyy-mm-dd",
            	autoclose: true,
            	todayHighlight: true
          })
      	//Date picker
          $('#datepicker1').datepicker({
            format: "yyyy-mm-dd",
            	autoclose: true,
            	todayHighlight: true
          })
          $('#harga').mask("#,###.###", {reverse: true});
	    });
      $('form').submit(false);
    }

    function editallot(id)
    {
      save_method1 = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal({backdrop: 'static', keyboard: false},'show'); // show bootstrap modal
      $("#modalbody").load("allotedit/"+id,function(data){
		      $("#modalbody").html(data);
          $('#datepicker').datepicker({
            format: "yyyy-mm-dd",
            	autoclose: true,
            	todayHighlight: true
          })
      	//Date picker
          $('#datepicker1').datepicker({
            format: "yyyy-mm-dd",
            	autoclose: true,
            	todayHighlight: true
          })
          $('#harga').mask("#,###.###", {reverse: true});
	    });
      $('form').submit(false);
    }

    function save1()
    {
      if ($('#harga').val() == '') {
        alert('lengkapi data');
      } else if ($('#datepicker').val() == '') {
        alert('lengkapi data');
      } else if ($('#datepicker1').val() == '') {
        alert('lengkapi data');
      } else if ($('#jumlah').val() == '') {
        alert('lengkapi data');
      } else {
        var url;
        $("#harga").unmask();
        if(save_method1 == 'add')
        {
            url = "<?php echo base_url('allotadd')?>";
        }
        else
        {
          url = "<?php echo site_url('allotupdate')?>";
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
                  alert('Error, Please check data again');
  				elert(errorThrown);
              }
          });
      }

    }

    function deleteallot(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('allotdelete')?>/"+id,
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
<script>
function getRoom(val) {
	$.ajax({
	type: "POST",
	url: "<?php echo site_url('onroom')?>",
	data:$('#form').serialize(),
	success: function(data){
    $("#modalbody").html(data);
    $('#datepicker').datepicker({
      format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
    })
  //Date picker
    $('#datepicker1').datepicker({
      format: "yyyy-mm-dd",
        autoclose: true,
        todayHighlight: true
    })
    $('#harga').mask("#,###.###", {reverse: true});
	}
	});
}

</script>
<script language="JavaScript">
$('#harga').mask("#,###.###", {reverse: true});
</script>
