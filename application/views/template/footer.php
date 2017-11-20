  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.0
    </div>
    <strong>Copyright &copy; 2017.</strong> All rights
    reserved.
  </footer>
</div>
<!-- ./wrapper -->


<!-- Bootstrap modal -->
<div class="modal fade" id="prof" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title"></h3>
         </div>
         <div>
           <form action="#" id="formprof" class="form-horizontal">
         <div class="modal-body" id="modalisi">

         </div>
         <div class="modal-footer">
           <div id="loading1">
             <input type="submit" value="Simpan" class="btn btn-primary" />
             <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
           </div>
         </div>
         </form>
       </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- End Bootstrap modal -->




<!-- Bootstrap modal -->
<div class="modal fade" id="pass" role="dialog">
   <div class="modal-dialog">
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h3 class="modal-title"></h3>
         </div>
         <div>
           <form action="#" id="formpass" class="form-horizontal">
         <div class="modal-body">
                 <div class="form-group">
                   <label class="control-label col-md-3">Sandi Lama</label>
                   <div class="col-md-9">
                     <input name="lama" id="lama" class="form-control" type="password" required>
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="control-label col-md-3">Sandi Baru</label>
                   <div class="col-md-9">
                     <input name="baru" id="baru" class="form-control" type="password" required>
                   </div>
                 </div>
                 <div class="form-group">
                   <label class="control-label col-md-3">Verify Sandi Baru</label>
                   <div class="col-md-9">
                     <input name="baru1" id="baru1" class="form-control" type="password" required>
                   </div>
                 </div>
         </div>
         <div class="modal-footer">
           <div id="loading1">
             <input type="submit" value="Simpan" class="btn btn-primary" />
             <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
           </div>
         </div>
         </form>
       </div>
      </div>
      <!-- /.modal-content -->
   </div>
   <!-- /.modal-dialog -->
</div>
<!-- End Bootstrap modal -->

<script>
   function pass(){
     $('#formpass')[0].reset();
     $('#pass').modal('show');
     $("#formpass").on('submit',(function(e) {
       e.preventDefault();
       $.ajax({
         url: "<?php echo base_url()?>cekpass",
         data:$('#formpass').serialize(),
         type: "POST",
         success:function(data){
         if (data > 0) {
           if ($('#baru').val() == $('#baru1').val()) {
             $.ajax({
               url : "<?php echo base_url('updatepass')?>",
               type: "POST",
               data: $('#formpass').serialize(),
               beforeSend: function(){
                    $('#loading').html("<img src='<?php echo base_url();?>assets/front/images/bx_loader.gif' /> Processing!");
               },
               success: function(data)
               {
                   $('#pass').modal('hide');
                   location.reload()
               },
               error: function (jqXHR, textStatus, errorThrown)
               {
               }
             });
           } else {
             alert('Sandi Baru Tidak Sama');
           }

           return false;
         } else {
           alert('Sandi Lama Salah')
         }
         },
         error:function (){}
        });
     }));
   }
</script>

<script>
function modalprof() {
  $('#formprof')[0].reset(); // reset form on modals
  $('#prof').modal('show'); // show bootstrap modal
  $("#modalisi").load("modalprof/",function(data){
      $("#modalisi").html(data);

  });
  $("#formprof").on('submit',(function(e) {
    e.preventDefault();
    $.ajax({
      url: "<?php echo base_url()?>cekpass",
      data:$('#formprof').serialize(),
      type: "POST",
      success:function(data){
      if (data > 0) {
          $.ajax({
            url : "<?php echo base_url('updateprof')?>",
            type: "POST",
            data: $('#formprof').serialize(),
            beforeSend: function(){
                 $('#loading').html("<img src='<?php echo base_url();?>assets/front/images/bx_loader.gif' /> Processing!");
            },
            success: function(data)
            {
                $('#prof').modal('hide');
                location.reload()
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
            }
          });

        return false;
      } else {
        alert('Sandi Salah')
      }
      },
      error:function (){}
     });
  }));
}
</script>

<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url('assets/bower_components/bootstrap/dist/js/bootstrap.min.js');?>"></script>
<!-- Morris.js charts -->
<script src="<?php echo base_url('assets/bower_components/raphael/raphael.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/morris.js/morris.min.js');?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js');?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js');?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/bower_components/jquery-knob/dist/jquery.knob.min.js');?>"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js');?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/bower_components/fastclick/lib/fastclick.js');?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/dist/js/adminlte.min.js');?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url('assets/dist/js/demo.js');?>"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/bower_components/datatables.net/js/jquery.dataTables.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js');?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js');?>"></script>

<!-- Select2 -->
<script src="<?php echo base_url('assets/bower_components/select2/dist/js/select2.full.min.js');?>"></script>
<!-- InputMask -->
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.date.extensions.js');?>"></script>
<script src="<?php echo base_url('assets/plugins/input-mask/jquery.inputmask.extensions.js');?>"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/bootstrap-daterangepicker/daterangepicker.js');?>"></script>
<!-- bootstrap datepicker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js');?>"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url('assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js');?>"></script>
<!-- bootstrap time picker -->
<script src="<?php echo base_url('assets/plugins/timepicker/bootstrap-timepicker.min.js');?>"></script>
<!-- iCheck 1.0.1 -->
<script src="<?php echo base_url('assets/plugins/iCheck/icheck.min.js');?>"></script>
<!-- fullCalendar -->
<script src="<?php echo base_url('assets/bower_components/moment/moment.js');?>"></script>
<script src="<?php echo base_url('assets/bower_components/fullcalendar/dist/fullcalendar.min.js');?>"></script>
<!-- Page Script -->
<script>
  $(function () {
    //Add text editor
    $("#compose-textarea").wysihtml5();
  });
</script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
  });
</script>
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()
    //Money Euro
    $('[data-mask]').inputmask()

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, format: 'MM/DD/YYYY h:mm A' })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Date picker
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

    //iCheck for checkbox and radio inputs
    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
      checkboxClass: 'icheckbox_minimal-blue',
      radioClass   : 'iradio_minimal-blue'
    })
    //Red color scheme for iCheck
    $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
      checkboxClass: 'icheckbox_minimal-red',
      radioClass   : 'iradio_minimal-red'
    })
    //Flat red color scheme for iCheck
    $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
      checkboxClass: 'icheckbox_flat-green',
      radioClass   : 'iradio_flat-green'
    })

  })
</script>

</body>
</html>
