<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Calendar
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Calendar</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <!-- Small boxes (Stat box) -->
    <div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title"></h3>

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

          <div class="col-md-12 column">
          <div id="calendar"></div>
        </div>

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
  <div class="modal fade">
              <div class="modal-dialog">
                  <div class="modal-content">
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                          <h4 class="modal-title"></h4>
                      </div>
                      <div class="modal-body">
                          <div class="error"></div>
                          <form class="form-horizontal" id="form">
                            <input type="hidden" id="start">
                            <input type="hidden" id="end">
                          <div id="modalbody"></div>
                          </form>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                      </div>
                  </div>
              </div>
          </div>
<!-- End Bootstrap modal -->
</div>
<!-- /.content-wrapper -->
<script type="text/javascript">
$(function(){

    var currentDate; // Holds the day clicked when adding a new event
    var currentEvent; // Holds the event object when editing an event

    $('#color').colorpicker(); // Colopicker


    var base_url='http://localhost/web4/'; // Here i define the base_url

    // Fullcalendar
    $('#calendar').fullCalendar({
        header: {
            left: 'prev, next, today',
            center: 'title',
             right: 'month, basicWeek, basicDay'
        },
        // Get all events stored in database
        eventLimit: true, // allow "more" link when too many events
        events: "<?php echo base_url('event')?>",
        selectable: true,
        selectHelper: true,
        eventOrder: "-color",

        // Event Mouseover
        eventMouseover: function(calEvent, jsEvent, view){

            var tooltip = '<div class="event-tooltip">' + calEvent.description + '</div>';
            $("body").append(tooltip);

            $(this).mouseover(function(e) {
                $(this).css('z-index', 10000);
                $('.event-tooltip').fadeIn('500');
                $('.event-tooltip').fadeTo('10', 1.9);
            }).mousemove(function(e) {
                $('.event-tooltip').css('top', e.pageY + 10);
                $('.event-tooltip').css('left', e.pageX + 20);
            });
        },
        eventMouseout: function(calEvent, jsEvent) {
            $(this).css('z-index', 8);
            $('.event-tooltip').remove();
        },
        // Handle Existing Event Click
        eventClick: function(calEvent, jsEvent, view) {
            // Set currentEvent variable according to the event clicked in the calendar
            currentEvent = calEvent;

            $('#start').val(moment(calEvent.start).format('YYYY-MM-DD'));
            $('#end').val(moment(end).format('YYYY-MM-DD'));
            // Open modal to edit or delete event
            modal1({
                // Available buttons when editing
                buttons: {
                    delete: {
                        id: 'delete-event',
                        css: 'btn-danger',
                        label: 'Delete'
                    },
                    update: {
                        id: 'update-event',
                        css: 'btn-success',
                        label: 'Update'
                    }
                },
                title: 'Edit Allotment "' + calEvent.title + '"',
                event: calEvent
            });
        }

    });

    function modal1(data) {
        // Set modal title
        $('.modal-title').html(data.title);
        // Clear buttons except Cancel
        $('.modal-footer button:not(".btn-default")').remove();
        // Set input values

        // Create Butttons
        $.each(data.buttons, function(index, button){
            $('.modal-footer').prepend('<button type="button" id="' + button.id  + '" class="btn ' + button.css + '">' + button.label + '</button>')
        })
        //Show Modal
        $('#form')[0].reset(); // reset form on modals
        $('.modal').modal('show'); // show bootstrap modal
        $("#modalbody").load("<?php echo base_url('editc');?>/"+currentEvent._id,function(data){
  		      $("#modalbody").html(data);
            $('#color').colorpicker(); // Colopicker

  	    });
    }

    // Handle click on Update Button
    $('.modal').on('click', '#update-event',  function(e){
            $.post("<?php echo base_url('updatec');?>", {
                id: currentEvent._id,
                cek: $('#cek').val(),
                jumlah: $('#jumlah').val(),
                produk_id: $('#produk_id').val(),
                harga: $('#harga').val(),
                color: $('#color').val(),
                start: $('#start').val(),
                st: $('#st').val()
            }, function(result){
                $('.modal').modal('hide');
                $('#calendar').fullCalendar("refetchEvents");
                hide_notify();

            });

    });

    // Handle Click on Delete Button
    $('.modal').on('click', '#delete-event',  function(e){
      if(confirm('Are you sure delete this data?'))
      {
        $.post("<?php echo base_url('deletec/');?>"+currentEvent._id, {
            start: $('#start').val()
        }, function(result){
            $('.modal').modal('hide');
            $('#calendar').fullCalendar("refetchEvents");
            hide_notify();

        });

      }
    });

    function hide_notify()
    {
        setTimeout(function() {
                    $('.alert').removeClass('alert-success').text('');
                }, 2000);
    }

});
</script>
