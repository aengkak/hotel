
<div style="height:20px; z-index:4; position:relative;" class="transbgbot"></div>
<div class="whitebg" >
   <div class="container" >
      <div class="beachbg rond2">
         <div class="overprimary rond2 padbig2">
            <div class="row flex flexleft">
               <div class=""><img src="<?php echo base_url();?>assets/front/images/icons/pagebookings.svg" class="iconmedium visible-xs"><img src="<?php echo base_url();?>assets/front/images/icons/pagehelp.svg" class="iconlarge3 marginsmallright  hidden-xs"></div>
               <div class=" white">
                  <span class="justbold heading2">BUTUH BANTUAN?</span><br>
                  <div class="font16">Pertanyan yang sering diajukan oleh pelanggan kami</div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="" style="z-index:3; position:relative;  " >
   <div class=" whitebg bottombordergrey boxshadowsmall affixed-element-top js-affixed-element-top">
      <div class="container " >
         <div class="">
            <div >
               <div class="row mt10 mb10">
                  <div class="col-xs-3 col-sm-8 col-md-8 col-lg-10">
                     <div class="flex flexleft">
                        <a  class="" href="<?php echo base_url();?>">
                          <img style="margin-top:5px;" src="<?php echo base_url();?>assets/front/images/logo.png" class="visible-lg ">
                          <img src="<?php echo base_url();?>assets/front/images/logomobile.png" class="visible-xs visible-sm visible-md ">
                        </a>
                        <ul style="margin-top:-7px;" class="nav navbar-nav hidden-sm hidden-xs marginsmallleft ellipsistext ">
                           <li>
                              <a style="padding-bottom:5px;" class="" href="<?php echo base_url();?>promo">
                                 <div class="boxshadowsmall greyborder1 rond1" style="padding:10px; margin-top:-10px;"><span class="font16 black">PROMO</span> &nbsp;<img src="<?php echo base_url();?>assets/front/images/dot.png" style="margin-top:-2px;"></div>
                              </a>
                           </li>
                           <li><a style="padding-bottom:5px;" href="<?php echo base_url();?>checkbooking"><span class="font16 black">CEK PEMESANAN</span></a></li>
                           <li><a style="padding-bottom:5px;" href="<?php echo base_url();?>faq"><span class="font16 black">BANTUAN</span></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-xs-9 col-sm-4  col-md-4 col-lg-2 text-right">
                    <?php $c = $this->session->userdata('level');
                     if ($c == "person") { ?>
                      <div class="pull-right mt10">
                         <a class="noneline norcol  font16" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" href="">
                           <img src="<?php echo base_url();?>assets/front/images/avataruser.png" class="iconmedium "> <img src="<?php echo base_url();?>assets/front/images/icons/triangle-down.svg" class="iconsmall"></a>
                         <div class="dropdown-menu font16" style="min-width:175px; margin-top:10px; ">
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>myorder"> Pesanan Saya</a></div>
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="#"> Newsletter</a></div>
                           <div class="bottombordergrey paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>profile"> Profil Saya</a></div>
                           <div class=" paddingsmall"><a class="btn black font16  noneline" href="<?php echo base_url();?>logout"> Keluar</a></div>
                         </div>
                      </div>
                   <?php } else { ?>
                     <div class="pull-right ">
                        <div class="btn-group btn-group-lg " style="" role="group" aria-label="...">
                           <button type="button" href="#" data-toggle="modal" data-target="#SignUpModal" class="btn font16 whitebg  blueborder blue"><img class="iconsmall" src="<?php echo base_url();?>assets/front/images/icons/signupblue.svg"></button>
                           <button type="button" href="#" data-toggle="modal" data-target="#LoginModal" class="btn font16 bluebg  blueborder white"><img class="iconsmall" src="<?php echo base_url();?>assets/front/images/icons/loginwhite.svg"></button>
                        </div>
                     </div>
                   <?php } ?>
                     <a href="#" style="padding-right:10px;" class="dropdown-toggle ribordergrey marginsmallright pull-right" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url();?>assets/front/images/icons/helpblue.png"  style="margin-top:7px;"  height="35" width="35"></a>
                     <div class="dropdown-menu pull-right" style="min-width:270px; margin-top:5px; ">
                        <div class=" paddingsmall bottombordergrey font16">
                           <div style="padding:6px 12px;" class="row ">
                              <div class="col-xs-4 col-md-4"> &nbsp;Telepon </div>
                              <div class="col-xs-8 col-md-8 ">
                                 <div>+62 31-5313253</div>
                              </div>
                           </div>
                        </div>
                        <div class=" paddingsmall  font16">
                           <div style="padding:6px 12px;" class="row ">
                              <div class="col-xs-4 col-md-4"> &nbsp;Email </div>
                              <div class="col-xs-8 col-md-8 ">
                                 <div>cs@karuniatravel.com</div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div class="container">
   <br><br>
   <div class=" ">
      <div class=" norcol font16 text-center">
		<!-- Nav tabs -->
            <ul class="nav pills-tabs">
  <li class="active"><a href="#tab1" role="tab" data-toggle="tab">Apa itu pesanhotel?</a></li>
  <li><a href="#tab2" role="tab" data-toggle="tab">Cara pesan</a></li>
  <li><a href="#tab3" role="tab" data-toggle="tab">Cara Bayar</a></li>
  <li><a href="#tab4" role="tab" data-toggle="tab">Kebijakan Privasi</a></li>
  <li><a href="#tab5" role="tab" data-toggle="tab">Syarat & Ketentuan</a></li>
