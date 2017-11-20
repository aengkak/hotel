<?php
class City extends CI_model {
	public function selectAll() {
		$status = "1";
		$this->db->where('status', $status);
    return $this->db->get('kota')->result();
  }
  public function add() {
		$status = "1";
		$kota = $this->input->post('kota');
		$data = array('kota' => $kota, 'status' => $status);
		$this->db->insert('kota', $data);
		$this->db->insert_id();

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert City"." ".$kota, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function delete($id) {
		$this->db->where('id_kota', $id);
		$this->db->update('kota', array('status' => "0"));

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$this->db->where('id_kota', $id);
		$cek = $this->db->get('kota')->row();
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Delete City"." ".$cek->kota, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function edit($id) {
		$this->db->where('id_kota', $id);
		return $this->db->get('kota')->row();
	}
	public function update() {
		$id = $this->input->post('id_kota');
		$kota = $this->input->post('kota');
		$data = array('kota' => $kota);
		$this->db->where('id_kota', $id);
		$this->db->update('kota', $data);

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update City"." ".$kota, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function kota() {
		$status = 1;
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d');

		$this->db->select('*');
		$this->db->from('supplier');
		$this->db->join('kota', 'kota_id = kota.id_kota');
		$this->db->where('supplier.status', $status);
		$sup = $this->db->get()->result();

		$this->db->where('dari <=', $date);
		$this->db->where('sampai >=', $date);
		$this->db->where('status', $status);
		$this->db->order_by("harga", "desc");
		$allotment = $this->db->get('allotment')->result();

		$this->db->where('status', $status);
		$this->db->order_by("harga_produk", "desc");
		$room = $this->db->get('produk')->result();

		$this->db->where('status', $status);
		$this->db->order_by("kota", "desc");
		$kota = $this->db->get('kota')->result();

		$arraykota = array();
		foreach ($sup as $keysup) {

			if ($allotment != NULL) {
				foreach ($allotment as $keyall) {
					if ($keyall->supplier_id == $keysup->id_supplier) {
						$sup1 = $keysup->kota_id;
						$harga = $keyall->harga;
						break;
					} else {
						foreach ($room as $keyr) {
							if ($keyr->supplier_id == $keysup->id_supplier) {
								$sup1 = $keysup->kota_id;
								$harga = $keyr->harga_produk;
							}
						}
					}
				} $arraykota[] = array('harga' => $harga, 'kota' => $sup1);
			} else {
				foreach ($room as $keyr) {
					if ($keyr->supplier_id == $keysup->id_supplier) {
						$sup1 = $keysup->kota_id;
						$harga = $keyr->harga_produk;
					}
				}
				$arraykota[] = array('harga' => $harga, 'kota' => $sup1);
			}
		}

		$harga = array();
		foreach ($arraykota as $key => $row) {
			// replace 0 with the field's index/key
			$harga[$key]  = $row['harga'];
		}

		array_multisort($harga, SORT_ASC, $arraykota);

		$arrkota = array();
		foreach ($kota as $keyk) {
			foreach ($arraykota as $keyarr => $value) {
				if ($keyk->id_kota == $value['kota']) {
					$namakota = $keyk->kota;
					$harga1 = $value['harga'];
					break;
				} else {
					$namakota = $keyk->kota;
					$harga1 = 0;
				}
			} $arrkota[] = array('harga' => $harga1, 'kota' => $namakota);
		}

		return $arrkota;
	}
}
