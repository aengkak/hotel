<?php
class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login');
		$this->load->model('Supplier');
		$this->load->model('Room');//mari
		$this->load->model('Fitur');//mari
		$this->load->model('Allotment');//mari
		$this->load->model('User');//mari
		$this->load->model('Akses');//mari
		$this->load->model('Gallery');//mari
		$this->load->model('Nearby');//mari
		$this->load->model('Tutup');//mari
		$this->load->model('Bed');//mari
		$this->load->model('Staff');//mari
		$this->load->model('Log1');
		$this->load->model('City');
		$this->load->model('Customer');
		//$this->load->model('Autocomplete');
		$this->load->model('Metode');
		$this->load->model('Pemesanan');
		$this->load->model('Ulasan');
		$this->load->model('Fee');
		$this->load->model('Permintaan');
		$this->load->model('Pertanyaan');
		$this->perPage = 5;
	}
	public function home() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['pending'] = $this->Pemesanan->pending();
		$data['selesai'] = $this->Pemesanan->accept();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('home', $data);
		$this->load->view('template/footer');
	}
	public function login() {
		if($_POST==NULL) {
			$this->load->view('login');
		}else {
			$this->Login->log();
			$q = $this->session->userdata('status');
			if($q == 'login'){
				redirect('home');
			}else{
				echo "<script>alert('Username/Password salah')
				location.replace('')</script>";
			}
		}
	}
	public function masuk() {
		$this->Login->logperson();
		$c = $this->session->userdata('level');
		if ($c == "person") {
			echo "1";
		} else {
			echo "0";
		}
	}
	public function logout() {
		$level = $this->session->userdata('level');
		if ($level == "staff") {
			$this->session->sess_destroy();
			redirect(base_url('login'));
		} else {
			$this->session->sess_destroy();
			redirect(base_url());
		}
	}
	public function supplier() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['supplier'] = $this->Supplier->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu',$menu);
		$this->load->view('supplier', $data);
		$this->load->view('template/footer');
	}
	public function modalsupp() {
		$data['cek'] = "1";
		$data['kota'] = $this->City->selectAll();
		$data['nearby'] = $this->Nearby->selectAll();
		$data['fitur'] = $this->Fitur->hotel();
		$data['fiturkamar'] = $this->Fitur->room();
		$this->load->view('modal/supplier', $data);
	}
	public function suppadd() {
		$this->Supplier->addmanual();
		//echo "";
	}
	public function suppedit($id) {
		$data['cek'] = "0";
		$data['kota'] = $this->City->selectAll();
		$data['nearby'] = $this->Nearby->selectAll();
		$data['fitur'] = $this->Fitur->hotel();
		$data['fiturkamar'] = $this->Fitur->room();
		$data['supp'] = $this->Supplier->edit($id);
		$this->load->view('modal/supplier', $data);
	}
	public function suppdelete($id) {
		$this->Supplier->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function suppupdate() {
		$this->Supplier->update();
		echo json_encode(array("status" => TRUE));
	}
	public function kamar() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['room'] = $this->Room->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('room', $data);
		$this->load->view('template/footer');
	}
	public function modalr() {
		$data['cek'] = "1";
		$data['bed'] = $this->Bed->selectAll();
		$data['fitur'] = $this->Fitur->room();
		$data['supplier'] = $this->Supplier->fiturkamar();
		$this->load->view('modal/room', $data);
	}
	public function roomadd() {
		$this->Room->add();
		echo json_encode(array("status" => TRUE));
	}
	public function roomedit($id) {
		$data['bed'] = $this->Bed->selectAll();
		$data['room'] = $this->Room->edit($id);
		$data['cek'] = "0";
		$data['fitur'] = $this->Fitur->Room();
		$data['supplier'] = $this->Supplier->fiturkamar();
		$this->load->view('modal/room', $data);
	}
	public function roomdelete($id) {
		$this->Room->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function roomupdate() {
		$this->Room->update();
		echo json_encode(array("status" => TRUE));
	}
	public function agent() {
		$data['agent'] = $this->Agent->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('agent', $data);
		$this->load->view('template/footer');
	}
	public function agadd() {
		$this->Agent->add();
		echo json_encode(array("status" => TRUE));
	}
	public function agdelete($id) {
		$this->Agent->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function agedit($id) {
		$data = $this->Agent->edit($id);
		echo json_encode($data);
	}
	public function agupdate() {
		$this->Agent->update();
		echo json_encode(array("status" => TRUE));
	}
	public function fasilitas() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['fitur'] = $this->Fitur->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu',$menu);
		$this->load->view('fitur', $data);
		$this->load->view('template/footer');
	}
	public function modalfr() {
		$data['cek'] = "1";
		$this->load->view('modal/fitur', $data);
	}
	public function fradd() {
		$this->Fitur->add();
		echo json_encode(array("status" => TRUE));
	}
	public function frdelete($id) {
		$this->Fitur->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function fredit($id) {
		$data['cek'] = "0";
		$data['fitur'] = $this->Fitur->edit($id);
		$this->load->view('modal/fitur', $data);
	}
	public function frupdate() {
		$this->Fitur->update();
		echo json_encode(array("status" => TRUE));
	}
	public function khusus() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['allotment'] = $this->Allotment->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu',$menu);
		$this->load->view('allotment', $data);
		$this->load->view('template/footer');
	}
	public function modalallot() {
		$data['cek'] = "1";
		$data['room'] = $this->Room->selectAll();
		$this->load->view('modal/allotment', $data);
	}
	public function onroom() {
		$data['cek'] = "2";
		$data['room'] = $this->Room->selectAll();
		$data['select'] = $this->Room->onroom();
		$this->load->view('modal/allotment', $data);
	}
	public function allotadd() {
		$dari = $this->input->post('dari');
		if($dari == NULL) {
			$this->Allotment->newcalendar();
		} else {
			$this->Allotment->add();
		}
	}
	public function allotdelete($id) {
		$this->Allotment->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function allotedit($id) {
		$data['cek'] = "0";
		$data['allot'] = $this->Allotment->edit($id);
		$data['room'] = $this->Room->selectAll();
		$this->load->view('modal/allotment', $data);
	}
	public function allotupdate() {
		$this->Allotment->update();
		echo json_encode(array("status" => TRUE));
	}
	public function pengguna() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['user'] = $this->User->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('user', $data);
		$this->load->view('template/footer');
	}
	public function modaluser() {
		$data['cek'] = "1";
		$data['akses'] = $this->Akses->hotel();
		$this->load->view('modal/user', $data);
	}
	public function useradd() {
		$q = $this->session->userdata('supplier_id');
		if ($q == 0) {
			$this->User->new();
			echo json_encode(array("status" => TRUE));
		} else {
			$this->User->add();
			echo json_encode(array("status" => TRUE));
		}
	}
	public function userdelete($id) {
		$this->User->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function useredit($id) {
		$data['cek'] = "0";
		$data['akses'] = $this->Akses->hotel();
		$data['user'] = $this->User->edit($id);
		$this->load->view('modal/user', $data);
	}
	public function userupdate() {
		$this->User->update();
		echo json_encode(array("status" => TRUE));
	}
	public function akses() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['akses'] = $this->Akses->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu',$menu);
		$this->load->view('akses', $data);
		$this->load->view('template/footer');
	}
	public function modalacc() {
		$data['cek'] = "1";
		$this->load->view('modal/akses', $data);
	}
	public function accadd() {
		$this->Akses->add();
		echo json_encode(array("status" => TRUE));
	}
	public function accdelete($id) {
		$this->Akses->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function accedit($id) {
		$data['cek'] = "0";
		$data['akses'] = $this->Akses->edit($id);
		$this->load->view('modal/akses', $data);
	}
	public function accupdate() {
		$this->Akses->update();
		echo json_encode(array("status" => TRUE));
	}
	public function galeri() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['room'] = $this->Room->selectAll();
		$data['variable'] = $this->Gallery->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('gallery', $data);
		$this->load->view('template/footer');
	}
	public function modalgal() {
		$data['cek'] = "1";
		$data['room'] = $this->Room->selectAll();
		$this->load->view('modal/gallery', $data);
	}
	public function galadd() {
		$this->Gallery->add();
		echo json_encode(array("status" => TRUE));
	}
	public function galdelete($id) {
		$this->Gallery->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function galedit($id) {
		$data['cek'] = "0";
		$data['room'] = $this->Room->selectAll();
		$data['gal'] = $this->Gallery->edit($id);
		$this->load->view('modal/gallery', $data);
	}
	public function galupdate() {
		$this->Gallery->update();
		echo json_encode(array("status" => TRUE));
	}
	public function hotel() {
		if($_POST==NULL) {
			$supplier_id = $this->session->userdata('supplier_id');
			if ($supplier_id == 0) {
				$menu['akses'] = $this->Akses->selectAll();
				$data['cek'] = "0";
				$data['kota'] = $this->City->selectAll();
				$data['nearby'] = $this->Nearby->selectAll();
				$data['fitur'] = $this->Fitur->hotel();
				$data['fiturkamar'] = $this->Fitur->room();
				$this->load->view('template/header');
				$this->load->view('template/menu', $menu);
				$this->load->view('hotel', $data);
				$this->load->view('template/footer');
			}else {
				$menu['akses'] = $this->Akses->selectAll();
				$data['cek'] = "1";
				$data['nearby'] = $this->Nearby->selectAll();
				$data['kota'] = $this->City->selectAll();
				$data['fitur'] = $this->Fitur->hotel();
				$data['fiturkamar'] = $this->Fitur->room();
				$data['supp'] = $this->Supplier->edithotel();
				$this->load->view('template/header');
				$this->load->view('template/menu', $menu);
				$this->load->view('hotel', $data);
				$this->load->view('template/footer');
			}
		}elseif (isset($_POST['add'])) {
			$this->Supplier->add();

			echo "<script>alert('Success')
			location.replace('')</script>";
		}elseif (isset($_POST['update'])) {
			$this->Supplier->update();
			echo "<script>alert('Success')
			location.replace('')</script>";
		}
	}
	public function onnearby() {
		$data['cek'] = "1";
		$data['nearby'] = $this->Nearby->select();
		$this->load->view('modal/onnearby', $data);
	}
	public function onnearbyedit() {
		$data['cek'] = "0";
		$data['nearby'] = $this->Nearby->select();
		$data['supp'] = $this->Supplier->edithotel();
		$this->load->view('modal/onnearby', $data);
	}
	public function terdekat() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['nearby'] = $this->Nearby->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('nearby', $data);
		$this->load->view('template/footer');
	}
	public function modalnear() {
		$data['cek'] = "1";
		$data['kota'] = $this->City->selectAll();
		$this->load->view('modal/nearby', $data);
	}
	public function nearadd() {
		$this->Nearby->add();
		echo json_encode(array("status" => TRUE));
	}
	public function neardelete($id) {
		$this->Nearby->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function nearedit($id) {
		$data['cek'] = "0";
		$data['nearby'] = $this->Nearby->edit($id);
		$data['kota'] = $this->City->selectAll();
		$this->load->view('modal/nearby', $data);
	}
	public function nearupdate() {
		$this->Nearby->update();
		echo json_encode(array("status" => TRUE));
	}
	public function kalender() {
		$menu['akses'] = $this->Akses->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('calendar');
		$this->load->view('template/footer');
	}
	public function modalc() {
		$data['cek'] = "1";
		$data['room'] = $this->Room->selectAll();
		$this->load->view('modal/calendar',$data);
	}
	public function editc($id) {
		$sub_id = substr($id,0,1);
		if ($sub_id == "a") {
			$data['cek'] = "1";
			$data['room'] = $this->Room->selectAll();
			$data['select'] = $this->Room->sel1($id);
		} elseif ($sub_id == "b") {
			$data['cek'] = "2";
			$data['room'] = $this->Room->selectAll();
			$data['select'] = $this->Room->sel1($id);
		} else {
			$data['cek'] = "0";
			$data['allotment'] = $this->Allotment->editcalendar($id);
			$data['room'] = $this->Room->selectAll();
		}
		$this->load->view('modal/calendar',$data);
	}
	public function updatec() {
		$cek = $this->input->post('cek');
		if ($cek == 0) {
			$this->Allotment->updatecalendar();
		} elseif ($cek == 1) {
			$this->Allotment->updatecalendar();
		} else {
			$this->Tutup->updatecalendar();
		}
	}
	public function deletec($id) {
		$this->Allotment->deletecalendar($id);
		echo json_encode(array("status" => TRUE));
	}
	public function event() {
		$data1 = $this->Room->selectAll();
		$data = $this->Allotment->calendar();
		//$data2 = $this->Allotment->max();
		$data3 = $this->Allotment->min();
		$datemax = $this->Allotment->max();
		$sekarang = date("Y-m-d");
		date_default_timezone_set('Asia/Jakarta');
		$date4 = date($data3->created);
		/*if ($datemax->sampai != NULL) {
			$date5 = date ($datemax->sampai);
		} else {
			$date5 = date ("Y-m-d", strtotime("+1 month", strtotime($sekarang)));
		}*/
		$date5 = date ("Y-m-d", strtotime("+1 month", strtotime($sekarang)));

		foreach ($data1 as $key1) {
			$pro1 = $key1->id_produk;
			$warna = $key1->warna;
			$d1 = array();
			$d = array();
			$f = array();
			$idcek1 = array();
			$title = array();
			$status = "1";
			$supplier_id = $this->session->userdata('supplier_id');
			$this->db->select('*');
			$this->db->from('allotment');
			$this->db->join('produk', 'allotment.produk_id = produk.id_produk');
			$this->db->where('allotment.supplier_id', $supplier_id);
			$this->db->where('allotment.status', $status);
			$this->db->where('allotment.produk_id', $pro1);
			$this->db->order_by("dari", "asc");
			$cc = $this->db->get();
	    $c = $cc->result();
			$num = $cc->num_rows();
			foreach ($c as $key) {
				$date = $key->dari;
				$sampai = $key->sampai;
				$nama_produk = $key->nama_produk;
				$jumlah = $key->stok;
				$id_allotment = $key->id_allotment;
				$hargadef = "Rp. ".number_format($key->harga_produk);
				$harga = "Rp. " .number_format($key->harga);
				$idcek = "0";
				$idcek1[]= $key->id_allotment;
				$title[] = $nama_produk. " " .$jumlah. " " .$harga;
				$title1 = $nama_produk. " " .$jumlah. " " .$hargadef;
				$warna1 = $key->warna;
				while (strtotime($date) <= strtotime($sampai)) {
					$d[] = $date;
					$date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
				}
			}

			$date1 = date('Y-m-d', strtotime($data3->created));
			$end_date1 = date('Y-m-d', strtotime($date5));
			while (strtotime($date1) <= strtotime($end_date1)) {
			$d1[] = $date1;
			$date1 = date ("Y-m-d", strtotime("+1 day", strtotime($date1)));
			}

			if ($num == 0) {
				foreach ($d1 as $dd => $ddd)
				{
					$this->db->select('*');
					$this->db->from('tutup');
					$this->db->join('produk', 'tutup.produk_id = produk.id_produk');
					$this->db->where('tutup.supplier_id', $supplier_id);
					$this->db->where('tutup.status', $status);
					$this->db->where('tutup.produk_id', $pro1);
					$this->db->order_by("dari", "asc");
					$this->db->where('dari <=', $ddd);
					$this->db->where('sampai >=', $ddd);
					$tutup = $this->db->get();
					$tutup2 = $tutup->num_rows();

					if ($tutup2 == 0) {
						$tt = $key1->nama_produk. " " .$key1->stok. " " ."Rp. ".number_format($key1->harga_produk);
						$arr[]= array('id' => "a".$pro1, 'title' => $tt, 'start' => $ddd, 'color' => $warna);
					} else {
					$arr[]= array ('id' => "b".$pro1, 'title' => "closed", 'start' => $ddd, 'color' => $warna);
				}
			}
			} else {
				foreach ($d1 as $data1 => $value1)
				{
					$this->db->select('*');
					$this->db->from('tutup');
					$this->db->join('produk', 'tutup.produk_id = produk.id_produk');
					$this->db->where('tutup.supplier_id', $supplier_id);
					$this->db->where('tutup.status', $status);
					$this->db->where('tutup.produk_id', $pro1);
					$this->db->order_by("dari", "asc");
					$this->db->where('dari <=', $value1);
					$this->db->where('sampai >=', $value1);
					$tut = $this->db->get();
					$tut1 = $tut->result();
					$tut2 = $tut->num_rows();

					for($i=0;$i<count($d);$i++)
					{
						if($d[$i] == $value1)
						{
							foreach ($idcek1 as $kunci => $valueid) {
								$v = $valueid;
								$status = "1";
								$supplier_id = $this->session->userdata('supplier_id');
								$this->db->select('*');
								$this->db->from('allotment');
								$this->db->join('produk', 'allotment.produk_id = produk.id_produk');
								$this->db->where('allotment.supplier_id', $supplier_id);
								$this->db->where('allotment.status', $status);
								$this->db->where('allotment.produk_id', $pro1);
								$this->db->where('dari <=', $value1);
								$this->db->where('sampai >=', $value1);
						    $r = $this->db->get()->row();

								if ($tut2 == 0) {
									$t = $r->nama_produk. " " .$r->jumlah. " " ."Rp. ".number_format($r->harga);
									if ($v == $r->id_allotment) {
										$arr[]= array ('id' => $r->id_allotment, 'title' => $t, 'start' => $value1, 'color' => $r->warna);
									}
								}else {
									$arr[]= array ('id' => "b".$pro1, 'title' => "closed", 'start' => $value1, 'color' => $r->warna);
									break;
								}
							}
							break;
						}
						else {
							if ($tut2 == 0) {
								if($i==count($d)-1){
								$arr[]= array ('id' => "a".$pro1, 'title' => $title1, 'start' => $value1, 'color' => $warna);
								}
							} else {
								$arr[]= array ('id' => "b".$pro1, 'title' => "closed", 'start' => $value1, 'color' => $warna);
								break;
							}
						}
					}
				}
			}
		} print_r(json_encode($arr));
	}
	public function notfound() {
		$this->load->view('404');
	}
	public function forbidden() {
		$this->load->view('403');
	}
	public function tutup() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['closed'] = $this->Tutup->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('closed', $data);
		$this->load->view('template/footer');
	}
	public function modalclo() {
		$data['cek'] = "1";
		$data['room'] = $this->Room->selectAll();
		$this->load->view('modal/closed', $data);
	}
	public function cloadd() {
		$this->Tutup->add();
		echo json_encode(array("status" => TRUE));
	}
	public function clodelete($id) {
		$this->Tutup->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function cloedit($id) {
		$data['cek'] = "0";
		$data['room'] = $this->Room->selectAll();
		$data['closed'] = $this->Tutup->edit($id);
		$this->load->view('modal/closed', $data);
	}
	public function cloupdate() {
		$this->Tutup->update();
		echo json_encode(array("status" => TRUE));
	}
	public function kasur() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['bed'] = $this->Bed->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('bed', $data);
		$this->load->view('template/footer');
	}
	public function modalbed() {
		$data['cek'] = "1";
		$this->load->view('modal/bed', $data);
	}
	public function bedadd() {
		$this->Bed->add();
		echo json_encode(array("status" => TRUE));
	}
	public function beddelete($id) {
		$this->Bed->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function bededit($id) {
		$data['cek'] = "0";
		$data['bed'] = $this->Bed->edit($id);
		$this->load->view('modal/bed', $data);
	}
	public function bedupdate() {
		$this->Bed->update();
		echo json_encode(array("status" => TRUE));
	}
	public function staff() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['staff'] = $this->Staff->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('staff', $data);
		$this->load->view('template/footer');
	}
	public function modalstaff() {
		$data['cek'] = "1";
		$data['akses'] = $this->Akses->staff();
		$this->load->view('modal/staff', $data);
	}
	public function staffadd() {
		$this->Staff->add();
		echo json_encode(array("status" => TRUE));
	}
	public function staffdelete($id) {
		$this->Staff->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function staffedit($id) {
		$data['cek'] = "0";
		$data['akses'] = $this->Akses->staff();
		$data['staff'] = $this->Staff->edit($id);
		$this->load->view('modal/staff', $data);
	}
	public function staffupdate() {
		$this->Staff->update();
		echo json_encode(array("status" => TRUE));
	}
	public function aktivitas() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['log'] = $this->Log1->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('log', $data);
		$this->load->view('template/footer');
	}
	public function kota() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['kota'] = $this->City->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('city', $data);
		$this->load->view('template/footer');
	}
	public function modalcity() {
		$data['cek'] = "1";
		$this->load->view('modal/city', $data);
	}
	public function cityadd() {
		$this->City->add();
		echo json_encode(array("status" => TRUE));
	}
	public function citydelete($id) {
		$this->City->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function cityedit($id) {
		$data['cek'] = "0";
		$data['kota'] = $this->City->edit($id);
		$this->load->view('modal/city', $data);
	}
	public function cityupdate() {
		$this->City->update();
		echo json_encode(array("status" => TRUE));
	}
	public function index() {

		if($_POST==NULL) {

			$arr = array();
			$data1 = $this->City->selectAll();
			foreach ($data1 as $key1) {
				$arr[] = array('value' => $key1->kota, 'label' => $key1->kota, 'addr' => $key1->kota, 'desc'=> "City");
			}
			$data = $this->Supplier->autocomplete();
			foreach ($data as $key) {
				$arr[] = array('value' => $key->nama_supplier, 'label' => $key->nama_supplier, 'addr' => $key->kota, 'desc'=> "Hotel");
			}
			$data['ulasan'] = $this->Ulasan->selectAll();
			$data['kota'] = $this->City->kota();
			$data['room'] = $this->Room->check();
			$data['allotment'] = $this->Allotment->search();
			$data['foto'] = $this->Gallery->check();
			$data['supplier'] = $this->Supplier->autocomplete();
			$data['res'] = json_encode($arr);
			$data['popular'] = $this->Supplier->popular();
			$data['fee'] = $this->Fee->selectAll();
			$header['title'] = "PESANHOTEL - Booking hotel tercepat &amp; termurah se-indonesia";
			if($this->session->userdata('level') == "person") {
				$menu['proses'] = $this->Pemesanan->countproses();
			} else {
				$menu['proses'] = NULL;
			}
			
			$this->load->view('front/header', $header);
			$this->load->view('front/menu', $menu);
			$this->load->view('index',$data);
			$this->load->view('front/footer');
		} else {
			$nama_supplier = $this->input->post('tempattujuan');
			$dari = $this->input->post('dari');
			$sampai = $this->input->post('sampai');
			$kamar = $this->input->post('kamar');
			$orang = $this->input->post('orang');

			$data_session = array(
						'tempattujuan' => $nama_supplier,
						'dari' => $dari,
						'sampai' => $sampai,
						'kamar' => $kamar,
					 	'orang' => $orang);
			$this->session->set_userdata($data_session);
			$cek = $this->Supplier->check();
			if ($cek->nama_supplier == NULL) {
				redirect('search');
			} else {
				$link = "check/".$cek->slug;
				redirect($link);
			}
		}

	}
	public function auto() {
		$arr = array();
		$data1 = $this->City->selectAll();
		foreach ($data1 as $key1) {
			$arr[] = array('value' => $key1->kota, 'label' => $key1->kota, 'desc'=> "City");
		}
		$data = $this->Supplier->autocomplete();
		foreach ($data as $key) {
			$arr[] = array('value' => $key->nama_supplier, 'label' => $key->nama_supplier, 'addr' => $key->kota, 'desc'=> "Hotel");
		}
		print_r(json_encode($arr));
	}
	public function peradd() {
		$this->Customer->add();
		echo json_encode(array("status" => TRUE));
	}
	public function cekreg() {
		$data = $this->Customer->cekreg();
		if ($data > 0) {
			echo 1;
		} else {
			echo 0;
		}
	}
	public function verify($id) {
		if ($_POST==NULL) {
			$v = $this->Customer->cek($id);
			if ($v > 0) {
				$header['title'] = "Verifikasi";
				$this->load->view('front/header', $header);
				$this->load->view('isidata');
				$this->load->view('front/footer');
			} else {
				redirect('index');
			}
		} else {
			$cekv = $this->Customer->verify($id);
			$base = base_url();
			if ($cekv > 0) {
				echo "<script>alert('Success')
				location.replace('')</script>";
			} else {
				echo "<script>alert('Error')
				location.replace('')</script>";
			}
		}
	}
	public function formulir() {
		if($_POST == NULL) {
			$this->load->view('formulir');
		} else {
			$this->Pertanyaan->add();
			echo "<script>alert('Sukses')
				location.replace('')</script>";
		}
	}
	public function search() {

		if($_POST==NULL) {
			$arr = array();
			$data1 = $this->City->selectAll();
			foreach ($data1 as $key1) {
				$arr[] = array('value' => $key1->kota, 'label' => $key1->kota, 'addr' => $key1->kota, 'desc'=> "City");
			}
			$data = $this->Supplier->autocomplete();
			foreach ($data as $key) {
				$arr[] = array('value' => $key->nama_supplier, 'label' => $key->nama_supplier, 'addr' => $key->kota, 'desc'=> "Hotel");
			}
			$data2 = $this->Nearby->check();
			if ($data2 != NULL) {
				foreach ($data2 as $key1) {
					$arr1[] = array('value' => $key1->tempat, 'label' => $key1->tempat, 'addr' => $key1->kota, 'desc'=> "Nearby");
				}
			} else {
				$arr1[] = NULL;
			}
			$arr2 = array();
			$data3 = $this->Supplier->search();
			if ($data3 != NULL) {
				foreach ($data3 as $key3) {
					$arr2[] = array('value' => $key3->nama_supplier, 'label' => $key3->nama_supplier, 'addr' => $key3->kota, 'desc'=> "Hotel");
				}
			} else {
				$arr2[] = NULL;
			}


			//total rows count
		$totalRec = count($this->Supplier->getRows());
		//pagination configuration
		$config['target']      = '#postList';
		$config['base_url']    = base_url().'ajaxSearch';
		$config['total_rows']  = $totalRec;
		$config['per_page']    = $this->perPage;
		$this->ajax_pagination->initialize($config);
		//get the posts data

			$data['ulasan'] = $this->Ulasan->selectAll();
			$data['search'] = $this->Supplier->getRows(array('limit'=>$this->perPage));
			$data['allotment'] = $this->Allotment->search();
			$data['room'] = $this->Room->check();
			$data['foto'] = $this->Gallery->check();
			$data['fitur'] = $this->Fitur->hotel();
			$data['popular'] = $this->Supplier->popular();
			$data['res'] = json_encode($arr);
			$data['res1'] = json_encode($arr1);
			$data['res2'] = json_encode($arr2);
			$data['code'] = 0;
			$data['fee'] = $this->Fee->selectAll();
			$header['title'] = "Pencarian";
			if($this->session->userdata('level') == "person") {
				$menu['proses'] = $this->Pemesanan->countproses();
			} else {
				$menu['proses'] = NULL;
			}
			$this->load->view('front/header', $header);
			$this->load->view('front/menu', $menu);
			$this->load->view('search', $data);
			$this->load->view('front/footer');
		} else {
			$array_items = array('harga', 'filtering');
			$this->session->unset_userdata($array_items);

			$nama_supplier = $this->input->post('tempattujuan');
			$dari = $this->input->post('dari');
			$sampai = $this->input->post('sampai');
			$kamar = $this->input->post('kamar');
			$orang = $this->input->post('orang');
			$harga = $this->input->post('harga');

			$data_session = array(
						'tempattujuan' => $nama_supplier,
						'dari' => $dari,
						'sampai' => $sampai,
						'kamar' => $kamar,
					 	'orang' => $orang,
						'harga' => $harga);
			$this->session->set_userdata($data_session);
			$cek = $this->Supplier->check();
			if ($cek->nama_supplier == NULL) {
				redirect('search');
			} else {
				$link = "check/".$cek->slug;
				redirect($link);
			}
		}
	}
	function ajaxSearch() {
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        //total rows count
        $totalRec = count($this->Supplier->getRows());
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'ajaxSearch';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
				$config['page']    = $page;

        $this->ajax_pagination->initialize($config);

        //get the posts data
				$data['ulasan'] = $this->Ulasan->selectAll();
        $data['search'] = $this->Supplier->getRows(array('start'=>$offset,'limit'=>$this->perPage));
				$data['allotment'] = $this->Allotment->search();
				$data['room'] = $this->Room->check();
				$data['foto'] = $this->Gallery->check();
				$data['code'] = 0;
				$data['fitur'] = $this->Fitur->hotel();
				$data['fee'] = $this->Fee->selectAll();
        //load the view
        $this->load->view('ajaxSearch', $data, false);
  }
	public function filtering() {
		$nama = $this->input->post('nama');
		$bintang = $this->input->post('bintang');
		$harga = $this->input->post('harga');
		$fitur_id = $this->input->post('fitur_id');
		$sorting = $this->input->post('sorting');
		$nearby = $this->input->post('nearby');
		if ($nama != NULL) {
			$hotel = $nama;
		} else {
			$hotel = "";
		}
		if ($nearby != NULL) {
			$near = $nearby;
		} else {
			$near = "";
		}
		if ($sorting != NULL) {
			$sorter = $sorting;
		} else {
			$sorter = "";
		}
		if ($fitur_id != NULL) {
			$fiturimplode = implode(",", $fitur_id);
		} else {
			$fiturimplode = "";
		}
		if ($bintang != NULL) {
			$bintangimplode = implode(",", $bintang);
		} else {
			$bintangimplode = "";
		}
		$data_session = array(
					'hotel' => $hotel,
					'harga' => $harga,
					'bintang' => $bintangimplode,
					'fitur_id' => $fiturimplode,
					'sorting' => $sorter,
					'nearby' => $near);
		$this->session->set_userdata($data_session);
		//total rows count
	$totalRec = count($this->Supplier->getFilter());
	//pagination configuration
	$config['target']      = '#postList';
	$config['base_url']    = base_url().'ajaxFilter';
	$config['total_rows']  = $totalRec;
	$config['per_page']    = $this->perPage;
	$this->ajax_pagination->initialize($config);
	//get the posts data

	$data['ulasan'] = $this->Ulasan->selectAll();
		$data['search'] = $this->Supplier->getFilter(array('limit'=>$this->perPage));
		if ($data['search'] != "kosong") {
			$data['allotment'] = $this->Allotment->search();
			$data['room'] = $this->Room->filter();
			$data['foto'] = $this->Gallery->check();
			$data['code'] = 1;
			$data['fitur'] = $this->Fitur->hotel();
			$data['fee'] = $this->Fee->selectAll();
			$this->load->view('ajaxSearch', $data, false);
		} else {
			$img = base_url()."assets/front/images/search-bar.gif";
			echo "<div class='text-center'><img src='$img' ></div>";
		}

	}
	function ajaxFilter() {
        $page = $this->input->post('page');
        if(!$page){
            $offset = 0;
        }else{
            $offset = $page;
        }
        //total rows count
        $totalRec = count($this->Supplier->getFilter());
        //pagination configuration
        $config['target']      = '#postList';
        $config['base_url']    = base_url().'ajaxFilter';
        $config['total_rows']  = $totalRec;
        $config['per_page']    = $this->perPage;
				$config['page']    = $page;

        $this->ajax_pagination->initialize($config);

        //get the posts data
				$data['ulasan'] = $this->Ulasan->selectAll();
        $data['search'] = $this->Supplier->getFilter(array('start'=>$offset,'limit'=>$this->perPage));
				$data['allotment'] = $this->Allotment->search();
				$data['room'] = $this->Room->filter();
				$data['foto'] = $this->Gallery->check();
				$data['code'] = 1;
				$data['fitur'] = $this->Fitur->hotel();
				$data['fee'] = $this->Fee->selectAll();
        //load the view
        $this->load->view('ajaxSearch', $data, false);
  }
	public function check($id) {
		if ($_POST==NULL) {
			$this->db->where('slug', $id);
			$slugsup = $this->db->get('supplier')->row();
			if ($slugsup->id_supplier == NULL) {
				redirect(base_url('notfound'));
			} else {
				$arr = array();
				$data1 = $this->City->selectAll();
				foreach ($data1 as $key1) {
					$arr[] = array('value' => $key1->kota, 'label' => $key1->kota, 'addr' => $key1->kota, 'desc'=> "City");
				}
				$data = $this->Supplier->autocomplete();
				foreach ($data as $key) {
					$arr[] = array('value' => $key->nama_supplier, 'label' => $key->nama_supplier, 'addr' => $key->kota, 'desc'=> "Hotel");
				}

				$totalRec = count($this->Ulasan->getRows());
				//pagination configuration
				$config['target']      = '#komen';
				$config['base_url']    = base_url().'ajaxcheck/'.$id;
				$config['total_rows']  = $totalRec;
				$config['per_page']    = $this->perPage;
				$this->ajax_pagination->initialize($config);
				//get the posts data
				//$supp_id = $this->uri->segment('2');
				$data['komentar'] = $this->Ulasan->getRows(array('limit'=>$this->perPage));

				$data['res'] = json_encode($arr);
				$data['gallery'] = $this->Gallery->check();
				$data['slug'] = $this->Supplier->judul($id);
				$data['ulasan'] = $this->Ulasan->selectAll();
				$data['room'] = $this->Room->check();
				$data['allotment'] = $this->Allotment->search();
				$data['foto'] = $this->Gallery->check();
				$data['tutup'] = $this->Tutup->check();
				$data['supplier'] = $this->Supplier->autocomplete();
				$data['fiturhotel'] = $this->Fitur->hotel();
				$data['fiturroom'] = $this->Fitur->room();
				$data['popular'] = $this->Supplier->popular();
				$data['fee'] = $this->Fee->selectAll();

				$n = $this->Nearby->selectAll();
				$nn = $data['slug']->nearby;
				$resnn = explode(',',$nn);
				$loc = array();
				$marker = base_url()."assets/front/images/locat.png";
				$loc[] = array($data['slug']->nama_supplier,$data['slug']->lat,$data['slug']->longi,$marker);
				$nearmark = base_url()."assets/front/images/location.png";
				foreach ($resnn as $key => $value) {
					foreach ($n as $keyn) {
						if ($keyn->id_nearby == $value) {
							$namanear = $keyn->tempat;
							$lat = $keyn->latnear;
							$longi = $keyn->longinear;
							$alamatnear = $keyn->alamatnear;
						}
					} $loc[] = array($namanear,$lat,$longi,$nearmark);
				}
				$data['location'] = json_encode($loc);
				//print_r($data['ulasan']);
				$header['title'] = $slugsup->nama_supplier;
				if($this->session->userdata('level') == "person") {
				$menu['proses'] = $this->Pemesanan->countproses();
			} else {
				$menu['proses'] = NULL;
			}
				$this->load->view('front/header', $header);
				$this->load->view('front/menu', $menu);
				$this->load->view('check', $data);
				$this->load->view('front/footer');
			}
		} else {

			$pesan = $this->input->post('pesan');
			if ($pesan == "1") {

				$id_produk = $this->input->post('id_produk');
				$id_supplier = $this->input->post('id_supplier');
				$k = $this->session->userdata('kamar');
				if ($k != NULL) {
					$kamar = $k;
				} else {
					$kamar = 1;
				}
				$o = $this->session->userdata('orang');
				if ($o != NULL) {
					$orang = $o;
				} else {
					$orang = 1;
				}
				$d = $this->session->userdata('dari');
				$s = $this->session->userdata('sampai');
				if ($d != NULL) {
					$dari = $d;
					$sampai = $s;
				} else {
					$dari = date("Y-m-d");
					$sampai = date ("Y-m-d", strtotime("+1 days", strtotime($dari)));
				}
				$data_session = array(
						'dari' => $dari,
						'sampai' => $sampai,
						'id_supplier' => $id_supplier,
						'id_produk' => $id_produk,
						'kamar' => $kamar,
						'orang' => $orang);
				$this->session->set_userdata($data_session);
				redirect(base_url('booking'));

			} else {
				$nama_supplier = $this->input->post('tempattujuan');
				$dari = $this->input->post('dari');
				$sampai = $this->input->post('sampai');
				$kamar = $this->input->post('kamar');
				$orang = $this->input->post('orang');
				$harga = $this->input->post('harga');

				$data_session = array(
							'tempattujuan' => $nama_supplier,
							'dari' => $dari,
							'sampai' => $sampai,
							'kamar' => $kamar,
						 	'orang' => $orang,
							'harga' => $harga);
				$this->session->set_userdata($data_session);
				$cek = $this->Supplier->check();
				if ($cek->nama_supplier == NULL) {
					redirect('search');
				} else {
					$link = "check/".$cek->slug;
					redirect($link);
				}
			}
		}
	}
	public function ajaxcheck() {
		$page = $this->input->post('page');
		$slug = $this->uri->segment('2');
		if(!$page){
				$offset = 0;
		}else{
				$offset = $page;
		}
		//total rows count
		$totalRec = count($this->Ulasan->getRows());
		//pagination configuration
		$config['target']      = '#komen';
		$config['base_url']    = base_url().'ajaxcheck/'.$slug;
		$config['total_rows']  = $totalRec;
		$config['per_page']    = $this->perPage;
		$config['page']    = $page;

		$this->pagingulasan->initialize($config);

		//get the posts data
		$data['komentar'] = $this->Ulasan->getRows(array('start'=>$offset,'limit'=>$this->perPage));
		$data['paging'] = $this->pagingulasan->create_links();
		$this->load->view('modal/pagingulasan', $data);
	}
	public function booking() {
		if ($_POST == NULL) {
			$id = $this->session->userdata('id_produk');
			$email = $this->session->userdata('email');
			$id_pemesanan = $this->session->userdata('id_pemesanan');
			if ($email != NULL) {
				$data['person'] = $this->Customer->select();
			}
			$data['ulasan'] = $this->Ulasan->selectAll();
			$data['fiturhotel'] = $this->Fitur->hotel();
			$data['gallery'] = $this->Gallery->check();
			$data['allotment'] = $this->Allotment->check($id);
			$data['supplier'] = $this->Supplier->selectAll();
			$data['room'] = $this->Room->select($id);
			$data['fee'] = $this->Fee->selectAll();
			$data['permintaan'] = $this->Permintaan->selectAll();
			$this->load->view('booking/header');
			$this->load->view('booking', $data);
			$this->load->view('booking/footer');
		} else {
			$nama = $this->input->post("nama");
			$email = $this->input->post("email");
			$no_telp = $this->input->post("no_telp");
			$permintaan = $this->input->post("permintaan");
			if ($permintaan != NULL) {
				$permintaanimplode = implode(",", $permintaan);
			} else {
				$permintaanimplode= "";
			}
			$khusus = $this->input->post("khusus");
			$datang = $this->input->post("datang");
			$data_session = array(
							'nama' => $nama,
							'emailpemesan' => $email,
							'no_telp' => $no_telp,
							'permintaan' => $permintaanimplode,
						 	'khusus' => $khusus,
							'datang' => $datang);
				$this->session->set_userdata($data_session);
			$this->Pemesanan->add();
			redirect(base_url("review"));
		}
	}
	public function review() {
		if ($_POST != NULL) {
			$id_pemesanan = $this->input->post('id_pemesanan');
			$this->Pemesanan->update();
			$data = $this->Pemesanan->select($id_pemesanan);
			if ($data->status_pemesanan == 0) {
				redirect(base_url('confirmpayment'));
			} elseif ($data->status_pemesanan == 1) {
				redirect(base_url('evoucher'));
			}
		} else {
			$id_pemesanan = $this->session->userdata('id_pemesanan');
			if ($id_pemesanan != NULL) {
				$data['pemesanan'] = $this->Pemesanan->select($id_pemesanan);
			}
			$id = $this->session->userdata('id_produk');
			$email = $this->session->userdata('email');
			$data['gallery'] = $this->Gallery->check();
			$data['allotment'] = $this->Allotment->check($id);
			$data['supplier'] = $this->Supplier->selectAll();
			$data['room'] = $this->Room->select($id);
			$data['metode'] = $this->Metode->selectAll();
			$data['fee'] = $this->Fee->selectAll();
			$this->load->view('booking/header');
			$this->load->view('review', $data);
			$this->load->view('booking/footer');
		}
	}
	public function paymethod($id) {
		if ($id == 0) {
			$data['cek'] = 0;
		} else {
			$data['cek'] = 1;
		}
		$data['metode'] = $this->Metode->selectAll();
		$this->load->view('modal/review', $data);
	}
	public function norek($id) {
		$data['metode'] = $this->Metode->edit($id);
		$this->load->view('modal/review1', $data);
	}
	public function payment() {
		$this->load->view('booking/header');
		$this->load->view('payment');
		$this->load->view('booking/footer');
	}
	public function confirmpayment() {
		if ($_POST != NULL) {
			$data['cek'] = 1;
			$this->Pemesanan->update();

			$id_pemesanan = $this->session->userdata('id_pemesanan');
			if ($id_pemesanan != NULL) {
				$data['pemesanan'] = $this->Pemesanan->select($id_pemesanan);
			}
			$id = $this->session->userdata('id_produk');
			$email = $this->session->userdata('email');
			$data['allotment'] = $this->Allotment->check($id);
			$data['supplier'] = $this->Supplier->selectAll();
			$data['gallery'] = $this->Gallery->check();
			$data['room'] = $this->Room->select($id);
			$data['fee'] = $this->Fee->selectAll();
			$this->load->view('booking/header');
			$this->load->view('confirmpayment', $data);
			$this->load->view('booking/footer');
		} else {
			$data['cek'] = 0;
			$id_pemesanan = $this->session->userdata('id_pemesanan');
			if ($id_pemesanan != NULL) {
				$data['pemesanan'] = $this->Pemesanan->select($id_pemesanan);
			}
			$id = $this->session->userdata('id_produk');
			$email = $this->session->userdata('email');
			$data['allotment'] = $this->Allotment->check($id);
			$data['supplier'] = $this->Supplier->selectAll();
			$data['gallery'] = $this->Gallery->check();
			$data['room'] = $this->Room->select($id);
			$data['fee'] = $this->Fee->selectAll();
			$this->load->view('booking/header');
			$this->load->view('confirmpayment', $data);
			$this->load->view('booking/footer');
		}
	}
	public function checkconfirm() {
		$id = $this->session->userdata('id_pemesanan');
		$data = $this->Pemesanan->select($id);
		if ($data->status_pemesanan == 0) {
			echo "0";
		} elseif ($data->status == 1) {
			echo "1";
		}
	}
	public function evoucher() {
		if ($_POST != NULL) {

			$data['evoucher'] = $this->Pemesanan->evoucher();
			// Load all views as normal
			$this->load->view('pdf', $data);
			// Get output html
			$html = $this->output->get_output();

			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->set_paper('A4', 'potrait');
			$this->dompdf->render();
			$this->dompdf->stream($data['evoucher']->id_pemesanan);

		} else {
			$id_pemesanan = $this->session->userdata('id_pemesanan');
			if ($id_pemesanan != NULL) {
				$data['pemesanan'] = $this->Pemesanan->select($id_pemesanan);
			}
			$id = $this->session->userdata('id_produk');
			$email = $this->session->userdata('email');
			$data['allotment'] = $this->Allotment->check($id);
			$data['supplier'] = $this->Supplier->selectAll();
			$data['gallery'] = $this->Gallery->check();
			$data['fee'] = $this->Fee->selectAll();
			$data['room'] = $this->Room->select($id);
			$this->load->view('booking/header');
			$this->load->view('evoucher', $data);
			$this->load->view('booking/footer');
		}

	}
	public function myorder() {
		if ($_POST != NULL) {
			$this->Pemesanan->update();
			redirect(base_url('myorder'));
		} else {
			$jumlahRec = count($this->Pemesanan->getproses());
			//pagination configuration
			$config1['target']      = '#proses';
			$config1['base_url']    = base_url().'ajaxOrderProses';
			$config1['total_rows']  = $jumlahRec;
			$config1['per_page']    = $this->perPage;
			$this->pagingproses->initialize($config1);
			$data['pagingorder'] = $this->pagingproses->create_links();
			//get the posts data

			$data['proses'] = $this->Pemesanan->getproses(array('limit'=>$this->perPage));

			$jumlahRec1 = count($this->Pemesanan->getbatal());
			//pagination configuration
			$config2['target']      = '#cancel';
			$config2['base_url']    = base_url().'ajaxOrderBatal';
			$config2['total_rows']  = $jumlahRec1;
			$config2['per_page']    = $this->perPage;
			$this->pagingbatal->initialize($config2);
			$data['pagingbatal'] = $this->pagingbatal->create_links();
			//get the posts data

			$data['batal'] = $this->Pemesanan->getbatal(array('limit'=>$this->perPage));

			$totalRec = count($this->Pemesanan->getselesai());
			//pagination configuration
			$config['target']      = '#selesai';
			$config['base_url']    = base_url().'ajaxOrderSelesai';
			$config['total_rows']  = $totalRec;
			$config['per_page']    = $this->perPage;
			$this->ajax_pagination->initialize($config);
			//get the posts data

			$data['selesai'] = $this->Pemesanan->getselesai(array('limit'=>$this->perPage));
			$data['pagingselesai'] = $this->ajax_pagination->create_links();

			$id = $this->session->userdata('user_id');
			$data['pesanan'] = $this->Pemesanan->person($id);
			$data['ulasan'] = $this->Ulasan->check($id);
			$data['foto'] = $this->Gallery->check();
			$data['popular'] = $this->Supplier->popular();
			$header['title'] = "Daftar Pesanan";
			if($this->session->userdata('level') == "person") {
				$menu['proses'] = $this->Pemesanan->countproses();
			} else {
				$menu['proses'] = NULL;
			}
			$this->load->view('front/header', $header);
			$this->load->view('front/menu', $menu);
			$this->load->view('myorder', $data);
			$this->load->view('front/footer');
		}
	}
	public function ajaxOrderSelesai() {
		$page = $this->input->post('page');
		if(!$page){
				$offset = 0;
		}else{
				$offset = $page;
		}
		//total rows count
		$totalRec = count($this->Pemesanan->getselesai());
		//pagination configuration
		$config['target']      = '#selesai';
		$config['base_url']    = base_url().'ajaxOrderSelesai';
		$config['total_rows']  = $totalRec;
		$config['per_page']    = $this->perPage;
		$config['page']    = $page;

		$this->ajax_pagination->initialize($config);

		//get the posts data
		$data['cek'] = 1;
		$data['selesai'] = $this->Pemesanan->getselesai(array('start'=>$offset,'limit'=>$this->perPage));
		$data['foto'] = $this->Gallery->check();
		$this->load->view('modal/myorder', $data);
	}
	/*public function orderproses() {
		$totalRec = count($this->Pemesanan->getproses());
		//pagination configuration
		$config1['target']      = '#proses';
		$config1['base_url']    = base_url().'ajaxOrderProses';
		$config1['total_rows']  = $totalRec;
		$config1['per_page']    = $this->perPage;
		$this->pagingproses->initialize($config1);
		$data['base'] = $config1['base_url'];
		$data['pagingorder'] = $this->pagingproses->create_links();
		//get the posts data

		$data['proses'] = $this->Pemesanan->getproses(array('limit'=>$this->perPage));
		$data['foto'] = $this->Gallery->check();
		$this->load->view('modal/orderproses', $data);
	}*/
	public function ajaxOrderProses() {
		$page = $this->input->post('page');
		if(!$page){
				$offset = 0;
		}else{
				$offset = $page;
		}
		//total rows count
		$totalRec = count($this->Pemesanan->getproses());
		//pagination configuration
		$jumlahRec = count($this->Pemesanan->getproses());
		//pagination configuration
		$config1['target']      = '#proses';
		$config1['base_url']    = base_url().'ajaxOrderProses';
		$config1['total_rows']  = $jumlahRec;
		$config1['per_page']    = $this->perPage;
		$this->pagingproses->initialize($config1);
		$data['pagingorder'] = $this->pagingproses->create_links();

		//get the posts data
		$data['cek'] = 0;
		$data['proses'] = $this->Pemesanan->getproses(array('start'=>$offset,'limit'=>$this->perPage));
		$data['foto'] = $this->Gallery->check();
		$this->load->view('modal/myorder', $data);
	}
	/*public function orderbatal() {
		$totalRec = count($this->Pemesanan->getbatal());
		//pagination configuration
		$config['target']      = '#batal';
		$config['base_url']    = base_url().'ajaxOrderBatal';
		$config['total_rows']  = $totalRec;
		$config['per_page']    = $this->perPage;
		$this->ajax_pagination->initialize($config);
		//get the posts data

		$data['batal'] = $this->Pemesanan->getbatal(array('limit'=>$this->perPage));
		$data['foto'] = $this->Gallery->check();
		$this->load->view('modal/orderbatal', $data);
	}*/
	public function ajaxOrderBatal() {
		$page = $this->input->post('page');
		if(!$page){
				$offset = 0;
		}else{
				$offset = $page;
		}
		//total rows count
		$jumlahRec1 = count($this->Pemesanan->getbatal());
		//pagination configuration
		$config2['target']      = '#cancel';
		$config2['base_url']    = base_url().'ajaxOrderBatal';
		$config2['total_rows']  = $jumlahRec1;
		$config2['per_page']    = $this->perPage;
		$this->pagingbatal->initialize($config2);
		$data['pagingbatal'] = $this->pagingbatal->create_links();

		//get the posts data
		$data['cek'] = 0;
		$data['proses'] = $this->Pemesanan->getbatal(array('start'=>$offset,'limit'=>$this->perPage));
		$data['foto'] = $this->Gallery->check();
		$this->load->view('modal/myorder', $data);
	}
	public function detailpesanan($id) {
		$id_pemesanan = $id;
		$data['detail'] = $this->Pemesanan->select($id_pemesanan);
		$this->load->view('modal/detailpesanan', $data);
	}
	public function profile() {
		$level = $this->session->userdata('level');
		if ($level == "person") {
			$data['person'] = $this->Customer->select();
			$header['title'] = "Profil";
			$data['popular'] = $this->Supplier->popular();
			if($this->session->userdata('level') == "person") {
				$menu['proses'] = $this->Pemesanan->countproses();
			} else {
				$menu['proses'] = NULL;
			}
			$this->load->view('front/header', $header);
			$this->load->view('front/menu', $menu);
			$this->load->view('profile', $data);
			$this->load->view('front/footer');
		} else {
			redirect(base_url());
		}
	}
	public function detailharga($id) {
		$data['fee'] = $this->Fee->selectAll();
		$data['allotment'] = $this->Allotment->check($id);
		$data['room'] = $this->Room->select($id);
		$this->load->view('modal/detailharga', $data);
	}
	public function detailulasan($id) {
		$data['ulasan'] = $this->Ulasan->select($id);
		$this->load->view('modal/detailulasan', $data);
	}
	public function cekroom() {
		$id = $this->input->post('id_supplier');
		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
		$kamar = $this->input->post('kamar');
		$orang = $this->input->post('orang');
		$data_session = array(
					'dari' => $dari,
					'sampai' => $sampai,
					'kamar' => $kamar,
					'orang' => $orang);
		$this->session->set_userdata($data_session);
		$data['slug'] = $this->Supplier->edit($id);
		$data['room'] = $this->Room->check();
		$data['allotment'] = $this->Allotment->search();
		$data['foto'] = $this->Gallery->check();
		$data['tutup'] = $this->Tutup->check();
		$data['fiturhotel'] = $this->Fitur->hotel();
		$data['fiturroom'] = $this->Fitur->room();
		$data['fee'] = $this->Fee->selectAll();
		$this->load->view('modal/cekroom', $data);
	}
	public function bank() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['metode'] = $this->Metode->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('metode', $data);
		$this->load->view('template/footer');
	}
	public function modalmethod() {
		$data['cek'] = "1";
		$this->load->view('modal/metode', $data);
	}
	public function methodadd() {
		$this->Metode->add();
		echo json_encode(array("status" => TRUE));
	}
	public function methoddelete($id) {
		$this->Metode->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function methodedit($id) {
		$data['cek'] = "0";
		$data['metode'] = $this->Metode->edit($id);
		$this->load->view('modal/metode', $data);
	}
	public function methodupdate() {
		$this->Metode->update();
		echo json_encode(array("status" => TRUE));
	}
	public function tes() {
		/*date_default_timezone_set('Asia/Jakarta');
		$out = new DateTime("2017-11-16");
		$masuk = new DateTime("2017-11-15");
		$interval = $masuk->diff($out);
		// Display
		$selisih = $interval->days;
		for($i = $masuk; $i < $selisih; $i->modify('+1 day')){
			$d1[] = $i;
		}
		print_r($d1);*/
		$id = "53";
		$orderhotel = sprintf('FIELD(id_supplier, %s) DESC', $id);
		$this->db->order_by($orderhotel);
		//$this->db->order_by('FIELD(id_supplier, $id) DESC');
		$c = $this->db->get('supplier')->result();
		print_r($c);
	}
	public function pemesanan() {
		$arr = array();
		$data = $this->Supplier->autocomplete();
		foreach ($data as $key) {
			$arr[] = array('value' => $key->nama_supplier, 'label' => $key->nama_supplier, 'addr' => $key->kota, 'desc'=> "Hotel");
		}
		$menu['akses'] = $this->Akses->selectAll();
		$data['res'] = json_encode($arr);
		$data['bookinglist'] = $this->Pemesanan->bookinglist();
		$data['metode'] = $this->Metode->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu',$menu);
		$this->load->view('bookinglist', $data);
		$this->load->view('template/footer');
	}
	public function modalbooking() {
		$data['cek'] = 1;
		$data['metode'] = $this->Metode->selectAll();
		$this->load->view('modal/addbooking', $data);
	}
	public function changehotel() {
		$id_pemesanan = $this->input->post('id_pemesanan');
		if ($id_pemesanan != NULL) {
			$data['pemesanan'] = $this->Pemesanan->select($id_pemesanan);
		} else {
			$data['pemesanan'] = NULL;
		}
		$data['room'] = $this->Room->changehotel();
		$this->load->view('modal/changehotel', $data);
	}
	public function editbooking($id) {
		$data['cek'] = 0;
		$id_pemesanan = $id;
		$data['booking'] = $this->Pemesanan->select($id_pemesanan);
		$data['metode'] = $this->Metode->selectAll();
		$this->load->view('modal/addbooking', $data);
	}
	public function hitmanual() {
		$produk_id = $this->input->post('produk_id');
		if ($produk_id != NULL) {
			$data = $this->Allotment->hitmanual();
			echo $data;
		}
	}
	public function updatebooking() {
		$this->Pemesanan->updatebooking();
		echo json_encode(array("status" => TRUE));
	}
	public function addbooking() {
		$hotel = $this->input->post("hotel");
		$this->db->where('nama_supplier', $hotel);
		$h = $this->db->get('supplier')->num_rows();
		if ($h > 0) {
			$this->Pemesanan->add();
			echo json_encode(array("status" => TRUE));
		} else {
			echo json_encode(array("status" => FALSE));
		}
	}
	public function confirmbooking($id) {
		$id_pemesanan = $id;
		$this->db->where('id_pemesanan', $id);
		$cek = $this->db->get('pemesanan')->row();
		if ($cek->id_pemesanan != NULL) {

			$this->Pemesanan->confirm($id);

			$data['evoucher'] = $this->Pemesanan->select($id_pemesanan);
			// Load all views as normal
			$this->load->view('pdf', $data);
			// Get output html
			$html = $this->output->get_output();

			// Convert to PDF
			$this->dompdf->load_html($html);
			$this->dompdf->set_paper('A4', 'potrait');
			$this->dompdf->render();
			$this->dompdf->stream("evoucher.pdf");
			file_put_contents("files/evoucher.pdf", $this->dompdf->output());


	    $from_email = 'norok.event3@gmail.com'; // ganti dengan email kalian
	    $subject = 'Evoucher';
	    $message = 'Dear '. $cek->email .',<br /><br />
	                Your Booking Success.<br /><br />
	                Thanks Ya<br />
	                Karunia Travel';

	    $config['protocol'] = 'smtp';
	    $config['smtp_host'] = 'ssl://smtp.gmail.com'; // sesuaikan dengan host email
	    $config['smtp_timeout'] = '7';
	    $config['smtp_port'] = '465'; // sesuaikan
	    $config['smtp_user'] = $from_email;
	    $config['smtp_pass'] = '30april2011'; // ganti dengan password email
	    $config['mailtype'] = 'html';
	    $config['charset'] = 'iso-8859-1';
	    $config['wordwrap'] = TRUE;
	    $config['newline'] = "\r\n";
	    $config['crlf'] = "\r\n";
	    $this->email->initialize($config);

	    $this->email->from($from_email, 'Karunia Travel');
	    $this->email->to($cek->email);
	    $this->email->subject($subject);
	    $this->email->message($message);
			$this->email->attach('files/evoucher.pdf');
	    // gunakan return untuk mengembalikan nilai yang akan selanjutnya diproses ke verifikasi email
	    return $this->email->send();
			unlink('files/evoucher.pdf');
			echo json_encode(array("status" => TRUE));
		}
	}
	public function dipesan() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['metode'] = $this->Metode->selectAll();
		$data['bookinglist'] = $this->Pemesanan->booked();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('booked', $data);
		$this->load->view('template/footer');
	}
	public function cetakpdf() {
		$id = $this->input->post('id');
		//$id_pemesanan = json_decode($id);
		if ($id != NULL) {
			$data_session = array(
						'id_pemesanan' => $id);
			$this->session->set_userdata($data_session);
		}

		$data['evoucher'] = $this->Pemesanan->evoucher();
		// Load all views as normal
		$this->load->view('pdf', $data);
		// Get output html
		$html = $this->output->get_output();

		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->set_paper('A4', 'potrait');
		$this->dompdf->render();
		$this->dompdf->stream($data['evoucher']->id_pemesanan);
	}
	public function viewbooking($id) {
		$id_pemesanan = $id;
		$data['booking'] = $this->Pemesanan->select($id_pemesanan);
		$this->load->view('modal/viewbooking', $data);
	}
	public function rejectbooking($id) {
		$this->Pemesanan->reject($id);
		echo json_encode(array("status" => TRUE));
	}
	public function cancelbooking($id) {
		$this->Pemesanan->cancel($id);
		echo json_encode(array("status" => TRUE));
	}
	public function promo() {
		$header['title'] = "Promo";
		if($this->session->userdata('level') == "person") {
				$menu['proses'] = $this->Pemesanan->countproses();
			} else {
				$menu['proses'] = NULL;
			}
		$this->load->view('front/header', $header);
		$this->load->view('front/menu', $menu);
		$this->load->view('promo');
		$this->load->view('front/footer');
	}
	public function checkbooking() {
		if($this->session->userdata('level') == "person") {
				$menu['proses'] = $this->Pemesanan->countproses();
			} else {
				$menu['proses'] = NULL;
			}
		$data['title'] = "Cek Pemesanan";
		$this->load->view('front/header', $data);
		$this->load->view('front/menu', $menu);
		if ($_POST == NULL) {
			$this->load->view('searchbooking');
		} else {
			$data['foto'] = $this->Gallery->check();
			$data['booking'] = $this->Pemesanan->search();
			$up = $this->input->post('up');
			if ($up != NULL) {
				$this->Pemesanan->update();
				echo "<script>alert('Your booking in progress')
				location.replace('')</script>";
			} else {
				if ($data['booking'] == NULL) {
					echo "<script>alert('ID/Email Not Found')
					location.replace('')</script>";
				} else {
					$this->load->view('checkbooking', $data);
				}
			}
		}
		$this->load->view('front/footer');
	}
	public function zoomkamar() {
		$id = $this->input->post('id');
		$data = $this->Gallery->edit($id);
		echo $data->foto;
	}
	public function detaillayanan($id) {
		$data['supplier'] = $this->Supplier->edit($id);
		$data['fitur'] = $this->Fitur->hotel();
		$this->load->view('modal/layanan', $data);
	}
	public function modalulasan($id) {
		$id_pemesanan = $id;
		$data['booking'] = $this->Pemesanan->select($id_pemesanan);
		$this->load->view('modal/ulasan', $data);
	}
	public function addulasan() {
		$this->Ulasan->add();
		$this->Supplier->updatenilai();
		echo json_encode(array("status" => TRUE));
	}
	public function contact() {
		$data['popular'] = $this->Supplier->popular();
		$header['title'] = "Kontak";
		if($this->session->userdata('level') == "person") {
				$menu['proses'] = $this->Pemesanan->countproses();
			} else {
				$menu['proses'] = NULL;
			}
		$this->load->view('front/header', $header);
		$this->load->view('front/menu', $menu);
		$this->load->view('contact', $data);
		$this->load->view('front/footer');
	}
	public function cekpass() {
		$data = $this->Login->cekpass();
		echo $data;
	}
	public function updatepass() {
		$this->Login->updatepass();
		echo json_encode(array("status" => TRUE));
	}
	public function modalprof() {
		$data['user'] = $this->Login->select();
		$this->load->view('modal/profile', $data);
	}
	public function updateprof() {
		$this->Login->update();
		echo json_encode(array("status" => TRUE));
	}
	public function updateperson() {
		$this->Login->updateperson();
		echo json_encode(array("status" => TRUE));
	}
	public function faq() {
		if($this->session->userdata('level') == "person") {
				$menu['proses'] = $this->Pemesanan->countproses();
			} else {
				$menu['proses'] = NULL;
			}
		$header['title'] = "Faq";
		$data['popular'] = $this->Supplier->popular();
		$this->load->view('front/header', $header);
		$this->load->view('front/menu', $menu);
		$this->load->view('faq', $data);
		$this->load->view('front/footer');
	}
	public function fee() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['fee'] = $this->Fee->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('fee', $data);
		$this->load->view('template/footer');
	}
	public function modalfee() {
		$data['cek'] = 0;
		$this->load->view('modal/fee', $data);
	}
	public function editfee($id) {
		$data['cek'] = 1;
		$data['fee'] = $this->Fee->edit($id);
		$this->load->view('modal/fee', $data);
	}
	public function feeadd() {
		$this->Fee->add();
		echo json_encode(array("status" => TRUE));
	}
	public function feeupdate() {
		$this->Fee->update();
		echo json_encode(array("status" => TRUE));
	}
	public function permintaan() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['permintaan'] = $this->Permintaan->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('permintaan', $data);
		$this->load->view('template/footer');
	}
	public function modalpermintaan() {
		$data['cek'] = 0;
		$this->load->view('modal/permintaan', $data);
	}
	public function editpermintaan($id) {
		$data['cek'] = 1;
		$data['permintaan'] = $this->Permintaan->edit($id);
		$this->load->view('modal/permintaan', $data);
	}
	public function permintaanadd() {
		$this->Permintaan->add();
		echo json_encode(array("status" => TRUE));
	}
	public function permintaanupdate() {
		$this->Permintaan->update();
		echo json_encode(array("status" => TRUE));
	}
	public function permintaandelete($id) {
		$this->Permintaan->delete($id);
		echo json_encode(array("status" => TRUE));
	}
	public function pertanyaan() {
		$menu['akses'] = $this->Akses->selectAll();
		$data['pertanyaan'] = $this->Pertanyaan->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu', $menu);
		$this->load->view('pertanyaan', $data);
		$this->load->view('template/footer');
	}
	public function viewpertanyaan($id) {
		$data['pertanyaan'] = $this->Pertanyaan->edit($id);
		$this->load->view('modal/pertanyaan', $data);
	}
	public function landingmodal() {
		$data['id'] = $this->input->post('id');
		$data['foto'] = $this->Gallery->check();
		$data['supplier'] = $this->Supplier->landingmodal();
		//$data['ulasan'] = $this->Ulasan->landing();
		$this->load->view('modal/landingmodal', $data);
	}
}
