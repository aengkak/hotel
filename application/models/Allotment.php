<?php
class Allotment extends CI_model {
	public function selectAll() {
		$status = "1";
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->select('*');
		$this->db->from('allotment');
		$this->db->join('produk', 'allotment.produk_id = produk.id_produk');
		$this->db->where('allotment.supplier_id', $supplier_id);
		$this->db->where('allotment.status', $status);
		$this->db->order_by("produk_id", "desc");
    return $this->db->get()->result();
  }
  public function add() {
		$jumlah = $this->input->post('jumlah');
		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
		$produk_id = $this->input->post('produk_id');
		$harga = $this->input->post('harga');
		$supplier_id = $this->session->userdata('supplier_id');
		$status="1";

		$this->db->where('dari >=', $dari);
		$this->db->where('sampai <=', $sampai);
		$this->db->where('produk_id', $produk_id);
		$this->db->where('status', $status);
		$cek = $this->db->get('allotment')->num_rows();
		if ($cek == 0) {
			$this->db->where('dari <=', $dari);
			$this->db->where('sampai >=', $dari);
			$this->db->where('produk_id', $produk_id);
			$this->db->where('status', $status);
			$cek1 = $this->db->get('allotment')->num_rows();
			if($cek1 == 0){
				$data = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $sampai,
											'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
											'status' => $status);
				$this->db->insert('allotment', $data);
				$this->db->insert_id();

				$user_id = $this->session->userdata('user_id');
				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();
				date_default_timezone_set('Asia/Jakarta');
				$date = date('Y-m-d H:i:s');
				$datalog = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$dari." - "."$sampai", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog);
				$this->db->insert_id();

				echo json_encode(array("status" => TRUE));
			}else {
				$this->response(array("status" => FALSE));
			}
		} else {
			$this->response(array("status" => FALSE));
		}

	}
	public function delete($id){
			$this->db->where('id_allotment', $id);
			$this->db->update('allotment', array('status' => "0"));

			$supplier_id = $this->session->userdata('supplier_id');
			$user_id = $this->session->userdata('user_id');
			$this->db->select('*');
			$this->db->from('allotment');
			$this->db->join('produk', 'allotment.produk_id = produk.id_produk');
			$this->db->where('allotment.id_allotment', $id);
			$cek = $this->db->get()->row();
			date_default_timezone_set('Asia/Jakarta');
			$date = date('Y-m-d H:i:s');
			$datalog = array('user_id' => $user_id, 'ket' => "Delete Allotment"." ".$cek->nama_produk." ".$cek->dari." - "."$cek->sampai", 'supplier_id' => $supplier_id, 'waktu' => $date);
			$this->db->insert('log', $datalog);
			$this->db->insert_id();
	}
	public function edit($id) {
		$this->db->select('*');
		$this->db->from('allotment');
		$this->db->join('produk', 'allotment.produk_id = produk.id_produk');
		$this->db->where('allotment.id_allotment', $id);
		return $this->db->get()->row();
	}
	public function update(){
		$id = $this->input->post('id_allotment');
		$jumlah = $this->input->post('jumlah');
		$dari = $this->input->post('dari');
		$sampai = $this->input->post('sampai');
		$produk_id = $this->input->post('produk_id');
		$harga = $this->input->post('harga');
		$data = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $sampai,
		 							'produk_id' => $produk_id, 'harga' => $harga);
		$this->db->where('id_allotment', $id);
		$this->db->update('allotment', $data);

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('allotment');
		$this->db->join('produk', 'allotment.produk_id = produk.id_produk');
		$this->db->where('allotment.id_allotment', $id);
		$cek = $this->db->get()->row();
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$dari." - "."$sampai", 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function calendar() {
		$status = "1";
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->select('*');
		$this->db->from('allotment');
		$this->db->join('produk', 'allotment.produk_id = produk.id_produk');
		$this->db->where('allotment.supplier_id', $supplier_id);
		$this->db->where('allotment.status', $status);
    return $this->db->get()->result();
	}
	public function editcalendar($id) {
		$this->db->select('*');
		$this->db->from('allotment');
		$this->db->join('produk', 'allotment.produk_id = produk.id_produk');
		$this->db->where('allotment.id_allotment', $id);
    return $this->db->get()->row();
	}
	public function newcalendar() {
		$jumlah = $this->input->post('jumlah');
		$dari = $this->input->post('start');
		$produk_id = $this->input->post('produk_id');
		$harga = $this->input->post('harga');
		$supplier_id = $this->session->userdata('supplier_id');
		$status="1";

		$data = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $dari,
									'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
									'status' => $status);
		$this->db->insert('allotment', $data);
		$this->db->insert_id();
	}
	public function updatecalendar() {
		$sub_id = $this->input->post('id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$user_id = $this->session->userdata('user_id');
		$a = substr($sub_id,1);
		if ($a == "a") {
			$id = $a;
		} else {
			$id = $sub_id;
		}
		$jumlah = $this->input->post('jumlah');
		$dari = $this->input->post('start');
		$produk_id = $this->input->post('produk_id');
		$harga = $this->input->post('harga');
		$supplier_id = $this->session->userdata('supplier_id');
		$status = "1";
		$st = $this->input->post('st');
		$d1 = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
		$d2 = date ("Y-m-d", strtotime("-1 day", strtotime($dari)));

		if ($st == 0) {
			$data = array('produk_id' => $produk_id, 'dari' => $dari, 'sampai' => $dari, 'supplier_id' => $supplier_id, 'status' => $status);
			$this->db->insert('tutup', $data);
			$this->db->insert_id();

			$this->db->where('id_produk', $produk_id);
			$cek = $this->db->get('produk')->row();
			$datalog = array('user_id' => $user_id, 'ket' => "Insert Closed"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
			$this->db->insert('log', $datalog);
			$this->db->insert_id();
		} else {
			$this->db->where('supplier_id', $supplier_id);
			$this->db->where('dari <=', $dari);
			$this->db->where('sampai >=', $dari);
			$this->db->where('produk_id', $produk_id);
			$aa = $this->db->get('allotment');
			$c1 = $aa->row();
			$c = $aa->num_rows();
			$id_allot = $c1->id_allotment;
			$d = $c1->dari;
			$s = $c1->sampai;
			$h = $c1->harga;
			$j = $c1->jumlah;
			$p = $c1->produk_id;

			if ($c == 0) {
				$data1 = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $dari,
											'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
											'status' => $status);
				$this->db->insert('allotment', $data1);
				$this->db->insert_id();

				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();
				$datalog = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog);
				$this->db->insert_id();
			} else {
				if ($dari == $d) {
					$this->db->where('id_produk', $produk_id);
					$cek = $this->db->get('produk')->row();

					if ($dari == $s) {
						$data9 = array('jumlah' => $jumlah, 'harga' => $harga);
						$this->db->where('id_allotment', $id_allot);
						$this->db->update('allotment', $data9);

						$datalog1 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
						$this->db->insert('log', $datalog1);
						$this->db->insert_id();
					} else {
						$data7 = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $dari,
													'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
													'status' => $status);
						$this->db->insert('allotment', $data7);
						$this->db->insert_id();

						$datalog = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
						$this->db->insert('log', $datalog);
						$this->db->insert_id();

						$data9 = array('dari' => $d1, 'sampai' => $s);
						$this->db->where('id_allotment', $id_allot);
						$this->db->update('allotment', $data9);

						$datalog1 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$d1." - "."$s", 'supplier_id' => $supplier_id, 'waktu' => $date);
						$this->db->insert('log', $datalog1);
						$this->db->insert_id();
					}
				} else {
					if ($dari == $s) {
						$this->db->where('id_produk', $produk_id);
						$cek = $this->db->get('produk')->row();
						if ($dari = $d) {
							$data2 = array('jumlah' => $jumlah, 'harga' => $harga);
							$this->db->where('id_allotment', $id_allot);
							$this->db->update('allotment', $data2);

							$datalog1 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
							$this->db->insert('log', $datalog1);
							$this->db->insert_id();
						} else {
							$data1 = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $dari,
														'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
														'status' => $status);
							$this->db->insert('allotment', $data1);
							$this->db->insert_id();

							$datalog = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
							$this->db->insert('log', $datalog);
							$this->db->insert_id();

							$data2 = array('dari' => $d, 'sampai' => $d2);
							$this->db->where('id_allotment', $id_allot);
							$this->db->update('allotment', $data2);

							$datalog1 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$d." - "."$d2", 'supplier_id' => $supplier_id, 'waktu' => $date);
							$this->db->insert('log', $datalog1);
							$this->db->insert_id();
						}
					} else {
						$this->db->where('id_produk', $produk_id);
						$cek = $this->db->get('produk')->row();

						$data = array('jumlah' => $j, 'dari' => $d, 'sampai' => $d2,
													'produk_id' => $p, 'harga' => $h, 'supplier_id' => $supplier_id,
													'status' => $status);
						$this->db->insert('allotment', $data);
						$this->db->insert_id();

						$datalog = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$d." - "."$d2", 'supplier_id' => $supplier_id, 'waktu' => $date);
						$this->db->insert('log', $datalog);
						$this->db->insert_id();

						$data1 = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $dari,
													'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
													'status' => $status);
						$this->db->insert('allotment', $data1);
						$this->db->insert_id();

						$datalog1 = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
						$this->db->insert('log', $datalog1);
						$this->db->insert_id();

						$data2 = array('dari' => $d1, 'sampai' => $s);
						$this->db->where('id_allotment', $id_allot);
						$this->db->update('allotment', $data2);

						$datalog2 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$d1." - "."$s", 'supplier_id' => $supplier_id, 'waktu' => $date);
						$this->db->insert('log', $datalog2);
						$this->db->insert_id();
					}
				}
			}
		}

	}
	public function deletecalendar($id){
		$dari = $this->input->post('start');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$user_id = $this->session->userdata('user_id');
		$d1 = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
		$d2 = date ("Y-m-d", strtotime("-1 day", strtotime($dari)));
		$this->db->where('id_allotment', $id);
		$c1 = $this->db->get('allotment')->row();
		$d = $c1->dari;
		$s = $c1->sampai;
		$jumlah = $c1->jumlah;
		$harga = $c1->harga;
		$supplier_id = $this->session->userdata('supplier_id');
		$produk_id = $c1->produk_id;
		$status = "1";

		if ($dari == $d) {
			if ($dari == $s) {
				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();

				//log
				$datalog = array('user_id' => $user_id, 'ket' => "Delete Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog);
				$this->db->insert_id();

				$this->db->delete('allotment', array('id_allotment' => $id));
			} else {
				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();

				//log
				$datalog = array('user_id' => $user_id, 'ket' => "Delete Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog);
				$this->db->insert_id();

				$data2 = array('dari' => $d1, 'sampai' => $s);
				$this->db->where('id_allotment', $id);
				$this->db->update('allotment', $data2);

				//log
				$datalog1 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$d1." - "."$s", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog1);
				$this->db->insert_id();
			}
		} else {
			if ($dari == $s) {
				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();

				//log
				$datalog = array('user_id' => $user_id, 'ket' => "Delete Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog);
				$this->db->insert_id();

				$data2 = array('dari' => $d, 'sampai' => $d2);
				$this->db->where('id_allotment', $id);
				$this->db->update('allotment', $data2);

				//log
				$datalog1 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$d." - "."$d2", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog1);
				$this->db->insert_id();
			} else {
				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();

				//log
				$datalog = array('user_id' => $user_id, 'ket' => "Delete Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog);
				$this->db->insert_id();

				$data = array('jumlah' => $jumlah, 'dari' => $d, 'sampai' => $d2,
											'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
											'status' => $status);
				$this->db->insert('allotment', $data);
				$this->db->insert_id();

				//log
				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();
				$datalog1 = array('user_id' => $user_id, 'ket' => "Delete Allotment"." ".$cek->nama_produk." ".$d." - "."$d2", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog1);
				$this->db->insert_id();

				$data2 = array('dari' => $d1, 'sampai' => $s);
				$this->db->where('id_allotment', $id);
				$this->db->update('allotment', $data2);

				//log
				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();
				$datalog = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$d1." - "."$s", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog);
				$this->db->insert_id();
			}
		}
	}
	public function select($id) {
		$this->db->select('*');
		$this->db->from('allotment');
		$this->db->join('produk', 'allotment.produk_id = produk.id_produk');
		$this->db->where('allotment.produk_id', $id);
		return $this->db->get()->row();
	}
	public function min() {
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('supplier_id', $supplier_id);
		$this->db->select_min('created');
		return $this->db->get('produk')->row();
	}
	public function max() {
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->where('supplier_id', $supplier_id);
		$this->db->select_max('sampai');
		return $this->db->get('allotment')->row();
	}
	public function search() {
		$d = $this->session->userdata('dari');
		$s = $this->session->userdata('sampai');
		if ($d == NULL) {
			$dari = date("Y-m-d");
		}else {
			$dari = $this->session->userdata('dari');
		}
		if ($s == NULL) {
			$sampai = date("Y-m-d");
		} else {
			$sampai = $this->session->userdata('sampai');
		}
		$harga = $this->input->post('harga');
		$priceRangeArr = explode(',', $harga);
		$status = 1;
		if ($harga != NULL) {
			$this->db->where('harga >=', $priceRangeArr[0]);
			$this->db->where('harga <=', $priceRangeArr[1]);
		}
			$this->db->where('dari <=', $dari);
			$this->db->where('sampai >=', $dari);
			$this->db->where('status', $status);
			$this->db->order_by("harga", "desc");
			return $this->db->get('allotment')->result();
		}
		public function check($id) {
			$this->db->where('produk_id', $id);
			return $this->db->get('allotment')->result();
		}
		public function hitmanual() {
			$pajak = $this->db->get('fee')->row();
			date_default_timezone_set('Asia/Jakarta');
			$d = $this->input->post('dari');
			if ($d == NULL) {
				$dari = date('Y-m-d');
			} else {
				$dari = $d;
			}
			$s = $this->input->post('sampai');
			if ($s == NULL) {
				$sampai = $dari;
			} else {
				$sampai = $s;
			}
			$k = $this->input->post('kamar');
			if ($k == NULL) {
				$kamar = 1;
			} else {
				$kamar = $k;
			}
			$produk_id = $this->input->post('produk_id');

			$this->db->where('produk_id', $produk_id);
			$allotment = $this->db->get('allotment')->result();

			$this->db->where('id_produk', $produk_id);
			$room = $this->db->get('produk')->row();

			$date1 = date('Y-m-d', strtotime($dari));
			$end_date1 = date('Y-m-d', strtotime($sampai));
			while (strtotime($date1) <= strtotime($end_date1)) {
			$d2[] = $date1;
			$date1 = date ("Y-m-d", strtotime("+1 day", strtotime($date1)));
			}
			$hh = array();
			$n = 1;
			foreach ($d2 as $key => $value) {
			        if ($allotment != NULL) {
			          foreach ($allotment as $key) {
			            if ($key->dari <=$value && $key->sampai >=$value) {
			              $h = $key->harga * $kamar;
			              break;
			            } else {
			              $h = $room->harga_produk * $kamar;
			            }
			          } $hh[] = $h;
			        } else {
			          $hh[] = $room->harga_produk * $kamar;
			        }
			        $n++; }
							$tambahan= $pajak->fee/100 * array_sum($hh);
							$hasil = array_sum($hh)+$tambahan;
							return $hasil;
		}
}
