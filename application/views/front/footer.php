<div id="SignUpModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="SignUpModal">
         <div class="modal-dialog">
            <div class="modal-content rond2">
               <div class="modal-header noborder krembg modalbg rond2-top">
                  <button type="button" class="close black" data-dismiss="modal" aria-hidden="true">×</button>
                  <h2 class="modal-title justbold" id="SignUpModal">Buat Akun</h2>
               </div>
               <div class="modal-body ">
                 <div class="span4">
                    <div id="alert" class="alert alert-danger fade">
                       <strong>Warning!</strong>
                       <p id="muncul">Hello World!</p>
                    </div>
                 </div>
                 <form id="form">
                  <div class="form-group">
                     <label for="">Email *</label>
                     <input onBlur="checkAvailability()" id="email" class="form-control input-lg mailimg" name="email" id="email" placeholder="Email" type="text" required>
                  </div>
                  <div class="form-group">
                     <label for="">Password *</label>
                     <input class="form-control input-lg useric" name="password" id="password" placeholder="Password" type="password" required>
                  </div>
                  <div class="checkbox marginsmallbottom">
                     <label>
                     <input checked="checked" type="checkbox"> Berlangganan Info Penawaran &amp; Promosi Spesial
                     </label>
                  </div>
                  </form>
                  <div id="loading" align="center">
                  <button type="button" id="btnSave" onclick="save()" class=" btn btn-lg font16 borderblue rond blue full-width ">DAFTAR</button>
                  <div class="font16 marginsmalltop ">Dengan meng-klik tombol masuk Anda menyetujui <a href="faqsyaratketentuan.html" class="blue">Syarat &amp; Ketentuan </a> dan <a href="faqkebijakanprivasi.html" class="blue">Kebijakan Privasi</a> Pesan Hotel.</div>
                </div>
               </div>
               <hr>
               <div style="padding: 0 30px 15px 30px; ">
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-6 font16 text-left@s marginsmallbottom text-center">Sudah punya akun?</div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-6 text-right@s text-center"><a href="#" data-dismiss="modal" onclick="showModal('LoginModal')" aria-hidden="true" class="bluebg rond btn white ">Ayo Masuk!</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="LoginModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="LoginModal">
         <div class="modal-dialog">
            <div class="modal-content rond2">
               <div class="modal-header noborder krembg modalbg rond2-top">
                  <button type="button" class="close black" data-dismiss="modal" aria-hidden="true">×</button>
                  <h2 class="modal-title justbold" id="LoginModal">Ayo Masuk!</h2>
               </div>
               <div class="modal-body ">
                 <div class="span4">
                    <div id="alert1" class="alert alert-danger fade">
                       <strong>Warning!</strong>
                       <p id="muncul1">Hello World!</p>
                    </div>
                 </div>
                 <form id="form1">
                  <div class="form-group">
                     <label for="">Email address</label>
                     <input class="form-control input-lg mailimg" name="email" id="email1" placeholder="Email" type="email">
                  </div>
                  <div class="form-group">
                     <label for="">Password</label>
                     <input class="form-control input-lg lockimg" name="password" placeholder="Password" type="password">
                  </div>
                  <div class="full-width text-right marginsmallbottom"><a class="blue font16" href="">Lupa password?</a></div>
                  <button type="button" id="btnSave" onclick="login()" class=" btn btn-lg font16 bluebg rond white full-width ">Login</button>
                  <div class="font16 marginsmalltop ">Dengan meng-klik tombol masuk Anda menyetujui <a href="faqsyaratketentuan.html" class="blue">Syarat &amp; Ketentuan </a> dan <a href="faqkebijakanprivasi.html" class="blue">Kebijakan Privasi</a> Pesan Hotel.</div>
                </form>
               </div>
               <hr>
               <div style="padding: 0 30px 15px 30px; ">
                  <div class="row">
                     <div class="col-xs-12 col-sm-6 col-md-6 col-6 font16 text-left@s marginsmallbottom text-center">Belum punya akun?</div>
                     <div class="col-xs-12 col-sm-6 col-md-6 col-6 text-right@s text-center"><a href="#" data-dismiss="modal" onclick="showModal('SignUpModal')" aria-hidden="true" class="borderblue rond btn blue ">Buat Akun</a></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div id="veriv" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="Verification">
         <div class="modal-dialog">
            <div class="modal-content rond2">
               <div class="modal-header noborder krembg modalbg rond2-top">
                  <button type="button" class="close black" data-dismiss="modal" aria-hidden="true">×</button>
                  <h2 class="modal-title justbold" id="LoginModal">Verification</h2>
               </div>
               <div class="modal-body ">
                 <div align="center">
                 <h2>Verification email</h2>
                 Verification email has been sent, Please check your email<br>
                 <br>
               </div>
               </div>
               <hr>
            </div>
         </div>
      </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url();?>assets/front/js/bootstrap.js"></script>
