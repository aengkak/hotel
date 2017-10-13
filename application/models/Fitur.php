<?php
class Fitur extends CI_model {
	public function selectAll() {
		$status = "1";
		$this->db->where('status', $status);
		return $this->db->get('fitur')->result();
  }
	public function room() {
		$this->db->where('tipe >=',"0.1");
		$this->db->where('status', "1");
    return $this->db->get('fitur')->result();
	}
	public function hotel() {
		$this->db->where('tipe <=',"0.1");
		$this->db->where('status', "1");
    return $this->db->get('fitur')->result();
	}
	public function add() {
		$nama = $this->input->post('nama');
		$tipe = $this->input->post('tipe');
		$status = "1";
		$res = implode(".",$tipe);
		$data = array('nama' => $nama, 'tipe' => $res, 'status' => $status);
		$this->db->insert('fitur', $data);
		$this->db->insert_id();

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert Feature"." ".$nama, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function delete($id){
		$this->db->where('id_fitur', $id);
		$this->db->update('fitur', array('status' => "0"));

		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$this->db->where('id_fitur', $id);
		$cek = $this->db->get('fitur')->row();
		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		$datalog = array('user_id' => $user_id, 'ket' => "Delete Feature"." ".$cek->nama, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function edit($id){
		$this->db->where('id_fitur', $id);
		return $this->db->get('fitur')->row();
	}
	public function update(){
		$id = $this->input->post('id_fitur');
		$nama = $this->input->post('nama');
		$tipe = $this->input->post('tipe');
		$res = implode(".",$tipe);
		$data = array('nama' => $nama, 'tipe' => $res);
		$this->db->where('id_fitur', $id);
		$this->db->update('fitur', $data);

		$supplier_id = $this->session->userdata('supplier_id');
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update Feature"." ".$nama, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
}
