<div class="bluebg uk-text-center white ">
	<div class="uk-container">
		<br>
		Hak Cipta © 2005 – 2017 PesanHotel Company Pte. Ltd. Semua Hak Dilindungi Undang-undang.<br>
		 PesanHotel adalah bagian dari Karunia Travel Group, penyedia layanan online terdepan untuk perjalanan dan yang terkait lainnya di dunia. <br>
		<br>
		<br>
	</div>
</div>
<!-- This is the modal with the outside close button -->
<div id="modal-masuk" class="uk-flex-top" uk-modal>
	<div class="uk-modal-dialog uk-modal-body uk-padding-remove rond2">
		<button class="uk-modal-close-outside" type="button" uk-close></button>
		<div class="uk-modal-title krembg rond2-top uk-padding-small justbold modalbg">
			Ayo Masuk!
		</div>
		<div class="uk-padding">
			<a href="#" class="uk-hidden@s uk-button uk-button-fb ellipsistext uk-width-1-1 rond"><img src="assets/front/images/icons/fbblue.svg" class="uk-float-left uk-icon uk-icon-image uk-margin-small-top ">Gunakan Facebook</a>
			<a href="#" class="uk-visible@s uk-button uk-button-large uk-button-fb ellipsistext uk-width-1-1 rond"><img src="assets/front/images/icons/fbblue.svg" class="uk-float-left uk-icon uk-icon-large uk-margin-small-top "><span class="uk-heading4 ">Lanjutkan dengan Facebook</span></a>
			<div class="linehr uk-margin-small-top uk-width-1-1 uk-text-center">
				<span class="whitebg">&nbsp;&nbsp;&nbsp;atau&nbsp;&nbsp;&nbsp;</span>
			</div>
			<br>
			<form action="<?php echo base_url();?>login" method="post">
			<label class="uk-form-label" for="form-stacked-text">User</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
				<input class="uk-input rond" name="username" type="text">
			</div>
			<br>
			<label class="uk-form-label" for="form-stacked-text">Password</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
				<input class="uk-input rond" name="password" type="password">
			</div>
			<a uk-toggle="target: #modal-lupapassword" class="blue uk-float-right uk-margin-small-top uk-margin-small-bottom">Lupa Password?</a>
			<input type="submit" class="bluebg uk-button rond uk-width-1-1 white" value="Login">
			</form>
			<p>
				Dengan meng-klik tombol masuk Anda menyetujui <a href="faqsyaratketentuan.html" class="blue">Syarat & Ketentuan </a> dan <a href="faqkebijakanprivasi.html" class="blue">Kebijakan Privasi</a> Pesan Hotel.
			</p>
		</div>
		<div class="uk-padding tobordergrey">
			<div class="uk-grid-small " uk-grid>
				<div class="uk-width-1-1 uk-width-1-2@s uk-text-left@s uk-text-center ">
					Belum punya akun?
				</div>
				<div class="uk-width-1-1 uk-width-1-2@s uk-text-right@s uk-text-center">
					<a class="uk-button borderblue blue rond" uk-toggle="target: #modal-daftar">Buat Akun</a>
				</div>
			</div>
		</div>
	</div>
</div>
<div id="modal-lupapassword" uk-modal>
	<div class="uk-modal-dialog uk-modal-body rond2">
		<button class="uk-modal-close-outside" type="button" uk-close></button>
		<h2 class="uk-modal-title justbold">Lupa password Anda?</h2>
		 Masukkan alamat email Anda dan kami akan mengirimkan tautan untuk mengatur ulang kata sandi Anda<br>
		<br>
		<label class="uk-form-label" for="form-stacked-text">Email</label>
		<div class="uk-inline uk-width-1-1">
			<input class="uk-input rond" type="text">
		</div>
		<br>
		<br>
		<a class="bluebg uk-button rond uk-width-1-1 white" href="beranda.html">KIRIM</a>
	</div>
</div>
<div id="modal-notifikasidaftar" uk-modal>
	<div class="uk-modal-dialog uk-modal-body rond2">
		<button class="uk-modal-close-outside" type="button" uk-close></button>
		<h2 class="uk-modal-title justbold">Verification email</h2>
		Verification email has been sent, Please check your email<br>
		<br>
	</div>