</ul>
		</div>
      <br>
      <div class="rond2 padbig bordergrey font16">
	  <!-- Tab panes -->
      <div class="tab-content ">
         <div role="tabpanel" class="tab-pane fade in active " id="tab1">

		 <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 text-center">
               <img src="<?php echo base_url();?>assets/front/images/ceo.png" width="120" height="120" class="marginsmalltop"><br>
               <div class="black  marginsmalltop">Indra Gunawan S.</div>
               <span class="grey">CEO / Owner</span>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
               <div class="visible-xs"><br></div>
               <div style="line-height:27px;">PT Cipta Karunia Pratama (pesanhotel.com) pertama kali beroperasi pada akhir 2010 dan bertempat pada sebuah ruangan 2x4 meter yang terletak di ruang makan pemilik. Awal 2011 tepatnya Maret 2011, kami secara resmi beroperasi di kantor resmi kami yang hingga saat ini menjadi kantor pusat kami di Jl. Kalibutuh 134-Q, Surabaya. Dengan berbekal kemampuan teknologi, kami mempersembahkan sistem-sistem yang modern, akurat dan praktis hingga terciptanya website OTA (Online Travel Agent). Dibalik OTA, kami tetap beroperasi sebagai offline travel agent dan siap melayani konsumen 24jam nonstop setiap hari dan 365 hari tanpa libur sepanjang tahun. Kami percaya, bahwa perjalanan Anda akan semakin mudah apabila kami tetap setia hadir di saat-saat peak seasson, dan kami siap membantu Anda dimanapun Anda berada.<br><br></div>
               <div class="dottedbog marginsmalltop marginsmallbottom"></div>
               <div class="bordergrey greybg rond2 padbig">
                  <div class="black justbold heading3">VISI KAMI</div>
                  Menjadi Travel Partner terbaik dan terpercaya untuk Anda
               </div>
               &nbsp;
               <div class="bordergrey greybg rond2 padbig">
                  <div class="black justbold heading3">MISI KAMI</div>
                  <ul class="bslist ">
                     <li>Melayani Anda kapanpun Anda perlukan</li>
                     <li>
                        Menjadi terdepan dan terpercaya dalam segala kondisi
                     </li>
                  </ul>
               </div>
               &nbsp;<br>
            </div>
         </div>

		 </div>
		<div role="tabpanel" class="tab-pane fade" id="tab2">
			<div class="   font16">
               <h3>Bagaimana cara memesan voucher hotel di PesanHotel.com? </h3>
               Anda dapat melakukan pencarian berdasarkan kota asal, kota tujuan dan tanggal yang Anda kehendaki. Sistem akan menampilkan harga terkini, dan termurah dari setiap maskapai. Anda dapat memilih penerbangan yang sesuai dengan kehendak Anda dan melanjutkan dengan pengisian data<br>
               <h3>Data apa saja yang harus saya isikan? </h3>
               Untuk penerbangan domestik, Anda diminta untuk memasukkan nama sesuai dengan identitas yang berlaku (KTP, SIM, Paspor, dll). Anda juga akan diminta untuk mengisi nomor HP yang aktif serta email untuk keperluan pengiriman eticket ke email Anda. <br><br>
            </div>
		</div>
		<div role="tabpanel" class="tab-pane fade" id="tab3">
			<div class="   font16">
<h3>Bagaimana melakukan pembayaran? </h3>
Untuk saat ini kami menerima pembayaran melalui transfer ke bank yang telah bermitra dengan kami. Untuk pembayaran melalui Kartu Kredit, dan e-money akan segera kami lengkapi dalam waktu dekat. <br><br>


<h3>Apa itu batas waktu pembayaran?  </h3>
Batas waktu pembayaran adalah batas waktu untuk membayar pesanan Anda sebelum pesanan Anda di hapus dari sistem maskapai. Batas waktu pembayaran tergantung dari kebijakan masing-masing maskapai dan yang kami berikan adalah batas waktu pembayaran yang diberikan kepada airlines yaitu dari 1jam hingga 7 hari kedepan tergantung dari maskapai dan jadwal terbang Anda.

<br><br>
</div>
		</div>

		<div role="tabpanel" class="tab-pane fade" id="tab4">
			<div class="   font16">

<h3 >Kebijakan Privasi</h3>
<p> PT. CIPTA KARUNIA PRATAMA ("Perusahaan") selaku operator dan pemilik website karuniatravel.com ("Website"), mematuhi kebijakan privasi yang tertera disini. Silahkan membaca kebijakan privasi kami sebelum menggunakan situs ini atau mengirimkan informasi pribadi Anda pada situs ini. Dengan menggunakan situs ini, berarti Anda telah memahami dan setuju untuk menerima semua kebijakan dan kegiatan yang dijelaskan dalam kebijakan privasi kami tanpa terkecuali. Kebijakan ataupun kegiatan yang berlaku dapat berubah dengan pemberitahuan melalui situs ini sebelumnya. Dan perubahan hanya berlaku untuk kegiatan dan informasi yang akan datang, bukan yang telah terjadi. Kebijakan privasi ini hanya berlaku pada website karuniatravel.com, bila Anda masuk ke situs lain kami sarankan agar Anda membaca terlebih dahulu kebijakan privasi yang berbeda di tiap situs. </p>
         <h3>  Pengumpulan Informasi</h3>
<p>
karuniatravel.com mengumpulkan data pribadi berikut ini: nama Anda, alamat, alamat email, nomor telepon, nomor KTP, tanggal lahir, dan rincian kartu kredit. Informasi ini dibutuhkan untuk memproses, membuat, dan menyelesaikan pemesanan Anda. Website mungkin juga memproses data tentang perangkat komputer Anda, misalnya alamat IP, tipe browser, dan (bagi pengguna yang mengakses layanan kami melalui ponsel) Unique Device Identifier, sistem operasi, versi aplikasi, dan garis lintang/bujur lokasi Anda. Data ini biasanya bersifat anonim, tapi tetap saja dianggap data pribadi, baik secara tersendiri ataupun jika bersama-sama dikombinasikan. Untuk yang ini, data akan diproses sesuai dengan undang-undang perlindungan data Eropa.</p>

