<style>

.ui-menu .ui-menu-item a {
font-size: 12px;
}
.ui-autocomplete {
  max-height: 200px;
  overflow-y: auto;
  /* prevent horizontal scrollbar */
  overflow-x: hidden;

position: absolute;
top: 0;
left: 0;
z-index: 1510 !important;
float: left;
display: none;
min-width: 160px;
width: 160px;
padding: 4px 0;
margin: 2px 0 0 0;
list-style: none;
background-color: #ffffff;
border-color: #ccc;
border-color: rgba(0, 0, 0, 0.2);
border-style: solid;
border-width: 1px;
-webkit-border-radius: 2px;
-moz-border-radius: 2px;
border-radius: 2px;
-webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
-moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
-webkit-background-clip: padding-box;
-moz-background-clip: padding;
background-clip: padding-box;
*border-right-width: 2px;
*border-bottom-width: 2px;
}
.ui-menu-item > a.ui-corner-all {
display: block;
padding: 3px 15px;
clear: both;
font-weight: normal;
line-height: 18px;
color: #555555;
white-space: nowrap;
text-decoration: none;
}
.ui-state-hover, .ui-state-active {
 color: #ffffff;
 text-decoration: none;
 background-color: #0088cc;
 border-radius: 0px;
 -webkit-border-radius: 0px;
 -moz-border-radius: 0px;
 background-image: none;
}
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Daftar Pemesanan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Beranda</a></li>
      <li class="active">pemesanan</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="row">
      <div class="col-xs-12">
        <div class="box">
          <div class="box-header">
            <h3 class="box-title"><button class="btn btn-primary fa fa-plus" onclick="add1()"></button></h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Id</th>
                  <th>Nama</th>
                  <th>Hotel</th>
                  <th>Kamar</th>
                  <th>Tgl Pesan</th>
                  <th>Pembayaran</th>
                  <th>Bank</th>
                  <th>Action</th>
                </tr>
              </thead>
              <tbody>
              <?php $no=1; foreach ($bookinglist as $key): ?>
                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $key->id_pemesanan; ?></td>
                  <td><?php echo $key->nama_pemesan; ?></td>
                  <td><?php echo $key->nama_supplier;?></td>
                  <td><?php echo $key->nama_produk;?></td>
                  <td><?php echo $key->tgl_pemesanan;?></td>
                  <td><?php echo number_format($key->bayar);?></td>
                  <td><?php $a = $key->metode_id; if ($a != 0) {
                    foreach ($metode as $keym) {
                      if ($a == $keym->id_metode) {
                        echo $keym->bank;
                      }
                    }
                  } else {
                    echo "Pay at Karunia";
                  } ?></td>
                  <td>
                  <!--<a href="#" class="fa fa-check" onclick="confirm1(<?php echo $key->id_pemesanan;?>)"></a>
                  <a href="#" class="fa fa-eye" onclick="edit1(<?php echo $key->id_pemesanan;?>)"></a>
                  <a href="#" class="fa fa-pencil" onclick="edit1(<?php echo $key->id_pemesanan;?>)"></a>
							    <a href="#" class="fa fa-close" onclick="delete1(<?php echo $key->id_pemesanan;?>)"> </a>-->

                  <div class="btn-group" role="group">
                    <a href="#" class="btn btn-default btn-flat dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Aksi
                      <span class="fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                      <li><a href="#" onclick="confirm1(<?php echo $key->id_pemesanan;?>)">Accept</a></li>
                      <li><a href="#" onclick="view1(<?php echo $key->id_pemesanan;?>)">View</a></li>
                      <li><a href="#" onclick="edit1(<?php echo $key->id_pemesanan;?>)">Edit</a></li>
    							    <li><a href="#" onclick="delete1(<?php echo $key->id_pemesanan;?>)">Reject</a></li>
                    </ul>
                  </div>

                  </td>
                </tr>
              <?php $no++; endforeach; ?>
              </tbody>
              <tfoot>
              <tr>
                <th>No</th>
                <th>Id</th>
                <th>Nama</th>
                <th>Hotel</th>
                <th>Kamar</th>
                <th>Tgl Pesan</th>
                <th>Pembayaran</th>
                <th>Bank</th>
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