<script src="<?php echo base_url('assets/bower_components/moment/min/moment.min.js');?>"></script>
<script src="<?php echo base_url();?>assets/front/js/bootstrap-material-datetimepicker.js" charset="UTF-8"></script>


<!-- JavaScript
   ================================================== -->
<script src="<?php echo base_url();?>assets/front/js/highlight.pack.js"></script>
<script src="<?php echo base_url();?>assets/front/js/jquery.bxslider-rahisified.js"></script>
<script src="<?php echo base_url();?>assets/front/js/src/transition.js"></script>
<script src="<?php echo base_url();?>assets/front/js/src/tooltip.js"></script>
<script src="<?php echo base_url();?>assets/front/js/src/affix.js"></script>
<script>
   $(function () {
     $('[data-toggle="tooltip"]').tooltip()
   })
</script>
<script src="<?php echo base_url();?>assets/front/js/bootstrap-slider.js"></script>
<script>
   $(function () {
     $('.js-affixed-element-top').affix({
       offset: {
         top: $('.js-page-header').outerHeight(true) - 10
       , bottom: $('.js-footer').outerHeight(true) + 10
       }
     })
     // todo(fat): sux you have to do this.
     .on('affix.bs.affix', function (e) {
       $(e.target).width(e.target.offsetWidth)
     })

     $('.js-affixed-element-bottom').affix({
       offset: {
         bottom: $('.js-footer').outerHeight(true) + 10
       }
     })

     $('.js-grow-btn').on('click', function() {
       $('.js-content').append('<p>Ipsum corrupti ipsam est temporibus.</p>')
     })
     $('.js-shrink-btn').on('click', function() {
       $('.js-content p').last().remove()
     })
   })
</script>
<script>
$(document).ready(function()
    {
var currentTime = new Date();
  $("#date-end, #date-endmo").bootstrapMaterialDatePicker({ dateFormat: 'yy-mm-dd', time: false}).bootstrapMaterialDatePicker("setDate", new Date());
  $('#date-start, #date-startmo').bootstrapMaterialDatePicker({ dateFormat: 'yy-mm-dd', time: false, minDate : currentTime }).bootstrapMaterialDatePicker("setDate", new Date()).on('change', function(e, date)
			{
				$('#date-end, #date-endmo').bootstrapMaterialDatePicker('setMinDate', date);
			});;

});
</script>
<script>
$(document).ready(function()
    {
      $("#tgl").bootstrapMaterialDatePicker({ dateFormat: 'yy-mm-dd', time: false});
    });
</script>
<script type="text/javascript">
  function change1() {
    document.getElementById("date-startmo").value = $('#date-start').val();
    document.getElementById("date-endmo").value = $('#date-end').val();
  }
</script>
<script type="text/javascript">
  function change2() {
    document.getElementById("date-start").value = $('#date-startmo').val();
    document.getElementById("date-end").value = $('#date-endmo').val();
  }
</script>
<script type="text/javascript">
  function input() {
    document.getElementById("autocomplete").value = $('#autocomplete1').val();
  }
</script>
<script>
  function kamar() {
    var a = $( "#kamar" ).val();
    $( "#kamar1" ).val(a);
  }
  function kamar1() {
    var b = $( "#kamar1" ).val();
    $( "#kamar" ).val(b);
  }
</script>
<script>
  function orang() {
    var a = $( "#orang" ).val();
    $( "#orang1" ).val(a);
  }
  function orang1() {
    var b = $( "#orang1" ).val();
    $( "#orang" ).val(b);
  }
