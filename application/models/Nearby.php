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
		$alamatnear = $this->input->post('alamat');
		$latnear = $this->input->post('lat');
		$longinear = $this->input->post('lon');
		$data = array('tempat' => $tempat, 'kota_id' => $kota_id, 'alamatnear' => $alamatnear,
		 							'latnear' => $latnear, 'longinear' => $longinear, 'status' => $status);
		$this->db->insert('nearby', $data);
		$this->db->insert_id();

		$supplier_id = 0;
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

		$supplier_id = 0;
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
		$alamatnear = $this->input->post('alamat');
		$latnear = $this->input->post('lat');
		$longinear = $this->input->post('lon');
		$data = array('tempat' => $tempat, 'kota_id' => $kota_id, 'alamatnear' => $alamatnear,
		 							'latnear' => $latnear, 'longinear' => $longinear);
		$this->db->where('id_nearby', $id);
		$this->db->update('nearby', $data);

		$supplier_id = 0;
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
	public function check() {
		$kota = $this->session->userdata('tempattujuan');
		$this->db->where('kota', $kota);
		$cek = $this->db->get('kota')->row();
		if ($cek != NULL) {
			$id = $cek->id_kota;
			$status = "1";
			$this->db->select('*');
			$this->db->from('nearby');
			$this->db->join('kota', 'nearby.kota_id = kota.id_kota');
			$this->db->where('nearby.kota_id', $id);
			$this->db->where('nearby.status', $status);
	    return $this->db->get()->result();
		}
	}
}