<h3>Berbagi data Pribadi</h3>
<p>
karuniatravel.com dapat membagikan data pribadi Anda dengan pihak ketiga yang kami pekerjakan untuk melakukan layanan atas nama kami, seperti layanan hosting web, analisis data, untuk memasarkan produk dan layanan kami, untuk menangani transaksi kartu kredit atau menyediakan layanan pelanggan untuk Anda. Semua pihak ketiga tersebut memiliki kewajiban untuk menjaga keamanan dan kerahasiaan data pribadi, dan untuk memroses data pribadi hanya sesuai dengan instruksi kami. Dalam beberapa kasus, karuniatravel.com mungkin meminta Anda untuk melakukan transaksi secara langsung dengan pihak ketiga untuk mendapatkan layanan, atau saat Anda menggunakan situs untuk memesan kamar hotel atau mendapatkan produk tour atau layanan lain, kami mungkin memberikan data pribadi Anda pada maskapai, Agen Travel atau hotel (sebagaimana berlaku). karuniatravel.com dapat menyingkapkan data pribadi untuk melindungi diri kami terhadap tuntutan, untuk menanggapi panggilan menjadi saksi, proses peradilan, permohonan yang sah dari petugas penegak hukum, atau sebagaimana yang diperlukan untuk mematuhi hukum yang berlaku, atau pada pengguna terkait dengan semua penjualan, penugasan, atau transfer lain dari semua atau sebagian bisnis atau perusahaan kami. Kami juga mungkin menyingkapkan data pribadi untuk menegakkan atau mengaplikasikan Syarat dan Ketentuan yang berlaku bagi produk dan layanan kami, atau untuk melindungi hak, properti atau keselamatan karuniatravel.com, pengguna, atau lainnya.</p>

<h3>Keamanan dan Perlindungan Data Pribadi</h3>
<p>
Sesuai dengan undang-undang perlindungan data di Indonesia, karuniatravel.com menerapkan prosedur pengamanan yang ketat untuk mencegah penyalahgunaan data pribadi dan akses yang tak berwenang.

Dalam rangka melindungi dan mengamankan data pribadi yang sudah Anda berikan, kami telah menerapkan dan menggunakan sistem serta prosedur bisnis yang sesuai. Selain itu, kami juga telah menerapkan dan menggunakan prosedur serta batasan-batasan teknis dan fisik untuk siapa saja yang dapat mengakses dan menggunakan data pribadi pelanggan kami. Hanya pegawai yang berwenang dan memiliki izin yang dapat mengakses data pribadi Anda dan ini semata-mata untuk menjalankan tugas mereka dalam menyediakan layanan kami.</p>

<h3>Pengendalian Data Pribadi</h3>
<p>
Anda selalu berhak untuk meninjau data pribadi Anda yang tersimpan di sistem kami. Anda bisa meminta untuk melihat data pribadi Anda dengan cara mengirimkan email ke alamat: customer@karuniatravel.com atau menghubungi kami di +62 31-5313253. Harap tulis "Request data pribadi" sebagai judul emailnya. Jika data pribadi Anda tidak benar, kami bisa menggantinya sesuai dengan permintaan Anda. Anda juga bisa meminta website untuk menghapus data pribadi Anda dari database kami dengan mengirimi kami email di alamat yang telah disebutkan di atas. Untuk melindungi privasi dan keamanan Anda, kami akan melakukan verifikasi terhadap identitas Anda sebelum memberi akses atau melakukan perubahan pada Data Pribadi Anda. Semua permohonan untuk mengakses data pribadi Anda akan dijawab dalam waktu kurang dari 30 hari. </p>

<h3>Keanggotaan
</h3><p>
Pengguna situs ini diharapkan membuat akun keanggotaan dengan mendaftar dan memberikan data tertentu. Dalam mendaftar dan memberikan data tertentu, Anda menjamin bahwa:
<ul class="circle"><li>
    Pengguna terdaftar berusia minimal 17 tahun.</li><li>
    Informasi tentang diri Anda adalah benar dan akurat, terkini dan lengkap seperti yang dipersyaratkan di dalam formulir pendaftaran di situs karuniatravel.com</li><li>
    Anda akan memperbaharui data registrasi ini agar selalu benar, tepat, dan lengkap.</li></ul>

Untuk selanjutnya karuniatravel.com tidak bertanggung jawab atas segala kerugian atau bahaya yang mungkin diderita, di mana kerugian atau kerusakan tersebut yang disebabkan oleh informasi yang tidak akurat atau tidak lengkap yang diberikan oleh Anda. Setelah mendaftar. Anda akan menerima kata sandi dan identitas pengguna (username). Anda bertanggung jawab untuk menjaga kerahasiaan kata sandi dan identitas pengguna (username). Anda bertanggung jawab penuh atas semua kegiatan yang berkaitan dengan sandi atau identitas pengguna (username). Anda hanya dapat menggunakan satu identitas pengguna(username) dan kata sandi(password) pada satu waktu dan tidak diperbolehkan menggunakan lebih dari satu username. Anda diminta untuk menggunakan password hanya untuk digunakan diri sendiri saja, dan tidak mengizinkan orang lain untuk menggunakan kata sandi Anda tersebut. Anda menyetujui untuk segera memberitahukan kepada karuniatravel.com atas penggunaan tidak sah atas sandi atau akun atau semua bentuk pelanggaran keamanan dan memastikan bahwa Anda keluar dari akun setiap kali selesai menggunakan situs ini. karuniatravel.com tidak akan bertanggung jawab untuk setiap kehilangan atau kerusakan yang timbul dari kegagalan anda untuk mematuhi peraturan ini. </p>


