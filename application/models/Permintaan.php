<?php
class Permintaan extends CI_model {
	public function selectAll() {
		return $this->db->get('permintaan')->result();
	}
	public function add() {
		$nama = $this->input->post('nama');
		$data = array('nama' => $nama);
		$this->db->insert('permintaan', $data);
		$this->db->insert_id();
	}
	public function delete($id) {
		$data = array('status' => "0");
		$this->db->where($id_permintaan, $id);
		$this->db->update('permintaan', $data);
	}
	public function edit($id) {
		$this->db->where('id_permintaan', $id);
		return $this->db->get('permintaan')->row();
	}
	public function update() {
		$id_permintaan = $this->input->post('id_permintaan');
		$nama = $this->input->post('nama');
		$data = array('nama' => $nama);
		$this->db->where('id_permintaan', $id_permintaan);
		$this->db->update('permintaan', $data);
	}
}