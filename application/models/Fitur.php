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
		$this->db->order_by('nama', "ASC");
    return $this->db->get('fitur')->result();
	}
	public function hotel() {
		$this->db->where('tipe <=',"0.1");
		$this->db->where('status', "1");
		$this->db->order_by('nama', "ASC");
    return $this->db->get('fitur')->result();
	}
	public function allroom($id_sup) {
		$this->db->where('supplier_id',$id_sup);
		$this->db->where('status', "1");
		$f = $this->db->get('produk')->result();
		$fitur = array();
		foreach ($f as $key) {
			$fitur[] = $key->fitur_id.",";
		}
		$im = implode(",",$fitur);
		$ex = explode(",",$im);
		$clear_array = array_unique($ex);
		return $ex;
	}
	public function add() {
		$nama = $this->input->post('nama');
		$tipe = $this->input->post('tipe');
		$icon = $this->input->post('icon');
		$status = "1";
		$res = implode(".",$tipe);
		$data = array('nama' => $nama, 'tipe' => $res, 'icon' => $icon, 'status' => $status);
		$this->db->insert('fitur', $data);
		$this->db->insert_id();

		$supplier_id = 0;
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
		$supplier_id = 0;
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
		$icon = $this->input->post('icon');
		$res = implode(".",$tipe);
		$data = array('nama' => $nama, 'tipe' => $res, 'icon' => $icon);
		$this->db->where('id_fitur', $id);
		$this->db->update('fitur', $data);

		$supplier_id = 0;
		$user_id = $this->session->userdata('user_id');
		date_default_timezone_set('Asia/Jakarta');
		$date = date('Y-m-d H:i:s');
		$datalog = array('user_id' => $user_id, 'ket' => "Update Feature"." ".$nama, 'supplier_id' => $supplier_id, 'waktu' => $date);
		$this->db->insert('log', $datalog);
		$this->db->insert_id();
	}
}