<h3>Mengenai "Cookie"</h3>
<p>
Untuk pelayanan karuniatravel.com yang lebih cepat dan lebih baik, kami menggunakan teknologi ‘Cookie’ pada situs ini. Cookie adalah kode yang berukuran minim dan biasanya disimpan pada hard drive komputer Anda, yang berguna untuk mengingat segala jenis informasi situs yang telah Anda kunjungi. Cookie dapat menyimpan berbagai informasi, misalnya alamat IP, data navigasi, informasi server, waktu transfer data, alamat e-mail dan password yang dipakai pada saat mengunjungi situs. Bila Anda tidak mengaktifkan Cookie, Anda tidak dapat mengakses berbagai fungsi dan fitur penting yang ada pada situs ini. Cookie yang digunakan akan terhubung dengan data pribadi Anda. </p>

<h3>Kontak</h3>
<p>
karuniatravel.com adalah sebuah perusahaan perseroan terbatas, didirikan di bawah hukum Indonesia dan beralamat di di Pertokoan Kalibutuh Indah Jl. Kalibutuh 134-Q, Surabaya, Indonesia. Jika Anda memiliki saran atau pertanyaan mengenai kebijakan privasi ini, silakan mengirimkan kami email di alamat: it@karuniatravel.com atau menghubungi kami di 031-5313253.</p>

<h3>Perubahan Kebijakan</h3>
<p>
Kami berhak kapan saja untuk mengubah bagaimana kami menggunakan cookie dan bagaimana kami mengumpulkan, meneruskan, dan memproses data pribadi Anda serta informasi serupa lain yang kami anggap penting. Karena itu kebijakan ini bisa diubah dari waktu ke waktu untuk mencerminkan perubahan terakhirnya. </p> <p><br>&nbsp;</br></p>

<br>
</div>
		</div>

		<div role="tabpanel" class="tab-pane fade" id="tab5">
			<div class="   font16">

<h3 >Syarat & Ketentuan</h3>
<p>Syarat dan Ketentuan berikut ini berlaku untuk Situs Karunia Travel dengan alamat www.karuniatravel.com (“Situs”).

Dengan mengunjungi atau menggunakan situs ini, Anda dengan ini setuju dan menerima syarat & ketentuan situs ini. Jika Anda tidak menerima dan menyetujui syarat & ketentuan ini, anda tidak diperkenankan untuk mengakses lebih lanjut situs www.karuniatravel.com dan dipersilahkan untuk meninggalkan situs ini.  </p>
         <h3>Kepemilikan</h3>
<p>
Website ini adalah milik PT. Cipta Karunia Pratama (“Kami”), suatu perseroan terbatas yang didirikan berdasarkan hukum Negara Republik Indonesia, berkedudukan di Pertokoan Kalibutuh Indah Jl. Kalibutuh 134-Q, Surabaya . Silahkan membaca terlebih dahulu sejumlah syarat dan ketentuan yang telah diberlakukan di bawah ini, karena bila Anda terus menggunakan website ini berarti Anda telah menyetujui dan terikat pada seluruh syarat dan ketentuan yang berlaku. Bila tidak, maka Anda tidak dapat menggunakan website ini dan melakukan segala pemesanan tiket, baik pesawat, hotel, tour, dan segala produk yang terdapat di dalam situs ini. Semua modul di dalam situs ini merupakan hak cipta milik Karunia Travel.
</p>

<h3>Modifikasi dan Perubahan Syarat Penggunaan</h3>
<p>
Modifikasi, Perubahan, Penambahan, maupun Penggantian dari setiap aspek, isi konten, dan juga persyaratan penggunaan hanya dapat dilakukan oleh PT. Cipta Karunia Pratama Indonesia sebagai pemilik tunggal dari website ini setiap saat tanpa perlu adanya pemberitahuan sebelumnya. Maka dari itu diharapkan Anda selalu membaca sejumlah syarat dan ketentuan yang berlaku secara berkala untuk mengantisipasi perubahan yang terjadi. </p>

<h3>Informasi Website</h3>
<p>
karuniatravel.com menyediakan layanan berupa informasi penerbangan, informasi airlines, informasi tour and travel, informasi hotel, informasi kereta api Indonesia, pemesanan serta pembelian tiket pesawat online, hotel, KAI, tour, dan layanan sejenis lainnya. Semua informasi berasal dari partner maskapai penerbangan, hotel, kereta api, dan tour. Semuanya tersebut, tidak ada yang bersifat memihak salah satu partner ataupun bertujuan untuk diperdagangkan. Bila terdapat kesalahan dalam penulisan informasi yang telah disediakan, silahkan langsung menghubungi kami.
</p>

