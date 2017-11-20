<?php
class Pemesanan extends CI_model {
	public function pending() {
		$status = 0;
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('status_pemesanan', $status);
		if ($supplier_id != NULL) {
			$this->db->where('supplier_id', $supplier_id);
		}
		return $this->db->get('pemesanan')->result();
	}
	public function accept() {
		$status = 1;
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('status_pemesanan', $status);
		if ($supplier_id != NULL) {
			$this->db->where('supplier_id', $supplier_id);
		}
		return $this->db->get('pemesanan')->result();
	}
	public function batal() {
		$status = 2;
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
		$this->db->where('status_pemesanan', $status);
		$this->db->order_by("tgl_pemesan", "desc");
    return $this->db->get()->result();
	}
	public function add() {
		$hotel = $this->input->post("hotel");
		$pajak = $this->db->get('fee')->row();
		if ($hotel != NULL) {
			$this->db->where('nama_supplier', $hotel);
			$h = $this->db->get('supplier')->row();
			$supplier_id = $h->id_supplier;
			$status = 1;
		} else {
			$supplier_id = $this->input->post("supplier_id");
			$status = 0;
		}

		$nama = $this->input->post("nama");
		$email = $this->input->post("email");
		$no_telp = $this->input->post("no_telp");
		$khusus = $this->input->post("khusus");
		$permintaan = $this->input->post("permintaan");
		if ($permintaan !=NULL) {
			$permintaan1 = implode(",", $permintaan);
		} else {
			$permintaan1 = NULL;
		}
		if ($khusus != NULL) {
			$permintaanimplode = $permintaan1.",".$khusus;
		} else {
			$permintaanimplode = $permintaan1;
		}

		$datang = $this->input->post("datang");
		$orang = $this->input->post("orang");
		$kamar = $this->input->post("kamar");
		$dari = $this->input->post("dari");
		$sampai = $this->input->post("sampai");
		$produk_id = $this->input->post("produk_id");

		$bayar = $this->input->post("bayar");
		$user = $this->session->userdata('user_id');


		date_default_timezone_set('Asia/Jakarta');
		$kodedate = date('jmy');
		$date = date('Y-m-d');
		$waktu = date('Y-m-d G:i:s');

		$this->db->select_max('id_pemesanan');
		$this->db->like('id_pemesanan', $kodedate);
		$cek = $this->db->get('pemesanan')->row();
		if ($cek->id_pemesanan > 0) {
			$kode = $cek->id_pemesanan;
			$kode1 = substr($kode,-3);
			$kode2 = $kode1 + 1;
		} else {
			$kode2 = 001;
		}

		$this->db->select_max('user_id');
		$this->db->like('user_id', "g");
		$cek1 = $this->db->get('pemesanan')->row();
		$level = $this->session->userdata('level');
		if ($user != NULL) {
			if ($level == "staff") {
				$user_id = "s".$user;
			} elseif ($level == "person") {
				$user_id = "p".$user;
			}
		} else {
			if ($cek1->user_id != NULL) {
				$cek2 = substr($cek1->user_id, 1);
				$cek3 = $cek2 + 1;
				$user_id = "g".$cek3;
			} else {
				$user_id = "g1";
			}
		}

		$kodeunik = $kodedate.str_pad($kode2, 3, "0", STR_PAD_LEFT);
		$pay = substr($kodeunik, -3);
		$hit = $bayar - $pay;
		$bayar1= substr($hit, -3);
		$manual = $this->input->post('manual');
		if ($manual == NULL) {
			$tambahan= $pajak->fee/100 * $bayar;
			$pay1 = $bayar + $tambahan - $bayar1;
		} else {
			$pay1 = $bayar;
		}

		//$pay1 = $bayar1.$pay;
		if ($manual == NULL) {
			$data = array('id_pemesanan' => $kodeunik, 'user_id' => $user_id, 'nama_pemesan' => $nama, 'email' => $email,
			 'no_telp' => $no_telp, 'produk_id' => $produk_id, 'kamar' => $kamar, 'orang' => $orang, 'tgl_pemesanan' => $waktu,
			 'datang' => $datang, 'tgl_in' => $dari, 'tgl_out' => $sampai, 'ket' => $permintaanimplode, 'bayar' => $pay1,
			  'supplier_id' => $supplier_id, 'status_pemesanan' => $status);
		} else {
			$pembayaran = $this->input->post('pembayaran');
			$data = array('id_pemesanan' => $kodeunik, 'user_id' => $user_id, 'nama_pemesan' => $nama, 'email' => $email,
			 'no_telp' => $no_telp, 'produk_id' => $produk_id, 'kamar' => $kamar, 'orang' => $orang, 'tgl_pemesanan' => $waktu,
			 'datang' => $datang, 'tgl_in' => $dari, 'tgl_out' => $sampai, 'ket' => $permintaanimplode, 'bayar' => $pay1,
			  'supplier_id' => $supplier_id, 'metode_id' => $pembayaran, 'status_pemesanan' => $status);
		}
		$this->db->insert('pemesanan', $data);
		$data_session = array('id_pemesanan' => $kodeunik);
		$this->session->set_userdata($data_session);
	}
	public function select($id_pemesanan) {
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
		$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
		$this->db->where('pemesanan.id_pemesanan', $id_pemesanan);
		$this->db->select('supplier.no_telp AS no_supplier,
                   pemesanan.no_telp AS no_pemesan,
                   supplier.email AS email_supplier,
                   pemesanan.email AS email_pemesan');
		$this->db->order_by("pemesanan.tgl_pemesanan", "desc");
    return $this->db->get()->row();
	}
	public function update() {
		$id = $this->input->post('id_pemesanan');
		$pembayaran = $this->input->post('pembayaran');
		$fo = $this->input->post('foto');
		if ($pembayaran != NULL) {
			$data = array('metode_id' => $pembayaran);
		}

		$config['upload_path']   = './files/';
		$config['file_name'] = $id;
	    $config['allowed_types'] = '*';
	    $config['max_size']      = 0;
	    $config['max_width']     = 0;
	    $config['max_height']    = 0;
	    $this->load->library('upload', $config);
	         // script upload file pertama
	         $this->upload->do_upload('foto');
	         $foto = $this->upload->data();
				$size = $foto['file_size'];
				if ($size != NULL) {
					$foto1 = $foto['file_name'];
					$data = array('bukti' => $foto1);
				}

		$this->db->where('id_pemesanan', $id);
		$this->db->update('pemesanan', $data);
	}
	public function updatebooking() {

		$hotel = $this->input->post("hotel");
		if ($hotel != NULL) {
			$this->db->where('nama_supplier', $hotel);
			$h = $this->db->get('supplier')->row();
			$supplier_id = $h->id_supplier;
		}

		$id_pemesanan = $this->input->post("id_pemesanan");
		$nama = $this->input->post("nama");
		$email = $this->input->post("email");
		$no_telp = $this->input->post("no_telp");
		$khusus = $this->input->post("khusus");
		$permintaan = $this->input->post("permintaan");
		if ($permintaan !=NULL) {
			$permintaan1 = implode(",", $permintaan);
		} else {
			$permintaan1 = NULL;
		}
		if ($khusus != NULL) {
			$permintaanimplode = $permintaan1.",".$khusus;
		} else {
			$permintaanimplode = $permintaan1;
		}

		$datang = $this->input->post("datang");
		$orang = $this->input->post("orang");
		$kamar = $this->input->post("kamar");
		$dari = $this->input->post("dari");
		$sampai = $this->input->post("sampai");
		$produk_id = $this->input->post("produk_id");

		$bayar = $this->input->post("bayar");
		$user = $this->session->userdata('user_id');

		$b = substr($id_pemesanan,-3);
		$b1 = $bayar - $b;
		$b2 = substr($b1, -3);
		$pay1 = $bayar - $b2;

		//$pay1 = $bayar1.$pay;
		$data = array('nama_pemesan' => $nama, 'email' => $email,'no_telp' => $no_telp, 'produk_id' => $produk_id,
		'kamar' => $kamar, 'orang' => $orang, 'tgl_in' => $dari, 'tgl_out' => $sampai,
		 'bayar' => $pay1, 'supplier_id' => $supplier_id);

		$this->db->where('id_pemesanan', $id_pemesanan);
		$this->db->update('pemesanan', $data);
	}
	public function person($id) {
		$user_id = "p".$id;
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
		$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
		$this->db->join('metode', 'pemesanan.metode_id = metode.id_metode');
		$this->db->where('pemesanan.user_id', $user_id);
		$this->db->order_by("pemesanan.tgl_pemesanan", "desc");
    return $this->db->get()->result();
	}
	public function bookinglist() {
		$status = 0;
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
		$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
		$this->db->where('pemesanan.status_pemesanan', $status);
		$this->db->order_by("pemesanan.tgl_pemesanan", "desc");
    return $this->db->get()->result();
	}
	public function confirm($id) {
		$status = 1;
		$this->db->where('id_pemesanan', $id);
		$pesan = $this->db->get('pemesanan')->row();
		$minus = $pesan->kamar;
		$kamar = $pesan->produk_id;
		$dari = $pesan->tgl_in;
		$sampai = $pesan->tgl_out;

		$date1 = date('Y-m-d', strtotime($dari));
		$end_date1 = date('Y-m-d', strtotime($sampai));
		while (strtotime($date1) <= strtotime($end_date1)) {
		$d1[] = $date1;
		$date1 = date ("Y-m-d", strtotime("+1 day", strtotime($date1)));
		}

		$this->db->where('produk_id', $kamar);
		$allotment = $this->db->get('allotment')->result();

		$this->db->where('id_produk', $kamar);
		$room = $this->db->get('produk')->row();


		$data1 = array();
		$data2 = array();
		$data3 = array();
		foreach ($d1 as $key => $value) {
			$this->db->where('dari <=', $value);
			$this->db->where('sampai >=', $value);
			$this->db->where('produk_id', $kamar);
			$aa = $this->db->get('allotment')->row();
			$d1 = date ("Y-m-d", strtotime("+1 day", strtotime($value)));
			$d2 = date ("Y-m-d", strtotime("-1 day", strtotime($value)));
			if ($aa != NULL) {
				if ($aa->dari == $value) {
					$jumlah = $aa->jumlah - $minus;
					if ($aa->sampai == $value) {
						$data2 = array('jumlah' => $jumlah);
						$this->db->where('id_allotment', $aa->id_allotment);
						$this->db->update('allotment', $data2);
					} else {
						$data1 = array('jumlah' => $jumlah, 'dari' => $value, 'sampai' => $value,
													'produk_id' => $kamar, 'harga' => $aa->harga, 'supplier_id' => $aa->supplier_id,
													'status' => $status);
						$this->db->insert('allotment', $data1);
						$this->db->insert_id();

						$data2 = array('dari' => $d1, 'sampai' => $aa->sampai);
						$this->db->where('id_allotment', $aa->id_allotment);
						$this->db->update('allotment', $data2);
					}
				} else {
					if ($aa->sampai == $value) {
						$jumlah = $aa->jumlah - $minus;
						if ($aa->dari == $value) {
							$data2 = array('jumlah' => $jumlah);
							$this->db->where('id_allotment', $aa->id_allotment);
							$this->db->update('allotment', $data2);
						} else {
							$data1 = array('jumlah' => $jumlah, 'dari' => $value, 'sampai' => $value,
														'produk_id' => $kamar, 'harga' => $aa->harga, 'supplier_id' => $aa->supplier_id,
														'status' => $status);
							$this->db->insert('allotment', $data1);
							$this->db->insert_id();

							$data2 = array('dari' => $aa->dari, 'sampai' => $d2);
							$this->db->where('id_allotment', $aa->id_allotment);
							$this->db->update('allotment', $data2);
						}
					} elseif($aa->dari <=$value && $aa->sampai >=$value){
						$jumlah = $aa->jumlah - $minus;

						$data1 = array('jumlah' => $jumlah, 'dari' => $value, 'sampai' => $value,
													'produk_id' => $kamar, 'harga' => $aa->harga, 'supplier_id' => $aa->supplier_id,
													'status' => $status);
						$this->db->insert('allotment', $data1);
						$this->db->insert_id();

						$data3 = array('jumlah' => $aa->jumlah, 'dari' => $aa->dari, 'sampai' => $d2,
													'produk_id' => $kamar, 'harga' => $aa->harga, 'supplier_id' => $aa->supplier_id,
													'status' => $status);
						$this->db->insert('allotment', $data3);
						$this->db->insert_id();

						$data2 = array('dari' => $d1, 'sampai' => $aa->sampai);
						$this->db->where('id_allotment', $aa->id_allotment);
						$this->db->update('allotment', $data2);
					}
				}
			} else {
				$jumlah = $room->stok - $minus;
				$data1 = array('jumlah' => $jumlah, 'dari' => $value, 'sampai' => $value,
											'produk_id' => $kamar, 'harga' => $room->harga_produk, 'supplier_id' => $room->supplier_id,
											'status' => $status);
				$this->db->insert('allotment', $data1);
				$this->db->insert_id();
			}
		}

		$status = 1;
		$data = array('status_pemesanan' => $status);
		$this->db->where('id_pemesanan', $id);
		$this->db->update('pemesanan', $data);
	}
	public function booked() {
		$supplier_id = $this->session->userdata('supplier_id');
		if ($supplier_id == NULL) {
			$status = 1;
			$this->db->select('*');
			$this->db->from('pemesanan');
			$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
			$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
			$this->db->where('pemesanan.status_pemesanan', $status);
			$this->db->order_by("pemesanan.tgl_pemesanan", "desc");
	    return $this->db->get()->result();
		} else {
			$status = 1;
			$this->db->select('*');
			$this->db->from('pemesanan');
			$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
			$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
			$this->db->where('pemesanan.supplier_id', $supplier_id);
			$this->db->where('pemesanan.status_pemesanan', $status);
			$this->db->order_by("pemesanan.tgl_pemesanan", "desc");
	    return $this->db->get()->result();
		}

	}
	function getselesai($params = array()) {
		$id = $this->session->userdata('user_id');
		$status = 1;
		$user_id = "p".$id;
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
		$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
		$this->db->join('metode', 'pemesanan.metode_id = metode.id_metode');
		$this->db->where('pemesanan.user_id', $user_id);
		$this->db->where('pemesanan.status_pemesanan', $status);
		$this->db->order_by("pemesanan.tgl_pemesanan", "desc");
			//$this->db->order_by("nama_supplier", "asc");

        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        $query = $this->db->get();

        return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
	function getproses($params = array()) {
		$id = $this->session->userdata('user_id');
		$status = 0;
		$user_id = "p".$id;
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
		$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
		$this->db->join('metode', 'pemesanan.metode_id = metode.id_metode');
		$this->db->where('pemesanan.user_id', $user_id);
		$this->db->where('pemesanan.status_pemesanan', $status);
		$this->db->order_by("pemesanan.tgl_pemesanan", "desc");
			//$this->db->order_by("nama_supplier", "asc");

        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        $query = $this->db->get();

        return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
	function getbatal($params = array()) {
		$id = $this->session->userdata('user_id');
		$status = 2;
		$user_id = "p".$id;
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
		$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
		$this->db->join('metode', 'pemesanan.metode_id = metode.id_metode');
		$this->db->where('pemesanan.user_id', $user_id);
		$this->db->where('pemesanan.status_pemesanan', $status);
		$this->db->order_by("pemesanan.tgl_pemesanan", "desc");
			//$this->db->order_by("nama_supplier", "asc");

        if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit'],$params['start']);
        }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
            $this->db->limit($params['limit']);
        }

        $query = $this->db->get();

        return ($query->num_rows() > 0)?$query->result_array():FALSE;
  }
	function selesai($number,$offset){
		return $query = $this->db->get('pemesanan',$number,$offset)->result();
	}

	function hitselesai(){
		$id = $this->session->userdata('user_id');
		$status = 1;
		$user_id = "p".$id;
		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
		$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
		$this->db->join('metode', 'pemesanan.metode_id = metode.id_metode');
		$this->db->where('pemesanan.user_id', $user_id);
		$this->db->where('pemesanan.status_pemesanan', $status);
		$this->db->order_by("pemesanan.tgl_pemesanan", "desc");
		return $this->db->get()->num_rows();
	}
	public function evoucher() {
		$id = $this->input->post('id_pemesanan');
		if ($id != NULL) {
			$id_pemesanan = $id;
		} else {
			$id_pemesanan = $this->session->userdata('id_pemesanan');
		}

		$this->db->select('*');
		$this->db->from('pemesanan');
		$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
		$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
		$this->db->where('pemesanan.id_pemesanan', $id_pemesanan);
		$this->db->select('supplier.no_telp AS no_supplier,
                   pemesanan.no_telp AS no_pemesan,
                   supplier.email AS email_supplier,
                   pemesanan.email AS email_pemesan');
		return $this->db->get()->row();
		}
		public function reject($id) {
			$this->db->where('id_pemesanan', $id);
			$this->db->update('pemesanan', array('status_pemesanan' => "3"));
		}
		public function cancel($id) {
			$this->db->where('id_pemesanan', $id);
			$this->db->update('pemesanan', array('status_pemesanan' => "2"));
		}
		public function search() {
			$id = $this->input->post('id_pemesanan');
			$email = $this->input->post('email');
			$this->db->select('*');
			$this->db->from('pemesanan');
			$this->db->join('produk', 'pemesanan.produk_id = produk.id_produk');
			$this->db->join('supplier', 'pemesanan.supplier_id = supplier.id_supplier');
			$this->db->where('pemesanan.id_pemesanan', $id);
			$this->db->where('pemesanan.email', $email);
			$this->db->select('supplier.no_telp AS no_supplier,
	                   pemesanan.no_telp AS no_pemesan,
	                   supplier.email AS email_supplier,
	                   pemesanan.email AS email_pemesan');
			return $this->db->get()->row();
		}
		public function countproses() {
			$status = 0;
			$user_id = $this->session->userdata('user_id');
			$this->db->where('user_id', "p".$user_id);
			$this->db->where('status_pemesanan', $status);
			$c = $this->db->get('pemesanan')->result();
			return count($c);
		}
}