<!-- Bootstrap modal -->
<div class="modal fade" id="modal_view" role="dialog">
<div class="modal-dialog">
<div class="modal-content">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <h3 class="modal-title">Form</h3>
  </div>
  <div class="modal-body form">
    <div class="form-horizontal">
      <div class="form-body" id="modalview">

      </div>
    </div>
    </div>
    <div class="modal-footer">
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


    function add1()
    {
      save_method1 = 'add';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal({backdrop: 'static', keyboard: false},'show'); // show bootstrap modal
      $("#modalbody").load("modalbooking/",function(data){
		      $("#modalbody").html(data);
          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
          });

          $("#to").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#from").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#to").datepicker( "option", "minDate", minValue );
        })

          var projects = <?php echo $res;?>;

          $( "#tempattujuan" ).autocomplete({
            minLength: 1,
            source: projects,
            focus: function( event, ui ) {
              $( "#tempattujuan" ).val( ui.item.label );
              return false;
            },
            select: function( event, ui ) {
              $( "#tempattujuan" ).val( ui.item.value );
              $( "#project-id" ).val( ui.item.label );
              $( "#project-description" ).html( ui.item.desc );
              $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );


            }
          })
          .autocomplete( "instance" )._renderItem = function( ul, item ) {
            return $( "<li>" )
              .append( "<div>" + item.label + "&nbsp;&nbsp;<sup><font class=\"flexright\"><small>&nbsp;" + item.desc + "&nbsp;</small></font></sup><br><small>" + item.addr + "</small></div>" )
              .appendTo( ul );
          };
          /*$("#tempattujuan").change(function(){
            $.ajax({
              url : "<?php echo site_url('changehotel')?>",
              type: "POST",
              dataType: "JSON",
              data: $('#form').serialize(),
              success: function(data)
              {
                    alert(data);
              },
              error: function (jqXHR, textStatus, errorThrown)
              {
              }
          });
        });*/
	    });
    }

    function edit1(id)
    {
      save_method1 = 'update';
      $('#form')[0].reset(); // reset form on modals
      $('#modal_form').modal('show'); // show bootstrap modal
      $("#modalbody").load("editbooking/"+id,function(data){
		      $("#modalbody").html(data);
          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
          });

          var projects = <?php echo $res;?>;

          $( "#tempattujuan" ).autocomplete({
            minLength: 1,
            source: projects,
            focus: function( event, ui ) {
              $( "#tempattujuan" ).val( ui.item.label );
              return false;
            },
            select: function( event, ui ) {
              $( "#tempattujuan" ).val( ui.item.value );
              $( "#project-id" ).val( ui.item.label );
              $( "#project-description" ).html( ui.item.desc );
              $( "#project-icon" ).attr( "src", "images/" + ui.item.icon );

            }
          })
          .autocomplete( "instance" )._renderItem = function( ul, item ) {
            return $( "<li>" )
              .append( "<div>" + item.label + "&nbsp;&nbsp;<sup><font class=\"flexright\"><small>&nbsp;" + item.desc + "&nbsp;</small></font></sup><br><small>" + item.addr + "</small></div>" )
              .appendTo( ul );
          };

          $.ajax({
            url : "<?php echo site_url('changehotel')?>",
            type: "POST",
            data: $('#form').serialize(),
            success: function(data)
            {
              $("#room").html(data);
              $.ajax({
                url : "<?php echo site_url('hitmanual')?>",
                type: "POST",
                data: $('#form').serialize(),
                success: function(data)
                {
                  //alert(data);
                  document.getElementById("hasil").value = data;
                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                  alert(textStatus);
                }
            });
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
              alert(textStatus);
            }
        });


	    });

    }

    function save1()
    {
      var url;
      if(save_method1 == 'add')
      {
        if ($('#nama').val() == '') {
          alert('lengkapi data');
        } else if ($('#no_telp').val() == '') {
          alert('lengkapi data');
        } else if ($('#tempattujuan').val() == '') {
          alert('lengkapi data');
        } else if ($('#from').val() == '') {
          alert('lengkapi data');
        } else if ($('#to').val() == '') {
          alert('lengkapi data');
        } else {
          // ajax adding data to database
          url = "<?php echo base_url('addbooking')?>";
             $.ajax({
               url : url,
               type: "POST",
               data: $('#form').serialize(),

               success: function(data)
               {
                 if(confirm('Are you sure print this data?'))
                 {
                   window.location = '<?php echo base_url();?>cetakpdf';
                   $('#modal_form').modal('hide');
                  //location.reload()// for reload a page
                 }
               },
               error: function (jqXHR, textStatus, errorThrown)
               {
                   alert(jqXHR);
               }
           });
        }

      }
      else
      {
        if ($('#nama').val() == '') {
          alert('lengkapi data');
        } else if ($('#no_telp').val() == '') {
          alert('lengkapi data');
        } else if ($('#tempattujuan').val() == '') {
          alert('lengkapi data');
        } else if ($('#from').val() == '') {
          alert('lengkapi data');
        } else if ($('#to').val() == '') {
          alert('lengkapi data');
        } else {
          url = "<?php echo site_url('updatebooking')?>";

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
                   alert(jqXHR);
               }
           });
        }
        }

    }

    function delete1(id)
    {
      if(confirm('Are you sure reject this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('rejectbooking')?>/"+id,
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

    function confirm1(id)
    {
      if(confirm('Are you sure confirm this data?'))
      {
        // ajax delete data from database
          $.ajax({
            url : "<?php echo site_url('confirmbooking')?>/"+id,
            type: "POST",
            dataType: "JSON",
            success: function(data)
            {

               window.location.reload(true);
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                window.location.reload(true);
                //location.reload();
                //alert(textStatus);
            }
        });

      }
    }

    function view1(id) {
      $('#form')[0].reset(); // reset form on modals
      $('#modal_view').modal('show'); // show bootstrap modal
      $("#modalview").load("viewbooking/"+id,function(data){
		      $("#modalview").html(data);
      });
    }
</script>
<script>
function changehotel(val) {
  $.ajax({
    url : "<?php echo site_url('changehotel')?>",
    type: "POST",
    data: $('#form').serialize(),
    success: function(data)
    {
      $("#room").html(data);
      $.ajax({
        url : "<?php echo site_url('hitmanual')?>",
        type: "POST",
        data: $('#form').serialize(),
        success: function(data)
        {
          //alert(data);
          document.getElementById("hasil").value = data;
        },
        error: function (jqXHR, textStatus, errorThrown)
        {
          alert(textStatus);
        }
    });
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      alert(textStatus);
    }
});
}
</script>
<script>
function changeroom(val) {
  $.ajax({
    url : "<?php echo site_url('hitmanual')?>",
    type: "POST",
    data: $('#form').serialize(),
    success: function(data)
    {
      //alert(data);
      document.getElementById("hasil").value = data;
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
      alert(textStatus);
    }
});
}
</script>
