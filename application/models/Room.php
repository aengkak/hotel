<?php
class Room extends CI_model {
	public function selectAll() {
		$status = "1";
		$supplier_id = $this->session->userdata('supplier_id');
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('bed', 'produk.bed_id = bed.id_bed');
		$this->db->where('produk.supplier_id', $supplier_id);
		$this->db->where('produk.status', $status);
    return $this->db->get()->result();
	}
	public function check() {
		$status = "1";
		$this->db->select('*');
		$this->db->from('produk');
		$this->db->join('bed', 'produk.bed_id = bed.id_bed');
		$this->db->where('produk.status', $status);
    return $this->db->get()->result();
	}
	public function select() {
		$supplier_id = $this->session->userdata('supplier_id');
		$status = "1";
		$this->db->where('supplier_id', $supplier_id);
		$this->db->where('status', $status);
    return $this->db->get('produk')->result();
	}
	public function sel1($id) {
		$supplier_id = $this->session->userdata('supplier_id');
		$status = "1";
		$sub_id = substr($id,1);
		$this->db->where('supplier_id', $supplier_id);
		$this->db->where('status', $status);
		$this->db->where('id_produk', $sub_id);
    return $this->db->get('produk')->row();
	}
	public function add() {
		date_default_timezone_set('Asia/Jakarta');
		$date99 = date('Y-m-d');
		$nama_produk = $this->input->post('nama_produk');
		$harga_produk = $this->input->post('harga_produk');
		$fitur_id = $this->input->post('fitur_id');
		$luas = $this->input->post('luas');
		$stok = $this->input->post('stok');
		$warna = $this->input->post('warna');
		$bed = $this->input->post('bed_id');
		$res = implode(",",$fitur_id);
		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$status = "1";
		if ($fitur_id == NULL) {
			$data = array('nama_produk' => $nama_produk, 'harga_produk' => $harga_produk,
							'fitur_id' => "0", 'luas' => $luas, 'stok' => $stok, 'warna' => $warna, 'bed_id' =>$bed,
							'supplier_id' => $supplier_id, 'status' => $status, 'created' => $date99);
			$this->db->insert('produk', $data);
			$this->db->insert_id();
		} else {
			$data = array('nama_produk' => $nama_produk, 'harga_produk' => $harga_produk,
							'fitur_id' => $res, 'luas' => $luas, 'stok' => $stok, 'warna' => $warna, 'bed_id' =>$bed,
							'supplier_id' => $supplier_id, 'status' => $status, 'created' => $date99);
			$this->db->insert('produk', $data);
			$this->db->insert_id();
		}
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert Room"." ".$nama_produk, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function delete($id){
		$this->db->where('id_produk', $id);
		$this->db->update('produk', array('status' => "0"));
		$this->db->where('produk_id', $id);
		$this->db->update('gallery', array('status' => "0"));
		$this->db->where('produk_id', $id);
		$this->db->update('tutup', array('status' => "0"));
		$this->db->where('produk_id', $id);
		$this->db->update('allotment', array('status' => "0"));

		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$this->db->where('id_produk', $id);
		$cek = $this->db->get('produk')->row();
		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$datalog = array('user_id' => $user_id, 'ket' => "Delete Room"." ".$cek->nama_produk, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function edit($id){
		$this->db->where('id_produk', $id);
		return $this->db->get('produk')->row();
	}
	public function update(){
		$id = $this->input->post('id_produk');
		$nama_produk = $this->input->post('nama_produk');
		$harga_produk = $this->input->post('harga_produk');
		$fitur_id = $this->input->post('fitur_id');
		$luas = $this->input->post('luas');
		$bed = $this->input->post('bed_id');
		$stok = $this->input->post('stok');
		$warna = $this->input->post('warna');
		$res = implode(",",$fitur_id);
		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		if ($fitur_id == NULL) {
			$data = array('nama_produk' => $nama_produk, 'harga_produk' => $harga_produk,
							'fitur_id' => "0", 'luas' => $luas, 'stok' => $stok, 'warna' => $warna, 'bed_id' =>$bed);
			$this->db->where('id_produk', $id);
			$this->db->update('produk', $data);
		} else {
			$data = array('nama_produk' => $nama_produk, 'harga_produk' => $harga_produk,
							'fitur_id' => $res, 'luas' => $luas, 'stok' => $stok, 'warna' => $warna, 'bed_id' =>$bed);
			$this->db->where('id_produk', $id);
			$this->db->update('produk', $data);
		}
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update Room"." ".$nama_produk, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function onroom() {
		$id = $this->input->post('produk_id');
		$this->db->where('id_produk', $id);
		return $this->db->get('produk')->row();
	}
}
