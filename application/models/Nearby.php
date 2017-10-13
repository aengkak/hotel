<?php
class Nearby extends CI_model {
	public function selectAll() {
		$status = "1";
		$this->db->where('status', $status);
    return $this->db->get('nearby')->result();
  }
  public function add() {
    $status = "1";
		$kota_id = $this->input->post('kota_id');
		$tempat = $this->input->post('tempat');
		$data = array('tempat' => $tempat, 'kota_id' => $kota_id, 'status' => $status);
		$this->db->insert('nearby', $data);
		$this->db->insert_id();

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert Nearby"." ".$tempat, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function delete($id){
    $this->db->where('id_nearby', $id);
		$this->db->update('nearby', array('status' => "0"));

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$this->db->where('id_nearby', $id);
		$cek = $this->db->get('nearby')->row();
		$datalog = array('user_id' => $user_id, 'ket' => "Delete Nearby"." ".$cek->tempat, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function edit($id){
		$this->db->where('id_nearby', $id);
		return $this->db->get('nearby')->row();
	}
	public function update(){
		$id = $this->input->post('id_nearby');
		$kota_id = $this->input->post('kota_id');
		$tempat = $this->input->post('tempat');
		$data = array('tempat' => $tempat, 'kota_id' => $kota_id);
		$this->db->where('id_nearby', $id);
		$this->db->update('nearby', $data);

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update Nearby"." ".$tempat, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function select() {
		$id = $this->input->post('kota_id');
		$status = "1";
		$this->db->where('status', $status);
		$this->db->where('kota_id', $id);
		return $this->db->get('nearby')->result();
	}
}