<h3>Member atau Keanggotaan</h3>
<p>
Dengan mendaftar sebagai member atau anggota dari karuniatravel.com maka Anda berhak untuk melakukan pemesanan dan pembelian tiket pesawat, booking hotel, tiket KAI, tour, dan produk lain yang ada di situs ini. Selain itu, Anda akan mendapatkan berita mengenai promo atau deal terbaru yang ditawarkan oleh kami. Sebagai anggota, Anda juga akan lebih mudah melakukan pemesanan untuk mempersingkat waktu. Dalam pendaftaran ini Anda harus menjamin bahwa:
<ul class="circle">
  <li>  <p>Informasi yang diberikan sudah benar, lengkap, dan akurat, sesuai dengan persyaratan yang dibutuhkan dalam formulir pendaftaran tanpa adanya maksud dan tujuan lain untuk membuat informasi palsu yang dapat merugikan karuniatravel.com ataupun pihak lainnya. Bila terjadi pelanggaran maka Anda setuju untuk bertanggung jawab atas segala kerugian maupun kerusakan yang terjadi yang diakibatkan dari informasi palsu yang diberikan (contoh : booking atau pemesanan tiket palsu, dan lain-lain)</p></li>
 <li>   <p>Selalu memperbarui data informasi Anda dengan benar dan lengkap. Bila kami menemukan adanya perbedaan data saat ini dengan yang terdaftar, maka kami berhak untuk menyatakan bahwa data Anda tidak valid dan memutuskan untuk mengakhiri account Anda juga menolak setiap akses dari account tersebut. Kami tidak bertanggung jawab atas kerugian ataupun kerusakan yang disebabkan oleh data yang tidak akurat ataupun tidak lengkap yang sudah diberikan Anda.</p></li></ul>
 </p>
<h3> Larangan Penggunaan</h3>
<p>
Anda dengan ini sepakat untuk tidak menggunakan situs atau konten ini untuk hal yang melawan hukum atau aktivitas tanpa izin, Anda sepakat bahwa Anda tidak akan menggunakan peralatan, perangkat lunak, atau teknologi lain yang dapat menghalangi atau berupaya untuk menghalangi cara kerja situs ini. Anda sepakat untuk tidak menggunakan situs ini atau kontennya untuk tujuan komersial. Anda sepakat untuk tidak mengupayakan, membuat atau mengupayakan, mencari, mengutus agen otomatis atau teknologi bentuk lainnya untuk mengumpulkan, mendapatkan, atau hal lainnya untuk berinteraksi dengan situs ini.
</p><h3>
Penggunaan Situs
</h3><p>
PT. Cipta Karunia Pratama akan memberikan Anda akses dan menggunakan situs ini sejauh mana diperbolehkan dengan tegas oleh syarat. Sehubungan dengan lisensi terbatas, Kami dengan tegas menyatakan tidak memberikan hak atau lisensi sehubungan dengan penggunaan situs; hak atau lisensi yang tidak dengan tegas diberikan, dimiliki sepenuhnya oleh karuniatravel.com atau pihak ketiga lainnya pemilik lisensi tersebut. Konten yang ada pada situs, berikut juga perangkat lunak, infrastruktur yang digunakan untuk menyediakan konten, sepenuhnya dimiliki oleh karuniatravel.com atau supplier dan penyedianya, termasuk namun tidak terbatas pada agen travel dan maskapai penerbangan atau hotel (sebagaimana berlaku).
</p><h3>
Persyaratan Pemesanan</h3>
<p>
Dengan melakukan pemesanan melalui situs, Anda dengan ini menyatakan sepakat untuk menerima persyaratan dan ketentuan dari maskapai, hotel, kereta api Indonesia, atau agen travel yang ada, termasuk sehubungan dengan kebijakan mengenai pembatalan dan/atau tidak hadirnya pengguna atau pelanggan berikut sehubungan dengan permintaan tertentu oleh pengguna yang mungkin akan diberikan oleh maskapai, hotel, kereta api Indonesia, atau agen travel tersebut. karuniatravel.com tidak bertanggung jawab atas hal pelanggaran syarat dan ketentuan yang dimiliki oleh pihak ketiga (maskapai, hotel, kereta api Indonesia, agen travel dan lainnya) atau ketersediaan atas permintaan tertentu pengguna.
</p><h3>
Pembatalan</h3><p>
Sehubungan dengan pembatalan yang dilakukan pengguna, maka karuniatravel.com mungkin akan dapat menahan atau mengambil bagian dari jumlah yang dibayarkan untuk mengganti biaya yang telah dikeluarkan sehubungan dengan pembatalan yang terjadi. Pengguna diharapkan membaca dan mengerti syarat dan ketentuan yang ada pada hotel, maskapai penerbangan, kereta api Indonesia, dan agen travel.</p>
<h3>
Permintaan Khusus</h3><p>
Dalam hal terdapat permintaan khusus sehubungan dengan pemesanan (contohnya kamar boleh digunakan untuk merokok, bantuan kursi roda, perubahan nama, perubahan tanggal, perubahan penulisan nama, dan lain-lain), maka pengguna dapat menghubungi langsung maskapai penerbangan, hotel, kereta api Indonesia, atau agen travelyang ada, dan permintaan tersebut akan berdasarkan ketersediaan dan peraturan maskapai, hotel, kereta api Indonesia atau agen travel yang ada (sebagaimana berlaku).
</p><h3>
Hukum dan Yuridiksi</h3><p>
Segala hal yang berlaku dan dalam hubungannya dengan persyaratan dan ketentuan ini diatur oleh hukum Indonesia. Dan Anda dengan ini setuju dan tunduk pada yuridiksi non-eksklusif pengadilan Republik Indonesia dalam semua pertanyaan dan kontroversi yang timbul dalam hubungannya dengan persyaratan dan ketentuan dari penggunaan situs ini. Permohonan Pertanggungjawaban karuniatravel.com tidak bertanggung jawab dan berhak untuk menolak semua tanggung jawab atas setiap kerugian, kewajiban, kerusakan (baik langsung, tidak langsung atau konsekuensial), cedera pribadi atau biaya apapun juga sifatnya yang mungkin diderita oleh Anda atau pihak ketiga (termasuk perusahaan Anda) . Seiring dengan hasil atau yang mungkin timbul, langsung atau tidak langsung, dari mengakses dan menggunakan situs web ini, setiap informasi yang terdapat dalam Situs Web, baik itu informasi pribadi/data pribadi, ataupun data perusahaan, atau material, dan informasi yang dikirimkan melalui sistem kami.
</p><h3>
Ganti Rugi</h3>
<p>
Pengguna bersedia membebaskan karuniatravel.com (karyawan, direktur, pemasok, anak perusahaan, usaha patungan, dan mitra hukum) dari setiap klaim atau permintaan, termasuk biaya pengacara yang wajar, dari dan terhadap semua kerugian dan biaya yang timbul dari pelanggaran syarat dan kondisi atau segala kegiatan yang terkait dengan account pengguna / keanggotaan karena tindakan kelalaian atau kesalahan.</p><h3>