</div>
<div id="modal-daftar" class="uk-flex-top" uk-modal>
	<div class="uk-modal-dialog uk-modal-body uk-padding-remove rond2">
		<button class="uk-modal-close-outside" type="button" uk-close></button>
		<div class="uk-modal-title krembg rond2-top uk-padding-small justbold modalbg">
			Buat Akun
		</div>
		<div class="uk-padding">
			<a href="#" class="uk-hidden@s uk-button uk-button-fb ellipsistext uk-width-1-1 rond"><img src="assets/front/images/icons/fbblue.svg" class="uk-float-left uk-icon uk-icon-image uk-margin-small-top ">Gunakan Facebook</a>
			<a href="#" class="uk-visible@s uk-button uk-button-large uk-button-fb ellipsistext uk-width-1-1 rond"><img src="assets/front/images/icons/fbblue.svg" class="uk-float-left uk-icon uk-icon-large uk-margin-small-top "><span class="uk-heading4 ">Lanjutkan dengan Facebook</span></a>
			<div class="linehr uk-margin-small-top uk-width-1-1 uk-text-center">
				<span class="whitebg">&nbsp;&nbsp;&nbsp;atau&nbsp;&nbsp;&nbsp;</span>
			</div>
			<br>
			<form id="form">
			<label class="uk-form-label" for="form-stacked-text">Username *</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
				<input class="uk-input rond" type="text" name="username" required>
			</div>
			<br>
			<label class="uk-form-label" for="form-stacked-text">Password *</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
				<input class="uk-input rond" type="password" name="password" required>
			</div>
			<br>
			<label class="uk-form-label" for="form-stacked-text">Identity Number *</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
				<input class="uk-input rond" type="text" name="no_identitas" required>
			</div>
			<br>
			<label class="uk-form-label" for="form-stacked-text">Full Name</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
				<input class="uk-input rond" type="text" name="nama_lengkap" required>
			</div>
			<br>
			<label class="uk-form-label" for="form-stacked-text">Date of birth</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: calendar"></span>
				<input class="uk-input rond" id="date" type="text" name="tgl_lahir" required>
			</div>
			<br>
			<label class="uk-form-label" for="form-stacked-text">Address</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: home"></span>
				<input class="uk-input rond" type="text" name="alamat" required>
			</div>
			<br>
			<label class="uk-form-label" for="form-stacked-text">Phone Number</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: phone"></span>
				<input class="uk-input rond" type="text" name="no_telp" required>
			</div>
			<br>
			<label class="uk-form-label" for="form-stacked-text">Email</label>
			<div class="uk-inline uk-width-1-1">
				<span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: mail"></span>
				<input class="uk-input rond" type="text" name="email" required>
			</div>
			<br>
			<br>
			<label><input class="uk-checkbox" type="checkbox" checked> Berlangganan Info Penawaran & Promosi Spesial</label><br>
			<br>
			<button id="btnSave" onclick="save1()" class="blue borderblue uk-button rond uk-width-1-1 " uk-toggle="target: #modal-notifikasidaftar">Register</button>
			<p>
				Dengan meng-klik tombol masuk Anda menyetujui <a href="faqsyaratketentuan.html" class="blue">Syarat & Ketentuan </a> dan <a href="faqkebijakanprivasi.html" class="blue">Kebijakan Privasi</a> Pesan Hotel.
			</p>
		</form>
		</div>
		<div class="uk-padding tobordergrey">
			<div class="uk-grid-small " uk-grid>
				<div class="uk-width-1-1 uk-width-1-2@s uk-text-left@s uk-text-center ">
					Sudah punya akun?
				</div>
				<div class="uk-width-1-1 uk-width-1-2@s uk-text-right@s uk-text-center">
					<a class="uk-button borderblue bluebg white rond" uk-toggle="target: #modal-masuk">Ayo Masuk!</a>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
<!-- jQuery library -->
<script src="assets/front/js/jquery-3.1.1.min.js"></script>
<script src="assets/front/js/jquery.min.skill.js"></script>
<script src="assets/front/js/skillbars.min.js"></script>
<script>
    $('#skillbar-area').skillbars();
    $('#skillbar-area2').skillbars({
        style: 2
    });
    $('#skillbar-area3').skillbars({
        style: 3
    });
    $('#skillbar-area4, #skillbar-area5 ').skillbars({
        style: 3,
        showLevel: true
    });
</script>
<!-- bxSlider Javascript file -->
<script src="assets/front/js/jquery.bxslider.js"></script>
<script>
	$(document).ready(function(){
		$('.KamarMurah').bxSlider({
			mode: 'horizontal',
			touchEnabled : true,
			controls : true,
			pager : false,
			moveSlides: 1,
			autoHover : true,
			auto : true,
			slideMargin: 40,
			infiniteLoop: true,
			slideWidth: 262,
			minSlides: 1,
			maxSlides: 5,
			speed: 800,
		});
	});
