<?php
class Bed extends CI_model {
	public function selectAll() {
		$status = "1";
		$this->db->where('status', $status);
    return $this->db->get('bed')->result();
  }
  public function add() {
		$status = "1";
		$bed = $this->input->post('bed');
		$data = array('bed' => $bed, 'status' => $status);
		$this->db->insert('bed', $data);
		$this->db->insert_id();

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert Bed"." ".$bed, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function delete($id) {
		$this->db->where('id_bed', $id);
		$this->db->update('bed', array('status' => "0"));

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$this->db->where('id_bed', $id);
		$cek = $this->db->get('bed')->row();
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Delete Bed"." ".$cek->bed, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function edit($id) {
		$this->db->where('id_bed', $id);
		return $this->db->get('bed')->row();
	}
	public function update() {
		$id = $this->input->post('id_bed');
		$bed = $this->input->post('bed');
		$data = array('bed' => $bed);
		$this->db->where('id_bed', $id);
		$this->db->update('bed', $data);

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update Bed"." ".$bed, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
}