Pembayaran</h3><p>

karuniatravel.com menyediakan layanan pembayaran dengan menggunakan kartu kredit, direct debit, ATM Transfer, SMS Banking, E-Banking, E-Money, BCA KlikPay, Mandiri Clickpay, dan Permata Virtual Account. Semua layanan pembayaran akan ditagih oleh kami untuk harga penuh pada saat pemesanan dan konfirmasi pemesanan. Silakan memeriksa detail pemesanan secara menyeluruh untuk setiap saat tersebut sebelum Anda membuat pemesanan.</p>
<h3>
Penipuan Kartu Kredit</h3><p>

Dalam hal penipuan kartu kredit atau penggunaan yang tidak sah dari kartu kredit Anda oleh pihak ketiga, Anda harus menghubungi bank atau penerbit kartu segera setelah menyadari penggunaan yang tidak sah tersebut. Jika Anda mencurigai adanya pemesanan yang tidak sah atau penipuan yang dilakukan melalui karuniatravel.com, silakan hubungi tim Call Center kami segera. Untuk melakukan pemesanan Anda harus berusia lebih dari 18 tahun dan memiliki kapasitas hukum penuh untuk membuat transaksi (atau memiliki otorisasi dari wali hukum Anda). Anda wajib menggunakan kartu kredit atau debit milik Anda sendiri dan memastikan bahwa ada dana yang cukup untuk menutupi biaya transaksi. Anda menerima tanggung jawab keuangan untuk semua transaksi yang dilakukan atas nama Anda atau akun Anda. Anda wajib memastikan bahwa rincian Anda berikan kepada Kami dengan dalam membuat pemesanan sepenuhnya adalah benar, tepat dan akurat. karuniatravel.com berhak untuk tidak menerima kartu kredit tertentu. karuniatravel.com dapat menambah atau menghapus metode pembayaran lainnya dengan kebijakannya sendiri. Dalam kasus tertentu, kami mungkin membutuhkan informasi tambahan atau verifikasi untuk memvalidasi dan mengkonfirmasi pemesanan, seperti yang dijelaskan secara lebih rinci di situs. Pemesanan tidak dikonfirmasi sampai Anda telah menerima email konfirmasi dengan voucher dan ada kemungkinan bahwa vendor dapat melaksanakan pemeriksaan penipuan selama pemesanan diproses, dalam hal penipuan terjadi maka pemesanan tidak akan lagi tersedia atau otomatis menjadi batal. karuniatravel.com tidak dapat dimintai pertanggungjawaban dalam kasus tersebut. Jika Anda memilih untuk tidak menyampaikan informasi tambahan, pemesanan tidak akan selesai dan sepenuhnya menjadi batal.</p><h3>

Kewajiban</h3><p>

Harap diingat bahwa setelah Anda melakukan pemesanan (booking) tiket pesawat, hotel, kereta api, atau tour, Anda berkewajiban untuk menyelesaikan transaksi tersebut dengan cara melakukan pembayaran sesuai dengan harga total tiket yang telah dicantumkan pada halaman pembayaran. Anda wajib untuk melakukan pembayaran dengan jumlah yang sesuai dengan harga total dari tiket pesawat, hotel, kereta api, atau tour yang Anda pesan. Jika terjadi kekurangan atau kelebihan jumlah pembayaran atas tiket pesawat yang Anda pesan, maka karuniatravel.com tidak bertanggung jawab atas terjadinya keterlambatan konfirmasi atau kegagalan tiket pesawat tersebut. Anda wajib memberikan data yang sesuai dengan identitas diri Anda yang sesungguhnya ketika melakukan pendaftaran sebagai member dan ketika melakukan pembelian tiket pesawat, hotel, kereta api, atau tour di situs karuniatravel.com. Mengirimkan informasi yang tidak benar dapat menyebabkan penolakan maskapai penerbangan, manajemen hotel, kereta api, atau tour untuk memprosespemesanan Anda, biaya tambahan untuk mengoreksi e-tiket, atau bahkan pembatalan pemesanan Anda.</p><h3>

Tidak ada Penjamin</h3><p>