</script>
<script>
	$(document).ready(function(){
		$('.HotelMurah').bxSlider({
			mode: 'horizontal',
			touchEnabled : true,
			controls : true,
			pager : false,
			moveSlides: 1,
			autoHover : true,
			auto : true,
			slideMargin: 40,
			infiniteLoop: true,
			slideWidth: 200,
			minSlides: 1,
			maxSlides: 6,
			speed: 800,
		});
	});
</script>
<script>
	$(document).ready(function(){
		$('.sliderpromo').bxSlider({
			mode: 'fade',
			touchEnabled : true,
			controls : false,
			pager : true,
			moveSlides: 1,
			auto : true,
			slideMargin: 0,
			infiniteLoop: true,
			minSlides: 1,
			maxSlides: 1,
			speed: 800,
		});
	});
</script>
<script>
	$(document).ready(function(){
		$('.hoteldanbank').bxSlider({
			mode: 'horizontal',
			touchEnabled : true,
			controls : false,
			pager : false,
			moveSlides: 1,
			auto : true,
			slideMargin: 12,
			infiniteLoop: true,
			slideWidth: 85,
			minSlides: 2,
			maxSlides: 12,
			speed: 800,
		});
	});
</script>
<script>
	$(document).ready(function(){
		$('.bxslider').bxSlider({
			mode: 'fade',
			touchEnabled : true,
			controls : false,
			pager : false,
			moveSlides: 1,
			auto : true,
			slideMargin: 0,
			infiniteLoop: true,
			minSlides: 1,
			maxSlides: 1,
			speed: 800,
		});
	});
</script>
<script>$('.bxslider').bxSlider({
  pagerCustom: '.thumbpager'
});
</script>
<script>
	$(document).ready(function(){
		$('.cuaca').bxSlider({
			mode: 'horizontal',
			touchEnabled : true,
			controls : true,
			pager : false,
			moveSlides: 1,
			auto : true,
			slideMargin: 20,
			infiniteLoop: true,
			slideWidth: 180,
			minSlides: 1,
			maxSlides: 6,
			speed: 800,
		});
	});
</script>
<script>
	$(document).ready(function(){
		$('.thumbpager').bxSlider({
			mode: 'horizontal',
			touchEnabled : true,
			controls : false,
			pager : false,
			moveSlides: 1,
			auto : false,
			slideMargin: 10,
			infiniteLoop: true,
			slideWidth: 120,
			minSlides: 3,
			maxSlides: 9,
			speed: 800,
		});
	});
</script>
<script src="assets/front/js/jquery-ui.js"></script>
<script>
$("#date").datepicker({ dateFormat: 'yy-mm-dd' });
</script>
<script>
   $(function(){
        $("#CheckOut, #CheckOuts").datepicker({ dateFormat: 'yy-mm-dd' });
        $("#CheckIn, #CheckIns").datepicker({ dateFormat: 'yy-mm-dd' }).bind("change",function(){
            var minValue = $(this).val();
            minValue = $.datepicker.parseDate("yy-mm-dd", minValue);
            minValue.setDate(minValue.getDate()+1);
            $("#CheckOut, #CheckOuts").datepicker( "option", "minDate", minValue );
        })
    });
  </script>
<script type="text/javascript">
            function change1(){
                document.getElementById("CheckIn").value=$('#CheckIns').val();
				document.getElementById("CheckOut").value=$('#CheckOuts').val();
            }
        </script>
<script type="text/javascript">
            function change2(){
                document.getElementById("CheckIns").value=$('#CheckIn').val();
				document.getElementById("CheckOuts").value=$('#CheckOut').val();
            }
        </script>
<script type="text/javascript">
            function show(str){
                document.getElementById('sh2').style.display = 'none';
                document.getElementById('sh1').style.display = 'block';
            }
            function show2(sign){
                document.getElementById('sh2').style.display = 'block';
                document.getElementById('sh1').style.display = 'none';
            }
        </script>
				<script>
				  var save_method1; //for save method string

				    function save1()
				    {
				       // ajax adding data to database
				          $.ajax({
				            url : "<?php echo base_url('peradd')?>",
				            type: "POST",
				            data: $('#form').serialize(),

				            success: function(data)
				            {
											UIkit.modal('#modal-notifikasidaftar').show();
				            },
				            error: function (jqXHR, textStatus, errorThrown)
				            {
				                alert('Error adding / update data');
								elert(errorThrown);
				            }
				        });
				    }

	</script>
</html>
