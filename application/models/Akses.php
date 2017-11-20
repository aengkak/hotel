<?php
class Akses extends CI_model {
	public function selectAll() {
		$status = "1";
		$this->db->where('status', $status);
		$this->db->order_by('akses', "asc");
    return $this->db->get('akses')->result();
  }
	public function staff() {
		$this->db->where('tipe <=',"0.1");
		$this->db->where('status', "1");
		$this->db->order_by('akses', "asc");
    return $this->db->get('akses')->result();
	}
	public function hotel() {
		$this->db->where('tipe >=',"0.1");
		$this->db->where('status', "1");
		$this->db->order_by('akses', "asc");
    return $this->db->get('akses')->result();
	}
  public function add() {
		$status = "1";
		$akses = $this->input->post('akses');
		$tipe = $this->input->post('tipe');
		$res = implode(".",$tipe);
		$data = array('akses' => $akses, 'tipe' => $res, 'status' => $status);
		$this->db->insert('akses', $data);
		$this->db->insert_id();

		$supplier_id = 0;
		$user_id = $this->session->userdata('user_id');
		if ($res == 0) {
			$t = "Staff";
		} elseif ($res == 0.1) {
			$t = "Staff, Hotel";
		} else {
			$t = "Hotel";
		}
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Insert Access"." ".$akses." "."For"." "."$t", 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function delete($id){
		$this->db->where('id_akses', $id);
		$this->db->update('akses', array('status' => "0"));

		$supplier_id = 0;
		$user_id = $this->session->userdata('user_id');
		$this->db->where('id_akses', $id);
		$cek = $this->db->get('akses')->row();
		if ($cek->tipe == 0) {
			$t = "Staff";
		} elseif ($cek->tipe == 0.1) {
			$t = "Staff, Hotel";
		} else {
			$t = "Hotel";
		}
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Delete Access"." ".$cek->akses." "."For"." "."$t", 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
	public function edit($id){
		$this->db->where('id_akses', $id);
		return $this->db->get('akses')->row();
	}
	public function update(){
		$id = $this->input->post('id_akses');
		$akses = $this->input->post('akses');
		$tipe = $this->input->post('tipe');
		$res = implode(".",$tipe);
		$data = array('akses' => $akses, 'tipe' => $res);
		$this->db->where('id_akses', $id);
		$this->db->update('akses', $data);

		$supplier_id = 0;
		$user_id = $this->session->userdata('user_id');
		if ($res == 0) {
			$t = "Staff";
		} elseif ($res == 0.1) {
			$t = "Staff, Hotel";
		} else {
			$t = "Hotel";
		}
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update Access"." ".$akses." "."For"." "."$t", 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
}