SEMUA MATERI DAN PELAYANAN PADA SITUS INI DISEDIAKAN "SEBAGAIMANA ADANYA" DAN "SEBAGAIMANA TERSEDIA" TANPA JAMINAN APAPUN, BAIK TERSURAT MAUPUN TERSIRAT, TERMASUK, NAMUN TIDAK TERBATAS PADA, JAMINAN TERSIRAT TENTANG KELAYAKAN UNTUK DIPERDAGANGKAN ATAU KESESUAIAN UNTUK TUJUAN TERTENTU , ATAU JAMINAN NON-PELANGGARAN. TANPA MEMBATASI HAL-HAL TERSEBUT, KAMI TIDAK MEMBUAT JAMINAN BAHWA (A) LAYANAN DAN MATERI AKAN MEMENUHI PERSYARATAN ANDA, (B) LAYANAN DAN MATERI TIDAK AKAN TERGANGGU, TEPAT WAKTU, AMAN, ATAU BEBAS DARI KESALAHAN, (C) HASIL YANG MUNGKIN DIPEROLEH DARI PENGGUNAAN LAYANAN ATAU MATERI AKAN EFEKTIF, AKURAT ATAU DAPAT DIANDALKAN, ATAU (D) KUALITAS SEMUA PRODUK, LAYANAN, ATAU INFORMASI YANG DIBELI ATAU DIDAPAT OLEH ANDA DARI SITUS INI AKAN MEMENUHI HARAPAN ANDA ATAU TIDAK BEBAS DARI KESALAHAN, KESALAHAN ATAU CACAT. SITUS INI DAPAT MENGANDUNG KESALAHAN TEKNIS ATAU LAINNYA, KETIDAKAKURATAN ATAU KESALAHAN PENGETIKAN. KAMI BISA MELAKUKAN PERUBAHAN ATAS MATERI DAN LAYANAN DI SITUS INI, TERMASUK HARGA DAN PENJELASAN DARI PRODUK YANG TERDAFTAR DI SINI, SETIAP SAAT TANPA PEMBERITAHUAN SEBELUMNYA. PENGGUNAAN LAYANAN ATAU PENGUNDUHAN ATAU AKUISISI MATERI APAPUN LAINNYA MELALUI SITUS INI ADALAH ATAS KEHENDAK DAN RISIKO ANDA SENDIRI DAN DENGAN PERJANJIAN ANDA BAHWA ANDA AKAN BERTANGGUNG JAWAB SEPENUHNYA ATAS SEGALA KERUSAKAN PADA SISTEM KOMPUTER ANDA ATAU HILANGNYA DATA YANG TERJADI AKIBAT AKTIVITAS TERSEBUT. KAMI TIDAK MEMBUAT JAMINAN APAPUN TENTANG TRANSAKSI DILAKSANAKAN MELALUI, ATAU SEHUBUNGAN DENGAN SITUS INI, DAN ANDA MEMAHAMI DAN SETUJU BAHWA TRANSAKSI TERSEBUT DILAKUKAN ADALAH SEPENUHNYA RESIKO ANDA SENDIRI. GARANSI APAPUN YANG DISEDIAKAN BERKAITAN DENGAN SEGALA PRODUK, LAYANAN, MATERI, ATAU INFORMASI YANG TERSEDIA PADA ATAU MELALUI SITUS INI DARI PIHAK KETIGA HANYA DISEDIAKAN OLEH PIHAK KETIGA TERSEBUT, DAN TIDAK OLEH KAMI ATAU PIHAK LAIN DARI PERUSAHAAN KAMI.</p><h3>

Ketentuan Lainnya</h3><p>

Kecuali dinyatakan berlainan, piranti lunak (software) yang dibutuhkan oleh layanan kami atau yang tersedia di atau yang digunakan oleh website kami dan hak kekayaan intelektual (termasuk hak cipta) dari konten dan informasi dan materi di website kami dimiliki oleh karuniatravel.com, pemasok, dan penyedianya. Syarat dan ketentuan serta penyediaan layanan kami diatur dan diinterpretasi sesuai dengan hukum Indonesia dan segala perselisihan yang muncul dari syarat dan ketentuan umum serta layanan kami hanya akan dikirimkan kepada pengadilan yang berwenang di Jakarta, Indonesia. Jika terdapat aturan dari syarat dan ketentuan ini yang atau yang menjadi tidak valid, tidak memiliki kekuatan hukum, atau tidak mengikat, maka Anda akan tetap terikat pada semua aturan lainnya dalam perjanjian ini. Dalam kasus tersebut, aturan yang tidak valid tersebut, bagaimanapun juga, tetap harus dilaksanakan sejauh yang diizinkan oleh hukum yang berlaku, dan Anda akan paling tidak setuju untuk menerima efek yang sama dengan seperti aturan yang tidak valid, tidak memiliki kekuatan hukum, atau tidak mengikat tersebut, sesuai dengan konten dan tujuan dari syarat dan ketentuan ini. </p>

<br><br>


</div>
		</div>

	  </div>

      </div>
   </div>
   <br><br><br>
