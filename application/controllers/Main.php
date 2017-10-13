<?php
class Main extends CI_Controller {
	public function __construct() {
		parent::__construct();
		$this->load->model('Login');
		$this->load->model('Supplier');
		$this->load->model('Room');//mari
		$this->load->model('agent'); //log blm ada
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
		$this->load->model('Autocomplete');
		$this->perPage = 1;
	}
	public function home() {
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('home');
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
		$this->session->sess_destroy();
		redirect(base_url('home'));
	}
	public function supplier() {
		$data['supplier'] = $this->Supplier->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('supplier', $data);
		$this->load->view('template/footer');
	}
	public function modalsupp() {
		$data['cek'] = "1";
		$this->load->view('modal/supplier', $data);
	}
	public function suppadd() {
		$this->Supplier->add();
		echo "<script>alert('Success, Please re log in')
		location.replace('logout')</script>";
	}
	public function suppedit($id) {
		$data['cek'] = "0";
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
	public function room() {
		$data['room'] = $this->Room->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('room', $data);
		$this->load->view('template/footer');
	}
	public function modalr() {
		$data['cek'] = "1";
		$data['bed'] = $this->Bed->selectAll();
		$data['fitur'] = $this->Fitur->room();
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
	public function feature() {
		$data['fitur'] = $this->Fitur->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
	public function allotment() {
		$data['allotment'] = $this->Allotment->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
	public function user() {
		$data['user'] = $this->User->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
	public function access() {
		$data['akses'] = $this->Akses->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
	public function gallery() {
		$data['room'] = $this->Room->selectAll();
		$data['variable'] = $this->Gallery->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
				$data['cek'] = "0";
				$data['kota'] = $this->City->selectAll();
				$data['nearby'] = $this->Nearby->selectAll();
				$data['fitur'] = $this->Fitur->hotel();
				$this->load->view('template/header');
				$this->load->view('template/menu');
				$this->load->view('hotel', $data);
				$this->load->view('template/footer');
			}else {
				$data['cek'] = "1";
				$data['nearby'] = $this->Nearby->selectAll();
				$data['kota'] = $this->City->selectAll();
				$data['fitur'] = $this->Fitur->hotel();
				$data['supp'] = $this->Supplier->edithotel();
				$this->load->view('template/header');
				$this->load->view('template/menu');
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
	public function nearby() {
		$data['nearby'] = $this->Nearby->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
	public function calendar() {
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
		date_default_timezone_set('Asia/Jakarta');
		$date4 = date($data3->created);
		$date5 = date ("Y-m-d", strtotime("+10 year", strtotime($date4)));
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
				$hargadef = "Rp. ".$key->harga_produk;
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
						$tt = $key1->nama_produk. " " .$key1->stok. " " ."Rp. ".$key1->harga_produk;
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
									$t = $r->nama_produk. " " .$r->jumlah. " " ."Rp. ".$r->harga;
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
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('404');
		$this->load->view('template/footer');
	}
	public function closed() {
		$data['closed'] = $this->Tutup->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
	public function bed() {
		$data['bed'] = $this->Bed->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
		$data['staff'] = $this->Staff->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
	public function log() {
		$data['log'] = $this->Log1->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
		$this->load->view('log', $data);
		$this->load->view('template/footer');
	}
	public function city() {
		$data['kota'] = $this->City->selectAll();
		$this->load->view('template/header');
		$this->load->view('template/menu');
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
			$res['res'] = json_encode($arr);
			$this->load->view('front/header', $res);
			$this->load->view('front/menu');
			$this->load->view('index');
			$this->load->view('front/footer');
		} else {
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
				$this->load->view('front/header');
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
			foreach ($data as $key1) {
				$arr1[] = array('value' => $key1->nama_supplier, 'label' => $key1->nama_supplier, 'addr' => $key1->kota, 'desc'=> "Hotel");
			}
			$data['search'] = $this->Supplier->search();
			$data['allotment'] = $this->Allotment->search();
			$data['room'] = $this->Room->check();
			$data['foto'] = $this->Gallery->check();
			$res['res'] = json_encode($arr);
			$res['res1'] = json_encode($arr1);

			$this->load->view('front/header', $res);
			$this->load->view('front/menu');
			$this->load->view('search', $data);
			$this->load->view('front/footer');
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
	public function check($id) {
		if ($id == NULL) {
			redirect('index');
		} else {
			$data['gallery'] = $this->Gallery->selectAll();
			$data['slug'] = $this->Supplier->judul($id);
			$data['room'] = $this->Room->check();
			$data['allotment'] = $this->Allotment->search();
			$data['foto'] = $this->Gallery->check();
			$this->load->view('front/header');
			$this->load->view('front/menu');
			$this->load->view('check', $data);
			$this->load->view('front/footer');
		}
	}
}
