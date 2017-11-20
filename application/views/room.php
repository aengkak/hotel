<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Kamar
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">kamar</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><button class="btn btn-primary fa fa-plus" onclick="addroom()"></button></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama</th>
                  <th>Harga Default</th>
                  <th>Ukuran kamar</th>
                  <th>Kasur</th>
                  <th>Stock Default</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach ($room as $r): ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $r->nama_produk;?></td>
                  <td><?php echo "Rp. ".number_format($r->harga_produk);?></td>
                  <td><?php echo $r->luas." m<sup>2</sup>";?></td>
                  <td><?php echo $r->bed;?></td>
                  <td><?php echo $r->stok;?></td>
                  <td><button class="btn btn-warning fa fa-edit" onclick="editroom(<?php echo $r->id_produk;?>)"></button>
                      <button class="btn btn-danger fa fa-close" onclick="deleteroom(<?php echo $r->id_produk;?>)"> </button>
                  </td>
                </tr>
              <?php $no++; endforeach; ?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Harga Default</th>
                <th>Ukuran kamar</th>
                <th>Kasur</th>
                <th>Stock Default</th>
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


    function addroom()
    {
      save_method1 = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal({backdrop: 'static', keyboard: false},'show'); // show bootstrap modal
      $("#modalbody").load("modalr/",function(data){
		      $("#modalbody").html(data);
          $('#color').colorpicker(); // Colopicker
          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
          })
          $('#harga_produk').mask("#,###.###", {reverse: true});

	    });
      $('form').submit(false);
    }

    function editroom(id)
    {
      save_method1 = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal({backdrop: 'static', keyboard: false},'show'); // show bootstrap modal
      $("#modalbody").load("roomedit/"+id,function(data){
		      $("#modalbody").html(data);
          $('#color').colorpicker(); // Colopicker
          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
          })
          $('#harga_produk').mask("#,###.###", {reverse: true});

	    });
      $('form').submit(false);
    }

    function save1()
    {
      if ($('#nama_produk').val() == '') {
        alert('lengkapi data');
      } else if ($('#harga_produk').val() == '') {
        alert('lengkapi data');
      } else if ($('#luas').val() == '') {
        alert('lengkapi data');
      } else if ($('#stok').val() == '') {
        alert('lengkapi data');
      } else if ($('#color').val() == '') {
        alert('lengkapi data');
      } else {
        var url;
        $("#harga_produk").unmask();
        if(save_method1 == 'add')
        {
            url = "<?php echo base_url('roomadd')?>";
        }
        else
        {
          url = "<?php echo site_url('roomupdate')?>";
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
              }
          });
      }

    }

    function deleteroom(id)
    {
      if(confirm('Are you sure delete this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('roomdelete')?>/"+id,
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
<script language="JavaScript">
$('#harga_produk').mask("#,###.###", {reverse: true});
</script>
<script type="text/javascript">
function changer() {
    var x = $("#harga_produk").val();
    if (x != "") {
      $("#harga_produk").unmask();
      var y = $("#harga_produk").val();
      var a = $("#refund").val() / 100 * y;
      document.getElementById("hasil").innerHTML = a;
      $('#harga_produk').mask("#,###.###", {reverse: true});
    }
}
</script>
