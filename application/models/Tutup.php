<?php
class Tutup extends CI_model {
	public function selectAll() {
    $status = "1";
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->select('*');
		$this->db->from('tutup');
		$this->db->join('produk', 'tutup.produk_id = produk.id_produk');
		$this->db->where('tutup.supplier_id', $supplier_id);
		$this->db->where('tutup.status', $status);
		$this->db->order_by("produk_id", "desc");
    return $this->db->get()->result();
  }
  public function add() {
    $supplier_id = $this->session->userdata('supplier_id');
		$status = "1";
		$produk_id = $this->input->post('produk_id');
    $dari = $this->input->post('dari');
    $sampai = $this->input->post('sampai');

		$this->db->where('dari >=', $dari);
		$this->db->where('sampai <=', $sampai);
		$this->db->where('produk_id', $produk_id);
		$this->db->where('status', $status);
		$cek = $this->db->get('tutup')->num_rows();
		if ($cek == 0) {
			$this->db->where('dari <=', $dari);
			$this->db->where('sampai >=', $dari);
			$this->db->where('produk_id', $produk_id);
			$this->db->where('status', $status);
			$cek1 = $this->db->get('tutup')->num_rows();
			if($cek1 == 0){
				$data = array('produk_id' => $produk_id, 'dari' => $dari, 'sampai' => $sampai, 'supplier_id' => $supplier_id, 'status' => $status);
				$this->db->insert('tutup', $data);
				$this->db->insert_id();

				$user_id = $this->session->userdata('user_id');
				$this->db->where('id_produk', $produk_id);
				$cek = $this->db->get('produk')->row();
				date_default_timezone_set('Asia/Jakarta');
				$date = date('Y-m-d H:i:s');
				$datalog = array('user_id' => $user_id, 'ket' => "Insert Closed"." ".$cek->nama_produk." ".$dari." - "."$sampai", 'supplier_id' => $supplier_id, 'waktu' => $date);
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
		$this->db->where('id_tutup', $id);
		$this->db->update('tutup', array('status' => "0"));

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('tutup');
		$this->db->join('produk', 'tutup.produk_id = produk.id_produk');
		$this->db->where('tutup.id_tutup', $id);
		$cek = $this->db->get()->row();
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Delete Closed"." ".$cek->nama_produk." ".$cek->dari." - "."$cek->sampai", 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function edit($id){
		$this->db->where('id_tutup', $id);
		return $this->db->get('tutup')->row();
	}
	public function update(){
		$id = $this->input->post('id_tutup');
    $produk_id = $this->input->post('produk_id');
    $dari = $this->input->post('dari');
    $sampai = $this->input->post('sampai');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$data = array('produk_id' => $produk_id, 'dari' => $dari, 'sampai' => $sampai);
		$this->db->where('id_tutup', $id);
		$this->db->update('tutup', $data);

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$this->db->select('*');
		$this->db->from('tutup');
		$this->db->join('produk', 'tutup.produk_id = produk.id_produk');
		$this->db->where('tutup.id_tutup', $id);
		$cek = $this->db->get()->row();
		$datalog = array('user_id' => $user_id, 'ket' => "Update Closed"." ".$cek->nama_produk." ".$dari." - "."$sampai", 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function updatecalendar() {
		$sub_id = $this->input->post('id');
		$id = substr($sub_id,1);
		$jumlah = $this->input->post('jumlah');
		$dari = $this->input->post('start');
		$produk_id = $this->input->post('produk_id');
		$harga = $this->input->post('harga');
		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$st = $this->input->post('st');
		$status = "1";
		$d1 = date ("Y-m-d", strtotime("+1 day", strtotime($dari)));
		$d2 = date ("Y-m-d", strtotime("-1 day", strtotime($dari)));
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');

		$this->db->where('supplier_id', $supplier_id);
		$this->db->where('dari <=', $dari);
		$this->db->where('sampai >=', $dari);
		$this->db->where('status', $status);
		$this->db->where('produk_id', $produk_id);
		$r1 =  $this->db->get('tutup')->row();
		$num =  $this->db->get('tutup')->num_rows();

		$this->db->where('id_produk', $produk_id);
		$cek = $this->db->get('produk')->row();

		if ($st == 0) {
			if ($num == 0) {
				$data99 = array('produk_id' => $produk_id, 'dari' => $dari, 'sampai' => $dari, 'supplier_id' => $supplier_id, 'status' => $status);
				$this->db->insert('tutup', $data99);
				$this->db->insert_id();

				$datalog = array('user_id' => $user_id, 'ket' => "Insert Closed"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
				$this->db->insert('log', $datalog);
				$this->db->insert_id();
			} else {
			}
		} else {

				$this->db->where('supplier_id', $supplier_id);
				$this->db->where('dari <=', $dari);
				$this->db->where('sampai >=', $dari);
				$this->db->where('status', $status);
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

					//log
					$datalog = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
					$this->db->insert('log', $datalog);
					$this->db->insert_id();
				} else {
					if ($dari == $d) {
						$data7 = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $dari,
													'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
													'status' => $status);
						$this->db->insert('allotment', $data7);
						$this->db->insert_id();

						//log
						$datalog = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
						$this->db->insert('log', $datalog);
						$this->db->insert_id();

						$data9 = array('dari' => $d1, 'sampai' => $s);
						$this->db->where('id_allotment', $id_allot);
						$this->db->update('allotment', $data9);

						//log
						$datalog1 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$d1." - "."$s", 'supplier_id' => $supplier_id, 'waktu' => $date);
						$this->db->insert('log', $datalog1);
						$this->db->insert_id();
					} else {
						if ($dari == $s) {
							$data1 = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $dari,
														'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
														'status' => $status);
							$this->db->insert('allotment', $data1);
							$this->db->insert_id();

							//log
							$datalog = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
							$this->db->insert('log', $datalog);
							$this->db->insert_id();

							$data2 = array('dari' => $d, 'sampai' => $d2);
							$this->db->where('id_allotment', $id_allot);
							$this->db->update('allotment', $data2);

							//log
							$datalog1 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$d." - "."$d2", 'supplier_id' => $supplier_id, 'waktu' => $date);
							$this->db->insert('log', $datalog1);
							$this->db->insert_id();
						} else {
							$data = array('jumlah' => $j, 'dari' => $d, 'sampai' => $d2,
														'produk_id' => $p, 'harga' => $h, 'supplier_id' => $supplier_id,
														'status' => $status);
							$this->db->insert('allotment', $data);
							$this->db->insert_id();

							//log
							$datalog = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$d." - "."$d2", 'supplier_id' => $supplier_id, 'waktu' => $date);
							$this->db->insert('log', $datalog);
							$this->db->insert_id();

							$data1 = array('jumlah' => $jumlah, 'dari' => $dari, 'sampai' => $dari,
														'produk_id' => $produk_id, 'harga' => $harga, 'supplier_id' => $supplier_id,
														'status' => $status);
							$this->db->insert('allotment', $data1);
							$this->db->insert_id();

							//log
							$datalog1 = array('user_id' => $user_id, 'ket' => "Insert Allotment"." ".$cek->nama_produk." ".$dari." - "."$dari", 'supplier_id' => $supplier_id, 'waktu' => $date);
							$this->db->insert('log', $datalog1);
							$this->db->insert_id();

							$data2 = array('dari' => $d1, 'sampai' => $s);
							$this->db->where('id_allotment', $id_allot);
							$this->db->update('allotment', $data2);

							//log
							$datalog2 = array('user_id' => $user_id, 'ket' => "Update Allotment"." ".$cek->nama_produk." ".$d1." - "."$s", 'supplier_id' => $supplier_id, 'waktu' => $date);
							$this->db->insert('log', $datalog2);
							$this->db->insert_id();
						}
					}
				}

				if ($dari == $r1->dari) {
					$data = array('dari' => $d1, 'sampai' => $r1->sampai);
					$this->db->where('id_tutup', $r1->id_tutup);
					$this->db->update('tutup', $data);

					//log
					$datalog = array('user_id' => $user_id, 'ket' => "Update Closed"." ".$cek->nama_produk." ".$d1." - "."$r1->sampai", 'supplier_id' => $supplier_id, 'waktu' => $date);
					$this->db->insert('log', $datalog);
					$this->db->insert_id();
				} elseif ($dari == $r1->sampai) {
					$data = array('dari' => $r1->dari, 'sampai' => $d2);
					$this->db->where('id_tutup', $r1->id_tutup);
					$this->db->update('tutup', $data);

					//log
					$datalog1 = array('user_id' => $user_id, 'ket' => "Update Closed"." ".$cek->nama_produk." ".$r1->dari." - "."$d2", 'supplier_id' => $supplier_id, 'waktu' => $date);
					$this->db->insert('log', $datalog1);
					$this->db->insert_id();
				} else {
					$data88 = array('produk_id' => $produk_id, 'dari' => $r1->dari, 'sampai' => $d2, 'supplier_id' => $supplier_id, 'status' => $status);
					$this->db->insert('tutup', $data88);
					$this->db->insert_id();

					//log
					$datalog = array('user_id' => $user_id, 'ket' => "Insert Closed"." ".$cek->nama_produk." ".$r1->dari." - "."$d2", 'supplier_id' => $supplier_id, 'waktu' => $date);
					$this->db->insert('log', $datalog);
					$this->db->insert_id();

					$data = array('dari' => $d1, 'sampai' => $r1->sampai);
					$this->db->where('id_tutup', $r1->id_tutup);
					$this->db->update('tutup', $data);

					//log
					$datalog1 = array('user_id' => $user_id, 'ket' => "Update Closed"." ".$cek->nama_produk." ".$d1." - "."$r1->sampai", 'supplier_id' => $supplier_id, 'waktu' => $date);
					$this->db->insert('log', $datalog1);
					$this->db->insert_id();
				}
			}
	}
}