</script>
<script>
  function tempattujuan() {
    var a = $( "#tempattujuan" ).val();
    $( "#tempattujuan1" ).val(a);
  }
</script>
<script>
   $("#alert").removeClass("in").hide();
</script>
<script>
   $("#alert1").removeClass("in").hide();
</script>
<script>
    function checkAvailability() {
      jQuery.ajax({
      url: "<?php echo base_url()?>cekreg",
      data:$('#form').serialize(),
      type: "POST",
      success:function(data){
      if (data > 0) {
        $("#alert").removeClass("in").show();
        $("#alert").delay(200).addClass("in").fadeOut(4000);
        document.getElementById("muncul").innerHTML = "Email";
        return false;
      }
      },
      error:function (){}
      });
    }
    function save()
    {
      if($('#email').val() == ''){
        $("#alert").removeClass("in").show();
        $("#alert").delay(200).addClass("in").fadeOut(4000);
        document.getElementById("muncul").innerHTML = "Form Must Be Filled";
        return false;
      } else {
       // ajax adding data to database
          $.ajax({
            url : "<?php echo base_url('peradd')?>",
            type: "POST",
            data: $('#form').serialize(),
            beforeSend: function(){
   				       $('#loading').html("<img src='<?php echo base_url();?>assets/front/images/bx_loader.gif' /> Processing!");
   			    },
            success: function(data)
            {
                $('#SignUpModal').modal('hide');
                $('#veriv').modal('show');
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Register Error');
            }
        });
      }
    }
</script>
<script>
    function login()
    {
      if($('#email1').val() == ''){
        $("#alert1").removeClass("in").show();
        $("#alert1").delay(200).addClass("in").fadeOut(4000);
        document.getElementById("muncul1").innerHTML = "Form Must Be Filled";
        return false;
      } else {
       // ajax adding data to database
          $.ajax({
            url : "<?php echo base_url('masuk')?>",
            type: "POST",
            data: $('#form1').serialize(),
            beforeSend: function(){
   				       $('#loading').html("<img src='<?php echo base_url();?>assets/front/images/bx_loader.gif' /> Processing!");
   			    },
            success: function(data)
            {
              if (data == 0) {
                alert('Username/password is wrong')
              } else {
                $('#LoginModal').modal('hide');
                location.reload();
              }
            },
            error: function (jqXHR, textStatus, errorThrown)
            {
                alert('Username/password is wrong');
            }
        });
      }
    }
</script>
<script>
function showModal(id) {
  $("#" + id).modal('show');
}
</script>
<script>var slider = new Slider('#ex2', {});</script>
      <script>var slider = new Slider('#ex2sb', {});</script>
      <script>var slider = new Slider('#ex2mo', {});</script>
      <script>var slider = new Slider("#ex6");
         slider.on("slide", function(sliderValue) {
         	document.getElementById("ex6SliderVal").textContent = sliderValue;
         });
      </script>
      <script>
         $(function () {
           $('.js-affixed-element-top').affix({
             offset: {
               top: $('.js-page-header').outerHeight(true) - 10
             , bottom: $('.js-footer').outerHeight(true) + 10
             }
           })
           // todo(fat): sux you have to do this.
           .on('affix.bs.affix', function (e) {
             $(e.target).width(e.target.offsetWidth)
           })

           $('.js-affixed-element-bottom').affix({
             offset: {
               bottom: $('.js-footer').outerHeight(true) + 10
             }
           })

           $('.js-grow-btn').on('click', function() {
             $('.js-content').append('<p>Ipsum corrupti ipsam est temporibus.</p>')
           })
           $('.js-shrink-btn').on('click', function() {
             $('.js-content p').last().remove()
           })
         })
      </script>
<script>
function searchFilter(page_num) {
	page_num = page_num?page_num:0;
	var keywords = $('#keywords').val();
	var sortBy = $('#sortBy').val();
	$.ajax({
		type: 'POST',
		url: '<?php echo base_url(); ?>search-paging/'+page_num,
		data:'page='+page_num+'&keywords='+keywords+'&sortBy='+sortBy,
		beforeSend: function () {
			$('.loading').show();
		},
		success: function (html) {
			$('#postList').html(html);
			$('.loading').fadeOut("slow");
		}
	});
}
</script>
</body>
</html>
