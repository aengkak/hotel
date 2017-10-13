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
}