</div>
<div class=" greybg">
   <div class="tobordergrey">
      <br>
      <div class="container">
            <div class="row">
               <div class="col-sm-4 col-md-4 col-lg-2">
                  <div class="padr20">
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>faq"><img src="<?php echo base_url();?>assets/front/images/icons/aboutwblue.svg" class="iconsmall marginsmallright"> TENTANG KAMI</a>
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>checkbooking"><img src="<?php echo base_url();?>assets/front/images/icons/bookingsblue.svg" class="iconsmall marginsmallright"> CEK PESANAN</a>
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>promo"><img src="<?php echo base_url();?>assets/front/images/icons/promowblue.svg" class="iconsmall marginsmallright"> INFO PROMO</a>
                     <a class="btn bluebg white rond full-width text-left justbold mt10" href="<?php echo base_url();?>contact"><img src="<?php echo base_url();?>assets/front/images/icons/helpwblue.svg" class="iconsmall marginsmallright"> BANTUAN</a>
                  </div>
               </div>
               <!-- Mobile Footer -->
               <div class="col-xs-12 visible-xs marginsmalltop">
                  <a href="#collapseBantuan" data-toggle="collapse" data-target="#collapseBantuan" aria-expanded="false" aria-controls="collapseBantuan" class=" mt10 full-width heading3 justbold norcol">Bantuan <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                  <div class="collapse" id="collapseBantuan">
                     <ul class="bslist mt10">
                        <li>
                           <a class="norcol underline font16" href="<?php echo base_url();?>faq">Cara Pesan</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="<?php echo base_url();?>faq">Cara Bayar</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="<?php echo base_url();?>faq">Kebijakan Privasi</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="<?php echo base_url();?>faq">Syarat & Ketentuan</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="<?php echo base_url();?>promo">Promo Wisata</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-xs-12 visible-xs marginsmalltop">
                  <a href="#collapseProfile" data-toggle="collapse" data-target="#collapseProfile" aria-expanded="false" aria-controls="collapseProfile" class=" mt10 full-width heading3 justbold norcol">Pesan Hotel <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                  <div class="collapse" id="collapseProfile">
                     <ul class="bslist mt10">
                        <li>
                           <a class="norcol underline font16" href="<?php echo base_url();?>faq">Tentang Kami</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="http://career.karuniatravel.com/">Karir</a>
                        </li>
                        <li>
                           <a class="norcol underline font16" href="daftarkanhotel.html">Daftarkan Hotel Anda</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="<?php echo base_url();?>promo">Info Promo</a>
                        </li>
                        <li>
                           <a class="norcol underline font16"  href="<?php echo base_url();?>contact">Hubungi Kami</a>
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-xs-12 visible-xs marginsmalltop">
                  <a href="#collapseKontak" data-toggle="collapse" data-target="#collapseKontak" aria-expanded="false" aria-controls="collapseKontak" class=" mt10 full-width heading3 justbold norcol">Hubungi Kami <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                  <div class="collapse" id="collapseKontak">
                     <ul class="bslist mt10 font16 norcol">
                        <li>+62 31 848 1333</li>
                        <li>+62 31 842 1239</li>
                        <li>+62 88804801175</li>
                        <li>cs@pesanhotel.com</li>
                     </ul>
                  </div>
               </div>
               <div class="col-xs-12 visible-xs marginsmalltop">
                  <a href="#collapseKantor" data-toggle="collapse" data-target="#collapseKantor" aria-expanded="false" aria-controls="collapseKantor" class=" mt10 full-width heading3 justbold norcol">Kantor Pusat <img src="<?php echo base_url();?>assets/front/images/chevron-down.png" class="pull-right mt10"></a>
                  <div class="collapse" id="collapseKantor">
                     <ul class="bslist mt10 font16 norcol">
                        <li>PT. Cipta Karunia Pratama</li>
                        <li>Pertokoan Kalibutuh Indah</li>
                        <li>Jl. Kalibutuh 134-Q</li>
                        <li>Surabaya</li>
                     </ul>
                  </div>
               </div>
               <!-- End Mobile Footer -->
               <!-- Footer Large -->
               <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                  <div class="heading3 justbold">Bantuan</div>
                  <ul class="bslist mt10">
                     <li>
                        <a class="norcol underline font16" href="<?php echo base_url();?>faq">Cara Pesan</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="<?php echo base_url();?>faq">Cara Bayar</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="<?php echo base_url();?>faq">Kebijakan Privasi</a>
                     </li>
                     <li>
                        <a class="norcol underline font16"  href="<?php echo base_url();?>faq">Syarat & Ketentuan</a>
                     </li>
                     <li>
                        <a class="norcol underline font16"  href="<?php echo base_url();?>promo">Promo Wisata</a>
                     </li>
                  </ul>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                  <div class="heading3 justbold">Pesan Hotel</div>
                  <ul class="bslist mt10">
                     <li>
                        <a class="norcol underline font16" href="<?php echo base_url();?>faq">Tentang Kami</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="http://career.karuniatravel.com/">Karir</a>
                     </li>
                     <li>
                        <a class="norcol underline font16" href="daftarkanhotel.html">Daftarkan Hotel Anda</a>
                     </li>
                     <li>
                        <a class="norcol underline font16"  href="<?php echo base_url();?>promo">Info Promo</a>
                     </li>
                     <li>
                        <a class="norcol underline font16"  href="<?php echo base_url();?>contact">Hubungi Kami</a>
                     </li>
                  </ul>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                  <div class="heading3 justbold">Hotel Populer</div>
                  <ul class="bslist mt10">

                    <?php  $nl = 1;
                     foreach ($popular as $keyp) { ?>
                      <li><a class="norcol underline font16" href="<?php echo base_url()."check/".$keyp->slug;?>"><?php echo $keyp->nama_supplier;?></a></li>
                    <?php if ($nl == 5) {
                      break;
                    }
                     $nl++;} ?>

                  </ul>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                  <div class="heading3 justbold">Hubungi Kami</div>
                  <ul class="bslist mt10 font16 norcol">
                     <li>+62 31 848 1333</li>
                     <li>+62 31 842 1239</li>
                     <li>+62 88804801175</li>
                     <li>cs@pesanhotel.com</li>
                  </ul>
               </div>
               <div class="col-sm-4 col-md-4 col-lg-2 hidden-xs">
                  <div class="heading3 justbold">Kantor Pusat</div>
                  <ul class="bslist mt10 font16 norcol">
                     <li>PT. Cipta Karunia Pratama</li>
                     <li>Pertokoan Kalibutuh Indah</li>
                     <li>Jl. Kalibutuh 134-Q</li>
                     <li>Surabaya</li>
                  </ul>
               </div>
               <!-- End Footer Large -->
            </div>
            &nbsp;
         </div>
   </div>
   <div class="bluebg padding text-center font16 white">
      <div class="container"><br>Hak Cipta © 2005 – 2017 PesanHotel Company Pte. Ltd. Semua Hak Dilindungi Undang-undang.<br>
         PesanHotel adalah bagian dari Karunia Travel Group, penyedia layanan online terdepan untuk perjalanan dan yang terkait lainnya di dunia. <br><br><br>
      </div>
   </div>
</div>
